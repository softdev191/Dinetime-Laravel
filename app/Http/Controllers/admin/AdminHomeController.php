<?php

namespace App\Http\Controllers\admin;
date_default_timezone_set('UTC');
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use URL;
use Hash;
use Session;
use Mail;
use Validator;
use App\Admin;
use App\Rating;

class AdminHomeController extends Controller
{
	/*show home*/
	public function showHome()
	{
		$getPopularVenue = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.venue_image_url,SUM(r.rate)/COUNT(r.rate_id) as review, COUNT(r.rate_id) as total_review')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->join('rating as r', 'r.venue_id', 'v.venue_id')
        ->where('v.is_deleted',0)
		->where('au.is_deleted',0)
		->groupBy('r.venue_id')
		->orderBy('total_review', 'DESC')
		->orderBy('review', 'DESC')
		->get();

		$getPlaceNearVenue = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.venue_image_url,SUM(r.rate)/COUNT(r.rate_id) as review, COUNT(r.rate_id) as total_review')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->join('rating as r', 'r.venue_id', 'v.venue_id')
        ->where('v.is_deleted',0)
		->where('au.is_deleted',0)
		->where(function ($query) {
			$query->whereRaw('? between v.latitude and v.longitude', 'au.latitude')
			->orWhereRaw('? between v.latitude and v.longitude', 'au.longitude');
		})
		->groupBy('r.venue_id')
		->orderBy('total_review', 'DESC')
		->orderBy('review', 'DESC')
		->get();

		$getTopPicksVenues = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.venue_image_url, COUNT(d.deal_id) as top_deal,SUM(r.rate)/COUNT(r.rate_id) as review, COUNT(r.rate_id) as total_review')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
		->join('deal as d', 'd.venue_id', 'v.venue_id')
		->join('rating as r', 'r.venue_id', 'v.venue_id')
        ->where('v.is_deleted',0)
		->where('au.is_deleted',0)
		->groupBy('d.venue_id')
		->orderBy('top_deal', 'DESC')
		->orderBy('total_review', 'DESC')
		->orderBy('review', 'DESC')
		->get();

		$getAllVenues = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.venue_image_url,SUM(r.rate)/COUNT(r.rate_id) as review, COUNT(r.rate_id) as total_review')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
		->leftjoin('rating as r', 'r.venue_id', 'v.venue_id')
        ->where('v.is_deleted',0)
		->where('au.is_deleted',0)
		->groupBy('v.venue_id')
		->orderBy('total_review', 'DESC')
		->orderBy('review', 'DESC')
		->get();
	
		return view('admin.home')->with('popularVenue', $getPopularVenue)->with('topPickVenues', $getTopPicksVenues)->with('allVenues', $getAllVenues)->with('placeNearVenue', $getPlaceNearVenue);
	}

	/*show login*/
	public function showLogin()
	{
		return view('admin.login');
	}

	/*show Register*/
	public function showRegister()
	{
		return view('admin.register');
	}

	public function showProfile($user_id)
	{
		$getUserDetail = Admin::where('id',$user_id)->first();
		return view('admin.profile')->with('userDetail', $getUserDetail);
	}

	public function showUser()
	{
		$getAllUser = Admin::where('is_deleted',0)->where('login_type_id',3)->get();
		return view('admin.users')->with( 'userDetails', $getAllUser);
	}

	/*do login*/
	public function doLogin(Request $request) {
		$email = $request->input('admin_email');
		$password = $request->input('admin_password');
		$checkLogin = Admin::where('email',$email)->where('is_deleted',0)->whereIn('login_type_id', [1,2])->first();
		if(!empty($checkLogin)) {
			if($checkLogin->password == md5($password) || Hash::check($password, $checkLogin->password)) {
				Session::put('user_id', $checkLogin->id);
				Session::put('name',$checkLogin->first_name.' '.$checkLogin->last_name);
				Session::put('email',$checkLogin->email);
				Session::put('login_type_id',$checkLogin->login_type_id);
				return redirect()->route('dashboard');
			}else {
				Session::flash('invalid', 'Invalid email or password combination. Please try again.');
				return back();
			}

		}else {
			Session::flash('invalid', 'Invalid email or password combination. Please try again.');
			return back();
		}
	}

	public function doRegister(Request $request) {
		$email = $request->input('email');
		$checkEmailExist = Admin::selectRaw('email')->where('email', $email)->first();
		if(!empty($checkEmailExist)) {
			Session::flash('invalid', 'Email address already exist. Please try again.');
			return back();
		}

		$objAdmin = new Admin();
		$objAdmin->first_name = $request->get('firstName');
		$objAdmin->last_name = $request->get('lastName');
		$objAdmin->email = $request->get('email');
		$objAdmin->password = md5($request->get('password'));
		$objAdmin->phone_number = $this->replacePhoneNumber($request->get('mobileNo'));
		$objAdmin->login_type_id = 2;
		$objAdmin->created_at = date('Y-m-d H:i:s');
		$objAdmin->save();

		Session::flash('successMessage', 'User Registration successfully.');
		return back();
	}

	public function logout()
	{
		Session::flush();
		return redirect()->route('login');
	}

	public function showForgotPassword(){
		return view('admin.forgot_password');
	}

	public function sendForgotPasswordEmail(Request $request){
		$email = $request->input('txtemail');
		$checkEmail = Admin::where('email',$email)->first();
		if(!empty($checkEmail)){
			$temporaryPwd = str_random(8);
			Admin::where('email',$email)->update(['password'=>md5($temporaryPwd)]);

			try{
				Mail::send('emails.AdminPanel_ForgotPassword',array(
					'temp_password' => $temporaryPwd
					), function($message)use($email){
					$message->from(env('FromMail',''),'DineTime');
					$message->to($email)->subject('DineTime | Forgot Password');
				});
			} catch (\Exception $e){
				Session::flash('invalidMail', 'Something went wrong. Please try again.');
				return back();
			}
			Session::flash('validMail', 'An email containing your temporary login password has been sent to your verified email address. You can change your password from your profile.');
			return back();
		} else {
			Session::flash('invalidMail', 'Email does not exist.');
			return back();
		}
	}

	public function sendTemporaryPasswordEmail(Request $request){
		$getUserEmail = Admin::selectRaw('email')->where('is_deleted',0)->get();

		if(sizeof($getUserEmail) > 0){
			foreach($getUserEmail as $userEmail ) {
				$email = $userEmail->email;
				$temporaryPwd = str_random(8);
				Admin::where('email',$email)->update(['password'=>Hash::make($temporaryPwd)]);

				try{
					Mail::send('emails.AdminPanel_TempPassword',array(
						'temp_password' => $temporaryPwd
						), function($message)use($email){
						$message->from(env('FromMail','askitchen18@gmail.com'),'A&S KITCHEN');
						$message->to($email)->subject('A&S KITCHEN | Temporary New Password');
					});
				} catch (\Exception $e){
					Session::flash('invalidMail', 'Something went wrong. Please try again.');
					return back();
				}
			}
		} else {
			Session::flash('invalidMail', 'Email does not exist.');
			return back();
		}
	}

	public function store(Request $request) {
		$hidden_adminID = $request->get('hidden_adminId');
		$admin_firstName = $request->get('admin_firstName');
		$admin_lastName = $request->get('admin_lastName');
		$admin_contactNo = $request->get('admin_contactNo');
		$admin_email = $request->get('admin_email');

		$checkEmailExist = Admin::selectRaw('email')->where('email',$admin_email)->where('id','<>',$hidden_adminID)->where('is_deleted','<>',1)->first();
		if(isset($checkEmailExist->email)) {
			$response['key'] = 2;
			echo json_encode($response);
		} else {
			$getDetail = Admin::where('id',$hidden_adminID)->first();
			$getSessionEmail = Session::get('email');
			if($getSessionEmail == $getDetail->email) {
				Session::pull('name');
				Session::put('name',$admin_firstName.' '.$admin_lastName);
				$response['name'] = $admin_firstName.' '.$admin_lastName;
			}
			$getDetail->first_name = $admin_firstName;
			$getDetail->last_name = $admin_lastName;
			$getDetail->phone_number = (new AdminHomeController)->replacePhoneNumber($admin_contactNo);
			$getDetail->email = $admin_email;
			$getDetail->save();

			$response['key'] = 1;
			//Session::flash('successMessage', 'Admin detail has been updated successfully.');
			echo json_encode($response);
		}
	}

	public function storeProfile(Request $request) {
        $hiddenId = $request->get('hiddenUserId');
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $contactNo = $request->get('phoneNo');
        $email = $request->get('emailaddress');
        $checkEmailExist = Admin::selectRaw('email')->where('email', $email)->where('id', '<>', $hiddenId)->first();
        if (isset($checkEmailExist->email)) {
            $response['key'] = 2;
            echo json_encode($response);
        } else {
            $hidden_accountEmail = $request->get('hiddenEmail');
            $getDetail = Admin::where('id', $hiddenId)->first();

            $getDetail->first_name = $firstName;
            $getDetail->last_name = $lastName;
            $getDetail->phone_number = $this->replacePhoneNumber($contactNo);
            $getDetail->email = $email;
            $getDetail->save();

            $response['key'] = 1;
            $response['name'] = $firstName.' '.$lastName;
            $response['email'] = $email;
            echo json_encode($response);
        }
    }

	public function changePassword(Request $request) {
		$current_password = $request->get('current_password');
		$new_password = $request->get('new_password');
		$hidden_Id = $request->get('hidden_Id');
		$checkPassword = Admin::where('id',$hidden_Id)->first();
		if(!empty($checkPassword)) {
			if(md5($current_password) == $checkPassword->password) {
				$checkPassword->password = md5($new_password);
				$checkPassword->save();
				return 1;
			}else {
				return 2;
			}
		}
	}

	/*destroy User*/
    public function destroyUser($userId) {
        Admin::where('id', $userId)->update(['is_deleted' => 1]);
        Session::flash('successMessage', 'User deleted successfully.');
        return back();
    }



	function replacePhoneNumber($phone_number)
	{
		$replace_phone_number = preg_replace('/\D/', '', $phone_number);
		return $replace_phone_number;
	}

	function formatPhoneNumber($phone_number)
	{
		$replace_phone_number = preg_replace('/\D/', '', $phone_number);
		$format_phone_number = substr_replace(substr_replace(substr_replace($replace_phone_number, '(', 0,0), ') ', 4,0), ' - ', 9,0);
		return $format_phone_number;
	}

	function getuserid() {
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 3; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$userid = $randomString.mt_rand(10000,99999);
		$check = Admin::where('id',$userid)->first();
		if (empty($check)){
			return $userid;
		} else {
			$this->getuserid();
		}
	}
}
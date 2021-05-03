<?php

namespace App\Http\Controllers\admin;
date_default_timezone_set('UTC');
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Venue;
use App\Admin;
use Image;
use Session;
use Storage;
use DB;

class VenueController extends Controller
{

	public function showDashboard()
	{
        $login_type_id = Session::get('login_type_id');
		$query = DB::table('venues as v')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->where('v.is_deleted',0)
        ->where('v.status',2)
        ->where('au.is_deleted',0);
        if($login_type_id != 1) {
            $query->where('v.venue_owner_id', Session::get('user_id'));
        }
        $getpublishedVenues = $query->count();

        $pendingVenuequery = DB::table('venues as v')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->where('v.is_deleted',0)
        ->where('v.status',1)
        ->where('au.is_deleted',0);
        if($login_type_id != 1) {
            $pendingVenuequery->where('v.venue_owner_id', Session::get('user_id'));
        }
        $getPendingVenue = $pendingVenuequery->count();

        $dealquery = DB::table('deal as d')
		->join('venues as v','v.venue_id', 'd.venue_id')
		->join('admin_users as au','au.id', 'd.customer_id')
		->where('au.is_deleted', 0)
		->where('v.is_deleted', 0)
		->where('d.is_deleted', 0)
		->where('au.login_type_id', 3);
		if($login_type_id != 1) {
			$query->where('v.venue_owner_id', Session::get('user_id'));
		}
        $getDeal = $dealquery->count();
        
        $reservationquery = DB::table('reservation as r')
		->join('venues as v','v.venue_id', 'r.venue_id')
		->join('admin_users as au','au.id', 'r.customer_id')
		->where('au.is_deleted', 0)
		->where('v.is_deleted', 0)
		->where('r.is_deleted', 0)
		->where('au.login_type_id', 3);
		if($login_type_id != 1) {
			$reservationquery->where('v.venue_owner_id', Session::get('user_id'));
		}
        $getReservation = $reservationquery->count();
        
        $getAllUser = Admin::where('is_deleted',0)->where('login_type_id',3)->count();
        $response['publishedVenue'] = $getpublishedVenues;
        $response['pendingVenue'] = $getPendingVenue;
        $response['deals'] = $getDeal;
        $response['reservations'] = $getReservation;
        $response['customers'] = $getAllUser;
		return view('admin.dashboard')->with('dashboardData', $response);
	}

	public function showPublishedVenues()
	{
        $login_type_id = Session::get('login_type_id');
		$query = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.status, v.venue_image_url,v.dine_in,au.first_name,au.last_name,SUM(r.rate)/COUNT(r.rate_id) as review, COUNT(r.rate_id) as total_review')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->leftjoin('rating as r', 'r.venue_id', 'v.venue_id')
        ->where('v.is_deleted',0)
        ->where('v.status',2)
        ->where('au.is_deleted',0);
        if($login_type_id != 1) {
            $query->where('v.venue_owner_id', Session::get('user_id'));
        }
        $getAllVenues = $query->groupBy('v.venue_id')->get();
		return view('admin.publishedvenue')->with('venueDetails', $getAllVenues);
    }
	public function showPendingVenues()
	{
        $login_type_id = Session::get('login_type_id');
		$query = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.status, v.venue_image_url,v.dine_in,au.first_name,au.last_name')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->where('v.is_deleted',0)
        ->where('v.status',1)
        ->where('au.is_deleted',0);
        if($login_type_id != 1) {
            $query->where('v.venue_owner_id', Session::get('user_id'));
        }
        $getAllVenues = $query->get();
		return view('admin.pendingvenue')->with('venueDetails', $getAllVenues);
    }
	public function showRejectedVenues()
	{
        $login_type_id = Session::get('login_type_id');
		$query = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.status, v.venue_image_url,v.dine_in,v.rejected_reason,au.first_name,au.last_name')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->where('v.is_deleted',0)
        ->where('v.status',3)
        ->where('au.is_deleted',0);
        if($login_type_id != 1) {
            $query->where('v.venue_owner_id', Session::get('user_id'));
        }
        $getAllVenues = $query->get();
		return view('admin.rejectedvenue')->with('venueDetails', $getAllVenues);
    }

    public function showVenueDetails($venue_id) {
        $getVenueData = DB::table('venues as v')
        ->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.parking,v.created_at,v.status, v.venue_image_url,v.venue_thumb_image_url,v.dine_in,au.first_name,au.last_name,SUM(r.rate)/COUNT(r.rate_id) as review, COUNT(r.rate_id) as total_review')
        ->join('admin_users as au', 'au.id', 'v.venue_owner_id')
        ->leftjoin('rating as r', 'r.venue_id', 'v.venue_id')
        ->where('v.is_deleted',0)
        ->where('v.venue_id',$venue_id)
        ->where('au.is_deleted',0)
        ->groupBy('v.venue_id')
        ->first();
        // echo '<pre>';
        // print_r($getVenueData);die;
        return view('admin.venuedetails')->with('venueData', $getVenueData);
    }

	public function addVenue()
	{
        $getVenueOwner = Admin::selectRaw('id,first_name,last_name')->where('login_type_id',2)->where('is_deleted',0)->get();
		return view('admin.addvenue')->with('venueOwnerData', $getVenueOwner);
	}

	public function editVenue($venue_id)
    {
        $getVenueDetail = Venue::where('venue_id', $venue_id)->first();
        $getVenueOwner = Admin::selectRaw('id,first_name,last_name')->where('login_type_id',2)->where('is_deleted',0)->get();
		if(!empty($getVenueDetail->venue_image_url) && !empty($getVenueDetail->venue_thumb_image_url)) {
			$getVenueDetail->venue_image_url = url($getVenueDetail->venue_image_url);
			$getVenueDetail->venue_thumb_image_url = url($getVenueDetail->venue_thumb_image_url);
		}
        return view('admin.addvenue')->with('venueDetail', $getVenueDetail)->with('venueOwnerData', $getVenueOwner);
    }

	/*store Venue*/
    public function storeVenue(Request $request) {
		$hiddenVenueId = $request->get('hiddenVenueId');
        $venueName = $request->get('venueName');
        $suburb = $request->get('suburb');
        $restaurantType = $request->get('restaurantType');
        $dressCode = $request->get('dressCode');
        $dineIn = $request->get('dineIn');
        $venueAddress = $request->get('venueAddress');
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');
        $venueDescription = $request->get('venueDescription');
        $parking = $request->get('venueParking');

        if (!empty($hiddenVenueId)) {
            /* Edit */
            $objVenue = Venue::where('venue_id', $hiddenVenueId)->first();
            $objVenue->venue_name = $venueName;
            if(Session::get('login_type_id') != 1) {
                $objVenue->venue_owner_id = Session::get('user_id');
            } else {
                $objVenue->venue_owner_id = $request->get('venueOwner');
            }
            $objVenue->suburb = $suburb;
            $objVenue->restaurant_type = $restaurantType;
            $objVenue->dress_code = $dressCode;
            $objVenue->dine_in = $dineIn;
            $objVenue->venue_description = $venueDescription;
            $objVenue->parking = $parking;
			$objVenue->venue_address = $venueAddress;
			$objVenue->latitude = $latitude;
			$objVenue->longitude = $longitude;
			$objVenue->created_at = date('Y-m-d H:i:s');

            $venueImage = $request->file('venueImage');
            if (isset($venueImage) && sizeof($venueImage) > 0) {
                $imageURL = '';
                $thumbImageURL = '';
                if(!file_exists(public_path('uploads/venue'))) {
                    mkdir(public_path('uploads/venue'),0777,true);
                }
                
				$originalName = $venueImage->getClientOriginalName();
				$imageFileName = uniqid(time()) . '.' . pathinfo($originalName, PATHINFO_EXTENSION);
				$thumbImageFileName = uniqid(time()) . '_thumb' . '.' . pathinfo($originalName, PATHINFO_EXTENSION);

				$filePath = public_path('uploads/venue');
				$img = Image::make($venueImage);
				if ($img->save($filePath.'/'.$imageFileName)) {
					$img->resize(1129, 300)->save($filePath.'/'.$thumbImageFileName);
					$imageURL = 'uploads/venue/'. $imageFileName;
					$thumbImageURL = 'uploads/venue/'. $thumbImageFileName;
				}

				$objVenue->venue_image_url = $imageURL;
				$objVenue->venue_thumb_image_url = $thumbImageURL;
                
            }
            $objVenue->save();
            Session::flash('successMessage', 'Venue has been updated successfully.');
            return 2;

        } else {
            /* New */
            $objVenue = new Venue();
            $objVenue->venue_name = $venueName;
            if(Session::get('login_type_id') != 1) {
                $objVenue->venue_owner_id = Session::get('user_id');
            } else {
                $objVenue->venue_owner_id = $request->get('venueOwner');
            }
            $objVenue->suburb = $suburb;
            $objVenue->restaurant_type = $restaurantType;
            $objVenue->dress_code = $dressCode;
            $objVenue->dine_in = $dineIn;
            $objVenue->venue_description = $venueDescription;
            $objVenue->parking = $parking;
            $objVenue->venue_address = $venueAddress;
            $objVenue->latitude = $latitude;
			$objVenue->longiptude = $longitude;
			$objVenue->created_at = date('Y-m-d H:i:s');

            $venueImage = $request->file('venueImage');
            if (isset($venueImage) && sizeof($venueImage) > 0) {
                $imageURL = '';
                $thumbImageURL = '';
                if(!file_exists(public_path('uploads/venue'))) {
                    mkdir(public_path('uploads/venue'),0777,true);
                }
                
				$originalName = $venueImage->getClientOriginalName();
				$imageFileName = uniqid(time()) . '.' . pathinfo($originalName, PATHINFO_EXTENSION);
				$thumbImageFileName = uniqid(time()) . '_thumb' . '.' . pathinfo($originalName, PATHINFO_EXTENSION);

				$filePath = public_path('uploads/venue');
				$img = Image::make($venueImage);
				if ($img->save($filePath.'/'.$imageFileName)) {
					$img->resize(1129, 300)->save($filePath.'/'.$thumbImageFileName);
					$imageURL = 'uploads/venue/'. $imageFileName;
					$thumbImageURL = 'uploads/venue/'. $thumbImageFileName;
				}

				$objVenue->venue_image_url = $imageURL;
				$objVenue->venue_thumb_image_url = $thumbImageURL;
                
            }
            $objVenue->save();

            Session::flash('successMessage', 'Venue has been added successfully.');
            return 1;
        }
    }
    
    public function rejectVenue(Request $request)
    {
        $hidden_venue_id = $request->get('hidden_venue_id');
        $venue_reason = $request->get('venue_reason');
        Venue::where('venue_id', $hidden_venue_id)->update([
                'rejected_reason' => $venue_reason,
                'status' => 3
                ]  
            );
        $response['key'] = 1;
        Session::flash('successMessage', 'Venue Rejected successfully.');
        echo json_encode($response);
    }

    public function approveVenue(Request $request)
    {
        $hidden_venue_id = $request->get('hidden_venue_id');
        Venue::where('venue_id', $hidden_venue_id)->update([
                'status' => 2
                ]  
            );
        $response['key'] = 1;
        Session::flash('successMessage', 'Venue Approved successfully.');
        echo json_encode($response);
    }

	/*destroy Venue*/
    public function destroyVenue($venue_id) {
        Venue::where('venue_id', $venue_id)->update(['is_deleted' => 1]);
        Session::flash('successMessage', 'Venue deleted successfully.');
        return back();
    }
	
	public function removeScreenshot(Request $request)
    {
        $venue_id = $request->get('venue_id');
        $getVenueDetail = Venue::where('venue_id', $venue_id)->first();

        $getVenueDetail->venue_image_url = null;
        $getVenueDetail->venue_thumb_image_url = null;
        $getVenueDetail->save();
        return 1;
    }
}
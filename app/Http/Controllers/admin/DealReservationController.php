<?php

namespace App\Http\Controllers\admin;
date_default_timezone_set('UTC');
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Deal;
use App\Reservation;
use DB;
use Session;

class DealReservationController extends Controller
{

	public function showDeal()
	{
		$login_type_id = Session::get('login_type_id');
		$query = DB::table('deal as d')
		->selectRaw('v.venue_id,v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.status, v.venue_image_url,v.dine_in,au.first_name, au.last_name, d.created_at,d.comment,d.deal_id,d.expiry_date')
		->join('venues as v','v.venue_id', 'd.venue_id')
		->join('admin_users as au','au.id', 'd.customer_id')
		->where('au.is_deleted', 0)
		->where('v.is_deleted', 0)
		->where('d.is_deleted', 0)
		->where('au.login_type_id', 3);
		if($login_type_id != 1) {
			$query->where('v.venue_owner_id', Session::get('user_id'));
		}
		$getAllDeal = $query->get();
		return view('admin.deal')->with('dealDetails', $getAllDeal);
	}

	public function showReservation()
	{
		$login_type_id = Session::get('login_type_id');
		$query = DB::table('reservation as r')
		->selectRaw('v.venue_name,v.suburb,v.restaurant_type,v.dress_code,v.venue_address,v.venue_description,v.created_at,v.status, v.venue_image_url,v.dine_in,au.first_name, au.last_name, r.created_at,r.comment,r.reservation_id,r.visit_booking_time,r.number_of_people')
		->join('venues as v','v.venue_id', 'r.venue_id')
		->join('admin_users as au','au.id', 'r.customer_id')
		->where('au.is_deleted', 0)
		->where('v.is_deleted', 0)
		->where('r.is_deleted', 0)
		->where('au.login_type_id', 3);
		if($login_type_id != 1) {
			$query->where('v.venue_owner_id', Session::get('user_id'));
		}
		$getAllReservation = $query->get();
		return view('admin.reservation')->with('reservationDetails', $getAllReservation);
	}

	/*destroy Deal*/
    public function destroyDeal($deal_id) {
        Deal::where('deal_id', $deal_id)->update(['is_deleted' => 1]);
        Session::flash('successMessage', 'Deal deleted successfully.');
        return back();
	}
	
	/*destroy Reservation*/
    public function destroyReservation($reservation_id) {
        Reservation::where('reservation_id', $reservation_id)->update(['is_deleted' => 1]);
        Session::flash('successMessage', 'Reservation deleted successfully.');
        return back();
    }
}
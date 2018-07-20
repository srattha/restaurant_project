<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
     $user = Auth::user();
     $users_type_id = $user->user_type_id;
     switch ($users_type_id) {
        case '1':
        return view('home');
        break;
        case '2':
        return view('admin.reservations.reservations');
        break;
        case '3':
        return redirect("/counter_staff");
        break;
        case '4':
        return redirect("/counter_staff");
        break;

    }




}
}

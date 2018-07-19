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

		return view('admin.reservations.reservations');

	}
}

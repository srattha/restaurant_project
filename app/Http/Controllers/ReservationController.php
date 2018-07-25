<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
use App\Food_type;
use App\Food_menus;
use App\Reservation;
use App\Order;
use App\Order_details;

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
  public function create(request $request)
    {

    }

    public function search(Request $request, $id){

        return $table_name = Dining_table::where('id', $id)->first();

         $data = [
               'name' => $table_name,

         ];
         return $data;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      return $request->all();
  }


}

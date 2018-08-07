<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use App\Food_type;
use App\Food_menus;
use Illuminate\Support\Facades\DB;
class Book_tableController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
    }
public function index()
{
        //
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //return $request->all();
       $price = 0;
       $reserve_date = $request->reserve_date." ".$request->time;
       $dining_table_id = $request->dining_table_id;
       $users = Auth::user();
       $users_id = $users->id;
       $add_reservation = new Reservation;
       $add_reservation->dining_table_id = $dining_table_id;
       $add_reservation->user_id = $users_id;
       $add_reservation->reserve_date = $reserve_date;
       $add_reservation->reserve_mobile = $request->reserve_mobile;
       $add_reservation->save();
       $reservation_id = $add_reservation->id;
       if($add_reservation){
          $update_dining_table = Dining_table::where('id',$dining_table_id)->first();
          $update_dining_table->status = 0;
          $update_dining_table->color = 'danger';
          $update_dining_table->save();
          $dining_id = $update_dining_table->id;
          if ($update_dining_table) {
              return redirect()->route('book_food',['id'=>$reservation_id]);
          }
      }
  }
  public function book_food(Request $request, $id)
{

  $reservation = Reservation::where('id', $id)->first();
  $users = Auth::user();
  $users_type_id = $users->user_type_id;
  $user = $users->name;
  $dining_table = Dining_table::where('id', $reservation['dining_table_id'])->first();
  $food_type = Food_type::get();
  $food_type_vegetable = DB::table('food_menu')->where('food_type', 1)->get();
  return view('status.bookfood',['dining_table'=> $dining_table,
    'user'=> $user,
    'food_type'=> $food_type,
    'food_type_vegetable'=> $food_type_vegetable,
    'reservation_id'=> $reservation['id'],
    'reserve_date'=> $reservation['reserve_date'],
  ]);

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

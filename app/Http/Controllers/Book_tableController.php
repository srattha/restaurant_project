<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use App\Food_type;
use App\Food_menus;
use App\Order_details;
use App\Order;
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
    $f_m_boiled = DB::table('food_menu')->where('food_type', 2)->get();
    $f_m_fried = DB::table('food_menu')->where('food_type', 3)->get();
   $f_m_yum = DB::table('food_menu')->where('food_type',4 )->get();
   $f_m_dish = DB::table('food_menu')->where('food_type',5)->get();
   $f_m_piza = DB::table('food_menu')->where('food_type',6)->get();
   $f_m_beverage = DB::table('food_menu')->where('food_type',7)->get();
    $f_m_coffee = DB::table('food_menu')->where('food_type',8)->get();
  return view('status.bookfood',['dining_table'=> $dining_table,
    'user'=> $user,
    'food_type'=> $food_type,
    'food_type_vegetable'=> $food_type_vegetable,
    'f_m_boiled'=> $f_m_boiled,
    'f_m_fried'=> $f_m_fried,
    'f_m_yum'=>$f_m_yum,
    'f_m_dish'=>$f_m_dish,
    'f_m_piza'=>$f_m_piza,
    'f_m_beverage'=>$f_m_beverage,
    'f_m_coffee'=>$f_m_coffee,
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

    public function order_food(Request $request){
  //return $request->all();
  $price = $request->price *  $request->totalorder;
  $order = Order::where('reservationld_id', $request->reservation_id)->first();
  if (!$order) {
   $add_order = new Order;
   $add_order->reservationld_id = $request->reservation_id;
   $add_order->orde_date = $request->orde_date;
   $add_order->is_paid = 0;
   // $add_order->amount = $price;
   $add_order->save();
   $order_id = $add_order->id;
   if ($add_order) {
    $add_order_details = new Order_details;
    $add_order_details->order_Id = $order_id;
    $add_order_details->food_id = $request->food_id;
    $add_order_details->totalorder = $request->totalorder;
    $add_order_details->amount = $price;
    $add_order_details->is_cook = 0;
    $add_order_details->save();
    if ($add_order_details) {
      session()->flash('add_order_details', $request->food_name);
     return redirect()->route('book_food',['id'=>$request->reservation_id]);
   }
 }


}else{
  $add_order_details = new Order_details;
  $add_order_details->order_Id = $order['id'];
  $add_order_details->food_id = $request->food_id;
  $add_order_details->totalorder = $request->totalorder;
  $add_order_details->amount = $price;
  $add_order_details->is_cook = 0;
  $add_order_details->save();
  if ($add_order_details) {
    session()->flash('add_order_details', $request->food_name);
   return redirect()->route('reservation_food',['id'=>$request->reservation_id]);
 }
}

}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
use App\Food_type;
use App\Food_menus;
use App\Reservation;
use App\Order;
use App\Order_details;
use App\User;
use Illuminate\Support\Facades\Auth;


class ServingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()

    {
      $users = Auth::user();
    $users_type_id = $users->user_type_id;
    $user = $users->name;
    switch ($users_type_id) {
      case '1':
      return redirect("/");
      break;
      case '2':
      return redirect("/admin");
      break;
      case '3':
        return request("/counter_staff");
      break;
      case '4':
      return redirect("/chef");
      break;
       case '5':
        return redirect("/receptionist");
      break;
       case '6':
          $table_status_a = Dining_table::where('id','<=', 12)->get();
        $table_status_b = Dining_table::where('id','=',13)->first();
        $table_status_c = Dining_table::where('id','=',14)->get();
        $table_status_d = Dining_table::where('id','=',15)->get();
        $table_status_e = Dining_table::where('id','=',16)->get();
        $table_status_f = Dining_table::where('id','=',17)->get();
        $table_status_g = Dining_table::where('id','=',18)->get();
        $table_status_h = Dining_table::where('id','=',19)->get();
        $table_status_i = Dining_table::where('id','=',20)->get();
        $table_status_k = Dining_table::where('id','>=',21)->get();
         $table = Dining_table::where('status',0)->get();
            foreach ($table as $key => $val) {
               $table[$key]['reservation'] = Reservation::where('dining_table_id',$val->id)->where('is_active',1)->get();
               foreach ($table[$key]['reservation'] as $key2 => $val2) {
                   $reserve = $val2->reserve_date;
                   $current_date = strtotime(Date('Y-m-d H:i'));
                   $reserve_date = strtotime(Date($reserve));
                   $diffdate = round(abs($current_date - $reserve_date) / 60,2);
                   if($diffdate >= 10){
                    // $update_reservation = Reservation::where('dining_table_id',$val2->dining_table_id)->update(["is_active"=> 0]);
                    // $update_table = Dining_table::where('id', $val2->dining_table_id)->first();
                    // $update_table->status = 1;
                    // $update_table->color = "success";
                    // $update_table->save();

                }
                     $table[$key]['reservation'][$key2]['order'] = Order::where('reservationld_id',$val2->id)->get();
                     foreach ($table[$key]['reservation'][$key2]['order'] as $key3 => $val3) {
                         $table[$key]['reservation'][$key2]['order'][$key3]['order_details'] = Order_details::where('order_id', $val3->id)->where('is_cook','!=' , 3)->get();
                        foreach ($table[$key]['reservation'][$key2]['order'][$key3]['order_details'] as $key4 => $val4) {
                          $table[$key]['reservation'][$key2]['order'][$key3]['order_details'][$key4]['food_details'] = Food_menus::where('id',$val4->food_id)->get();
                        }
                     }
               }
           }
           //return $table;

        return view('serving.serving',['table_status_a'=> $table_status_a,
                                    'table_status_b'=> $table_status_b,
                                    'table_status_c'=> $table_status_c,
                                    'table_status_d'=> $table_status_d,
                                    'table_status_e'=> $table_status_e,
                                    'table_status_f'=> $table_status_f,
                                    'table_status_g'=> $table_status_g,
                                    'table_status_h'=> $table_status_h,
                                    'table_status_i'=> $table_status_i,
                                    'table_status_k'=> $table_status_k,

    ],['table'=> $table]);

          
            // return view('serving.serving',['table'=> $table]);
      break;

    }
       
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
        //
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
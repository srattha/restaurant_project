<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Dining_table;
use App\Reservation;
use App\Order_details;
use App\Order;
use App\Food_menus;
class ChefController extends Controller
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
            return redirect("/");
            break;
            case '2':
            return redirect("/admin");
            break;
            case '3':
            return redirect("/counter_staff");
            break;
            case '4':
             // $current_date = strtotime(Date('Y-m-d H:i:s'));
      // $reserve_date = strtotime("20-08-2018 16:30");
      // $diffdate = round(abs($current_date - $reserve_date) / 60,2);
      // if($diffdate >= 10){
      //   echo "เปลี่ยนสถานะ";
      // }
      // return;
      // return $currenttime = $date." ".$time;
            $table = Dining_table::where('status',0)->get();
            foreach ($table as $key => $val) {
               $table[$key]['reservation'] = Reservation::where('dining_table_id',$val->id)->orderBy('id','desc')->get();
               foreach ($table[$key]['reservation'] as $key2 => $val2) {
             $reserve = $val2->reserve_date;
                $current_date = strtotime(Date('Y-m-d H:i'));
                $reserve_date = strtotime(Date($reserve));
             return $diffdate = round(abs($current_date - $reserve_date) / 60,2);
                if($diffdate >= 10){
                    echo "เปลี่ยนสถานะ";
                    return;
                }
                     $table[$key]['reservation'][$key2]['order'] = Order::where('reservationld_id',$val2->id)->get();
                     foreach ($table[$key]['reservation'][$key2]['order'] as $key3 => $val3) {
                         $table[$key]['reservation'][$key2]['order'][$key3]['order_details'] = Order_details::where('order_id', $val3->id)->where('is_cook',0)->get();
                        foreach ($table[$key]['reservation'][$key2]['order'][$key3]['order_details'] as $key4 => $val4) {
                          $table[$key]['reservation'][$key2]['order'][$key3]['order_details'][$key4]['food_details'] = Food_menus::where('id',$val4->food_id)->get();
                        }
                     }
               }
           }
            return $table;

            return view('chef.chef',['table'=> $table]);
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
    public function store($id)
    {


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
        $update_is_cook = Order_details::where('id',$id)->update(['is_cook'=> 1]);
        if ($update_is_cook) {
            return redirect()->back();
        }

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

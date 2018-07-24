<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
use App\Food_type;
use App\Food_menus;
use App\Reservation;
use App\Order;
use App\Order_details;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CounterstaffController extends Controller
{

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
            $dining_table = Dining_table::get();
            $food_type = Food_type::get();
            //$food_menus = Food_menus::get();
            $food_type_vegetable = DB::table('food_menu')->where('food_type', 1)->get();
            return view('counter_staff.index',['dining_table'=> $dining_table,
                'user'=> $user,
                'food_type'=> $food_type,
                'food_type_vegetable'=> $food_type_vegetable
            ]);
            break;
            case '4':
            return redirect("/counter_staff");
            break;

        }




    }

    public function search(Request $request){
        $search = $request->search;
        $dining_table = Dining_table::where('name', 'LIKE', '%' . $search . '%')->get();
        $food_type = Food_type::get();
        $food_type_vegetable = DB::table('food_menu')->where('food_type', 1)->get();
        $users = Auth::user();
        $users_type_id = $users->user_type_id;
        $user = $users->name;
        return view('counter_staff.index',['dining_table'=> $dining_table,
                                            'user'=> $user,
                                            'food_type'=> $food_type,
                                            'food_type_vegetable'=> $food_type_vegetable
                                        ]);
    }

    public function store(Request $request)
    {

        $price = 0;


        $reserve_date = $request->reserve_date.$request->time;
        $dining_table_id = $request->dining_table_id;
        $users = Auth::user();
        $users_type_id = $users->user_type_id;
        $add_reservation = new Reservation;
        $add_reservation->dining_table_id = $dining_table_id;
        $add_reservation->user_id = $users_type_id;
        $add_reservation->reserve_date = $reserve_date ;
        $add_reservation->reserve_mobile = $request->reserve_mobile;
        $add_reservation->save();
        $reservation_id = $add_reservation->id;
        if($add_reservation){
          $update_dining_table = Dining_table::where('id',$dining_table_id)->first();
          $update_dining_table->status = 0;
          $update_dining_table->color = 'danger';
          $update_dining_table->save();
          if ($update_dining_table) {
           foreach ( $request->price as $key => $value) {
            $price += $value;
        }

        $add_order = new Order;
        $add_order->reservationld_id = $reservation_id;
        $add_order->orde_date = $reserve_date;
        $add_order->is_paid = 0;
        $add_order->amount = $price;
        $add_order->save();
        $order_id = $add_order->id;
        if ($add_order) {
            foreach ($request->image as $key => $value) {
                $add_order_details = new Order_details;
                $add_order_details->order_Id = $order_id;
                $add_order_details->food_id = $value;
                $add_order_details->totaorder = 1;
                $add_order_details->is_cook = 0;
                $add_order_details->save();
            }
            if ($add_order_details) {
               return redirect()->route('counterstaff.index');
            }


        }

    }else{
        return ["satus"=>false,"msg"=>"Can't save data"];
    }
   // return redirect()->route('counterstaff.index');
}else{
  return "error message..";
}

}
}

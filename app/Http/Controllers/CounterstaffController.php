<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
use App\Food_type;
use App\Food_menus;
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
            $food_type_vegetable = DB::table('food_menu')->where('food_type', 3)->get();
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
        return view('counter_staff.index',['dining_table'=> $dining_table]);
    }

     public function store(Request $request)
    {
        $users = Auth::user();
        $users_type_id = $users->user_type_id;
      return $request->all();
  }
}

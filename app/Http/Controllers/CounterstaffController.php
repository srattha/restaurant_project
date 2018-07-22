<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
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
            
            return view('counter_staff.index',['dining_table'=> $dining_table,
                                                'user'=> $user
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
}

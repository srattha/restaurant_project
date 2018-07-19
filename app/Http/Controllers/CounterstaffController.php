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
            $dining_table = Dining_table::get();
            return view('counter_staff.index',['dining_table'=> $dining_table]);
            break;
            case '4':
            return redirect("/counter_staff");
            break;

        }




    }
}

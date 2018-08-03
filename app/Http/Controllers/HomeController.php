<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Food_menus;
use App\Food_type;
use Carbon\Carbon;
use App\Shopatmosphere;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');
       $this->Food_menusModel = new Food_menus;
   }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $food_is_recommend = Food_menus::where('is_recommend', 1)->select('food_name','image')->limit(4)->orderBy('id','desc')->get();
       $show_image = Shopatmosphere::select('image')->get();
       return view('home.index', ['food_is_recommend'=> $food_is_recommend,
        'show_image'=>$show_image,
    ]);

   }
}

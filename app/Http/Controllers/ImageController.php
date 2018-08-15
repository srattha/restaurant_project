<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shopatmosphere;
class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $show_image = Shopatmosphere::select('image')->get();
        return view('image.image',['show_image'=>$show_image,]);
    }
}

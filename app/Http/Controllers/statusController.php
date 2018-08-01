<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $table_status = Dining_table::get();
        return view('status.status',['table_status'=> $table_status, 
                                        
    ]);

    }

}
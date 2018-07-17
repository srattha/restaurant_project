<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining_table;
class DiningtableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dining_table = Dining_table::get();
        return view('admin.diningtable.dining_table',['dining_table'=> $dining_table]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.diningtable.add_dining_table');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = new Dining_table;
        $arr->name = $request->name;
        $arr->seating = $request->seating;
        $arr->status = $request->status;
        $arr->color = 'success';
        $arr->save();
        if ($arr) {
         return redirect()->route('diningtable.dining_table');
     }else{
        return ["satus"=>false,"msg"=>"Can't save data"];
    }

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

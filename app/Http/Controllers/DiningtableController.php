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

        if ($request->status == 1) {
           $color = "success";
        }else{
         $color = "danger";
        }
       if ($request->hasFile('file')) {

       $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/QRcode',$filename);
        $arr = new Dining_table;
        $arr->name = $request->name;
        $arr->qrimage = $filename;
        $arr->seating = $request->seating;
        $arr->status = $request->status;
        $arr->color = $color;
        $arr->save();
        if ($arr) {
           return redirect()->route('diningtable.dining_table');
       }else{
        return ["satus"=>false,"msg"=>"Can't save data"];
    }
}else{
    $arr = new Dining_table;
    $arr->name = $request->name;
        // $arr->qrimage = $filename;
    $arr->seating = $request->seating;
    $arr->status = $request->status;
    $arr->color = $color;
    $arr->save();
    if ($arr) {
       return redirect()->route('diningtable.dining_table');
   }else{
    return ["satus"=>false,"msg"=>"Can't save data"];
}
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

       $dining_table = Dining_table::where('id', $id)->first();
       return view('admin.diningtable.edit_dining_table', ['dining_table' => $dining_table]);
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
        $update = Dining_table::where('id',$id)->first();
        $update->name = $request->name;
        $update->seating = $request->seating;
        // $update->status = $request->status;
        $update->color = 'success';
        $update->save();
        if ($update) {
           return redirect()->route('diningtable.dining_table');
       }else{
        return ["satus"=>false,"msg"=>"Can't save data"];
    }

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dining_table_delete = Dining_table::where('id',$id)->delete();
        if($dining_table_delete){
            return redirect()->route('diningtable.dining_table');

        }else{
            return ["satus"=>false,"msg"=>"Can't delete data"];
        }
    }
}

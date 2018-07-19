<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food_menus;
use App\Food_type;
use App\User_type;
use BD;
use Illuminate\Support\Facades\DB;
class FoodmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

         $this->Food_menusModel = new Food_menus;
        $this->middleware('auth');

    }

    public function index()
    {
        $food_menus = $this->Food_menusModel->limit(4)->get();
       // $name = DB::table('food_menu')->where('guide', 1)->get();

      // return $test = Food_menus::where('food_type',1)->ger();



    return view('admin.foodmenu.all_foodmanu', ['food_menus' => $food_menus]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $food_type = Food_type::get();
        return view('admin.foodmenu.add_menu', ['food_type'=> $food_type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

             if ($request->hasFile('file')) {

            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/Food_menus',$filename);
            $arr = new Food_menus;
            $arr->image = $filename;
            $arr->name = $request->name;
            $arr->guide = $request->guide;
            $arr->food_type = $request->food_type;
            $arr->rates = $request->rates;
            $arr->is_active = $request->is_active;
            $arr->save();
            if ($arr) {
               return redirect()->route('foodmenu.all_foodmanu');
           }else{
            return ["satus"=>false,"msg"=>"Can't save data"];
        }


    }else{
    //return $request->all();
        $arr = new Food_menus;
        $arr->image = "noimage.png";
        $arr->name = $request->name;
        $arr->guide = $request->guide;
        $arr->food_type = $request->food_type;
        $arr->rates = $request->rates;
        $arr->is_active = $request->is_active;
        $arr->save();
        if ($arr) {
            return redirect()->route('foodmenu.all_foodmanu');
        }

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

        $edit_menu = Food_menus::where('id', $id)->first();
        $food_type = Food_type::get();
        return view('admin.foodmenu.edit_menu', ['edit_menu' => $edit_menu, 'food_type'=> $food_type]);
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

       // return $request->all();
        if ($id) {

             if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/Food_menus',$filename);
            // $arr = new Food_menus;
            $update_menu = Food_menus::where('id',$id)->first();
            $update_menu->image = $filename;
            $update_menu->name = $request->name;
            $update_menu->guide = $request->guide;
            $update_menu->food_type = $request->food_type;
            $update_menu->rates = $request->rates;
            $update_menu->is_active = $request->is_active;
            $update_menu->save();
            if ($update_menu) {
               return redirect()->route('foodmenu.all_foodmanu');
           }else{
            return ["satus"=>false,"msg"=>"Can't update data"];
        }


    }else{
        $update_menu = Food_menus::where('id',$id)->first();
        $update_menu->name = $request->name;
        $update_menu->food_type = $request->food_type;
        $update_menu->guide = $request->guide;
        $update_menu->rates = $request->rates;
        $update_menu->is_active = $request->is_active;
        $update_menu->save();
        if ($update_menu) {
            return redirect()->route('foodmenu.all_foodmanu');
        }

        return ["satus"=>false,"msg"=>"Can't update data"];
    }
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
        $menu_delete = Food_menus::where('id',$id)->delete();
        if($menu_delete){
            return redirect()->route('foodmenu.all_foodmanu');

       }else{
        return ["satus"=>false,"msg"=>"Can't delete data"];
    }
    }
}

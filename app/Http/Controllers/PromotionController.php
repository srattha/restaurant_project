<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\promotion_type;
use App\promotion;
class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('home');
        break;
        case '2':
        $promotion = promotion::get();
        return view('admin.promotion.promotion', ['promotion' => $promotion]);
        break;
        case '3':
        return redirect("/counter_staff");
        break;
        case '4':
        return redirect("/counter_staff");
        break;

    }

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $users_type_id = $user->user_type_id;
        switch ($users_type_id) {
            case '1':
            return view('home');
            break;
            case '2':
            $promotion_type = promotion_type::get();
            return view('admin.promotion.add_promotion', ['promotion_type' => $promotion_type]);
            break;
            case '3':
            return redirect("/counter_staff");
            break;
            case '4':
            return redirect("/counter_staff");
            break;

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        if ($request->hasFile('file')) {

            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/promotion',$filename);
            $arr = new promotion;
            $arr->qrimage = $filename;
            $arr->name = $request->name;
            $arr->promotion_type_id = $request->promotion_type;
            $arr->price = $request->price;
            $arr->explain = $request->explain;
            $arr->is_active = $request->is_active;
            $arr->save();
            if ($arr) {
              return redirect()->route('promotion.promotion');
          }else{
            return ["satus"=>false,"msg"=>"Can't save data"];
        }


    }else{
    //return $request->all();
        $arr = new promotion;
        $arr->qrimage = "noimage.png";
        $arr->name = $request->name;
        $arr->promotion_type_id = $request->promotion_type;
        $arr->price = $request->price;
        $arr->explain = $request->explain;
        $arr->is_active = $request->is_active;
        $arr->save();
        if ($arr) {
          return redirect()->route('promotion.promotion');
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
       // return $id;
       $edit_promotion = promotion::where('id', $id)->first();
       $promotion_type = promotion_type::get();
       return view('admin.promotion.edit_promotion', ['edit_promotion' => $edit_promotion, 'promotion_type'=> $promotion_type]);
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
       if ($id) {
         if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/promotion',$filename);
            $update_promotion = promotion::where('id',$id)->first();
            $update_promotion->qrimage = $filename;
            $update_promotion->name = $request->name;
            $update_promotion->promotion_type_id = $request->promotion_type;
            $update_promotion->price = $request->price;
            $update_promotion->explain = $request->explain;
            $update_promotion->is_active = $request->is_active;
            $update_promotion->save();
            if ($update_promotion) {
               return redirect()->route('promotion.promotion');
           }else{
            return ["satus"=>false,"msg"=>"Can't update data"];
        }


    }else{
        $update_promotion = promotion::where('id',$id)->first();
        $update_promotion->name = $request->name;
        $update_promotion->promotion_type_id = $request->promotion_type;
        $update_promotion->price = $request->price;
        $update_promotion->explain = $request->explain;
        $update_promotion->is_active = $request->is_active;
        $update_promotion->save();
        if ($update_promotion) {
           return redirect()->route('promotion.promotion');
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
       $promotion_delete = promotion::where('id',$id)->delete();
        if($promotion_delete){
            return redirect()->route('promotion.promotion');

        }else{
            return ["satus"=>false,"msg"=>"Can't delete data"];
        }
    }
}

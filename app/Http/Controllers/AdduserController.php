<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\User_type;
class AdduserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_type = User_type::get();
        return view('admin.home.adduser', ['user_type' => $user_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $add_user = new User;
        $add_user->name = $request->name;
        $add_user->user_type_id = $request->users_type_id;
        $add_user->telephone_number = $request->telephone_number;
        $add_user->email = $request->email;
        $add_user->is_active = $request->is_active;
        $add_user->password = bcrypt($request->password);
        $add_user->save();
        if($add_user){
          return redirect()->route('home.index');
      }else{
          return "error message..";
      }

      return $request->all();
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

        $edit_user = User::where('id', $id)->first();
        $user_type = User_type::get();
        return view('admin.home.edituser', ['edit_user' => $edit_user,
            'user_type' => $user_type
        ]);
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
        //return $request->is_active;
       if($id){
        if ($request->password) {
            $update_user = User::where('id',$id)->first();
            $update_user->name = $request->name;
            $update_user->email = $request->email;
            $update_user->telephone_number = $request->telephone_number;
            $update_user->password = $request->password;
            $update_user->user_type_id = $request->users_type_id;
            $update_user->is_active = $request->is_active;
            $update_user->save();
            if($update_user){
             return redirect()->route('home.index');

         }else{
            return "error message..";
        }
    }else{
       $update_user = User::where('id',$id)->first();
       $update_user->name = $request->name;
       $update_user->email = $request->email;
       $update_user->telephone_number = $request->telephone_number;
       $update_user->user_type_id = $request->users_type_id;
       $update_user->is_active = $request->is_active;
       $update_user->save();
       if($update_user){
         return redirect()->route('home.index');

     }else{
        return "error message..";
    }
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

        $user_delete = User::where('id',$id)->delete();
        if($user_delete){
         return redirect()->route('home.index');

     }else{
        return "error message..";
    }
}
}

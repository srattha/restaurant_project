@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">แก้ไข {{$edit_user->name}}</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="offer offer-default">
      <div class="shape">
        <div class="shape-text">
         แก้ไข
       </div>
     </div>
     <div class="offer-content">
      <h3 class="lead">
        A default offer
      </h3>
      <form class="form-horizontal" method="POST" action="{{ route('home.update',['id'=>$edit_user->id]) }}">
        {{ csrf_field() }}
        <div>
          <label>Username</label>
          <input type="text" class="form-control" name="name" placeholder="Username" value="{{$edit_user->name}}">
        </div>
        <br>
        <div>
          <label>Emali</label>
          <input type="email" class="form-control" name="email" placeholder="Email" value="{{$edit_user->email}}">
        </div>
        <br>
        <div>
         <label>กำหนดระดับผู้ใช้งาน </label>
         <select name="users_type_id" class="form-control">
            @foreach($user_type as $user_types)
            <option value="{{ $user_types->id }}" {{$edit_user->user_type_id  == $user_types->id ? "selected" : "" }}>{{ $user_types->name}}</option>
            @endforeach
          </select>
        </div>
        <br>
           <!--  <div>
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <br>
            <div>
              <label for="password-confirm">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
            </div>
            <br> -->
            <div>
              <div class="checkbox">
                <label>
                  <input type="hidden" name="is_active" value="0" />
                  <input type="checkbox" name="is_active" value="1" {{ $edit_user->is_active ? 'checked' : '' }}> <span class="label label-default">เปิด / ปิด</span>

                </label>
              </div>
            </div>

            <div style="text-align: right;padding-top: 10px;">
              <button type="submit" class="btn btn-primary">
                Register
              </button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('javascript') @endsection

@extends('admin.layouts.master')
@section('title','เพิ่มสมาชิก')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">เพิ่มสมาชิก</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
   @if(session()->has('email'))
   <br>
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ session()->get('email') }}</strong>
  </div>
  @endif

   @if(session()->has('password'))
   <br>
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ session()->get('password') }}</strong>
  </div>
  @endif
  <div class="offer offer-default">
    <div class="shape">
      <div class="shape-text">
        เพิ่ม
      </div>
    </div>
    <div class="offer-content">
      <h3 class="lead">
        เพิ่มผู้ใช้งาน
      </h3>
      <form class="form-horizontal" method="POST" action="{{ route('home.adduser') }}">
        {{ csrf_field() }}
        <div>
          <label>ชื่อ</label>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ" required>
        </div>
        <br>
        <div>
          <label>อีเมล</label>
          <input type="email" class="form-control" name="email" placeholder="อีเมล" required>
        </div>
        <br>
        <div>
          <label for="name">Phone</label>
          <input id="phone" type="number" class="form-control" placeholder="123456789" name="telephone_number" value="{{ old('telephone_number') }}" required>
        </div>
        <br>
        <div>
         <label>กำหนดระดับผู้ใช้งาน</label>
         <select name="users_type_id"  class="form-control" required>
          @foreach ($user_type as $index => $user_types)
          <option value="{{$user_types->id}}">{{$user_types->name}}</option>

          @endforeach
        </select>
      </div>
      <br>
      <div>
        <label>รหัสผ่าน</label>
        <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
      </div>
      <br>
      <div>
        <label for="password-confirm">ยืนยันรห้สผ่าน</label>
        <input id="password-confirm" type="password" class="form-control" placeholder="ยืนยันรห้สผ่าน" name="password_confirmation" required>
      </div>
      <br>
      <div class="checkbox">
        <input type="hidden" name="is_active" value="0" />
        <label><input type="checkbox" name="is_active"  value="1"> เปิด/ปิด</label>
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

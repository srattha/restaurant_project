@extends('admin.layouts.master')
@section('css')
<style type="text/css" media="screen">
.shape {
  border-style: solid;
  border-width: 0 70px 50px 0;
  float: right;
  height: 0px;
  width: 0px;
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header"> จัดการ โต๊ะอาหาร</h1> <button type="button" class="btn btn-success" onclick="location.href='{{ route('foodmenu.add_menu') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="offer offer-radius offer-success">
      <div class="shape">
        <div class="shape-text">
          <i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>           
        </div>
      </div>
      <div class="offer-content">
        <h3 class="lead">
           <span class="label label-success">ว่าง</span>
        </h3>           
        <p>
          <img src="/assets/img/interview.png">
        </p>
        <p>โต๊ะ: 2</p>
       <p>จำนวนที่นั่ง: 2</p>
         <div><button type="button" class="btn btn-primary btn-block">ยืนยันสถานะ</button></div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="offer offer-radius offer-danger">
      <div class="shape">
        <div class="shape-text">
          <i class="fa fa-window-close fa-2x" aria-hidden="true"></i>            
        </div>
      </div>
      <div class="offer-content">
        <h3 class="lead">
          <span class="label label-danger">ไม่ว่าง</span>
        </h3>           
        <p>
         <img src="/assets/img/interview.png">
        </p>
        <p>โต๊ะ: 2</p>
       <p>จำนวนที่นั่ง: 2</p>
         <div><button type="button" class="btn btn-primary btn-block" disabled>ยืนยันสถานะ</button></div>
      </div>
    </div>
  </div>  

</div>


@endsection
@section('javascript') @endsection

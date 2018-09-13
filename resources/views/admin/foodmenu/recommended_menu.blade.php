@extends('admin.layouts.master')
@section('title','เมนู อาหารแนะนำ')
@section('css')
<style type="text/css" media="screen">
td{
  text-align: center;
}
th{
 text-align: center;
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">เมนู อาหารแนะนำ</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="offer offer-default">
      <div class="shape">
        <div class="shape-text">
          เมนู
        </div>
      </div>
      <div class="offer-content">
       <h3 class="lead">
        <button type="button" class="btn btn-success" onclick="location.href='{{ route('foodmenu.addrecommended_menu') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
      </h3>
      <div class="panel panel-default">
        <div class="panel-heading">
          เมนู อาหารแนะนำ
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
             <thead>
              <tr>
                <th>#</th>
                <th>รูป</th>
                <th>ชื่อ</th>
                <th>ประเภท</th>
                <th>ราคา</th>
                <th>สถานะการใช้งาน </th>
                <th>เวลาสร้าง</th>
                <th>เวลาแก้ไข</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>


            </tr>

          </tbody>


        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
  </div>


</div>
</div>
</div>
</div>

@endsection
@section('javascript') @endsection

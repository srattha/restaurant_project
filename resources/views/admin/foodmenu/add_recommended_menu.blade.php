@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">เพิ่มเมนู อาหารแนะนำ</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="offer offer-default">
      <div class="shape">
        <div class="shape-text">
          เพิ่ม
        </div>
      </div>
      <div class="offer-content">
        <h3 class="lead">
          เพิ่มเมนู อาหาร
        </h3>
        <form class="form-horizontal" method="POST" action="{{ route('foodmenu.addrecommended_menu') }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
            <label for="exampleInputFile">รูป</label>
            <input type="file" name="file" class="form-control">
          </div>
          <br>
          <div>
            <label>ชื่อ</label>
            <input type="text" class="form-control" name="name" placeholder="ชื่อ">
          </div>
          <br>
          <!-- <div>
            <label>ประเภท</label>
          
        </div> -->
        <br>
        <div>
          <label>ราคา</label>
          <input type="numbel" class="form-control" name="rates" placeholder="ราคา">
        </div>
        <br>
        <div>
         <div class="checkbox">
          <input type="hidden" name="is_active" value="0" />
          <label><input type="checkbox" name="is_active"  value="1"> เปิด/ปิด</label>
        </div>
      </div>
      <div style="text-align: right;padding-top: 10px;">
        <button type="submit" class="btn btn-primary">
         ตกลง
        </button>
      </div>

    </form>

  </div>
</div>
</div>
</div>
@endsection
@section('javascript') @endsection

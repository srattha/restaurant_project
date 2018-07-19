@extends('admin.layouts.master')
@section('css')
<style>
div.upload {
  width: 157px;
  height: 57px;
  background: url(https://lh6.googleusercontent.com/-dqTIJRTqEAQ/UJaofTQm3hI/AAAAAAAABHo/w7ruR1SOIsA/s157/upload.png);
  overflow: hidden;
}

div.upload input {
  display: block !important;
  width: 157px !important;
  height: 57px !important;
  opacity: 0 !important;
  overflow: hidden !important;
}
</style>

@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">เพิ่ม โต๊ะอาหาร</h1>
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
          เพิ่ม โต๊ะอาหาร
        </h3>
        <form class="form-horizontal" method="POST" action="{{ route('diningtable.add_dining_table') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
           <div>
            <label for="exampleInputFile">รูป QR Code</label>
            <div class="upload">
              <input type="file" name="file"/>
            </div>
          </div>
          <br>
          <div>
            <label>ชื่อ</label>
            <input type="text" class="form-control" name="name" placeholder="ชื่อ" required>
          </div>
          <br>
          <div>
            <label>จำนวนที่นั่ง</label>
            <input type="text" class="form-control" name="seating" placeholder="จำนวนที่นั่ง" required>
          </div>
          <br>
          <div class="checkbox">
            <input type="hidden" name="status" value="0" />
            <label><input type="checkbox" name="status"  value="1" checkbox> ว่าง/ไม่ว่าง</label>
          </div>
          <br>
          <div class="checkbox">
            <input type="hidden" name="is_active" value="0" />
            <label><input type="checkbox" name="is_active"  value="1"> เปิด/ปิด</label>
          </div>
          <div style="text-align: right;padding-top: 10px;">
            <button type="submit" class="btn btn-primary">
              OK
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
@section('javascript')
@endsection

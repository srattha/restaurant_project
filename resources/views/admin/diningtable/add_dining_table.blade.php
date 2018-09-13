@extends('admin.layouts.master')
@section('title','เพิ่ม โต๊ะอาหาร')
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
input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
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
        </h3>
        <form class="form-horizontal" method="POST" action="{{ route('diningtable.add_dining_table') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
           <div>
            <label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> เพิ่มรูปภาพ คิวอาร์โค้ด
</label>
<input id="file-upload" type="file"/>
              <input type="file" id="imgInp" name="file"/>
            <br>
            <div>
             <img id="blah" src="/assets/img/no-img.png" style="width: 25%; height: 25%;">
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
             ตกลง
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
@section('javascript')
<script>
    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgInp").change(function() {
      readURL(this);
    });

  </script>
@endsection

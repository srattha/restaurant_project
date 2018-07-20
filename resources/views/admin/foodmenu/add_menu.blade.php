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
    <h1 class="page-header">เพิ่มเมนู อาหาร</h1>
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
        <form class="form-horizontal" method="POST" action="{{ route('foodmenu.add_menu') }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
            <label for="exampleInputFile">รูป</label>
            <div class="upload">
              <input type="file"  id="imgInp" name="file"/ >
            </div>
            <img id="blah" src="/assets/img/no-img.png" style="width: 25%; height: 25%;">
           <!--  <input type="file" name="file" class="form-control"> -->
          </div>
          <br>
          <div>
            <label>ชื่อ</label>

            <input type="text" class="form-control" name="food_name" placeholder="ชื่อ">
          </div>
          <br>
          <div>
            <label>ประเภท</label>
            <select name="food_type"  class="form-control">
              @foreach ($food_type as $index => $food_types)
              <option value="{{$food_types->id}}">{{$food_types->name}}</option>
              @endforeach
            </select>
          </div>
          <br>
          <div>
           <div class="checkbox">
            <input type="hidden" name="is_recommend" value="0" />
            <label><input type="checkbox" name="is_recommend"  value="1"> เมนูแนะนำ</label>
          </div>
        </div>
        <br>
        <div>
          <label>ราคา</label>
          <input type="numbel" class="form-control" name="price" placeholder="ราคา">
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

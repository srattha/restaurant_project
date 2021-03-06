@extends('admin.layouts.master')
@section('title','เพิ่มเมนู อาหาร')
@section('css')
<style>
.fileimg {
  position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
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

/*div.upload input {
  display: block !important;
  width: 157px !important;
  height: 57px !important;
  opacity: 0 !important;
  overflow: hidden !important;
}*/
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
        </h3>
        <form class="form-horizontal" method="POST" action="{{ route('foodmenu.add_menu') }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
           <label for="imgInp" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> เพิ่มรูปภาพ
</label>
<input id="file-upload" type="file"/>
              <input type="file" id="imgInp" name="file"/>
            
            <br>
           
            <div>
            
            <img id="blah" src="/assets/img/no-img.png" style="width: 25%; height: 25%;">
           <!--  <input type="file" name="file" class="form-control"> -->
          </div>
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
          <label>ราคา เล็ก</label>
          <input type="numbel" class="form-control" name="price" placeholder="ราคา">
        </div>
        <div>
          <label>ราคา กลาง</label>
          <input type="numbel" class="form-control" name="special_price" placeholder="ราคา">
        </div>
        <br>
        <div>
          <label>ราคา ไหญ่</label>
          <input type="numbel" class="form-control" name="big_price" placeholder="ราคา">
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

@extends('admin.layouts.master')
@section('title','แก้ไข โปรโมชั่น')
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
    <h1 class="page-header">แก้ไข โปรโมชั่น</h1>
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
       <form class="form-horizontal" method="POST" action="{{ route('promotion.update',['id'=>$edit_promotion->id]) }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
            <label for="imgInp" class="custom-file-upload">
              <i class="fa fa-cloud-upload"></i> เพิ่มรูปภาพ
            </label>
            <!-- <input id="file-upload" type="file"/>
            <input type="file" id="imgInp" name="file"/> -->
             <input type="file"  id="imgInp" name="file"/ >
            
            <br>
            <br>
            <div>
              <img id="blah" src="/assets/img/no-img.png" style="width: 25%; height: 25%;">
            </div>
            <br>
          </div>
          <div>
            <label>ชื่อ</label>
            <input type="text" class="form-control" name="name" value="{{$edit_promotion->name}}" placeholder="ชื่อ">
          </div>
          <div>
            <label>ประเภท</label>
            <select name="promotion_type"  class="form-control">
              @foreach ($promotion_type as $index => $promotion_types)
              <option value="{{$promotion_types->id}}">{{$promotion_types->name}}</option>
              @endforeach
            </select>
          </div>
          <div>
            <label>ราคา</label>
            <input type="text" class="form-control" name="price" value="{{$edit_promotion->price}}" placeholder="ราคา">
          </div>
          <div>
             <label for="exampleInputMessage1"><br>คำอธิบาย</br></label>
             <textarea class="form-control" name="explain">{{$edit_promotion->explain}}</textarea>
          </div>
          <div>
           <div class="checkbox">
            <label>
              <input type="hidden" name="is_active" value="0" />
              <input type="checkbox" name="is_active" value="1" {{ $edit_promotion->is_active ? 'checked' : '' }}> <span class="label label-default">เปิด / ปิด</span>
            </label>
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

@extends('admin.layouts.master')
@section('title','แก้ไขเมนู')
@section('css')
<style>

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
    <h1 class="page-header">แก้ไขเมนู อาหาร</h1>
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
        <form class="form-horizontal" method="POST" action="{{ route('foodmenu.update',['id'=>$edit_menu->id]) }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
            <label for="imgInp" class="custom-file-upload">
              <i class="fa fa-cloud-upload"></i> เพิ่มรูปภาพ
            </label>
            <input id="file-upload" type="file"/>
            <input type="file" id="imgInp" name="file"/>

            <br>
            <br>
            <div>
              <img id="blah" src="{{ asset('storage/Food_menus/'.$edit_menu->image) }}" style="width: 25%; height: 25%;">
            </div>


          </div>
          <br>
          <div>
            <label>ชื่อ</label>
            <input type="text" class="form-control" name="food_name" value="{{$edit_menu->food_name}}" >
          </div>
          <br>
          <div>
            <label>ประเภท</label>
            <select name="food_type" class="form-control">
             @foreach($food_type as $food_types)
             <option value="{{ $food_types->id }}" {{$edit_menu->food_type  == $food_types->id ? "selected" : "" }}>{{ $food_types->name}}</option>
             @endforeach
           </select>
         </div>
         <br>
         <div>
          <div class="checkbox">
            <label>
              <input type="hidden" name="is_recommend" value="0" />
              <input type="checkbox" name="is_recommend" value="1" {{ $edit_menu->guide ? 'checked' : '' }}> <span class="label label-default">เมนูแนะนำ</span>

            </label>
          </div>
        </div>
        <br>
        <div>
          <label>ราคา เล็ก</label>
          <input type="numbel" class="form-control" value="{{$edit_menu->price}}" name="price" placeholder="ราคา">
        </div>
        <br>
        <div>
          <label>ราคา กลาง</label>
          <input type="numbel" class="form-control" value="{{$edit_menu->special_price}}" name="special_price" placeholder="ราคา">
        </div>
        <br>
        <div>
          <label>ราคา ไหญ่</label>
          <input type="numbel" class="form-control" value="{{$edit_menu->big_price}}" name="big_price" placeholder="ราคา">
        </div>
        <br>
        <div>
          <div class="checkbox">
            <label>
              <input type="hidden" name="is_active" value="0" />
              <input type="checkbox" name="is_active" value="1" {{ $edit_menu->is_active ? 'checked' : '' }}> <span class="label label-default">เปิด / ปิด</span>

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

@extends('admin.layouts.master')

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
          A default offer
        </h3>
        <form class="form-horizontal" method="POST" action="{{ route('foodmenu.update',['id'=>$edit_menu->id]) }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
            <label for="exampleInputFile">รูป</label>
            <input type="file" name="file" class="form-control">
          </div>
          <br>
          <div>
            <label>ชื่อ</label>
            <input type="text" class="form-control" name="name" value="{{$edit_menu->name}}" placeholder="ชื่อ">
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
              <input type="hidden" name="guide" value="0" />
              <input type="checkbox" name="guide" value="1" {{ $edit_menu->guide ? 'checked' : '' }}> <span class="label label-default">เมนูแนะนำ</span>

            </label>
          </div>
        </div>
        <br>
        <div>
          <label>ราคา</label>
          <input type="numbel" class="form-control" value="{{$edit_menu->rates}}" name="rates" placeholder="ราคา">
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
            OK
          </button>
        </div>

      </form>

    </div>
  </div>
</div>
</div>
@endsection
@section('javascript') @endsection

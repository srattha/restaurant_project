@extends('admin.layouts.master')
@section('title','แก้ไข โต๊ะอาหาร')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">แก้ไข โต๊ะอาหาร</h1>
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
        <form class="form-horizontal" method="POST" action="{{ route('diningtable.update_dining_table',['id'=>$dining_table->id]) }}">
          {{ csrf_field() }}
          <div>
            <label>ชื่อ</label>
            <input type="text" class="form-control" name="name" value="{{$dining_table->name}}" placeholder="ชื่อ" required>
          </div>
          <br>
          <div>
            <label>จำนวนที่นั่ง</label>
            <input type="text" class="form-control" name="seating" value="{{$dining_table->seating}}"  placeholder="จำนวนที่นั่ง" required>
          </div>
          <br>
          <div class="checkbox">
           <label>
            <input type="hidden" name="status" value="0" />
            <input type="checkbox" name="status" value="1" {{ $dining_table->status ? 'checked' : '' }}> <span class="label label-default">ว่าง/ไม่ว่าง</span>
          </div>
        </label>
        <br>
        <div class="checkbox">
          <label>
            <input type="hidden" name="is_active" value="0" />
            <input type="checkbox" name="is_active" value="1" {{ $dining_table->is_active ? 'checked' : '' }}> <span class="label label-default">เปิด / ปิด</span>

          </label>
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
@endsection

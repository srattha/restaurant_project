@extends('admin.layouts.master')

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
          A default offer
        </h3>
        <form class="form-horizontal" method="POST" action="{{ route('diningtable.add_dining_table') }}">
          {{ csrf_field() }}
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
            <label><input type="checkbox" name="status"  value="1"> ว่าง/ไม่ว่าง</label>
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

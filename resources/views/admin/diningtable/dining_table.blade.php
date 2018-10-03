@extends('admin.layouts.master')
@section('title','โต๊ะอาหาร')
@section('css')
<style type="text/css" media="screen">
.shape {
  border-style: solid;
  border-width: 0 70px 50px 0;
  float: right;
  height: 0px;
  width: 0px;
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header"> จัดการ โต๊ะอาหาร</h1>
    <button type="button" class="btn btn-success" onclick="location.href='{{ route('diningtable.add_dining_table') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
  </div>
</div>
<div class="row">
 @foreach ($dining_table as $index => $dining_tables)
 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
  <div class="offer offer-radius offer-{{$dining_tables->color}}">
    <div class="shape">
      <div class="shape-text">
        <i class="fa fa-window-close fa-2x" aria-hidden="true" onclick="if(confirm('ยืนยันการลบ ?')) window.location.href = '{{ route('diningtable.delete',['id'=>$dining_tables->id]) }}'"></i>
      </div>
    </div>
    <div class="offer-content">
      <h3 class="lead">
       <span class="label label-{{$dining_tables->color}}">
        @if($dining_tables->status == 1)
        ว่าง
        @else
        ไม่ว่าง
        @endif
      </span>
    </h3>
    <p style="text-align: center;">
      <img src="/assets/img/interview.png">
    </p>
    <div class="row">
      <div class="col-md-6">
        <p>โต๊ะ: {{$dining_tables-> name}}</p>
        <p>จำนวนที่นั่ง: {{$dining_tables->seating}}</p>
      </div>
      <div class="col-md-6">
         <img src="{{ asset('storage/QRcode/'.$dining_tables->qrimage) }}" style="width: 40%;">
      </div>
    </div>

    <!-- <p>รายการอาหาร</p> -->
    <div><button type="button" class="btn btn-{{$dining_tables->color}} btn-block" onclick="location.href='{{ route('diningtable.edit_dining_table',['id'=>$dining_tables->id]) }}'">แก้ไข</button></div>
  </div>
</div>
</div>
@endforeach
</div>
 {{ $dining_table->links() }}

@endsection
@section('javascript')

@endsection

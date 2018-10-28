@extends('admin.layouts.master')
@section('title','โปรโมชั่น')
@section('css')
<style type="text/css" media="screen">
td{
  text-align: center;
  vertical-align: middle !important;
}
th{
 text-align: center;
}

img{
 height: 70px;
 width: 70px;
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">จัดการ โปรโมชั่น</h1>
  </div>
</div>
<div class="row">
  <button type="button" class="btn btn-success" onclick="location.href='{{ route('promotion.addpromotion') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
</div>
<br>

<div class="row">
  <table id="dataTables-example" class="table table-striped table-bordered" style="width:100%;">
   <thead>
    <tr>
      <th>รูป</th>
      <th>ชื่อ</th>
      <th>คำอธิบาย</th>
      <th>ประเภท</th>
      <th>ราคา</th>
      <th>สถานะการใช้งาน</th>
      <th>เวลาสร้างข้อมูล</th>
      <th>เวลาแก้ไขข้อมูล</th>
      <th class="text-center">แก้ไขข้อมูล</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($promotion as $index => $p)
    <tr>
      <td>
        <img src="{{ asset('storage/promotion/'.$p->qrimage) }}" alt="">
      </td>
      <td>{{$p->name}}</td>
      <td>{{$p->explain}}</td>
      <td>
        @if($p->promotion_type_id == 1)
        <span class="label label-default">โปรเดอะฮักกระชากใจ</span>
        @elseif ($p->promotion_type_id == 2)
        <span class="label label-warning">โปรสหายหมื่นจอก</span>
        @elseif ($p->promotion_type_id == 3)
        <span class="label label-warning">โปรลูกหมูสามตัว</span>
        @elseif ($p->promotion_type_id == 4)
        <span class="label label-warning">ยำประเจ็ท</span>
        @elseif ($p->promotion_type_id == 5)
        <span class="label label-warning">อาหาร</span>
        @else
        <span class="label label-warning">ทอดสะพาน</span>
        @endif
      </td>
      <td>{{$p->price}}</td>
      <td>{{$p->is_active}}</td>
      <td>{{$p->created_at}}</td>
      <td>{{$p->updated_at}}</td>

      <td style="align-content: center;">
        <div class="btn-group">
          <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('promotion.editpromotion',['id'=>$p->id]) }}'"><i class="fa fa-pencil-square-o"></i> แก้ไขข้อมูล</button>
          <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('ยืนยันการลบ ?')) window.location.href = '{{ route('promotion.delete',['id'=>$p->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
@section('javascript')
<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
</script>
@endsection

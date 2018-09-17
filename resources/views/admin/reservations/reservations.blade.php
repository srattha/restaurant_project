@extends('admin.layouts.master')
@section('title','รายงานการจอง')
@section('css')
<style type="text/css" media="screen">
td{
  text-align: center;
}
th{
 text-align: center;
}
a {
    color: #333333;
    text-decoration: none;
}
</style>
@endsection
@section('content')
<div class="row">
  <h1 class="page-header">ตาราง รายงานการจอง</h1>
</div>
 @if(session()->has('reservation_delete'))
   <br>
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ session()->get('reservation_delete') }}</strong>
  </div>
  @endif
<div class="row">
  <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
   <thead>
    <tr>
      <th>#</th>
      <th>โต๊ะ</th>
      <!-- <th>สถานะ</th> -->
      <th>ลูกค้าที่จอง</th>
      <th>วันที่จอง</th>
      <th>เบอร์ติดต่อ </th>
      <th>เวลาสร้างข้อมูล</th>
      <th>เวลาแก้ไขข้อมูล</th>
       <th class="text-center">ลบข้อมูล</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($reservation as $index => $reservations)
    <tr>

      <td>{{$index+1}}</td>
      @foreach($reservations->dining_table as $dining_tables)
      <td>{{$dining_tables->name}}</td>
      <!-- <td>{{$dining_tables->status}}</td> -->
      @endforeach
      @foreach($reservations->user as $u)
      <td>{{$u->name}}</td>
      @endforeach
      <td>{{$reservations->reserve_date}}</td>
      <td>{{$reservations->reserve_mobile}}</td>
      <td>{{$reservations->created_at}}</td>
      <td>{{$reservations->updated_at}}</td>
      <td><button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('คุณแน่ใจหรือไม่ ?')) window.location.href = '{{ route('reservations.delete',['id'=>$reservations->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button></td>
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

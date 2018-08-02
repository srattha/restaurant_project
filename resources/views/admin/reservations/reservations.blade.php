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
</style>
@endsection
@section('content')
<div class="row">
  <h1 class="page-header">ตาราง รายงานการจอง</h1>
</div>
<!-- <div class="row">
 <button type="button" class="btn btn-success" onclick="location.href='{{ route('home.adduser') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
</div>
<br> -->
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
      <th>created_at</th>
      <th>updated_at</th>
       <th class="text-center">Actions</th>
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
      <td><button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('home.delete',['id'=>$reservations->id]) }}'"><i class="fa fa-trash-o"></i> Delete</button></td>
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

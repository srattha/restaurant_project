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
      <th>ลูกค้าที่จอง</th>
      <th>สถานะ</th>
      <th>วันที่จอง</th>
      <th>เบอร์ติดต่อ </th>
      <th>created_at</th>
      <th>updated_at</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      </tr>

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

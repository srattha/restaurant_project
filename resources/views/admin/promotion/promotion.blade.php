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
      <th>#</th>
      <th>รูป</th>
      <th>คำอธิบาย</th>
      <th>status </th>
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

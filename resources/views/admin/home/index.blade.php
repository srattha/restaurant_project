@extends('admin.layouts.master')
@section('title','จัดการข้อมูลสมาชิก')
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
  <h1 class="page-header">จัดการข้อมูลสมาชิก</h1>
</div>
@if(session()->has('notif'))
<br>
<div class="row">
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>เพิ่มสมาชิก</strong> {{ session()->get('notif') }}
  </div>
</div>
@endif
<div class="row">
 <button type="button" class="btn btn-success" onclick="location.href='{{ route('home.adduser') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
</div>
<br>
<div class="row">
  <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
   <thead>
    <tr>
      <th>#</th>
      <th>ชื่อ</th>
      <th>เบอร์โทร</th>
      <th>อีเมล</th>
      <th>สถานะ</th>
      <th>สถานะการใช้งาน </th>
      <th>เวลาสร้างข้อมูล</th>
      <th>เวลาแก้ไขข้ัอมูล</th>
      <th class="text-center">แก้ไขข้อมูล</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($user as $index => $users)
      <td>{{$users->id}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->telephone_number}}</td>
      <td>{{$users->email}}</td>
      <td>
        @if($users->user_type_id == 1)
        <span class="label label-default">ผู้ใช้ทั่วไป</span>
        @elseif ($users->user_type_id == 2)
        <span class="label label-primary">ผู้ดูแลระบบ</span>
        @elseif ($users->user_type_id == 3)
        <span class="label label-success">พนักงานเคาน์เตอร์</span>
        @elseif ($users->user_type_id == 4)
        <span class="label label-primary">ห้องครัว</span>
        @elseif ($users->user_type_id == 5)
        <span class="label label-success">พนักงานต้อนรับ</span>
        @else
        <span class="label label-warning">พนักงานเสริฟ</span>
        @endif
      </td>
      <td>{{$users->is_active}}</td>
      <td>{{$users->created_at}}</td>
      <td>{{$users->updated_at}}</td>
      <td style="align-content: center;">
        <div class="btn-group">
          <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('home.edituser',['id'=>$users->id]) }}'"><i class="fa fa-pencil-square-o"></i> แก้ไขข้อมูล</button>
          <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('home.delete',['id'=>$users->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
        </div>
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

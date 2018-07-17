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
      <th>อีเมล</th>
      <th>สถนะ</th>
      <th>status </th>
      <th>created_at</th>
      <th>updated_at</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($user as $index => $users)
      <td>{{$users->id}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>
        @if($users->user_type_id == 1)
        <span class="label label-default">ผู้ใช้ทั่วไป</span>
        @elseif ($users->user_type_id == 2)
        <span class="label label-primary">ผู้ดูแลระบบ</span>
        @elseif ($users->user_type_id == 3)
        <span class="label label-success">พนักงานเสริฟ</span>
        @else
        <span class="label label-warning">พนักงานเคาน์เตอร์</span>
        @endif
      </td>
      <td>{{$users->is_active}}</td>
      <td>{{$users->created_at}}</td>
      <td>{{$users->updated_at}}</td>
      <td style="align-content: center;">
        <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('home.edituser',['id'=>$users->id]) }}'"><i class="fa fa-pencil-square-o"></i> Edit</button>
        <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('home.delete',['id'=>$users->id]) }}'"><i class="fa fa-trash-o"></i> Delete</button>
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

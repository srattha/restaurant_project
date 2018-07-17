@extends('admin.layouts.master')
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
  <div class="col-lg-12">
    <h1 class="page-header">จัดการข้อมูลสมาชิก</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="offer offer-default">
      <div class="shape">
        <div class="shape-text">
          สมาชิก
        </div>
      </div>
      <div class="offer-content">
        <h3 class="lead">
         <button type="button" class="btn btn-success" onclick="location.href='{{ route('home.adduser') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
       </h3>
       <div class="panel panel-default">
        <div class="panel-heading">
          User
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
           <!--  <table class="table table-striped table-bordered table-hover"> -->
              <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
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
          <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
      </div>
    </div>
  </div>
</div>
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

@extends('admin.layouts.master')
@section('title','ข้อมูลติดต่อเรา')
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
  <h1 class="page-header">ข้อมูลติดต่อเรา</h1>
</div>

<div class="row">
   @if(session()->has('contact_delete'))
   <br>
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ session()->get('contact_delete') }}</strong>
  </div>
  @endif
  <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
   <thead>
    <tr>
      <th>#</th>
      <th>ชื่อ</th>
      <th>เบอร์โทร</th>
      <th>อีเมล</th>
      <th>เรื่องที่ติดต่อ</th>
      <th>ข้อความ </th>
      <th>เวลาสร้าง</th>
      <th>เวลาแก้ไข</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($contact as $index => $contacts)
      <td>{{$contacts->id}}</td>
      <td>{{$contacts->name}}</td>
      <td>{{$contacts->telephone_number}}</td>
      <td>{{$contacts->email}}</td>
      <td>{{$contacts->contact}}</td>
      <td>{{$contacts->message}}</td>
      <td>{{$contacts->created_at}}</td>
      <td>{{$contacts->updated_at}}</td>
      <td style="align-content: center;">
        <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('viewcontact.delete',['id'=>$contacts->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
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

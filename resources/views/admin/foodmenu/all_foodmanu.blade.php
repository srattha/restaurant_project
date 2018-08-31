@extends('admin.layouts.master')
@section('title','เมนูอาหาร')
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
.label-purple {
    background-color: #673AB7;
}
.label-yellow {
    background-color: #FFFF00;
}
.label-purple {
    background-color: #673AB7;
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">เมนู อาหาร</h1>
  </div>
</div>
<div class="row">
  <button type="button" class="btn btn-success" onclick="location.href='{{ route('foodmenu.add_menu') }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
</div>
<br>

<div class="row">
  <table id="dataTables-example" class="table table-striped table-bordered" style="width:100%;">
   <thead>
    <tr>
      <th>รูป</th>
      <th>ชื่อ</th>
      <th>ประเภท</th>
      <th>เมนูแนะนำ</th>
      <th>ราคา เล็ก</th>
      <th>ราคา กลาง</th>
      <th>ราคา ใหญ่</th>
      <th>status </th>
      <th>created_at</th>
      <th>updated_at</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($food_menus as $index => $food_menu)
   <tr>
     <td>
      <img src="{{ asset('storage/Food_menus/'.$food_menu->image) }}" alt="">
    </td>
    <td>{{$food_menu->food_name}}</td>
    <td>
      @if($food_menu->food_type == 1)
      <span class="label label-default">อาหารประเภท ผัด</span>
      @elseif ($food_menu->food_type == 2)
      <span class="label label-warning">อาหารประเภท ต้ม</span>
      @elseif ($food_menu->food_type == 3)
      <span class="label label-purple">อาหารประเภท ทอด</span>
      @elseif ($food_menu->food_type == 4)
      <span class="label label-info">อาหารประเภท ยำ</span>
      @elseif ($food_menu->food_type == 5)
      <span class="label label-danger">อาหารจานเดียว</span>
      @elseif ($food_menu->food_type == 6)
      <span class="label label-primary">พิซซ่า</span>
      @elseif ($food_menu->food_type == 7)
      <span class="label label-success">เครื่องดื่ม</span>
      @elseif ($food_menu->food_type == 8)
      <span class="label label-yellow">กาแฟ</span>
      @elseif ($food_menu->food_type == 9)
      <span class="label label-warning">อิตาเลี่ยนโซดา</span>
      @else
      <span class="label label-warning">เครื่องดื่ม1</span>
      @endif
    </td>
    <td>
      @if($food_menu->is_recommend == 1)
      <span class="label label-success">อาหารแนะนำ</span>
      @else

      @endif
    </td>
    <td>{{$food_menu->price}}</td>
     <td>{{$food_menu->special_price}}</td>
     <td>{{$food_menu->big_price}}</td>
    <td>{{$food_menu->is_active}}</td>
    <td>{{$food_menu->created_at}}</td>
    <td>{{$food_menu->updated_at}}</td>
    <td style="align-content: center;">
      <div class="btn-group">
        <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('foodmenu.editmanu',['id'=>$food_menu->id]) }}'"><i class="fa fa-pencil-square-o"></i> Edit</button>
        <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('foodmenu.delete',['id'=>$food_menu->id]) }}'"><i class="fa fa-trash-o"></i> Delete</button>
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

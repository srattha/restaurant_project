@extends('layouts.master')
@section('title','การสั่งของฉัน')
@section('css')
<style type="text/css">
img{
  cursor: pointer;
}
</style>
@endsection
@section('content')
<h1 style="text-align: center;">การสั่งของฉัน</h1>
@if($order->is_paid != 1)
<button type="button" class="btn btn-success" onclick="location.href='{{ route('book_food',['id'=>$reservation->id]) }}'" ><i class="fa fa-plus-circle" aria-hidden="true"></i> สั่งอาหาร </button>
@else

@endif
 <br>
 <br>
<div class="table-responsive">
 <table class="table table-striped table-bordered table-hover">
  <thead>
   <tr>
    <th>
      <h5>เวลา</h5>
   </th>
   <th>
     <h5>รายการ</h5>
   </th>
   <th>
     <h5>จำนวน</h5>
   </th>
   <!-- <th>
     <h5>ราคาต่อหน่วย</h5>
   </th> -->
   <th>
     <h5>จำนวนเงิน</h5>
   </th>
    <!-- <th>
     <h5></h5>
   </th> -->
 </tr>
</thead>
<tbody>
@foreach ($order_details as $index => $orders)
 <tr>
  <td> {{$datas}}</td>
  <td>
   @if($orders->food_detail == null)
   
   <p>{{$orders->promotion->name}}</p>
   @else
   <p>{{$orders->food_detail->food_name}}</p>
   @endif
  
 </td>
 <td>{{$orders->totalorder}}</td>
 <!--  -->
 <td>{{$orders->amount}} บาท</td>

</tr>

 @endforeach
<tr>
  <td colspan="3">
   <div style="text-align: center;">
    <h5>ยอดรวม</h5>
  </div>
</td>
<td>{{$amount}} บาท</td>
</tr>
</tbody>
</table>
 <!--  <div style="text-align: right;padding-top: 10px;">
          <button type="submit" class="btn btn-primary">
          ยืนยันการสั่ง
          </button>
        </div> -->
        <br>
</div>


@endsection
@section('javascript')
<script type="text/javascript">
 $(document).ready(function(){
   $('#date').datetimepicker({
    format: "DD-MM-YYYY",
    defaultDate: new Date()
  });
   $('#time').datetimepicker({
    format: "hh:mm ",
    defaultDate: new Date()
  });

 });


 function data_print($id, $name, $seating){

  var dining_table_id = $id;
  var name = $name;
  var seating = $seating;
  document.getElementById("name").innerHTML = name;
  document.getElementById("dining_table_id").value = dining_table_id;
  document.getElementById("seating").innerHTML = seating;
}



</script>
@endsection

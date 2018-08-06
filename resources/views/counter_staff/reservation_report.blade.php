@extends('counter_staff.master')
@section('title','รายงานการจอ')
@section('css')
@endsection
@section('content')

<div class="container page" style="padding:10px;">
 <div class="panel-group ">
  <div class="panel panel-default">
   <div class="panel-heading" style="padding: 20px 15px;">
    <div class="row">
     <div class="col-md-6">
      ตาราง รายงานการจอง
    </div>
    <div class="col-md-6" style="text-align: right;">
      <button type="button" class="btn btn-default" onclick="location.href='{{ route('counterstaff.index') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
      <button type="button" class="btn btn-default" onclick="window.print()"> <i class="fa fa-print" aria-hidden="true"></i> พิมพ์</button>
    </div>
  </div>
</div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-success">
        <div class="panel-heading">วันที่</div>
        <div class="panel-body">
          {{$datas}}
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-success">
        <div class="panel-heading">โต๊ะ</div>
        <div class="panel-body">
          {{$table_name->name}}
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-success">
        <div class="panel-heading">ชื่อ</div>
        <div class="panel-body">{{$user->name}}</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-success">
        <div class="panel-heading">เบอร์โทร</div>
        <div class="panel-body">{{$reserve_mobile}}</div>
      </div>
    </div>
  </div>
  <br>
  <div class="table-responsive">
   <table class="table table-bordered">
    <thead>
     <tr>
      <th>
       <h5>ลำดับ</h5>
     </th>
     <th>
       <h5>สิ้นค้า</h5>
     </th>
     <th>
       <h5>จำนวน</h5>
     </th>
     <th>
       <h5>ราคาต่อหน่วย</h5>
     </th>
     <th>
       <h5>จำนวนเงิน</h5>
     </th>
   </tr>
 </thead>
 <tbody>
   @foreach ($food as $index => $f)
   <tr>
    <td>{{$index+1}}</td>
    <td>
     <p>{{$f->food_detail->food_name}}</p>
   </td>
   <td>{{$f->totalorder}}</td>
   <td>{{$f->food_detail->price}}</td>
   <td>{{$f->amount}}</td>
 </tr>
 @endforeach

 <tr>
  <td colspan="4">
   <div style="text-align: center;">
    <h5>ยอดรวม</h5>
  </div>
</td>
<td>{{$amount}}</td>
</tr>
</tbody>
</table>
</div>
<div>
 <form class="form-horizontal" method="POST" action="{{ route('confirm_payment') }}">
   {{ csrf_field() }}
   @if($order != "")
   <input type="hidden" name="order" value="{{$order->id}}" />
   @endif
   <input type="hidden" name="table_id" value="{{$table_name->id}}" />
   <div class="row">
     <div class="col-md-6">
      <label class="switch">
        <!-- <input type="hidden" name="is_paid" value="1" /> -->
        <input type="checkbox" id="IsPaid"  name="is_paid"  value="1">
        <span class="slider round"></span>
      </label>
      <h3><span id="have_not_paid" class="label label-danger">ยังไม่ได้จ่าย</span>
       <span id="pay" class="label label-success" style="display: none;">จ่าย แล้ว</span>
     </h3>
   </div>
   <div class="col-md-6" style="text-align: right;">
    <button type="submit" id="submit" class="btn  btn-primary" style="display: none;"> ยืนยัน</button>
  </div>
</div>
</form>
</div>

</div>
</div>
</div>
</div>

<div class="print-page">
  <div style="text-align: center; padding: 50px;">
    <img src="/img/g1.jpg" class="img-circle" style="width: 20%;">
  </div>
  <div style="text-align: center; padding: 30px;">
    <b>ใบแจ้งรายการ</b>
  </div>
  <div style="margin-left: 145px;">
   วันที่:<span style="margin-left: 270px;"> {{$datas}}</span>
 </div>
 <div style="text-align:center;padding: 10px;">
  <b>โต๊ะ: {{$table_name->name}}</b>
</div>
<hr style="border: 1px dashed black;margin-left: 145px; margin-right: 140px;" />
<div style="margin-left: 145px;">
  <span style=" margin-left: 30px;">สิ้นค้า</span><span style=" margin-left: 335px;"> ราคา</span>
</div>
<hr style="border: 1px dashed black;margin-left: 145px; margin-right: 140px;" />
<div style="margin-left: 145px;">
  @foreach ($food as $index => $f)
  <br>{{$f->totalorder}}<span style=" margin-left: 24px;">{{$f->food_detail->food_name}}</span>
  <span style="margin-left: 343px;">80</span>
  @endforeach
</div>
<hr style="border: 1px dashed black;margin-left: 145px; margin-right: 140px;" />
<div style="margin-left: 145px;">
  <b>ยอดรวม:</b><span style="margin-left: 340px;"> {{$amount}}</span>
</div>
<div style="margin-left: 145px;">
  <b>หมายเหตุ:</b>
</div>
</div>

@endsection
@section('javascript')
<script type="text/javascript">
 $(document).ready(function(){
   $('#IsPaid').change(function() {
    if(this.checked != true){
      $("#have_not_paid").show();
      $("#pay").hide();
      $("#submit").hide();
    }
    else{
      $("#pay").show();
      $("#submit").show();
      $("#have_not_paid").hide();
      $("#submit").remove('disabled')
    }
  });
 });
</script>
@endsection



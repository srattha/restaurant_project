@extends('counter_staff.master')
@section('title','การจอง')
@section('css')
@endsection
@section('content')
<div class="container-fluid page" style="padding:10px;">
 <div class="row">
  <div style="text-align: center;">
   <script language="javascript">
    now = new Date();
    var thday = new Array ("อาทิตย์","จันทร์",
      "อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์");
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม",
      "เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน",
      "ตุลาคม","พฤศจิกายน","ธันวาคม");

    document.write("วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " +
      thmonth[now.getMonth()]+ " " + (now.getFullYear()+ 543)+ " เวลา ");
    </script>
    <script language="javascript">
     setInterval(function() {
      var d = new Date();
      document.getElementById("demo").innerHTML = d.getHours() % 24+" : "+d.getMinutes()+" : "+d.getSeconds();
    });
  </script>
  <h1 id="demo" style="display: initial;"></h1>
</div>
</div>
<br>
<div class="panel-group">
  <div class="panel panel-default">
   <div class="panel-heading" style="padding: 20px 15px;">
    <div class="row">
     <div class="col-md-6">
       รายการ จอง
     </div>

     <div class="col-md-6" style="text-align: right;">
      <button type="button" class="btn btn-default" onclick="location.href='{{ route('counterstaff.index') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
    </div>
  </div>
</div>

<div class="panel-body">
 @if(session()->has('update_table'))
 <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>{{ session()->get('update_table') }}</strong>
</div>
@endif
<table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
 <thead>
  <tr>
    <th>#</th>
    <th>โต๊ะ</th>
    <th>ลูกค้าที่จอง</th>
    <th>วันที่จอง</th>
    <th>เบอร์ติดต่อ </th>
    <th class="text-center">ยกเลิกการจอง</th>
  </tr>
</thead>
<tbody>
 @foreach ($reservation as $index => $reservations)
 <tr>
  <td>{{$index+1}}</td>
  @foreach($reservations->dining_table as $dining_tables)
  <td>{{$dining_tables->name}}</td>
  @endforeach
  @foreach($reservations->user as $u)
  <td>{{$u->name}}</td>
  @endforeach
  <td>{{$reservations->reserve_date}}</td>
  <td>{{$reservations->reserve_mobile}}</td>
  <td style="text-align: center;">
    <form class="form-horizontal" method="POST" action="{{ route('confirm_reservation.update') }}">
     {{ csrf_field() }}
     <input type='hidden'  name="reservations_id"  value="{{$reservations->id}}">
     <input type='hidden'  name="dining_tables_id" value="{{$dining_tables->id}}">
     <button class="btn btn-success" type="submit">
      <i class="fa fa-check" aria-hidden="true"></i> ยกเลิกการจอง
    </button>

  </form>

          <!--   <button type="button" class="btn btn btn-success"
            onclick="if(confirm('คุณแน่ใจหรือไม่ ?')) window.location.href = '{{ route('confirm_reservation.update',['id'=>$dining_tables->id]) }}'"><i class="fa fa-check" aria-hidden="true"></i> ยืนยันสถานะ</button></td> -->
          </tr>
          @endforeach
        </tbody>
      </table>

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





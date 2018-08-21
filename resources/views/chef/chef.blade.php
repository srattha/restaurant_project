@extends('counter_staff.master')
@section('title','ครัว')
@section('css')
<style type="text/css">
.card {
  background: #fff;
  display: inline-block;
  border: 1px solid #ddd;
}

.image {
  float: left;
  background: #000;
  width: 25%;
  height: 150px
}

.content {
  float: left;
  height: 140px;
  width: 73%;
  overflow: hidden;
  padding: 5px;
}

.content h4 {
  margin: 5px 0;
}
</style>
@endsection
@section('content')
<div class="container" style="padding:10px;">
  <div class="row">
    <div style="text-align: center;">
     <script language="javascript">
      now = new Date();
      var thday = new Array ("อาทิตย์","จันทร์",
        "อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์");
      var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม",
        "เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน",
        "ตุลาคม","พฤศจิกายน","ธันวาคม");
      d = Date.now();
      d = new Date(d);
      d = (d.getHours() > 12 ? d.getHours() - 12 : d.getHours())+':'+d.getMinutes()+' '+(d.getHours() >= 12 ? "PM" : "AM");
      document.write("วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " +
        thmonth[now.getMonth()]+ " " + (now.getFullYear()+ 543) + " เวลา " + (d));
      </script>
      <h1 align="center">รายการอาหาร</h1>
      <hr width=18% size=50px color=ff0088>
    </div>
  </div>

  <div class="row">
    @foreach ($table as $index => $val)
    <div class="panel panel-default">
      <div class="panel-heading">{{$val->name}}
      </div>
      <div class="panel-body">
       <div class="row">
        <table class="table" style="margin: 0px;">
          <tr>
            <th>รูป</th>
            <th>อาหาร</th>
            <th>จำนวน</th>
            <th>เวลา</th>
            <th>ยืนยัน</th>
          </tr>
         @foreach ($val->reservation as $index2 => $val2)
         @foreach ($val2->order as $index3 => $val3)
         @foreach ($val3->order_details as $index4 => $val4)
         @foreach ($val4->food_details as $index5 => $val5)
         <tr>
           <td style="width: 100px;"><img src="{{ asset('storage/Food_menus/'.$val5->image) }}" alt="" style="width: 50px;height: 50px;"></td>
           <td>{{$val5->food_name}}</td>
           <td>{{$val4->totalorder}}</td>
           <td>{{$val3->orde_date}} .น</td>
           <td>
            @if($val4->is_cook == 0)
             <button type="button" class="btn btn-success" onclick="if(confirm('ยืนยัน หรือไม่')) window.location.href = '{{ route('chef_update_is_cook',['id'=>$val4->id]) }}'">ยืนยัน</button></td>
             @else
             <h3><span class="label label-default">ทำแล้ว</span></h3>
             @endif


         </tr>
         @endforeach
         @endforeach
         @endforeach
         @endforeach
       </table>

     </div>


     </div>
   </div>
   @endforeach
 </div>


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
  setTimeout("location.href = '/chef';",50000);
</script>
@endsection




@extends('counter_staff.master')
@section('title','สถนะ โต๊ะ')
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
  <p id="demo" style="display: initial;"></p>
</div>
</div>
<br>
<div class="panel-group">
  <div class="panel panel-default">
   <div class="panel-heading" style="padding: 20px 15px;">
    <div class="row">
     <div class="col-md-1">
      สถนะ โต๊ะ
    </div>
    <div class="col-md-4">
      <form class="form-horizontal" method="POST" action="{{ route('counterstaff.index') }}">
       {{ csrf_field() }}
       <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search">
        <div class="input-group-btn">
         <button class="btn btn-default" type="submit">
           <i class="glyphicon glyphicon-search"></i>
         </button>
       </div>
     </div>
   </form>
 </div>
 <div class="col-md-7" style="text-align: right;">
  <button type="button" class="btn btn-danger" onclick="location.href='{{ route('counterstaff.new_reservation') }}'">ตารางการจอง</button>
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

@foreach ($dining_table as $index => $dining_tables)
@if($dining_tables == "")
ไม่มีข้อมูล
@else
<div class="col-xs-12 col-sm-6 col-md-4 col-lg4">

  <div class="offer offer-radius offer-{{$dining_tables->color}}">
   <div class="shape" style="border-width: 0 70px 50px 0;">
    <div class="shape-text">
     @if($dining_tables->status == 1)
     <i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>
     @else
     <i class="fa fa-window-close fa-2x" aria-hidden="true"></i>
     @endif
   </div>
 </div>
 <div class="offer-content">
  <h3 class="lead">
   <span class="label label-{{$dining_tables->color}}">
     @if($dining_tables->status == 1)
     ว่าง
     @else
     ไม่ว่าง
     @endif
   </span>
 </h3>
 <p style="text-align: center;">
   <img src="/assets/img/interview.png">
 </p>
 <p>โต๊ะ: {{$dining_tables-> name}}</p>
 <p>จำนวนที่นั่ง: {{$dining_tables->seating}}</p>
 <!-- <p>รายการอาหาร</p> -->
 <div>
   @if($dining_tables->status == 1)
   <button type="button" class="btn btn-{{$dining_tables->color}} btn-block"  data-toggle="modal" data-target="#reservations" onclick="data_print('{{$dining_tables->id}}', '{{$dining_tables->name}}', '{{$dining_tables->seating}}')" >จอง</button>
   <!-- <button type="button" class="btn btn-{{$dining_tables->color}} btn-block" onclick="location.href='{{ route('reservation_food',['id'=>$dining_tables->id]) }}'">จอง</button> -->
   @else
   <button type="button" class="btn btn-{{$dining_tables->color}} btn-block" onclick="location.href='{{ route('reservation_report',['id'=>$dining_tables->id]) }}'">ยืนยันสถานะ</button>
   @endif
 </div>
</div>
</div>
</div>
@endif
@endforeach
{{ $dining_table->links() }}

<div id="reservations" class="modal fade" role="dialog">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="name"></span> จำนวน <span id="seating"></span> ที่ </h4>
  </div>
  <div class="modal-body">
    <h2> จองโดย: {{$user}}</h2>
    <div style="padding-top: 10px;">
     <form class="form-horizontal" method="POST" action="{{ route('counterstaff.reservation') }}">
      {{ csrf_field() }}

      <input type='hidden'  name="dining_table_id" id="dining_table_id" value="dining_table_id">
      <div class="form-group">
       <div class="col-sm-6">
        <label><b>วันที่ </b></label>
        <div id="start">
         <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
          <input type='text'  name="reserve_date" id="date"  class="form-control first_login"  />
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <label><b>เวลา </b></label>
      <div id="start">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
        <input type='text'  name="time" id="time"  class="form-control first_login"  />
      </div>
    </div>
  </div>
</div>
<div>
 <label><b>เบอร์โทร ติดต่อ </b></label>
 <div id="start">
  <div class="input-group">
   <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
   <input type='number'  name="reserve_mobile" id="time"  class="form-control first_login"  / required="">
 </div>
</div>
</div>
<div class="modal-footer">
 <button type="submit" class="btn btn-primary swa-confirm"> ตกลง</button>
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- </div> -->
         <!-- </div>
         -->
       </div>
       <div class="print-page">
         dddd
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

           $(".image-checkbox").each(function () {

            if ($(this).find('input[type="checkbox"]').first().attr("checked")) {

              $(this).addClass('image-checkbox-checked');

            }
            else {


              $(this).removeClass('image-checkbox-checked');
            }
          });


           $(".image-checkbox").on("click", function (e) {
            $(this).toggleClass('image-checkbox-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop("checked",!$checkbox.prop("checked"))
            console.log(!$checkbox.prop("checked"))
            if (!$checkbox.prop("checked")) {
             $("#totalorder").hide();
           }else{
            $("#totalorder").show();
          }
          e.preventDefault();
        });





         });


         function submitForm() {
          swal("Here's a message!");
        }
        function data_print($id, $name, $seating){

          var dining_table_id = $id;
          var name = $name;
          var seating = $seating;
          console.log(dining_table_id)
          document.getElementById("name").innerHTML = name;
          document.getElementById("dining_table_id").value = dining_table_id;
          document.getElementById("seating").innerHTML = seating;
        }
      </script>
      @endsection




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

  <div class="col-md-12">
    <div class="card">
     <img class="image" src="/img/d1.jpg">
        <!--<div class="image pull-left">
        </div> -->
        <div class="content pull-left">
          <div class="col-md-6">
            <h4>โต๊ะ</h4>
            <div class="col-md-6">เมนู</div>
            <div class="col-md-6">จำนวน</div>
          </div>
          <div class="col-md-6" style="text-align: right;    margin-top: 100px;">
            <button class="btn btn-success btn-read">
             ยืนยัน
            </button>
          </div>
      </div>

      <div class="clearfix">
      </div>
    </div>
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
 // setTimeout("location.href = '/chef';",5500);
</script>
@endsection




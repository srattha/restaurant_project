@extends('counter_staff.master')
@section('title','สถนะ โต๊ะ')
@section('css')
<style type="text/css">
img{
  cursor: pointer;
}
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
.tadel-center {
    text-align: center;
    font-size: 2ex;
}

.content h4 {
  margin: 5px 0;
</style>
@endsection
@section('content')

<div class="container">
  <br>
  <br>
  <div class="row">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu">สถานะโต๊ะ</a></li>
      <li><a data-toggle="tab" href="#menu1">รายการอาหาร</a></li>
    </ul>

  
  <div class="tab-content">
    <div id="menu" class="tab-pane fade in active">
      <div class="row">
    <h1 style="text-align: center;">สถานะโต๊ะ</h1>
    <div class="row" style="padding: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="offer offer-default">
                        <div class="offer-content">
                            <div class="row">
                                <div class="text-center">
                                    <br>
                                    <h4>โซนหน้าร้าน</h4></div>
                                    <br>
                                    @foreach ($table_status_b as $index => $table_statu)
                                    @if($table_statu->status == 1)
                                    <div class="tadel-center">
                                        <img src="img/sofa1.png" class="img-thumbnail img-responsive" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                    </div>
                                    <div class="tadel-center">
                                        {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง 
                                    </div>
                                        @else
                                    
                                    <div class="tadel-center">
                                        <img src="img/sofa.png" class="img-thumbnail img-responsive" alt="Cinque Terre" width="100">
                                    </div>
                                    <div class="tadel-center">
                                        {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง
                                    </div>
                                         @endif
                                    

                                    @endforeach


                                    @foreach ($table_status_c as $index => $table_statu)
                                    <div>
                                        @if($table_statu->status == 1)
                                        <div class="tadel-center">
                                            <img src="img/sofa1.png" class="img-thumbnail img-responsive" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                        </div>
                                        <div class="tadel-center">
                                            {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง 
                                            </div>
                                            @else
                                        
                                        <div class="tadel-center">
                                            <img src="img/sofa.png" class="img-thumbnail img-responsive" alt="Cinque Terre" width="100" data-color="violet" alt="Third Image">
                                        </div>
                                        <div class="tadel-center">
                                        {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง 
                                    </div>
                                        @endif
                                    </div>
                                    @endforeach 
                                    @foreach ($table_status_d as $index => $table_statu)
                                    <div>
                                        @if($table_statu->status == 1)
                                        <div class="tadel-center">
                                            <img src="img/sofa1.png" data-color="violet" alt="Third Image" class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                        </div>
                                        <div class="tadel-center">
                                            {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง
                                        </div>

                                        @else
                                        <div class="tadel-center">
                                            <img src="img/sofa.png" data-color="violet" alt="Third Image" class="img-thumbnail" alt="Cinque Terre" width="100">
                                        </div>
                                        <div class="tadel-center">
                                            {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง 
                                            </div>
                                            @endif
                                        

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="offer offer-default">
                            <div class="picture">
                                <!-- <div class="shape"> -->
                                    <div class="shape-text">
                                    </div>
                                    <!--  </div> -->
                                    <div class="offer-content">
                                        <div class="row">
                                            <br>
                                            <div class="tadel-center">
                                                <h4>โซนห้องแอร์</h4></div>
                                                <br> @foreach ($table_status_a as $index => $table_statu)
                                                <div class=" col-md-3 col-xs-4">
                                                    @if($table_statu->status == 1)
                                                    <div class="tadel-center">
                                                        <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                                    </div>
                                                    <div class="tadel-center">
                                                        {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง
                                                    </div>

                                                    @else
                                                    <div class="tadel-center">
                                                        <img src="img/sofa.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100">
                                                    </div>
                                                    <div class="tadel-center">
                                                        {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง
                                                    </div>

                                                    @endif
                                                </div>

                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="offer offer-default">
                                    <div class="offer-content">
                                        <div class="row">
                                            <br>
                                            <div class="text-center">
                                                <h4>โซนหน้าร้าน</h4></div>
                                                <br>
                                                <div class="col-md-1"> </div>
                                                @foreach ($table_status_e as $index => $table_statu)
                                                <div class="col-md-2 col-xs-6">
                                                    @if($table_statu->status == 1)
                                                    <div class="center">
                                                        <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @else
                                                    <div class="center">
                                                        <img src="img/sofa.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @endif
                                                </div>

                                                @endforeach @foreach ($table_status_f as $index => $table_statu)
                                                <div class=" col-md-2 col-xs-6">
                                                    @if($table_statu->status == 1)
                                                    <div class="center">
                                                        <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100" alt="Third Image" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @else
                                                    <div class="center">
                                                        <img src="img/sofa.png" data-color="violet" class="img-thumbnail" width="100" alt="Third Image">
                                                    </div>
                                                    @endif
                                                </div>
                                                @endforeach @foreach ($table_status_g as $index => $table_statu)
                                                <div class=" col-md-2 col-xs-6">
                                                    @if($table_statu->status == 1)
                                                    <div class="center">
                                                        <img src="img/sofa1.png" data-color="violet" alt="Third Image" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @else
                                                    <div class="center">
                                                        <img src="img/sofa.png" data-color="violet" alt="Third Image" class="img-thumbnail" width="100">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @endif

                                                </div>

                                                @endforeach @foreach ($table_status_h as $index => $table_statu)
                                                <div class=" col-md-2 col-xs-6">
                                                    @if($table_statu->status == 1)
                                                    <div class="center">
                                                        <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @else
                                                    <div class="center">
                                                        <img src="img/sofa.png" data-color="violet" alt="Third Image" class="img-thumbnail" width="100">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @endif

                                                </div>

                                                @endforeach @foreach ($table_status_i as $index => $table_statu)
                                                <div class=" col-md-2 col-xs-6">
                                                    @if($table_statu->status == 1)
                                                    <div class="center">
                                                        <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @else
                                                    <div class="center">
                                                        <img src="img/sofa.png" data-color="violet" alt="Third Image" class="img-thumbnail" width="100">
                                                    </div>
                                                    {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @endif

                                                </div>

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="offer offer-default">
                                        <div class="offer-content">
                                            <div class="row">
                                                <br>
                                                <div class="text-center">
                                                    <h4>โซนสนามหญ้า</h4></div>
                                                    <div class="col-md-6">
                                                        <br> @foreach ($table_status_k as $index => $table_statu)
                                                        <div class=" col-md-4 col-xs-4">
                                                            @if($table_statu->status == 1)
                                                            <div class="tadel-center">
                                                                <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                                                            </div>
                                                            <div class="tadel-center">
                                                                {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @else
                                                            </div>
                                                            <div class="tadel-center">
                                                                <img src="img/sofa.png" data-color="violet" class="img-thumbnail" width="100">
                                                            </div>
                                                            <div class="tadel-center">
                                                                {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง @endif
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2 col-xs-6">
                                     <div class="tadel-center">
                                        <img src="img/sofa1.png" class="img-thumbnail" alt="Cinque Terre" width="100">
                                    </div>
                                    <div class="tadel-center">
                                        <b>ว่าง</b>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <div class="tadel-center">
                                        <img src="img/sofa.png" class="img-thumbnail" alt="Cinque Terre" width="100">
                                    </div>
                                    <div class="tadel-center">
                                        <b>ไม่ว่าง</b>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="center">
                                        <h5>หมายเหตุ: จองแล้วต้องมาถึงภายในครึ่งชั่วโมง หากเกินครึ่งชั่วโมงหลังการจองระบบจะถือว่าสละสิทธิ์</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




</div>
<div id="menu1" class="tab-pane fade">
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
              <th>สถานะ</th>
            </tr>
            @foreach ($val->reservation as $index2 => $val2)
            @foreach ($val2->order as $index3 => $val3)
            @foreach ($val3->order_details as $index4 => $val4)
            @if($val4->food_id == null)
            @foreach ($val4->promotion as $index5 => $val5)
            <tr>
             <td style="width: 100px;"><img src="{{ asset('storage/Food_menus/'.$val5->image) }}" alt="" style="width: 50px;height: 50px;"></td>
             <td>{{$val5->name}}</td>
             <td>{{$val4->totalorder}}</td>
             <td>{{$val3->orde_date}} .น</td>
             <td>
              @if($val4->is_cook == 0)
              <h3><span class="label label-warning">รอทำ</span></h3>
              @else
              <h3><span class="label label-success">ทำแล้ว</span></h3>
              @endif
            </tr>
            @endforeach
            @else
             @foreach ($val4->food_details as $index5 => $val5)
            <tr>
             <td style="width: 100px;"><img src="{{ asset('storage/Food_menus/'.$val5->image) }}" alt="" style="width: 50px;height: 50px;"></td>
             <td>{{$val5->food_name}}</td>
             <td>{{$val4->totalorder}}</td>
             <td>{{$val3->orde_date}} .น</td>
             <td>
              @if($val4->is_cook == 0)
              <h3><span class="label label-warning">รอทำ</span></h3>
              @else
              <h3><span class="label label-success">ทำแล้ว</span></h3>
              @endif
            </tr>
            @endforeach
            @endif

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

 });

 function data_print($id, $name, $seating){

  var dining_table_id = $id;
  var name = $name;
  var seating = $seating;
  document.getElementById("name").innerHTML = name;
  document.getElementById("dining_table_id").value = dining_table_id;
  document.getElementById("seating").innerHTML = seating;
}

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
//setTimeout("location.href = '/chef';",50000);

</script>
@endsection 





<!-- -->





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

.content h4 {
  margin: 5px 0;
</style>
@endsection
@section('content')
<div class="tabbable">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu">รายการอาหาร</a></li>
      <li><a data-toggle="tab" href="#menu1">สถานะโต๊ะ</a></li>
      </ul>
 <div class="tab-content">
   <div id="menu" class="tab-pane fade in active">
       <br>
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
         @foreach ($val4->food_details as $index5 => $val5)
         <tr>
           <td style="width: 100px;"><img src="{{ asset('storage/Food_menus/'.$val5->image) }}" alt="" style="width: 50px;height: 50px;"></td>
           <td>{{$val5->food_name}}</td>
           <td>{{$val4->totalorder}}</td>
           <td>{{$val3->orde_date}} .น</td>
           <td>
            @if($val4->is_cook == 0)
             <button type="button" class="btn btn-success" onclick="if(confirm('ยืนยัน หรือไม่')) window.location.href = '{{ route('chef_update_is_cook',['id'=>$val4->id]) }}'">สถานะ</button></td>
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


 </div>
 </div>      





<!-- <div class="container-fluid page" style="padding:10px;">
 <div class="panel-group">
  <div class="panel panel-default">
   <div class="panel-heading" style="padding: 20px 15px;">
    <div class="row">
     <div class="col-md-1">
      สถนะ โต๊ะ
    </div>
    <div class="col-md-4">


    </div>
  </div>
</div>

<div class="panel-body">
  <div class="row" style="padding: 1px;">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="offer offer-default">
            <div class="offer-content">
              <div class="row">
                <br>
                <div class="col-md-10 col-xs-6">
                  @if($table_status_b->status == 1)
                  <div class="center">
                    <img src="img/sofa1.png"  class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations"
                    onclick="data_print('{{$table_status_b->id}}', '{{$table_status_b->name}}', '{{$table_status_b->seating}}')">
                  </div>
                  {{$table_status_b->name}}
                  จำนวน {{$table_status_b->seating}} ที่นั่ง
                  @else
                  <div class="center">
                    <img src="img/sofa.png"  class="img-thumbnail" alt="Cinque Terre" width="100">
                  </div>
                  {{$table_status_b->name}}
                  จำนวน {{$table_status_b->seating}} ที่นั่ง
                  @endif
                </div>

                @foreach ($table_status_c as $index => $table_statu)
                <div class=" col-md-10">
                  @if($table_statu->status == 1)
                  <div class="center">
                    <img src="img/sofa1.png"  class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                  </div>
                  {{$table_statu->name}}
                  จำนวน {{$table_statu->seating}} ที่นั่ง
                  @else
                  <div class="center">
                    <img src="img/sofa.png"  class="img-thumbnail" alt="Cinque Terre" width="100" data-color="violet" alt="Third Image">
                  </div>
                  {{$table_statu->name}}
                  จำนวน {{$table_statu->seating}} ที่นั่ง
                  @endif
                </div>
                @endforeach

                @foreach ($table_status_d as $index => $table_statu)
                <div class=" col-md-10">
                  @if($table_statu->status == 1)
                  <div class="center">
                    <img src="img/sofa1.png" data-color="violet" alt="Third Image"  class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations"
                    onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                  </div>
                  {{$table_statu->name}}
                  จำนวน {{$table_statu->seating}} ที่นั่ง
                  @else
                  <div class="center">
                    <img src="img/sofa.png" data-color="violet" alt="Third Image"   class="img-thumbnail" alt="Cinque Terre" width="100">  {{$table_statu->name}}
                  </div>
                  {{$table_statu->name}}
                  จำนวน {{$table_statu->seating}} ที่นั่ง
                  @endif
                </div>

                @endforeach

              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-9 col-lg-9">
          <div class="offer offer-default">
            <div class="picture">
              <!-- <div class="shape"> -->
                <div class="shape-text">
                </div>
                <!--  </div> -->
                <div class="offer-content">
                  <div class="row">
                    <br>
                    @foreach ($table_status_a as $index => $table_statu)
                    <div class=" col-md-3">
                      @if($table_statu->status == 1)
                      <div class="center">
                        <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                      </div>
                      {{$table_statu->name}}
                      จำนวน {{$table_statu->seating}} ที่นั่ง
                      @else
                      <div class="center">
                        <img src="img/sofa.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100">
                      </div>
                      {{$table_statu->name}}
                      จำนวน {{$table_statu->seating}} ที่นั่ง
                      @endif
                    </div>

                    @endforeach

                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="offer offer-default">
              <div class="offer-content">
                <div class="row">
                  <br>
                  <div class="col-md-1"> </div>
                  @foreach ($table_status_e as $index => $table_statu)
                  <div class="col-md-2">
                    @if($table_statu->status == 1)
                    <div class="center">
                      <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100" data-toggle="modal" data-target="#reservations"
                      onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                    </div>
                    {{$table_statu->name}}
                    จำนวน {{$table_statu->seating}} ที่นั่ง
                    @else
                    <div class="center">
                      <img src="img/sofa.png" data-color="violet" class="img-thumbnail" alt="Cinque Terre" width="100">
                    </div>
                    {{$table_statu->name}}
                    จำนวน {{$table_statu->seating}} ที่นั่ง
                    @endif
                  </div>

                  @endforeach

                  @foreach ($table_status_f as $index => $table_statu)
                  <div class=" col-md-2">
                    @if($table_statu->status == 1)
                    <div class="center">
                      <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100"  alt="Third Image" data-toggle="modal" data-target="#reservations"
                      onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')" >
                    </div>
                    {{$table_statu->name}}
                    จำนวน {{$table_statu->seating}} ที่นั่ง
                    @else
                    <div class="center">
                      <img src="img/sofa.png" data-color="violet" class="img-thumbnail" width="100" alt="Third Image" >
                    </div>
                    @endif
                  </div>
                  @endforeach

                  @foreach ($table_status_g as $index => $table_statu)
                  <div class=" col-md-2">
                    @if($table_statu->status == 1)
                    <div class="center">
                      <img src="img/sofa1.png" data-color="violet" alt="Third Image" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations"
                      onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                    </div>
                    {{$table_statu->name}}
                    จำนวน {{$table_statu->seating}} ที่นั่ง
                    @else
                    <div class="center">
                      <img src="img/sofa.png" data-color="violet" alt="Third Image"  class="img-thumbnail" width="100">
                    </div>
                    {{$table_statu->name}}
                    จำนวน {{$table_statu->seating}} ที่นั่ง
                    @endif

                  </div>

                  @endforeach

                  @foreach ($table_status_h as $index => $table_statu)
                  <div class=" col-md-2">
                    @if($table_statu->status == 1)
                    <div class="center">
                      <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations"
                      onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                    </div>
                    {{$table_statu->name}}
                    จำนวน {{$table_statu->seating}} ที่นั่ง
                    @else
                    <div class="center">
                      <img src="img/sofa.png" data-color="violet" alt="Third Image" class="img-thumbnail" width="100">
                    </div>
                    {{$table_statu->name}}
                    จำนวน {{$table_statu->seating}} ที่นั่ง
                    @endif

                  </div>

                  @endforeach

                  @foreach ($table_status_i as $index => $table_statu)
                  <div class=" col-md-2">
                    @if($table_statu->status == 1)
                    <div class="center">
                      <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations"
                      onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                    </div>
                    {{$table_statu->name}} จำนวน {{$table_statu->seating}} ที่นั่ง

                    @else
                    <div class="center">
                      <img src="img/sofa.png" data-color="violet" alt="Third Image" class="img-thumbnail" width="100">
                    </div>
                    {{$table_statu->name}} จำนวน {{$table_statu->seating}} ที่นั่ง

                    @endif

                  </div>

                  @endforeach

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="offer offer-default">
              <div class="offer-content">
                <div class="row">
                  <div class="col-md-6">
                    <br>
                    @foreach ($table_status_k as $index => $table_statu)
                    <div class=" col-md-4">
                      @if($table_statu->status == 1)
                      <div class="center">
                        <img src="img/sofa1.png" data-color="violet" class="img-thumbnail" width="100" data-toggle="modal" data-target="#reservations"
                        onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')">
                      </div>
                      {{$table_statu->name}}
                      จำนวน {{$table_statu->seating}} ที่นั่ง
                      @else
                      <div class="center">
                        <img src="img/sofa.png" data-color="violet" class="img-thumbnail" width="100">
                      </div>
                      {{$table_statu->name}}
                      จำนวน {{$table_statu->seating}} ที่นั่ง
                      @endif
                    </div>
                    @endforeach
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-2">
              <div class="center">
                <img src="img/sofa1.png" class="img-thumbnail" alt="Cinque Terre" width="100">
              </div>
              <b>ว่าง</b>
            </div>
            <div class="col-md-2">
              <div class="center">
                <img src="img/sofa.png" class="img-thumbnail" alt="Cinque Terre" width="100">
              </div>
              <b>ไม่ว่าง</b>
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



</script>
@endsection -->





@extends('layouts.master') 
@section('title','สถานะโต๊ะ')
 @section('css')
<style type="text/css">
img {
    cursor: pointer;
}

.tadel-center {
    text-align: center;
    font-size: 2ex;
}
</style>
@endsection
 @section('content')
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
                                                                {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง 
                                                                </div>
                                                                @else
                                                            
                                                            <div class="tadel-center">
                                                                <img src="img/sofa.png" data-color="violet" class="img-thumbnail" width="100">
                                                            </div>
                                                            <div class="tadel-center">
                                                                {{$table_statu->name}} {{$table_statu->seating}} ที่นั่ง 
                                                            </div>

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
                <br>
                <br>

                <div id="reservations" class="modal fade" role="dialog">

                    @if(Auth::user())
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><span id="name"></span>  <span id="seating"></span> ที่ </h4>
                            </div>
                            <div class="modal-body">

                                <div style="padding-top: 10px;">
                                    <form class="form-horizontal" method="POST" action="{{ route('booktable') }}">
                                        {{ csrf_field() }}

                                        <input type='hidden' name="dining_table_id" id="dining_table_id" value="dining_table_id">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label><b>วันที่ </b></label>
                                                <div id="start">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type='text' name="reserve_date" id="date" class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label><b>เวลา </b></label>
                                                <div id="start">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type='text' name="time" id="time" class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label><b>เบอร์โทร ติดต่อ </b></label> <span style="color: red">*โปรดกรอกหมายเลขโทรศัพท์ 10 หลัก ด้วยรูปแบบดังนี้ 08X-XXX-XXXX *</span>
                                            <div id="start">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                                    <input type="tel" name="reserve_mobile" pattern="^\d{3}-\d{3}-\d{4}$" class="form-control first_login" required="required" title="โปรดกรอกหมายเลขโทรศัพท์ 10 หลัก ด้วยรูปแบบดังนี้ 08X-XXX-XXXX" oninvalid="this.setCustomValidity('โปรดกรอกหมายเลขโทรศัพท์')" onvalid="this.setCustomValidity('')">
                                                    <!-- <input type='number'  maxlength="10" name="reserve_mobile" class="form-control first_login"  / required="">  -->

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

                    @else
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">กรุณาเข้าสู่ระบบก่อน</h4>
                            </div>
                            <div class="modal-body">
                                <di v class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary btn-block" onclick="location.href='{{ route('login') }}'">เข้าสู่ระบบ
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-success btn-block" onclick="location.href='{{ route('register') }}'">ลงทะเบียนใช้งาน</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    @endif

                </div>

                @endsection @section('javascript')
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#date').datetimepicker({
                            format: "DD-MM-YYYY",
                            defaultDate: new Date()
                        });
                        $('#time').datetimepicker({
                            format: "HH:mm",
                            defaultDate: new Date()
                        });

                    });

                    function data_print($id, $name, $seating) {

                        var dining_table_id = $id;
                        var name = $name;
                        var seating = $seating;
                        document.getElementById("name").innerHTML = name;
                        document.getElementById("dining_table_id").value = dining_table_id;
                        document.getElementById("seating").innerHTML = seating;
                    }
                </script>
                @endsection
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="/img/g1.jpg" />
    <title>สั่งอาหาร</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{ asset('/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="{{ asset('/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{ asset('/vendor/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- styel Css -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrapdatapicker/bootstrapdatetimepicker.min.js') }}"></script>

    @yield('css')
    <style type="text/css">
        a {
            color: #333333;
            text-decoration: none;
        }

        body {
            font-family: 'Sriracha', cursive;
        }
        /*  #overlay{
     position:fixed;
     z-index:99999;
     top:0;
     left:0;
     bottom:0;
     right:0;
     background:#f5f5f7;
     transition: 1s 0.4s;
   }
   #progress{
     height:5px;
     background:#333333;
     position:absolute;
     width:0;
     top:50%;
   }
   #progstat{
     font-size:24px;
     letter-spacing: 3px;
     position:absolute;
     top:50%;
     margin-top:-40px;
     width:100%;
     text-align:center;
     color:#333333;
   }
   */

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #F44336;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #5cb85c;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
        /* Rounded sliders */

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .print-page {
            display: none;
        }

        @media print {
            .print-page {
                display: block;
            }
            table,
            td,
            th {
                border: none;
            }
            table {
                border-collapse: none;
                width: 100%;
            }
            th {
                height: 50px;
            }
            .page {
                display: none;
            }
        }
    </style>
    <style type="text/css">
        .nopad {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        /*image gallery*/

        .image-checkbox {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }

        .image-checkbox input[type="checkbox"] {
            display: none;
        }

        .image-checkbox-checked {
            border-color: #4783B0;
        }

        .image-checkbox .fa {
            position: absolute;
            color: #ffffff;
            background-color: rgba(0, 0, 0, .5);
            padding: 10px;
            top: 0;
            right: 0;
        }

        .image-checkbox-checked .fa {
            display: block !important;
        }
        /* button {
        margin: 4px;
        cursor: pointer;
        }*/

        .qty {
            text-align: center;
            width: 40px;
            /* margin: 4px;*/
            color: #333;
        }

        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.5);
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all .4s linear;
            transition: all .4s linear;
        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            background: rgba(0, 0, 0, 0.6);
            -webkit-transform: translatey(-100px);
            -ms-transform: translatey(-100px);
            transform: translatey(-100px);
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            padding: 10px;
        }

        .hovereffect a.info {
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            background-color: transparent;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            margin: 50px 0 0;
            padding: 7px 14px;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect:hover img {
            -ms-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .hovereffect:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .hovereffect:hover h2,
        .hovereffect:hover a.info {
            opacity: 1;
            filter: alpha(opacity=100);
            -ms-transform: translatey(0);
            -webkit-transform: translatey(0);
            transform: translatey(0);
        }

        .hovereffect:hover a.info {
            -webkit-transition-delay: .2s;
            transition-delay: .2s;
        }

        #overlay {
            position: fixed;
            z-index: 999;
            height: 2em;
            width: 2em;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }
        /* Transparent Overlay */

        #overlay:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }
        /* :not(:required) hides these rules from IE9 and below */

        #overlay:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        #overlay:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 1500ms infinite linear;
            -moz-animation: spinner 1500ms infinite linear;
            -ms-animation: spinner 1500ms infinite linear;
            -o-animation: spinner 1500ms infinite linear;
            animation: spinner 1500ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
        }
        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .clock-button {
            background-color: blueviolet;
            padding: 0.5em;
            color: white;
        }

        .clock-placement {
            position: fixed;
            /* Fixed/sticky position */
            top: 20px;
            /* Place the button at the top of the page */
            right: 30px;
            /* Place the button 30px from the right */
            z-index: 99;
            /* Make sure it does not overlap */
        }

        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.5);
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all .4s linear;
            transition: all .4s linear;
        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            background: rgba(0, 0, 0, 0.6);
            -webkit-transform: translatey(-100px);
            -ms-transform: translatey(-100px);
            transform: translatey(-100px);
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            padding: 10px;
        }

        .hovereffect a.info {
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            background-color: transparent;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            margin: 50px 0 0;
            padding: 7px 14px;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect:hover img {
            -ms-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .hovereffect:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .hovereffect:hover h2,
        .hovereffect:hover a.info {
            opacity: 1;
            filter: alpha(opacity=100);
            -ms-transform: translatey(0);
            -webkit-transform: translatey(0);
            transform: translatey(0);
        }

        .hovereffect:hover a.info {
            -webkit-transition-delay: .2s;
            transition-delay: .2s;
        }

        .qty {
            text-align: center;
            width: 40px;
            /* margin: 4px;*/
            color: #333;
        }

        a {
            cursor: pointer;
        }

        .panel-warning {
            border-color: #323232;
        }

        .panel-warning>.panel-heading {
            color: rgba(255, 255, 255, 0.9);
            background-color: #323232;
            border-color: #323232;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: rgb(255, 255, 255);
            cursor: default;
            background-color: #555;
            border: 1px solid rgba(0, 0, 0, 0.75);
            border-bottom-color: transparent;
        }
    </style>
    <script type="text/javascript">
        (function() {

            function id(v) {
                return document.getElementById(v);
            }

            function loadbar() {
                var ovrl = id("overlay"),
                    prog = id("progress"),
                    stat = id("progstat"),
                    img = document.images,
                    c = 0,
                    tot = img.length;
                if (tot == 0) return doneLoading();

                function imgLoaded() {
                    c += 1;
                    var perc = ((100 / tot * c) << 0) + "%";
                    prog.style.width = perc;
                    stat.innerHTML = "Loading " + perc;
                    if (c === tot) return doneLoading();
                }

                function doneLoading() {
                    ovrl.style.opacity = 0;
                    setTimeout(function() {
                        $('.sidebar-category').fadeIn();
                        $('.navbar-right').fadeIn();
                    }, 300);

                    setTimeout(function() {
                        ovrl.style.display = "none";
                    }, 1500);
                }
                for (var i = 0; i < tot; i++) {
                    var tImg = new Image();
                    tImg.onload = imgLoaded;
                    tImg.onerror = imgLoaded;
                    tImg.src = img[i].src;
                }
            }
            document.addEventListener('DOMContentLoaded', loadbar, false);
        }());
    </script>
</head>

<body>

    <div id="overlay">
        <div id="progstat"></div>
        <div id="progress"></div>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"></a>
            <img src="/img/g1.jpg" class="img-circle">
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <br>

        </div>

    </nav>

    <div class="container">
        <div style="padding-top: 150px;">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 20px 15px;">
                        <div class="row">
                            <div class="col-md-6">
                                เมนูอาหาร
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <button type="button" class="btn btn-default" onclick="location.href='{{ route('status') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> หน้าหลัก</button>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if(session()->has('add_order_details'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>สั่งเมนู</strong> {{ session()->get('add_order_details') }} สำเร็จ
                                </div>
                                @endif @if(session()->has('reservation'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{{ session()->get('reservation') }}</strong>
                                </div>
                                @endif @if(session()->has('order_details_delete'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{{ session()->get('order_details_delete') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">จองโดย:</div>
                                    <div class="panel-body">
                                        {{$user}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">โต๊ะ</div>
                                    <div class="panel-body">
                                        {{$dining_table->name}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">จำนวนที่นั่ง</div>
                                    <div class="panel-body">
                                        {{$dining_table->seating}}
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <th>
                                            <h5></h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order_details as $index => $orders)
                                    <tr>
                                        <td> {{$orders->datas}}</td>
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
                                        <td>
                                            @if( $orders->is_cook == 0)
                                            <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('ยืนยันการลบรายการ ?')) window.location.href = '{{ route('qrcode_book_food.delete',['id'=>$orders->id, 'orders_amount'=>$orders->amount, 'amount'=>$amount]) }}'"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิกรายการ</button>
                                            @else
                                            <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-check" aria-hidden="true"></i> ทำสำเร็จ</button>
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3">
                                            <div style="text-align: center;">
                                                <h5>ยอดรวม</h5>
                                            </div>
                                        </td>
                                        <td colspan="2" style="text-align: center;">{{$amount}} บาท</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div style="padding-top: 10px;">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">เมนูผัก</a></li>
                                    <li><a data-toggle="tab" href="#menu2">เมนูต้ม</a></li>
                                    <li><a data-toggle="tab" href="#menu3">เมนูทอด</a></li>
                                    <li><a data-toggle="tab" href="#menu4">เมนูยำ</a></li>
                                    <li><a data-toggle="tab" href="#menu5">เมนูอาหารจารเดี่ยว</a></li>
                                    <li><a data-toggle="tab" href="#menu6">เมนูพิซซ่า</a></li>
                                    <li><a data-toggle="tab" href="#menu7">เมนูเครื่องดื่ม</a></li>
                                    <li><a data-toggle="tab" href="#menu8">เมนูกาแฟ</a></li>
                                    <li><a data-toggle="tab" href="#menu9">โปรโมชั่น</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h3>เมนูผัก</h3> @foreach ($food_type_vegetable as $index => $food_type_vegetables)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$food_type_vegetables->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$food_type_vegetables->food_name}} ราคา {{$food_type_vegetables->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$food_type_vegetables->food_name}}',
                       '{{$food_type_vegetables->image}}', '{{$food_type_vegetables->id}}', '{{$food_type_vegetables->price}}',  '{{$food_type_vegetables->special_price}}', '{{$food_type_vegetables->big_price}}' )">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>เมนูต้ม</h3> @foreach ($f_m_boiled as $index => $f_menu)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$f_menu->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$f_menu->food_name}} ราคา {{$f_menu->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$f_menu->food_name}}', '{{$f_menu->image}}', '{{$f_menu->id}}', '{{$f_menu->price}}', '{{$f_menu->special_price}}','{{$f_menu->big_price}}')">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <h3>เมนูทอด</h3> @foreach ($f_m_fried as $index => $f_menu_fried)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$f_menu_fried->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$f_menu_fried->food_name}} ราคา {{$f_menu_fried->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$f_menu_fried->food_name}}', '{{$f_menu_fried->image}}', '{{$f_menu_fried->id}}', '{{$f_menu_fried->price}}','{{$f_menu_fried->special_price}}','{{$f_menu_fried->big_price}}')">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu4" class="tab-pane fade">
                                        <h3>เมนูยำ</h3> @foreach ($f_m_yum as $index => $f_menu_yum)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$f_menu_yum->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$f_menu_yum->food_name}} ราคา {{$f_menu_yum->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$f_menu_yum->food_name}}', '{{$f_menu_yum->image}}', '{{$f_menu_yum->id}}', '{{$f_menu_yum->price}}','{{$f_menu_yum->special_price}}','{{$f_menu_yum->big_price}}')">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu5" class="tab-pane fade">
                                        <h3>เมนูอาหารจารเดี่ยว</h3> @foreach ($f_m_dish as $index => $f_menu_dish)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$f_menu_dish->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$f_menu_dish->food_name}} ราคา {{$f_menu_dish->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$f_menu_dish->food_name}}', '{{$f_menu_dish->image}}', '{{$f_menu_dish->id}}', '{{$f_menu_dish->price}}','{{$f_menu_dish->special_price}}','{{$f_menu_dish->big_price}}')">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu6" class="tab-pane fade">
                                        <h3>เมนูพิซซ่า</h3> @foreach ($f_m_piza as $index => $f_menu_piza)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$f_menu_piza->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$f_menu_piza->food_name}} ราคา {{$f_menu_piza->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$f_menu_piza->food_name}}', '{{$f_menu_piza->image}}', '{{$f_menu_piza->id}}', '{{$f_menu_piza->price}}','{{$f_menu_piza->special_price}}','{{$f_menu_piza->big_price}}')">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu7" class="tab-pane fade">
                                        <h3>เมนูเครื่องดื่ม</h3> @foreach ($f_m_beverage as $index => $f_menu_beverage)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$f_menu_beverage->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$f_menu_beverage->food_name}} ราคา {{$f_menu_beverage->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$f_menu_beverage->food_name}}', '{{$f_menu_beverage->image}}', '{{$f_menu_beverage->id}}', '{{$f_menu_beverage->price}}','{{$f_menu_beverage->special_price}}','{{$f_menu_beverage->big_price}}')">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu8" class="tab-pane fade">
                                        <h3>เมนูกาแฟ</h3> @foreach ($f_m_coffee as $index => $f_menu_coffee)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <br>
                                            <div class="hovereffect">
                                                <img src="{{ asset('storage/Food_menus/'.$f_menu_coffee->image) }}" alt="" style="width:100%; height: 200px;">
                                                <div class="overlay">
                                                    <h2>{{$f_menu_coffee->food_name}} ราคา {{$f_menu_coffee->price}}</h2>
                                                    <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$f_menu_coffee->food_name}}', '{{$f_menu_coffee->image}}', '{{$f_menu_coffee->id}}', '{{$f_menu_coffee->price}}','{{$f_menu_coffee->special_price}}','{{$f_menu_coffee->big_price}}')">สั่งเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="menu9" class="tab-pane fade">
                                        <h3>โปรโมชั่น</h3>
                                        <div class="row">
                                            <div class="container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#promotion1">โปรเดอะฮักกระชากใจ</a></li>
                                                    <li><a data-toggle="tab" href="#promotion2">โปรสหายหมื่นจอก</a></li>
                                                    <li><a data-toggle="tab" href="#promotion3">โปรลูกหมูสามตัว</a></li>
                                                    <li><a data-toggle="tab" href="#promotion4">ยำประเจ็ท</a></li>
                                                    <li><a data-toggle="tab" href="#promotion5">ทอดสะพาน</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div id="promotion1" class="tab-pane fad in active">
                                                    @foreach ($promotion_type1 as $index => $p1)
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <br>
                                                        <div class="hovereffect">
                                                            <img src="{{ asset('storage/Food_menus/'.$p1->qrimage) }}" alt="" style="width:100%; height: 200px;">
                                                            <div class="overlay">
                                                                <h2>{{$p1->name}} ราคา {{$p1->price}}</h2>
                                                                <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$p1->name}}', '{{$p1->qrimage}}', '{{$p1->id}}', '{{$p1->price}}', '','', '{{$p1->promotion_type_id}}')">สั่งเลย</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div id="promotion2" class="tab-pane fade">
                                                    @foreach ($promotion_type2 as $index => $pp2)
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <br>
                                                        <div class="hovereffect">
                                                            <img src="{{ asset('storage/Food_menus/'.$pp2->qrimage) }}" alt="" style="width:100%; height: 200px;">
                                                            <div class="overlay">
                                                                <h2>{{$pp2->name}} ราคา {{$pp2->price}}</h2>
                                                                <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$pp2->name}}', '{{$pp2->qrimage}}', '{{$pp2->id}}', '{{$pp2->price}}', '','', '{{$pp2->promotion_type_id}}')">สั่งเลย</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div id="promotion3" class="tab-pane fade">
                                                    @foreach ($promotion_type3 as $index => $p3)
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <br>
                                                        <div class="hovereffect">
                                                            <img src="{{ asset('storage/Food_menus/'.$p3->qrimage) }}" alt="" style="width:100%; height: 200px;">
                                                            <div class="overlay">
                                                                <h2>{{$p3->name}} ราคา {{$p3->price}}</h2>
                                                                <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$p3->name}}', '{{$p3->qrimage}}', '{{$p3->id}}', '{{$p3->price}}', '','', '{{$p3->promotion_type_id}}')">สั่งเลย</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div id="promotion4" class="tab-pane fade">
                                                    @foreach ($promotion_type4 as $index => $p4)
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <br>
                                                        <div class="hovereffect">
                                                            <img src="{{ asset('storage/Food_menus/'.$p4->qrimage) }}" alt="" style="width:100%; height: 200px;">
                                                            <div class="overlay">
                                                                <h2>{{$p4->name}} ราคา {{$p4->price}}</h2>
                                                                <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$p4->name}}', '{{$p4->qrimage}}', '{{$p4->id}}', '{{$p4->price}}', '','', '{{$p4->promotion_type_id}}')">สั่งเลย</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div id="promotion5" class="tab-pane fade">
                                                    @foreach ($promotion_type5 as $index => $p5)
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <br>
                                                        <div class="hovereffect">
                                                            <img src="{{ asset('storage/Food_menus/'.$p5->qrimage) }}" alt="" style="width:100%; height: 200px;">
                                                            <div class="overlay">
                                                                <h2>{{$p5->name}} ราคา {{$p5->price}}</h2>
                                                                <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$p5->name}}', '{{$p5->qrimage}}', '{{$p5->id}}', '{{$p5->price}}', '','', '{{$p5->promotion_type_id}}')">สั่งเลย</a>
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
                        </div>
                        <div id="reservations" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-xs">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><span id="name"></span></h4>
                                    </div>
                                    <div class="modal-body">
                                        <img id="image" class="img-responsive">
                                        <br>
                                        <form class="form-horizontal" method="POST" action="{{ route('Qrcode_order_food') }}">
                                            {{ csrf_field() }}
                                            <input type='hidden' name="food_id" id="food_id" value="food_id">
                                            <!--  <input type='hidden'  name="price" id="price" value="price"> -->
                                            <input type='hidden' name="reservation_id" id="reservation_id" value="{{$reservation_id}}">
                                            <input type='hidden' name="orde_date" value="{{$reserve_date}}">
                                            <input type='hidden' name="dining_table" value="{{$dining_table}}">
                                            <input type='hidden' name="food_name" id="food_name" value="food_name">
                                            <!--  <input type='hidden'  name="promotion_id" id="promotion_id"  value="food_name"> -->
                                            <input type='hidden' name="promotion_type_id" id="promotion_type_id" value="promotion_type_id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type='button' value='-' class='btn btn-danger qtyminus' field='totalorder' />
                                                    <input type='text' id="totalorder" name='totalorder' value='totalorder' class='qty' />
                                                    <input type='button' value='+' class=' btn btn-success qtyplus' field='totalorder' />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div id="rates"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div id="special_prices"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div id="big_prices"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="price" value="0" />
                                                        <label>
                                                            <input type="checkbox" id="price" name="price" value="price" required="เลือก ขนาด"> เล็ก</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="special_price" value="0" />
                                                        <label>
                                                            <input type="checkbox" id="special_price" name="special_price" value="special_price"> กลาง
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="big_price" value="0" />
                                                        <label>
                                                            <input type="checkbox" id="big_price" name="big_price" value="special_price"> ใหญ่
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">เลือกเมนูอื่น</button>
                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-floppy-o" aria-hidden="true"></i> สั่ง</button>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#date').datetimepicker({
                format: "DD-MM-YYYY",
                defaultDate: new Date()
            });
            $('#time').datetimepicker({
                format: "hh:mm ",
                defaultDate: new Date()
            });
            $('#IsPaid').change(function() {
                if (this.checked != true) {
                    $("#have_not_paid").show();
                    $("#pay").hide();
                    $("#submit").hide();
                } else {
                    $("#pay").show();
                    $("#submit").show();
                    $("#have_not_paid").hide();
                    $("#submit").remove('disabled')
                }
            });

            $('.qtyplus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                fieldName = $(this).attr('field');
                // Get its current value
                var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                console.log(price)
                    // If is not undefined
                if (!isNaN(currentVal)) {
                    // Increment
                    $('input[name=' + fieldName + ']').val(currentVal + 1);

                } else {
                    // Otherwise put a 0 there
                    $('input[name=' + fieldName + ']').val(0);
                }
            });
            // This button will decrement the value till 0
            $(".qtyminus").click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                fieldName = $(this).attr('field');
                // Get its current value
                var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                // If it isn't undefined or its greater than 0
                if (!isNaN(currentVal) && currentVal > 0) {
                    // Decrement one
                    $('input[name=' + fieldName + ']').val(currentVal - 1);
                } else {
                    // Otherwise put a 0 there
                    $('input[name=' + fieldName + ']').val(0);
                }
            });

            $('#price :checkbox').click(function() {
                var $this = $(this);
                // $this will contain a reference to the checkbox
                if ($this.is(':checked')) {
                    // the checkbox was checked
                    alert('checked');
                } else {
                    // the checkbox was unchecked
                    alert('unchecked');
                }
            });

        });

        function order_food($name, $image, $id, $price, $special_price, $big_price, $promotion_type_id) {

            document.getElementById("price").checked = false;
            document.getElementById("special_price").checked = false;
            document.getElementById("big_price").checked = false;
            var name = $name;
            var image = $image;
            var food_id = $id;
            var price = $price;
            var big_price = $big_price;
            var special_price = $special_price;
            var promotion_type_id = $promotion_type_id;

            if (big_price == undefined) {
                big_price = 0;
            }
            if (special_price == undefined) {
                special_price = 0;
            }

            if (special_price == "") {
                special_price = 0;
                console.log(promotion_type_id)
                document.getElementById("special_price").disabled = true;
                // document.getElementById("big_price").disabled = true;
            } else {
                document.getElementById("special_price").disabled = false;
                // document.getElementById("big_price").disabled = false;
                $("#price").click(function() {
                    if (this.checked) {
                        // document.getElementById("big_price").disabled = true;
                        document.getElementById("special_price").disabled = true;
                    } else {
                        document.getElementById("special_price").disabled = false;
                        //document.getElementById("big_price").disabled = false;
                    }

                });
                $("#special_price").click(function() {
                    if (this.checked) {
                        document.getElementById("price").disabled = true;
                    } else {
                        document.getElementById("price").disabled = false;
                    }

                });
                $("#big_price").click(function() {
                    if (this.checked) {
                        document.getElementById("special_price").disabled = true;
                        document.getElementById("price").disabled = true;
                    } else {
                        document.getElementById("special_price").disabled = false;
                        document.getElementById("price").disabled = false;
                    }

                });

            }

            if (big_price == "") {
                big_price = 0;
                document.getElementById("big_price").disabled = true;
            } else {
                document.getElementById("special_price").disabled = false;
                document.getElementById("big_price").disabled = false;
                document.getElementById("price").disabled = false;
                $("#price").click(function() {
                    if (this.checked) {
                        document.getElementById("big_price").disabled = true;
                        document.getElementById("special_price").disabled = true;
                    } else {
                        document.getElementById("special_price").disabled = false;
                        document.getElementById("big_price").disabled = false;
                    }

                });
                $("#special_price").click(function() {
                    if (this.checked) {
                        document.getElementById("big_price").disabled = true;
                        document.getElementById("price").disabled = true;
                    } else {
                        document.getElementById("big_price").disabled = false;
                        document.getElementById("price").disabled = false;
                    }

                });
                $("#big_price").click(function() {
                    if (this.checked) {
                        document.getElementById("special_price").disabled = true;
                        document.getElementById("price").disabled = true;
                    } else {
                        document.getElementById("special_price").disabled = false;
                        document.getElementById("price").disabled = false;
                    }

                });

            }
            if (big_price == 0) {
                document.getElementById("big_price").disabled = true;
            }
            document.getElementById("name").innerHTML = name;
            document.getElementById("food_name").value = name;
            document.getElementById("food_id").value = food_id;
            document.getElementById("price").value = price;
            document.getElementById("rates").innerHTML = price;
            document.getElementById("special_price").value = special_price;
            document.getElementById("special_prices").innerHTML = special_price;
            document.getElementById("big_price").value = big_price;
            document.getElementById("big_prices").innerHTML = big_price;
            document.getElementById("totalorder").value = 1;
            document.getElementById("promotion_type_id").value = promotion_type_id;

            $("#image").attr("src", "/storage/Food_menus/" + image);

        }
    </script>

    <!-- jQuery -->
    <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <!-- Toastr JavaScript -->
    <script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
</body>

</html>

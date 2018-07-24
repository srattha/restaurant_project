<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>@yield('title')</title>
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
      <!-- jQuery -->
      <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('/vendor/moment/moment.min.js') }}"></script>
      <script src="{{ asset('/vendor/bootstrapdatapicker/bootstrapdatetimepicker.min.js') }}"></script>
      <script src="{{ asset('/vendor/sweetalert/switchery.min.js') }}"></script>
      @yield('css')
      <!--  <style type="text/css">
         a {
             color: #333333;
             text-decoration: none;
         }
         #overlay{
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

         .switch {
           position: relative;
           display: inline-block;
           width: 60px;
           height: 34px;
         }

         .switch input {display:none;}

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

         .print-page{
         display: none;
         }
         @media print{
         .print-page{
             display: block;
         }

         .page{
             display: none;
         }

         </style> -->
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
        background-color: rgba(0,0,0,.5);
         padding: 10px;
         top: 0;
         right: 0;
         }
         .image-checkbox-checked .fa {
         display: block !important;
         }
      </style>
      <script type="text/javascript">
         (function(){

           function id(v){ return document.getElementById(v); }
           function loadbar() {
             var ovrl = id("overlay"),
             prog = id("progress"),
             stat = id("progstat"),
             img = document.images,
             c = 0,
             tot = img.length;
             if(tot == 0) return doneLoading();

             function imgLoaded(){
               c += 1;
               var perc = ((100/tot*c) << 0) +"%";
               prog.style.width = perc;
               stat.innerHTML = "Loading "+ perc;
               if(c===tot) return doneLoading();
             }
             function doneLoading(){
               ovrl.style.opacity = 0;
               setTimeout(function(){
                 $('.sidebar-category').fadeIn();
                 $('.navbar-right').fadeIn();
               }, 300);

               setTimeout(function(){
                 ovrl.style.display = "none";
               }, 1500);
             }
             for(var i=0; i<tot; i++) {
               var tImg     = new Image();
               tImg.onload  = imgLoaded;
               tImg.onerror = imgLoaded;
               tImg.src     = img[i].src;
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
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/counter_staff">PENTOR CAFE</a>
         </div>
         <!-- /.navbar-header -->
         <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
               <i class="fa fa-user fa-fw"></i>  <span>{{Auth::user()->name}}</span> <i class="fa fa-caret-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-user">
                  <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                  </li>
                  <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>
               </ul>
            </li>
         </ul>
      </nav>
      <div class="container-fluid page" style="padding:10px;">
         <!--  <div class="row"> -->
         <!--  <div class="col-md-6"> -->
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
                  </div>
               </div>
               <div class="panel-body">
                  <div class="row">
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
                                 @else
                                 <button type="button" class="btn btn-{{$dining_tables->color}} btn-block"  data-toggle="modal" data-target="#confirm_status" onclick="data_print('{{$dining_tables}}')">ยืนยันสถานะ</button>
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                       @endif

                     @endforeach
                  </div>
                  <div id="confirm_status" class="modal fade" role="dialog">
                     <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">แจ้งรายการ</h4>
                           </div>
                           <div class="modal-body">
                              <div>
                                 <label><b>วันที่:</b> 07/06/2018</label>
                              </div>
                              <div>
                                 <label><b>ชื่อ:</b> คนจอง</label>
                              </div>
                              <div>
                                 <label><b>โต๊ะ:</b> 5</label>
                              </div>
                              <div>
                                 <label><b>จำนวนที่นั่ง:</b> 5</label>
                              </div>
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
                                       <tr>
                                          <td>1</td>
                                          <td>
                                             <p>ต้มยำกุ่ง</p>
                                          </td>
                                          <td>1</td>
                                          <td>80 บาท</td>
                                          <td>80 บาท</td>
                                       </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>
                                             <p>ลาบหมู</p>
                                          </td>
                                          <td>1</td>
                                          <td>80 บาท</td>
                                          <td>80 บาท</td>
                                       </tr>
                                       <tr>
                                          <td>3</td>
                                          <td>
                                             <p>น้ำเปล่า</p>
                                          </td>
                                          <td>2</td>
                                          <td>10 บาท</td>
                                          <td>20 บาท</td>
                                       </tr>
                                       <tr >
                                          <td colspan="4">
                                             <div style="text-align: center;">
                                                <h5>ยอดรวม</h5>
                                             </div>
                                          </td>
                                          <td>180 บาท</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div>
                                 <form>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label class="switch">
                                          <input type="hidden" name="is_paid" value="0" />
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
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-default" onclick="window.print()"> <i class="fa fa-print" aria-hidden="true"></i> พิมพ์</button>
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
                                    <div style="padding-top: 10px;">
                                       <div class="panel panel-primary">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#collapse1">สั่งอาหาร</a>
                                             </h4>
                                          </div>
                                          <div id="collapse1" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                <ul class="nav nav-tabs">
                                                   <li class="active"><a data-toggle="tab" href="#home">ผัก</a></li>
                                                   <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                                                   <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                                                   <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                   <div id="home" class="tab-pane fade in active">
                                                      <h3>เมนูผัก</h3>
                                                        @foreach ($food_type_vegetable as $index => $food_type_vegetables)
                                                      <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                                         <label class="image-checkbox">
                                                         <img class="img-responsive" src="{{ asset('storage/Food_menus/'.$food_type_vegetables->image) }}" / style="width: 130px;height: 100px;">
                                                         <input type="checkbox" name="image[]" value="{{$food_type_vegetables->id}}" />
                                                          <input type="checkbox" name="price[]" value="{{$food_type_vegetables->price}}" />
                                                         <i class="fa fa-check hidden"></i>
                                                         </label>
                                                         <p>{{$food_type_vegetables->food_name}} ราคา {{$food_type_vegetables->price}}</p>

                                                      </div>
                                                       @endforeach
                                                   </div>
                                                   <div id="menu1" class="tab-pane fade">
                                                      <h3>Menu 1</h3>
                                                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                   </div>
                                                   <div id="menu2" class="tab-pane fade">
                                                      <h3>Menu 2</h3>
                                                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                   </div>
                                                   <div id="menu3" class="tab-pane fade">
                                                      <h3>Menu 3</h3>
                                                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="submit"  id="btn-submit" class="btn btn-primary"> ตกลง</button>
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
      <!-- Metis Menu Plugin JavaScript -->
      <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>
      <!-- Toastr JavaScript -->
      <script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>
      <!-- Custom Theme JavaScript -->
      <script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>
      <script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
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

         // sync the state to the input
         $(".image-checkbox").on("click", function (e) {
          $(this).toggleClass('image-checkbox-checked');
          var $checkbox = $(this).find('input[type="checkbox"]');
          $checkbox.prop("checked",!$checkbox.prop("checked"))

          e.preventDefault();
         });


         });

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
   </body>
</html>

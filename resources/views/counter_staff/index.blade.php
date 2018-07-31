@extends('counter_staff.master')
@section('css')
@endsection
@section('content')
  <div class="container-fluid page" style="padding:10px;">
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
                                      <!--  <div class="panel panel-primary">
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
                                                         <div id="totalorder"  style="display: none;">
                                                          <input type='button' value='-' class='qtyminus' field='quantity' />
                                                          <input type='text' id="" name='quantity' value='1' class='qty' />
                                                          <input type='button' value='+' class='qtyplus' field='quantity' />
                                                        </div>
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
                                       </div> -->
                                    </div>
                                    <div class="modal-footer">
                                       <button type="submit" class="btn btn-primary swa-confirm"> ตกลง</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                 </form>
                                <!--  <form id="myForm">
                                  <button type="submit" >Submit</button>
                                </form> -->
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




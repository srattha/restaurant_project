@extends('layouts.master')
@section('title','เมนูอาหาร')
@section('css')
<style type="text/css">
  .hovereffect {
          width:100%;
          height:100%;
          float:left;
          overflow:hidden;
          position:relative;
          text-align:center;
          cursor:default;
        }

        .hovereffect .overlay {
          width:100%;
          height:100%;
          position:absolute;
          overflow:hidden;
          top:0;
          left:0;
          opacity:0;
          background-color:rgba(0,0,0,0.5);
          -webkit-transition:all .4s ease-in-out;
          transition:all .4s ease-in-out
        }

        .hovereffect img {
          display:block;
          position:relative;
          -webkit-transition:all .4s linear;
          transition:all .4s linear;
        }

        .hovereffect h2 {
          text-transform:uppercase;
          color:#fff;
          text-align:center;
          position:relative;
          font-size:17px;
          background:rgba(0,0,0,0.6);
          -webkit-transform:translatey(-100px);
          -ms-transform:translatey(-100px);
          transform:translatey(-100px);
          -webkit-transition:all .2s ease-in-out;
          transition:all .2s ease-in-out;
          padding:10px;
        }

        .hovereffect a.info {
          text-decoration:none;
          display:inline-block;
          text-transform:uppercase;
          color:#fff;
          border:1px solid #fff;
          background-color:transparent;
          opacity:0;
          filter:alpha(opacity=0);
          -webkit-transition:all .2s ease-in-out;
          transition:all .2s ease-in-out;
          margin:50px 0 0;
          padding:7px 14px;
        }

        .hovereffect a.info:hover {
          box-shadow:0 0 5px #fff;
        }

        .hovereffect:hover img {
          -ms-transform:scale(1.2);
          -webkit-transform:scale(1.2);
          transform:scale(1.2);
        }

        .hovereffect:hover .overlay {
          opacity:1;
          filter:alpha(opacity=100);
        }

        .hovereffect:hover h2,.hovereffect:hover a.info {
          opacity:1;
          filter:alpha(opacity=100);
          -ms-transform:translatey(0);
          -webkit-transform:translatey(0);
          transform:translatey(0);
        }

        .hovereffect:hover a.info {
          -webkit-transition-delay:.2s;
          transition-delay:.2s;
        }
        .qty {
          text-align: center;
          width: 40px;
          /* margin: 4px;*/
          color: #333;
        }
        a{
          cursor: pointer;
        }
</style>
@endsection
@section('content')
<div style="padding-top: 30px;">
 <div class="panel-group">
  <div class="panel panel-default">
   <div class="panel-heading" style="padding: 20px 15px;">
    <div class="row">
     <div class="col-md-6">
       เมนูอาหาร
     </div>
     <div class="col-md-6" style="text-align: right;">
      <button type="button" class="btn btn-default" onclick="location.href='{{ route('status') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
      <button type="button" class="btn btn-default" onclick="location.href='{{ route('customer_report'  ,['id'=>$user->id]) }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> การสั่งของฉัน</button>
    </div>
  </div>
</div>
<div class="panel-body">
  <div>
   @if(session()->has('add_order_details'))
   <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>สั่งเมนู</strong> {{ session()->get('add_order_details') }} สำเร็จ
  </div>
  @endif
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">จองโดย:</div>
        <div class="panel-body">
         {{$user->name}}
       </div>
     </div>
   </div>
   <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading">โต๊ะ</div>
      <div class="panel-body">
        {{$dining_table->name}}
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading">จำนวนที่นั่ง</div>
      <div class="panel-body">
        {{$dining_table->seating}}
      </div>
    </div>
  </div>
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
   </ul>
   <div class="tab-content">
     <div id="home" class="tab-pane fade in active">
      <h3>เมนูผัก</h3>
      @foreach ($food_type_vegetable as $index => $food_type_vegetables)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <h3>เมนูต้ม</h3>
    @foreach ($f_m_boiled as $index => $f_menu)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <h3>เมนูทอด</h3>
    @foreach ($f_m_fried as $index => $f_menu_fried)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <h3>เมนูยำ</h3>
     @foreach ($f_m_yum as $index => $f_menu_yum)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <h3>เมนูอาหารจารเดี่ยว</h3>
     @foreach ($f_m_dish as $index => $f_menu_dish)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <h3>เมนูพิซซ่า</h3>
    @foreach ($f_m_piza as $index => $f_menu_piza)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <h3>เมนูเครื่องดื่ม</h3>
    @foreach ($f_m_beverage as $index => $f_menu_beverage)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <h3>เมนูกาแฟ</h3>
    @foreach ($f_m_coffee as $index => $f_menu_coffee)
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
    <img id="image" class="img-responsive" >
    <br>
    <form class="form-horizontal" method="POST" action="{{ route('order_food_customer') }}">
     {{ csrf_field() }}

     <input type='hidden'  name="food_id" id="food_id" value="food_id">
    <!--  <input type='hidden'  name="price" id="price" value="price"> -->
     <input type='hidden'  name="reservation_id" id="reservation_id" value="{{$reservation_id}}">
     <input type='hidden'  name="orde_date"  value="{{$reserve_date}}">
     <input type='hidden'  name="dining_table"  value="{{$dining_table}}">
     <input type='hidden'  name="food_name" id="food_name"  value="food_name">
     <div class="row">
      <div class="col-md-6">
        <input type='button' value='-' class='btn btn-danger qtyminus' field='totalorder' />
        <input type='text' id="" name='totalorder' value='1' class='qty' />
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
          <label><input type="checkbox" id="price" name="price"  value="price" checked> เล็ก</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="checkbox">
          <input type="hidden" name="special_price" value="0" />
          <label>
            <input type="checkbox" id="special_price" name="special_price"  value="special_price"> กลาง
          </label>
        </div>
      </div>
       <div class="col-md-3">
        <div class="checkbox">
          <input type="hidden" name="big_price" value="0" />
          <label>
            <input type="checkbox" id="big_price" name="big_price"  value="special_price"> ใหญ่
          </label>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">เลือกเมนูอื่น</button>
    <button type="submit" class="btn btn-primary"> สั่ง</button>

  </div>
</form>

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

   $('.qtyplus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        console.log(price)
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);

          } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
          }
        });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
          } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
          }
        });

    $('#price :checkbox').click(function () {
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

  function order_food($name, $image, $id, $price, $special_price, $big_price){
    var name = $name;
    var image = $image;
    var food_id = $id;
    var price = $price;
    var big_price = $big_price;
    var special_price = $special_price;
    if (special_price == "" || big_price == "") {
      special_price = 0;
       document.getElementById("special_price").disabled = true;
       document.getElementById("big_price").disabled = true;
    }else{
      document.getElementById("special_price").disabled = false;
      document.getElementById("big_price").disabled = false;

      $("#price").click(function () {
        if (this.checked)
          document.getElementById("special_price").disabled = true;
        else
          document.getElementById("special_price").disabled = false;
      });
      $("#special_price").click(function () {
        if (this.checked)
          document.getElementById("price").disabled = true;
        else
          document.getElementById("price").disabled = false;
      });
      $("#big_price").click(function () {
        if (this.checked)
          document.getElementById("price").disabled = true;
        else
          document.getElementById("price").disabled = false;
      });

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
    $("#image").attr("src", "/storage/Food_menus/"+image);
      console.log(big_price)
  }
</script>
@endsection

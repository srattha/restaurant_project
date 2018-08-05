@extends('counter_staff.master')
@section('css')
@endsection
@section('content')
<div class="container-fluid page" style="padding:10px;">
 <div class="panel-group ">
  <div class="panel panel-default">
   <div class="panel-heading" style="padding: 20px 15px;">
    <div class="row">
     <div class="col-md-6">
       เมนูอาหาร
     </div>
     <div class="col-md-6" style="text-align: right;">
      <button type="button" class="btn btn-default" onclick="location.href='{{ route('counterstaff.index') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
    </div>
  </div>
</div>
<div class="panel-body">
  <div class="container">
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
         {{$user}}
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
     <li class="active"><a data-toggle="tab" href="#home">ผัก</a></li>
     <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
     <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
     <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
   </ul>
   <div class="tab-content">
     <div id="home" class="tab-pane fade in active">
      <h3>เมนูผัก</h3>
      @foreach ($food_type_vegetable as $index => $food_type_vegetables)
       <!--  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
         <label class="image-checkbox">
           <img class="img-responsive" src="{{ asset('storage/Food_menus/'.$food_type_vegetables->image) }}" data-toggle="modal" data-target="#reservations"
           onclick="order_food('{{$food_type_vegetables->food_name}}', '{{$food_type_vegetables->image}}', '{{$food_type_vegetables->id}}', '{{$food_type_vegetables->price}}')" / style="width: 130px;height: 100px;">
         </label>
         <p>{{$food_type_vegetables->food_name}} ราคา {{$food_type_vegetables->price}}</p>

       </div> -->
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect">
         <img src="{{ asset('storage/Food_menus/'.$food_type_vegetables->image) }}" alt="" style="width:100%; height: 200px;">
         <div class="overlay">
          <h2>{{$food_type_vegetables->food_name}} ราคา {{$food_type_vegetables->price}}</h2>
          <a class="info" data-toggle="modal" data-target="#reservations" onclick="order_food('{{$food_type_vegetables->food_name}}', '{{$food_type_vegetables->image}}', '{{$food_type_vegetables->id}}', '{{$food_type_vegetables->price}}')">สั่งเลย</a>
        </div>
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

</div>

<div id="reservations" class="modal fade" role="dialog">
 <div class="modal-dialog modal-xs">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="name"></span>  ราคา <span id="rates"></span> บาท</h4>
  </div>
  <div class="modal-body">
    <img id="image" class="img-responsive" >
    <br>
    <form class="form-horizontal" method="POST" action="{{ route('order_food') }}">
     {{ csrf_field() }}

     <input type='hidden'  name="food_id" id="food_id" value="food_id">
     <input type='hidden'  name="price" id="price" value="price">
     <input type='hidden'  name="reservation_id" id="reservation_id" value="{{$reservation_id}}">
     <input type='hidden'  name="orde_date"  value="{{$reserve_date}}">
     <input type='hidden'  name="food_name" id="food_name"  value="food_name">
     <div class="row">
      <div class="col-md-6">
        <input type='button' value='-' class='btn btn-danger qtyminus' field='totalorder' />
        <input type='text' id="" name='totalorder' value='1' class='qty' />
        <input type='button' value='+' class=' btn btn-success qtyplus' field='totalorder' />
      </div>
      <div class="col-md-6" style="text-align: right;">
        <div id="rates"></div>
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
  });

  function order_food($name, $image, $id, $price){
    var name = $name;
    var image = $image;
    var food_id = $id;
    var price = $price;
    document.getElementById("name").innerHTML = name;
    document.getElementById("food_name").value = name;
    document.getElementById("food_id").value = food_id;
    document.getElementById("price").value = price;
    document.getElementById("rates").innerHTML = price;
    $("#image").attr("src", "/storage/Food_menus/"+image);

  }
</script>
@endsection

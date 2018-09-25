@extends('counter_staff.master')
@section('title','เมนูอาหาร')
@section('css')
@endsection
@section('content')
<div class="container-fluid page" style="padding:10px;">
 <div class="panel-group ">
  <div class="panel panel-default">
   <div class="panel-heading" style="padding: 20px 15px;">
    <div class="row">
     <div class="col-md-6">
       รายการจองโต๊ะ
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

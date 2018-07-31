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
       เมนูอาหาร
     </div>
   <!--   <div class="col-md-4">
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
 </div> -->
</div>
</div>
<div class="panel-body">
  <div class="container">
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
        <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
         <label class="image-checkbox">
           <img class="img-responsive" src="{{ asset('storage/Food_menus/'.$food_type_vegetables->image) }}" data-toggle="modal" data-target="#reservations"
           onclick="order_food('{{$food_type_vegetables->food_name}}', '{{$food_type_vegetables->image}}')" / style="width: 130px;height: 100px;">
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

</div>







<div id="reservations" class="modal fade" role="dialog">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="name"></h4>
    </div>
    <div class="modal-body">
      <h2> จองโดย: {{$user}}</h2>
       <img id="image">
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

        function order_food($name, $image){


          var name = $name;
          var image = $image;

          console.log(image)
          document.getElementById("name").innerHTML = name;
          $("#image").attr("src", "/storage/Food_menus/"+image)


         // document.getElementById("image").innerHTML = image;
          // document.getElementById("seating").innerHTML = seating;



        }
</script>
@endsection

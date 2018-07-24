@extends('layouts.master')
@section('css')

@endsection
@section('content')
<style type="text/css">
h4{
 color:orange;
}
h1{
  font size:50px;
  background-color:#888888;
  font color:#FF9900;
}
h2{
  font size:50px;
  background-color:gray;
}
h5{
  background-color:#666666;
}

</style>

<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="row">

  <h1 style="text-align: center;">เมนูอาหาร</h1>
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu1">เมนูผัด</a></li>
      <li><a data-toggle="tab" href="#menu2">เมนูต้ม</a></li>
      <li><a data-toggle="tab" href="#menu3">เมนูทอด</a></li>
      <li><a data-toggle="tab" href="#menu4">เมนูยำ</a></li>
      <li><a data-toggle="tab" href="#menu5">เมนูอาหารจารเดียว</a></li>
      <li><a data-toggle="tab" href="#menu6">เมนูพิซซ่า</a></li>
      <li><a data-toggle="tab" href="#menu7">เมนูเครื่องดื่ม</a></li>
      <li><a data-toggle="tab" href="#menu8">เมนูกาแฟ</a></li>
    </ul>

    <div class="tab-content">
      <div id="menu1" class="tab-pane fade in active">
        <div class="container">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3"></div> 
            <div class="col-md-3">
              <br>
              <br>
              <h3>รายการ</h3>
            </div>
            <br>
            <br>
            <div class="col-md-3">
             <h3>ราคา</h3> 
           </div>
         </div>
         <div class="row">
           <div class="col-md-6">
            @foreach ($food_image as $index => $food_images)
            <img src="{{ asset('storage/Food_menus/'.$food_images->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
            @endforeach 
          </div>
          <br>
          <br>            <br>
          <br>
          <div class="row">
            @foreach ($food_type as $index => $food_types)
            <div class="col-md-3">
             <h4> {{$food_types->name}} </h4>
           </div>
           <div class="col-md-3">
            <h4> {{$food_types->rates}} </h4>
          </div>
          @endforeach 
        </div>


      </div>
    </div>
  </div> 



  <div id="menu2" class="tab-pane fade">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <div class="col-md-8">
          <h4>รายการ</h4>
        </div>
        <div class="col-md-4">
         <h4>ราคา</h4> 
       </div>
     </div> 
   </div>
   <div class="row">
    <div class="col-md-6">
     @foreach ($food_image2 as $index => $food_images2)
     <img src="{{ asset('storage/Food_menus/'.$food_images2->image) }}"class="img-thumbnail" alt="Cinque Terre"width="200" height="200"  style="height: 200px;">
     @endforeach 
   </div>
   <br>
   <br>
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
    <div class="offer offer-warning">
      <div class="shape">
        <div class="shape-text">
          top             
        </div>
      </div>
      <div class="offer-content">
        <h3 class="lead">
         <!-- <div class="col-md-6"> -->
          @foreach ($food_type2 as $index => $food_types2)

          <div class="row">
            <div class="col-md-8">
              <h4> {{$food_types2->name}} </h4>
            </div>

            <div class="col-md-4">
              <h4>{{$food_types2->rates}}</h4>
            </div>
          </div>  
          @endforeach 
        </div>
      </div>
    </div>
  </div>
</div>


  <div id="menu3" class="tab-pane fade">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <div class="col-md-6">
          <h4>รายการ</h4>
        </div>
        <div class="col-md-6">
         <h4>ราคา</h4> 
       </div>
     </div> 
   </div>
   <div class="row">
    <div class="col-md-6">
      @foreach ($food_image3 as $index => $food_images3)
      <img src="{{ asset('storage/Food_menus/'.$food_images3->image) }}" class="img-thumbnail" alt="Cinque Terre"width="200" height="200" style="height: 200px;">

      @endforeach 
    </div>
    <br>
    <br>
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
    <div class="offer offer-warning">
      <div class="shape">
        <div class="shape-text">
          top             
        </div>
      </div>
      <div class="offer-content">
        <h3 class="lead">
      @foreach ($food_type3 as $index => $food_types3)

      <div class="row">
        <div class="col-md-6">
         <h4>{{$food_types3->name}} </h4>
       </div>

       <div class="col-md-6">
         <h4> {{$food_types3->rates}}</h4>
       </div>
     </div>  
     @endforeach 
   </div>
 </div>
</div>
</div>
</div>

<div id="menu4" class="tab-pane fade">
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="col-md-6">
        <h4>รายการ</h4>
      </div>
      <div class="col-md-6">
       <h4>ราคา</h4> 
     </div>
   </div> 
 </div>
 <div class="row">
  <div class="col-md-6">
    @foreach ($food_image4 as $index => $food_images4)
    <img src="{{ asset('storage/Food_menus/'.$food_images4->image) }}" class="img-thumbnail" alt="Cinque Terre" style="width: 30%;">

    @endforeach 
  </div>
  <div class="col-md-6">
    @foreach ($food_type4 as $index => $food_types4)

    <div class="row">
      <div class="col-md-6">
       {{$food_types4->name}} 
     </div>

     <div class="col-md-6">
      {{$food_types4->rates}}
    </div>
  </div>  
  @endforeach 
</div>
</div>
</div>
<div id="menu5" class="tab-pane fade">
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="col-md-6">
        <h4>รายการ</h4>
      </div>
      <div class="col-md-6">
       <h4>ราคา</h4> 
     </div>
   </div> 
 </div>
 <div class="row">
  <div class="col-md-6">
    @foreach ($food_image5 as $index => $food_images5)
    <img src="{{ asset('storage/Food_menus/'.$food_images5->image) }}" class="img-thumbnail" alt="Cinque Terre" style="width: 30%;">

    @endforeach 
  </div>
  <div class="col-md-6">
    @foreach ($food_type5 as $index => $food_types5)

    <div class="row">
      <div class="col-md-6">
       {{$food_types5->name}} 
     </div>

     <div class="col-md-6">
      {{$food_types5->rates}}
    </div>
  </div>  
  @endforeach 
</div>
</div>
</div>
<div id="menu6" class="tab-pane fade">
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="col-md-6">
        <h4>รายการ</h4>
      </div>
      <div class="col-md-6">
       <h4>ราคา</h4> 
     </div>
   </div> 
 </div>
 <div class="row">
  <div class="col-md-6">
    @foreach ($food_image6 as $index => $food_images6)
    <img src="{{ asset('storage/Food_menus/'.$food_images6->image) }}" class="img-thumbnail" alt="Cinque Terre" style="width: 30%;">

    @endforeach 
  </div>
  <div class="col-md-6">
    @foreach ($food_type6 as $index => $food_types6)

    <div class="row">
      <div class="col-md-6">
       {{$food_types6->name}} 
     </div>

     <div class="col-md-6">
      {{$food_types6->rates}}
    </div>
  </div>  
  @endforeach 
</div>
</div>
</div>
<div id="menu7" class="tab-pane fade">
 <div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-6">
    <div class="col-md-6">
      <h4>รายการ</h4>
    </div>
    <div class="col-md-6">
     <h4>ราคา</h4> 
   </div>
 </div> 
</div>
<div class="row">
  <div class="col-md-6">
    @foreach ($food_image7 as $index => $food_images7)
    <img src="{{ asset('storage/Food_menus/'.$food_images7->image) }}" class="img-thumbnail" alt="Cinque Terre" style="width: 30%;">

    @endforeach 
  </div>
  <div class="col-md-6">
    @foreach ($food_type7 as $index => $food_types7)

    <div class="row">
      <div class="col-md-6">
       {{$food_types7->name}} 
     </div>

     <div class="col-md-6">
      {{$food_types7->rates}}
    </div>
  </div>  
  @endforeach 
</div>
</div>
</div>

<div id="menu8" class="tab-pane fade">
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="col-md-6">
        <h4>รายการ</h4>
      </div>
      <div class="col-md-6">
       <h4>ราคา</h4> 
     </div>
   </div> 
 </div>
 <div class="row">
  <div class="col-md-6">
    @foreach ($food_image2 as $index => $food_images2)
    <img src="{{ asset('storage/Food_menus/'.$food_images2->image) }}" class="img-thumbnail" alt="Cinque Terre"  width="200" height="200"  style="height: 200px;">

    @endforeach 
  </div>
  <div class="col-md-6">
    @foreach ($food_type2 as $index => $food_types2)

    <div class="row">
      <div class="col-md-6">
       {{$food_types2->name}} 
     </div>

     <div class="col-md-6">
      {{$food_types2->rates}}
    </div>
  </div>  
  @endforeach 
</div>


</div>
</div>
</div>
</div>
</div>
</b>




@endsection
@section('script')
@endsection
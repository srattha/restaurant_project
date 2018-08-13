@extends('layouts.master')
@section('css')
<style type="text/css">
h4{
 color:orange;
}

h2{
  font size:50px;
  background-color:gray;
}
h5{
  background-color:#666666;
}
</style>
@endsection
@section('content')

<div class="row">
  <h1 style="text-align: center;">เมนูอาหาร</h1>
  <div class="tabbable">
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
       <br>
       <div class="row">
         <div class="col-md-6">
          @foreach ($food_image1 as $index => $food_images1)
          <img src="{{ asset('storage/Food_menus/'.$food_images1->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
          @endforeach 
        </div>
        <div class="col-md-6">
          <div class="table-responsive">
           <table class="table table-striped">
            <thead>
              <tr>
                <th>รายการ</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($food_type1 as $index => $food_types1)
              <tr>
                <td>{{$food_types1->food_name}}</td>
                <td>{{$food_types1->price}}</td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div id="menu2" class="tab-pane fade ">
   <br>
   <div class="row">
     <div class="col-md-6">
      @foreach ($food_image2 as $index => $food_images2)
      <img src="{{ asset('storage/Food_menus/'.$food_images2->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
      @endforeach 
    </div>
    <div class="col-md-6">
      <div class="table-responsive">
       <table class="table table-striped">
        <thead>
          <tr>
            <th>รายการ</th>
            <th>ราคา</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($food_type2 as $index => $food_types2)
          <tr>
            <td>{{$food_types2->food_name}}</td>
            <td>{{$food_types2->price}}</td>
          </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<div id="menu3" class="tab-pane fade ">
 <br>
 <div class="row">
   <div class="col-md-6">
    @foreach ($food_image3 as $index => $food_images3)
    <img src="{{ asset('storage/Food_menus/'.$food_images3->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
    @endforeach 
  </div>
  <div class="col-md-6">
    <div class="table-responsive">
     <table class="table table-striped">
      <thead>
        <tr>
          <th>รายการ</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($food_type3 as $index => $food_types3)
        <tr>
          <td>{{$food_types3->food_name}}</td>
          <td>{{$food_types3->price}}</td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<div id="menu4" class="tab-pane fade ">
 <br>
 <div class="row">
   <div class="col-md-6">
    @foreach ($food_image4 as $index => $food_images4)
    <img src="{{ asset('storage/Food_menus/'.$food_images4->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
    @endforeach 
  </div>
  <div class="col-md-6">
    <div class="table-responsive">
     <table class="table table-striped">
      <thead>
        <tr>
          <th>รายการ</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($food_type4 as $index => $food_types4)
        <tr>
          <td>{{$food_types4->food_name}}</td>
          <td>{{$food_types4->price}}</td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<div id="menu5" class="tab-pane fade ">
 <br>
 <div class="row">
   <div class="col-md-6">
    @foreach ($food_image5 as $index => $food_images5)
    <img src="{{ asset('storage/Food_menus/'.$food_images5->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
    @endforeach 
  </div>
  <div class="col-md-6">
    <div class="table-responsive">
     <table class="table table-striped">
      <thead>
        <tr>
          <th>รายการ</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($food_type5 as $index => $food_types5)
        <tr>
          <td>{{$food_types5->food_name}}</td>
          <td>{{$food_types5->price}}</td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<div id="menu6" class="tab-pane fade ">
 <br>
 <div class="row">
   <div class="col-md-6">
    @foreach ($food_image6 as $index => $food_images6)
    <img src="{{ asset('storage/Food_menus/'.$food_images6->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
    @endforeach 
  </div>
  <div class="col-md-6">
    <div class="table-responsive">
     <table class="table table-striped">
      <thead>
        <tr>
          <th>รายการ</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($food_type6 as $index => $food_types6)
        <tr>
          <td>{{$food_types6->food_name}}</td>
          <td>{{$food_types6->price}}</td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<div id="menu7" class="tab-pane fade ">
 <br>
 <div class="row">
   <div class="col-md-6">
    @foreach ($food_image7 as $index => $food_images7)
    <img src="{{ asset('storage/Food_menus/'.$food_images7->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
    @endforeach 
  </div>
  <div class="col-md-6">
    <div class="table-responsive">
     <table class="table table-striped">
      <thead>
        <tr>
          <th>รายการ</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($food_type7 as $index => $food_types7)
        <tr>
          <td>{{$food_types7->food_name}}</td>
          <td>{{$food_types7->price}}</td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<div id="menu8" class="tab-pane fade ">
 <br>
 <div class="row">
   <div class="col-md-6">
    @foreach ($food_image8 as $index => $food_images8)
    <img src="{{ asset('storage/Food_menus/'.$food_images8->image) }}" class="img-thumbnail" alt="Cinque Terre" width="200" height="200" style="height: 200px;">
    @endforeach 
  </div>
  <div class="col-md-6">
    <div class="table-responsive">
     <table class="table table-striped">
      <thead>
        <tr>
          <th>รายการ</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($food_type8 as $index => $food_types8)
        <tr>
          <td>{{$food_types8->food_name}}</td>
          <td>{{$food_types8->price}}</td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection
@section('script')
@endsection
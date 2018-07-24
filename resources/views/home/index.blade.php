@extends('layouts.master')

@section('content')
<div >
 <img src="img/cc1.jpg" class="img-responsive" />
 <br>
 <div class="row">
  <div class="col-md-6">
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
     <div class="item active">
      <img class="d-block w-100" src="img/cc6.jpg" data-color="violet" alt="Third Image" style="width: 100%; height: 100%" />
    </div>
    <div class="item">
      <img src="img/cc2.jpg" data-color="violet" alt="Third Image" style="width: 100%; height: 100%" />
    </div>
    <div class="item">
      <img src="img/cc5.jpg" data-color="violet" alt="Third Image" style="width: 100%; height: 100%" />
    </div>
  </div>
</div>
<br>
<div class="col-md-6" >
 <b style="font-size: 20px;">โปรโมชั่น</b>
 <span class="line"></span>
 <br>
 <div class="list-group">

 </div>
</div>
</div>
<div class="col-md-6">
 <div class="panel panel-success">
  <div class="panel-heading"><b style="font-size: 20px;">เมนูอาหารแนะนำ</b></div>
  <div class="panel-body">
    <div class="list-group">
      <div class="col-md-6">
        <div class="thumbnail">
          <img src="/img/2.jpg" alt="Boats at Phi Phi, Thailand">
          <div class="caption">
            <p>โป๊ะแตกทะเลแห้ง</p>
            <button type="submit" class="btn btn-primary btn-block">สั่ง</button>

          </div>
        </div>
        <div class="thumbnail">
          <img src="/img/2.jpg" alt="Boats at Phi Phi, Thailand">
          <div class="caption">
            <p>โป๊ะแตกทะเลแห้ง</p>
            <button type="submit" class="btn btn-primary btn-block">สั่ง</button>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="thumbnail">
          <img src="/img/2.jpg" alt="Boats at Phi Phi, Thailand">
          <div class="caption">
            <p>โป๊ะแตกทะเลแห้ง</p>
            <button type="submit" class="btn btn-primary btn-block">สั่ง</button>

          </div>
        </div>
        <div class="thumbnail">
          <img src="/img/2.jpg" alt="Boats at Phi Phi, Thailand">
          <div class="caption">
            <p>โป๊ะแตกทะเลแห้ง</p>
            <button type="submit" class="btn btn-primary btn-block">สั่ง</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<!-- <div class="row">
  <div class="col-md-6" >
   <b style="font-size: 20px;">โปรโมชั่น</b>
   <span class="line"></span>
   <br>
   <div class="list-group">
    
  </div>
</div>
</div>
-->

<h1 align="center">รูปภาพบรรยากาศ</h1>
<hr width=18% size=50px color=ff0088></font>
<div class="col-xs-6 col-md-3">
  <div class="thumbnail">
    <img src="/img/d1.jpg" alt="Boats at Phi Phi, Thailand">


  </div>
  <div class="thumbnail">
    <img src="/img/d2.jpg" alt="Boats at Phi Phi, Thailand">

  </div>
  <div class="thumbnail">
    <img src="/img/d5.jpg" alt="Boats at Phi Phi, Thailand">

  </div>

</div>

<div class="col-xs-6 col-md-3">
  <div class="thumbnail">
    <img src="/img/d3.jpg" alt="Boats at Phi Phi, Thailand">

  </div>
  <div class="thumbnail">
    <img src="/img/d4.jpg" alt="Boats at Phi Phi, Thailand">

  </div>
  <div class="thumbnail">
    <img src="/img/d7.jpg" alt="Boats at Phi Phi, Thailand">

  </div>

</div>

<div class="col-xs-6 col-md-3">
  <div class="thumbnail">
    <img src="/img/d5.jpg" alt="Boats at Phi Phi, Thailand">

  </div>
  <div class="thumbnail">
    <img src="/img/d6.jpg" alt="Boats at Phi Phi, Thailand">

  </div>
  <div class="thumbnail">
    <img src="/img/d14.jpg" alt="Boats at Phi Phi, Thailand">

  </div>


</div>

<div class="col-xs-6 col-md-3">
  <div class="thumbnail">
    <img src="/img/d16.jpg" alt="Boats at Phi Phi, Thailand">

  </div>
  <div class="thumbnail">
    <img src="/img/d15.jpg" alt="Boats at Phi Phi, Thailand">

  </div>
  <div class="thumbnail">
    <img src="/img/d9.jpg" alt="Boats at Phi Phi, Thailand">

  </div>

</div>



<br>


<br>
<!-- <div class="row" style="height: 5px;
display: block;
background: #85b910; ">
<span class="line"></span>

</div>
-->
</br>
<div class="row">
  <div class="col-xs-6 col-md-12">
    <div style="padding: 10px;">
      <h2 class="section-title">
        <img src="/img/route.PNG" style="width: 3%;"> สถานที่ตั้ง
      </h2>
    </div>
    <div class="col-md-12">

     <div >
      <div id="map" style="width:100%;height:500px"></div>
      <script>
        function myMap(){
          var lat = 16.9086023;
          var long = 99.1219971;
                // var lat = lat;
                // var long = long;
                var namesnace = "เป็นต่อ ก่อสร้าง&คาเฟ่";
                var mapCanvas = document.getElementById("map");
                var myCenter = new google.maps.LatLng(lat,long);
                var mapOptions = {center: myCenter, zoom: 15};
                var map = new google.maps.Map(mapCanvas,mapOptions);
                var marker = new google.maps.Marker({
                  position: myCenter,
                  animation: google.maps.Animation.BOUNCE
                });
                marker.setMap(map);

                var infowindow = new google.maps.InfoWindow({
                  content:namesnace
                });
                infowindow.open(map,marker);
              }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9x7E5toahKKgMmeDNLVy3YUbkA5cNxM0&callback=myMap"></script>

          </div>

        </div>

        <div class="col-md-6">
          <h3>ข้อมูลติดต่อ </h3>
          <hr>
          <p>เบอร์โทร: 087-8506606</p>

          <p><a href="https://www.facebook.com/PentorTKn"><img src="/img/facebook.png"></a>
           <!--<img src="/img/facebook.png">--></p>
           <p><a href="/register"><img src="/img/line.png"></a></p>
           <p>

           </p>

         </div>



         <br>
<!-- <div class="row" style="height: 5px;
display: block;
background: #85b910; ">
<span class="line"></span>

</div>
--> <div class="col-md-6">
  <h3> ติดต่อเราโดยใช้แบบฟอร์ม</h3>
  <hr>
  <form>
    <div class="form-group">
      <label for="exampleInputName1">ชื่อ-สกุล</label>
      <input type="name" class="form-control" id="exampleInputName1" placeholder="">
    </div>
    <div class="form-group">
      <label >อีเมล์</label>
      <input type="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputCall1">เบอร์โทร</label>
      <input type="call" class="form-control" id="exampleInputCall1" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputSubject1">เรื่องที่ติดต่อ</label>
      <input type="subject" class="form-control" id="exampleInputSubject1" placeholder="">
    </div>
    <div class="form-group">
     <label for="exampleInputMessage1"><br>ข้อความ</br></label>
     <textarea class="form-control"></textarea>
   </div>
   <button type="submit" class="btn btn-primary">ยืนยัน</button>
 </form>
 <br>

</div>

</div>




</div>

@endsection
@section('javascript')
<br>
@endsection

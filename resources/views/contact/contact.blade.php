@extends('layouts.master')

@section('content')
<div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

          <div class="item active">
            <img src="/img/c1.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
              <h3><a href="/register">หน้าแรก</a></h3>
              <p>LA is always so much fun!</p>
          </div>
      </div>

      <div class="item">
        <img src="/img/c20.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
      </div>
  </div>

  <div class="item">
    <img src="/img/d14.jpg" alt="New York" style="width:100%;">
    <div class="carousel-caption">
      <h3>New York</h3>
      <p>We love the Big Apple!</p>
  </div>
</div>

</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>

</div>

<div class="row">
  <div style="padding: 10px;">
    <h2 class="section-title">
      <img src="/img/route.PNG" style="width: 3%;"> สถานที่ตัง
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
                var namesnace = "เป็นต่อ ก่อสร้างคาเฟ่";
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
          <p>210/10 ถนน พหลโยธิน ต.ไม้งาม</p>
          <p>อ.เมืองตาก จ.ตาก 63000</p>
          <p>เบอร์โทร 0955535222</p>
          <p>......................</p>
          <p>......................</p>


            <p>โทร: 087-8506606</p>

            <p><a href="/login"><img src="/img/facebook.png"></a>
       <!--<img src="/img/facebook.png">--></p>
            <p><a href="/register"><img src="/img/line.png"></a></p>
            <p>
        
           </p>
        
        </div>
        <div class="col-md-6">
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
           
        </div>

      </div>

@endsection
@section('javascript')
</br>
@endsection

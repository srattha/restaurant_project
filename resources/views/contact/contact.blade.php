@extends('layouts.master')
@section('title','ติดต่อเรา')
@section('content')
<div class="row">
  <img src="img/v.jpg" class="img-responsive" />
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
          <h3 class="text-center">ข้อมูลติดต่อ </h3>
            <hr>
             <h3 class="text-center">210/10 ถนน พหลโยธิน ต.ไม้งาม</h3>
             <h3 class="text-center">อ.เมืองตาก จ.ตาก 63000</h3>
             <h3 class="text-center"><i class="fa fa-phone-square" aria-hidden="true"></i> เบอร์โทร 0955535222</h3>

            <p class="text-center"><a href="https://www.facebook.com/PentorTK"><img src="/img/facebook.png"> Facebook </a>
             <!--<img src="/img/facebook.png">--></p>
             <p class="text-center"><a href="/register"><img src="/img/line.png"></a> Line </p>

         </div>
         <div class="col-md-6">
          <h3> ติดต่อเราโดยใช้แบบฟอร์ม</h3>
          <hr>
          <form method="POST" action="{{ route('contact') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputName1">ชื่อ-สกุล</label>
              <input type="name" name="name" class="form-control"  placeholder="">
            </div>
            <div class="form-group">
              <label >อีเมล์</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleInputCall1">เบอร์โทร</label>
              <input type="call" name="telephone_number" class="form-control" placeholder="เบอร์โทร">
            </div>
            <div class="form-group">
              <label for="exampleInputSubject1">เรื่องที่ติดต่อ</label>
              <input type="subject" name="contact" class="form-control"  placeholder="เรื่องที่ติดต่อ">
            </div>
            <div class="form-group">
             <label for="exampleInputMessage1"><br>ข้อความ</br></label>
             <textarea class="form-control" name="message"></textarea>
           </div>
           <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ยืนยัน</button>
         </form>

       </div>

     </div>
     <br>
     @endsection
     @section('javascript')
   </br>
   @endsection


@extends('layouts.master')
@section('title','หน้าแรก')
@section('css')
<link href="{{ asset('/vendor/magicscroll/thumbs2.css') }}" rel="stylesheet">
<link href="{{ asset('/vendor/magicscroll/thumbnail-slider.css') }}" rel="stylesheet">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

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

</style>
@endsection
@section('content')
<div class="row">
  <img src="img/v.jpg" class="img-responsive" />
</div>
<br>
<div class="row">
 <div class="col-md-6">
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     @foreach( $promotion as $p)
     <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
     @endforeach
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
    @foreach( $promotion as $p )
       <div class="item {{ $loop->first ? 'active' : '' }}">
         <div class="hovereffect">
           <img src="{{ asset('storage/promotion/'.$p->qrimage) }}" alt="" style="width:100%; height: 100%;">
           <div class="overlay">
             <h2>{{$p->name}}</h2>
             <a class="info" href="/reser">ดูทั้งหมด</a>
           </div>
           <div class="carousel-caption d-none d-md-block">
             <h3>{{$p->explain}}</h3>
           </div>
         </div>
       </div>
    @endforeach
  </div>
</div>
</div>
<div class="col-md-6">
 <di
 v class="panel panel-success">
  <div class="panel-heading"><b style="font-size: 20px;">เวลาเปิดบริการ</b></div>
  <div class="panel-body">
   <h1 class="text-center">12:00 น. - 24:00 น.</h1>.
    <h3 class="text-center" style="font-family: 'Sriracha', cursive;">หยุดทุกวันพุธ</h3>
  </div>
</div>
<!-- </div> -->
</div>
<br>
<div class="row" style="background: #F1F3F5;">
  <div>
   <h3 align="center">เมนูอาหารแนะนำ</h3>
   <hr width=18% size=50px color=ff0088>
 </div>
 <div id="thumbnail-slider">
  <div class="inner">
    <ul>
      @foreach ($food_is_recommend as $index => $is_recommend)
      <li>
        <a href="/food">
          <div class="hovereffect">
            <img class="thumb" src="{{ asset('storage/Food_menus/'.$is_recommend->image) }}" alt="" >
            <div class="overlay" style="cursor: pointer;">
             <h2>{{$is_recommend->food_name}}</h2>
             <!-- <a class="info" href="/food">ดูทั้งหมด</a> -->
           </div>
         </div>
       </a>
     </li>
     @endforeach
   </ul>
 </div>
</div>
<br>
</div>
<div class="row">
  <h3 align="center">รูปภาพบรรยากาศ</h3>
  <hr width=18% size=50px color=ff0088>
  @foreach ($show_image as $show_images)
  <div class="col-md-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 filter">
    <a class="example-image-link" width="304" height="304" style="height: 100%;" href="{{ asset('storage/Shopatmosphere/'.$show_images->image) }}"
      data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
      <img class="example-image img-thumbnail" src="{{ asset('storage/Shopatmosphere/'.$show_images->image) }}"  alt="Cinque Terre" width="304" height="304" style="height: 200px;"/></a>
    </div>
    @endforeach
  </div>
</br>
<div class="row">
  <h3 align="center">สถานที่ตั้ง</h3>
  <hr width=18% size=50px color=ff0088>
  <div class="col-md-12">
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
          <div class="col-md-6">
            
            <h3 class="text-center">ข้อมูลติดต่อ </h3>
            <hr>
            <br>
             <h3 class="text-center">210/10 ถนน พหลโยธิน ต.ไม้งาม</h3>
             <h3 class="text-center">อ.เมืองตาก จ.ตาก 63000</h3>
             <h3 class="text-center"><i class="fa fa-phone-square" aria-hidden="true"></i>เบอร์โทร 0955535222</h3>

            <p class="text-center"><a href="https://www.facebook.com/PentorTK"><img src="/img/facebook.png"> Facebook</a>
             <!--<img src="/img/facebook.png">--></p>
             <p class="text-center"><img src="/img/line.png"> Line </a></p>
             <br>
             <br>
             <p class="text-center"><img src="/img/g1.jpg" class="img-circle">

             </p>

           </div>
           <div class="col-md-6">
            <h3> ติดต่อเราโดยใช้แบบฟอร์ม</h3>
            <hr>
            <form method="POST" action="{{ route('contact') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">ชื่อ-สกุล</label>
                <input type="name" name="name" class="form-control"  placeholder="ชื่อ-สกุล">
              </div>
              <div class="form-group">
                <label >อีเมล์</label>
                <input type="email" name="email" class="form-control" placeholder="อีเมล์">
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
             <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ยืนยัน </button>
           </form>
         </div>
       </div>
       <br>
       <br>
       @endsection
       @section('javascript')
       <script src="{{ asset('/vendor/magicscroll/thumbnail-slider.js') }}"></script>
       @endsection


@extends('layouts.master')
@section('title','หน้าแรก')
@section('css')
<link href="{{ asset('/vendor/magicscroll/magicscroll.css') }}" rel="stylesheet">
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
.cfg-btn {
  background-color: rgb(55, 181, 114);
  color: #fff;
  border: 0;
  box-shadow: 0 0 1px 0px rgba(0,0,0,0.3);
  outline:0;
  cursor: pointer;
  width: 200px;
  padding: 10px;
  font-size: 1em;
  position: relative;
  display: inline-block;
  margin: 10px auto;
}
.cfg-btn:hover:not([disabled]) {
  background-color: rgb(37, 215, 120);
}
.mobile-magic .cfg-btn:hover:not([disabled]) { background: rgb(55, 181, 114); }
.cfg-btn[disabled] { opacity: .5; color: #808080; background: #ddd; }

.cfg-btn.btn-preview,
.cfg-btn.btn-preview:active,
.cfg-btn.btn-preview:focus {
  font-size: 1em;
  position: relative;
  display: block;
  margin: 10px auto;
}

.cfg-btn,
.preview,
.app-figure,
.api-controls,
.wizard-settings,
.wizard-settings .inner,
.wizard-settings .footer,
.wizard-settings input,
.wizard-settings select {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.preview,
.wizard-settings {
  padding: 10px;
  border: 0;
  min-height: 1px;
}
.preview {
  position: relative;
}

.api-controls {
  text-align: center;
}
.api-controls button,
.api-controls button:active,
.api-controls button:focus {
 width: 80px; font-size: .7em;
 white-space: nowrap;
}

.app-figure {
  width: 80% !important;
  margin: 50px auto; border: 0px solid red;
  padding: 20px;
  position: relative;
  text-align: center;
}
.selectors { margin-top: 10px; }

.app-code-sample {
  max-width: 80%;
  margin: 80px auto 0;
  text-align: center;
  position: relative;
}
.app-code-sample input[type="radio"] {
  display: none;
}
.app-code-sample label {
  display: inline-block;
  padding: 2px 12px;
  margin: 0;
  font-size: .8em;
  text-decoration: none;
  cursor: pointer;
  color: #666;
  border: 1px solid rgba(136, 136, 136, 0.5);
  background-color: transparent;
}
.app-code-sample label:hover {
  color: #fff;
  background-color: rgb(253, 154, 30);
  border-color: rgb(253, 154, 30);
}
.app-code-sample input[type="radio"]:checked+label {
  color: #fff;
  background-color: rgb(110, 110, 110) !important;
  border-color: rgba(110, 110, 110, 0.7) !important;
}
.app-code-sample label:first-of-type {
  border-radius: 4px 0 0 4px;
  border-right-color: transparent;
}
.app-code-sample label:last-of-type {
  border-radius: 0 4px 4px 0;
  border-left-color: transparent;
}

.app-code-sample .app-code-holder {
  padding: 0;
  position: relative;
  border: 1px solid #eee;
  border-radius: 0px;
  background-color: #fafafa;
  margin: 15px 0;
}
.app-code-sample .app-code-holder > div {
  display: none;
}
.app-code-sample .app-code-holder pre {
  text-align: left;
  white-space: pre-line;
  border: 0px solid #eee;
  border-radius: 0px;
  background-color: transparent;
  padding: 25px 50px 25px 25px;
  margin: 0;
  min-height: 25px;
}
.app-code-sample input[type="radio"]:nth-of-type(1):checked ~ .app-code-holder > div:nth-of-type(1) {
  display: block;
}
.app-code-sample input[type="radio"]:nth-of-type(2):checked ~ .app-code-holder > div:nth-of-type(2) {
  display: block;
}

.app-code-sample .app-code-holder .cfg-btn-copy {
  display: none;
  z-index: -1;
  position: absolute;
  top:10px; right: 10px;
  width: 44px;
  font-size: .65em;
  white-space: nowrap;
  margin: 0;
  padding: 4px;
}
.copy-msg {
  font: normal 11px/1.2em 'Helvetica Neue', Helvetica, 'Lucida Grande', 'Lucida Sans Unicode', Verdana, Arial, sans-serif;
  color: #2a4d14;
  border: 1px solid #2a4d14;
  border-radius: 4px;
  position: absolute;
  top: 8px;
  left: 0;
  right: 0;
  width: 200px;
  max-width: 70%;
  padding: 4px;
  margin: 0px auto;
  text-align: center;
}
.copy-msg-failed {
  color: #b80c09;
  border-color: #b80c09;
  width: 430px;
}
.mobile-magic .app-code-sample .cfg-btn-copy { display: none; }
#code-to-copy { position: absolute; width: 0; height: 0; top: -10000px; }
.lt-ie9-magic .app-code-sample { display: none; }

@media screen and (max-width: 600px) {
  .api-controls button, .api-controls button:active, .api-controls button:focus {
    width: 70px;
  }
}
@media screen and (max-width: 560px) {
  .api-controls .sep { content: ''; display: table; }
}
@media screen and (min-width: 1600px) {
  .preview { padding: 10px 160px; }
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
 <div class="panel panel-success">
  <div class="panel-heading"><b style="font-size: 20px;">เวลาเปิดบริการ</b></div>
  <div class="panel-body">
   <h1 class="text-center">12:00 น. - 24:00 น.</h1>.
   <h3 class="text-center">หยุดทุกวันพุธ</h3>
 </div>
</div>
</div>
</div>
<br>
<div class="row" style="background: #F1F3F5;">
  <div>
   <h3 align="center">เมนูอาหารแนะนำ</h3>
   <hr width=18% size=50px color=ff0088>
 </div>

 <div>
   @foreach ($food_is_recommend as $index => $is_recommend)
   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <br>
    <div class="hovereffect">
     <img src="{{ asset('storage/Food_menus/'.$is_recommend->image) }}" alt="" style="width:100%; height: 200px;">
     <div class="overlay">
       <h2>{{$is_recommend->food_name}}</h2>
       <a class="info" href="/food">ดูทั้งหมด</a>
     </div>
   </div>
 </div>
 @endforeach
</div>

</div>
<br>
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
            <p class="text-center">210/10 ถนน พหลโยธิน ต.ไม้งาม</p>
            <p class="text-center">อ.เมืองตาก จ.ตาก 63000</p>
            <p class="text-center">เบอร์โทร 0955535222</p>

            <p class="text-center"><a href="https://www.facebook.com/PentorTK"><img src="/img/facebook.png"></a>
             <!--<img src="/img/facebook.png">--></p>
             <p class="text-center"><a href="/register"><img src="/img/line.png"></a></p>
             <p>

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
             <button type="submit" class="btn btn-primary">ยืนยัน</button>
           </form>
         </div>
       </div>

       <div class="preview col">

        <div class="app-figure">
          <div class="MagicScroll">
            <a><img
              srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-1-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-1-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Plaid</a>
              <a><img
                srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-2-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-2-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Green</a>
                <a><img
                  srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-3-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-3-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Tartan</a>
                  <a><img
                    srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-4-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-4-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Pink</a>
                    <a><img
                      srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-5-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-5-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Black</a>
                      <a><img
                        srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-6-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-6-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Orange</a>
                        <a><img
                          srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-7-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-7-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Charcoal</a>
                          <a><img
                            srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-8-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-8-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Navy</a>
                            <a><img
                              srcset="http://magictoolbox.sirv.com/images/magicscroll/allstar-9-1b.jpg?canvas.height=180&canvas.width=280 2x" src="http://magictoolbox.sirv.com/images/magicscroll/allstar-9-1b.jpg?scale.height=130&canvas.height=90&canvas.width=140" />All Star Red</a>
                            </div>
                          </div>
                        </div>

                        @endsection
                        @section('javascript')
                        <script src="{{ asset('/vendor/magicscroll/magicscroll.js') }}"></script>
                        <script>

                          var MagicScrollOptions = {};
                          magicJS.extend(MagicScrollOptions, callbacks);

                        </script>
                        @endsection

<style type="text/css">
footer{
  background-color:#323232;
  padding: 60px 0px;
}

footer ul{
  list-style:none;
  margin:0 auto;
  display:inline-block;
  padding-top:50px;
}

footer ul li{
  float:left;
}

footer ul li a{
  color:#b1aca1;
  padding:20px;
}

footer ul li a:hover{
  color:#7dabdb;
  text-decoration:none;
}
.hovermenu:hover {
    background-color: #555;
}

.footer-top{
  padding-bottom:50px;
}

.footer-top .fa{
  font-size:18px;
  color: #FFF;
  padding-right:10px;
}

.footer-top a{
  color:#FFF;
  text-decoration:none;
}

.footer-top .col-lg-2:hover .fa , .footer-top .col-lg-2:hover a{
  color:#7dabdb;
}

.copyright{
  background-color:#fff;
}

.copyright p{
  font-size:12px;
  padding:15px 0 10px 0;
}

.navbar {
  border-radius: 0px;
  margin-bottom: 0px;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
  color: #fff;
  background-color: #555;
}
a {
  color: #333;
  text-decoration: none;
}
/*li:hover {
  background-color: #555;
  }*/
  .navbar-inverse {
   background-color: #323232;
   border-color:#323232;
 }

</style>

<div class="row">
  <footer>
       <!-- <div class="footer-top">
         <div class="container">
           <div class="col-lg-2 col-xs-12 text-center">
               <a href="#"><i class="fa fa-facebook fa-2x"></i>Facebook</a>
           </div>
           <div class="col-lg-2 col-xs-12 text-center">
               <a href="#"><i class="fa fa-twitter fa-2x"></i>Twitter</a>
           </div>
           <div class="col-lg-2 col-xs-12 text-center">
               <a href="#"><i class="fa fa-flickr fa-2x"></i>Line</a>
           </div>

       </div>
     </div>-->

     <div class="container" style="border-top:1px solid grey;">
      <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2">
          <nav class="navbar navbar-inverse">
            <!-- <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div> -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }} hovermenu"><a href="{{ url('/') }}"  style="color: rgba(255,255,255,0.9);">หน้าแรก</a></li>
                <li class="{{ Request::is('food') ? 'active' : '' }} hovermenu"><a href="{{ url('/food') }}" style="color: rgba(255,255,255,0.9);">เมนูอาหาร</a></li>
                <li class="{{ Request::is('status') ? 'active' : '' }} hovermenu"><a href="{{ url('/status') }}" style="color: rgba(255,255,255,0.9);">สถานะโต๊ะ</a></li>
                <li class="{{ Request::is('reser') ? 'active' : '' }} hovermenu"><a href="{{ url('/reser') }}" style="color: rgba(255,255,255,0.9);">โปรโมชั่น</a></li>
                <li class="{{ Request::is('image') ? 'active' : '' }} hovermenu"><a href="{{ url('/image') }}" style="color: rgba(255,255,255,0.9);">รูปบรรยากาศภายในร้าน</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }} hovermenu"><a href="{{ url('/contact') }}" style="color: rgba(255,255,255,0.9);">ติดต่อเรา</a></li>
              </ul>

            </div>

          </nav>
        </div>
      </div>
    </div>

</footer>


<div class="copyright">
 <div class="container">

   <div class="row text-center">
    <p>Copyright © 2018 </p>
  </div>

</div>
</div>
</div>

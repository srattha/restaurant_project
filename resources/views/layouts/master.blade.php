<!doctype html>
<html lang="">
<head>
  <meta charset="utf-8">
  <style type="text/css"></style>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--  <link href="{{ asset('/vendor/bootstrap/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet"> -->

  <!-- MetisMenu CSS -->
  <link href="{{ asset('/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

  <!-- Toastr CSS -->
  <link href="{{ asset('/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet">

  <link href="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="{{ asset('/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('/assets/css/sb-admin-2.css') }}" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="{{ asset('/vendor/morrisjs/morris.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- styel Css -->
  <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/css/lightbox.css') }}" rel="stylesheet">

  <!-- jQuery -->
  <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- <script src="{{ asset('/vendor/bootstrap/js/bootstrap-datetimepicker.min.js') }}"></script> -->
  <script src="{{ asset('/vendor/moment/moment.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrapdatapicker/bootstrapdatetimepicker.min.js') }}"></script>


  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>

  <!-- Toastr JavaScript -->
  <script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>

  <script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
  <script src="{{ asset('/assets/js/lightbox.js') }}"></script>
 


  @yield('css')

<style type="text/css">
  /* Absolute Center Spinner */

  a {
        color: #333333;
        text-decoration: none;
    }
  .navbar-inverse {
    border-radius: 0px;
  }
  .navbar {
    margin-bottom: 0px;
  }
  a {
    color: #333;
    text-decoration: none;
  }
#overlay {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
#overlay:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
#overlay:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

#overlay:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.clock-button {
  background-color: blueviolet;
  padding: 0.5em;
  color: white;
}

.clock-placement {
  position: fixed;
  /* Fixed/sticky position */
  top: 20px;
  /* Place the button at the top of the page */
  right: 30px;
  /* Place the button 30px from the right */
  z-index: 99;
  /* Make sure it does not overlap */
}
.navbar {
    border-radius: 0px;
    margin-bottom: 0px;
}
</style>
<script type="text/javascript">
  ;(function(){
    function id(v){ return document.getElementById(v); }
    function loadbar() {
      var ovrl = id("overlay"),
      prog = id("progress"),
      stat = id("progstat"),
      img = document.images,
      c = 0,
      tot = img.length;
      if(tot == 0) return doneLoading();

      function imgLoaded(){
        c += 1;
        var perc = ((100/tot*c) << 0) +"%";
        prog.style.width = perc;
        stat.innerHTML = "Loading "+ perc;
        if(c===tot) return doneLoading();
      }
      function doneLoading(){
        ovrl.style.opacity = 0;
        setTimeout(function(){
          $('.sidebar-category').fadeIn();
          $('.navbar-right').fadeIn();
        }, 300);

        setTimeout(function(){
          ovrl.style.display = "none";
        }, 1500);
      }
      for(var i=0; i<tot; i++) {
        var tImg     = new Image();
        tImg.onload  = imgLoaded;
        tImg.onerror = imgLoaded;
        tImg.src     = img[i].src;
      }
    }
    document.addEventListener('DOMContentLoaded', loadbar, false);
  }());
</script>


</head>
<body style="background: #e1ebf5;">
  <div id="overlay">
    <div id="progstat"></div>
    <div id="progress"></div>
  </div>

  <div class="container" style="
  background: #fff;
  box-shadow: 0 3px 10px rgba(0, 0, 50, 0.1);
 /* position: fixed;
  right: 0px;
  left: 0;
  z-index: 1030;*/
  ">
  <div class="row" style="margin-top: 15px;">
    <div class="col-md-4 col-sm-4 col-xs-4">
     <i class="fa fa-clock-o" aria-hidden="true"></i>  <script language="javascript">
        now = new Date();
        var thday = new Array ("อาทิตย์","จันทร์",
          "อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์");
        var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม",
          "เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน",
          "ตุลาคม","พฤศจิกายน","ธันวาคม");

        document.write("วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " +
          thmonth[now.getMonth()]+ " " + (now.getFullYear()+ 543));
        </script>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4">
       <i class="fa fa-phone-square" aria-hidden="true"></i> ติดตามเรา :08-123-456-789
     </div>
     <div class="col-md-4 col-sm-4 col-xs-4">
      <div >
        @if(Auth::user())
        <div style="margin-top: -16px;">
         <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw"></i>  <span>{{Auth::user()->name}}</span> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
              </li>
              <li><a href="{{ route('customer_report',['id'=>Auth::user()->id]) }}"><i class="fa fa-gear fa-fw"></i> การสั่งของฉัน</a>
              </li>
              <li class="divider"></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </ul>
        </li>

      </ul>
    </div>

    @else
    <div style="text-align: right;">
    <a href="/login">เข้าสู่ระบบ</a>
    <a href="/register">สมัครสมาชิก</a>
    </div>

    @endif

  </div>

</div>
</div>
<div class="row">
  @if(session()->has('reservation'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ session()->get('reservation') }}</strong> 
  </div>
@endif
</div>
<div class="row" style="margin-top: 15px;">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
      <img src="/img/g1.jpg" class="img-circle">
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <br>

      <ul class="nav navbar-nav">
        <li><a href="/">หน้าแรก</a></li>
        <li><a href="/food">เมนูอาหาร</a></li>
        <li><a href="/status">สถานะโต๊ะ</a></li>
        <li><a href="/reser">โปรโมชั่น</a></li>
        <li><a href="/image">รูปบรรยากาศภายในร้าน</a></li>
        <li><a href="/contact">ติดต่อเรา</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->

  </nav>
</div>

<!-- <div class="container" style="
background: #fff;
box-shadow: 0 3px 10px rgba(0, 0, 50, 0.1);
padding-top: 140px;"> -->
@yield('content')
@yield('javascript')
@include('layouts.footer')
</div>

</body>
</html>

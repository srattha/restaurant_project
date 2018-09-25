<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/png" href="/img/g1.jpg"/>
  <title>@yield('title')</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
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
   <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
  <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/vendor/moment/moment.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrapdatapicker/bootstrapdatetimepicker.min.js') }}"></script>




  @yield('css')
  <style type="text/css">
  a {
   color: #333333;
   text-decoration: none;
 }
 body{
    font-family: 'Sriracha', cursive;
  }
 /*  #overlay{
     position:fixed;
     z-index:99999;
     top:0;
     left:0;
     bottom:0;
     right:0;
     background:#f5f5f7;
     transition: 1s 0.4s;
   }
   #progress{
     height:5px;
     background:#333333;
     position:absolute;
     width:0;
     top:50%;
   }
   #progstat{
     font-size:24px;
     letter-spacing: 3px;
     position:absolute;
     top:50%;
     margin-top:-40px;
     width:100%;
     text-align:center;
     color:#333333;
   }
   */
   .switch {
     position: relative;
     display: inline-block;
     width: 60px;
     height: 34px;
   }

   .switch input {display:none;}

   .slider {
     position: absolute;
     cursor: pointer;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #F44336;
     -webkit-transition: .4s;
     transition: .4s;
   }

   .slider:before {
     position: absolute;
     content: "";
     height: 26px;
     width: 26px;
     left: 4px;
     bottom: 4px;
     background-color: white;
     -webkit-transition: .4s;
     transition: .4s;
   }

   input:checked + .slider {
     background-color: #5cb85c;
   }

   input:focus + .slider {
     box-shadow: 0 0 1px #2196F3;
   }

   input:checked + .slider:before {
     -webkit-transform: translateX(26px);
     -ms-transform: translateX(26px);
     transform: translateX(26px);
   }

   /* Rounded sliders */
   .slider.round {
     border-radius: 34px;
   }

   .slider.round:before {
     border-radius: 50%;
   }

   .print-page{
     display: none;
   }
   @media print{
     .print-page{
       display: block;

     }
     table, td, th {
      border: none;
    }

    table {
      border-collapse: none;
      width: 100%;
    }

    th {
      height: 50px;
    }

     .page{
       display: none;
     }
   }

 </style>
 <style type="text/css">
 .nopad {
   padding-left: 0 !important;
   padding-right: 0 !important;
 }
 /*image gallery*/
 .image-checkbox {
   cursor: pointer;
   box-sizing: border-box;
   -moz-box-sizing: border-box;
   -webkit-box-sizing: border-box;
   border: 4px solid transparent;
   margin-bottom: 0;
   outline: 0;
 }
 .image-checkbox input[type="checkbox"] {
   display: none;
 }
 .image-checkbox-checked {
   border-color: #4783B0;
 }
 .image-checkbox .fa {
   position: absolute;
   color: #ffffff;
   background-color: rgba(0,0,0,.5);
   padding: 10px;
   top: 0;
   right: 0;
 }
 .image-checkbox-checked .fa {
   display: block !important;
 }

      /* button {
        margin: 4px;
        cursor: pointer;
        }*/
        .qty {
          text-align: center;
          width: 40px;
          /* margin: 4px;*/
          color: #333;
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
      </style>
      <script type="text/javascript">
       (function(){

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

   <body>

    <div id="overlay">
     <div id="progstat"></div>
     <div id="progress"></div>
   </div>
   <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/counter_staff">เป็นต่อ ก่อสร้าง&คาเฟ่</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">
         <i class="fa fa-user fa-fw"></i>  <span>{{Auth::user()->name}}</span> <i class="fa fa-caret-down"></i>
       </a>
       <ul class="dropdown-menu dropdown-user">
        <li><a href="{{ route('profile',['id'=>1]) }}"><i class="fa fa-user fa-fw"></i>โปรไฟล์</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       {{ csrf_field() }}
     </form>
   </ul>
 </li>
</ul>
</nav>

@yield('content')


<!-- jQuery -->
<script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>
<!-- Toastr JavaScript -->
<script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>
<script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

@yield('javascript')
</body>

</html>

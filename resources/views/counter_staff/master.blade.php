<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
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
  <link href="{{ asset('/vendor/sweetalert/sweetalert.css') }}" rel="stylesheet">
  <script src="{{ asset('/vendor/sweetalert/sweetalert.js') }}"></script>
  <!-- jQuery -->
  <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/vendor/moment/moment.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrapdatapicker/bootstrapdatetimepicker.min.js') }}"></script>
<!--   <script src="{{ asset('/vendor/sweetalert/switchery.min.js') }}"></script> -->



  @yield('css')
      <!--  <style type="text/css">
         a {
             color: #333333;
             text-decoration: none;
         }
         #overlay{
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

         .page{
             display: none;
         }

       </style> -->
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
      <a class="navbar-brand" href="/counter_staff">PENTOR CAFE</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">
         <i class="fa fa-user fa-fw"></i>  <span>{{Auth::user()->name}}</span> <i class="fa fa-caret-down"></i>
       </a>
       <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
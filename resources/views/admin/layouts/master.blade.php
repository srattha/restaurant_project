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
    <link href="{{ asset('/assets/css/lightbox.css') }}" rel="stylesheet">

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

    </style> -->

  <!--   <script type="text/javascript">
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
    </script> -->

</head>

<body>
    <div class="preloader">
        <div class="spinner">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
      </div>
  </div>
  <div id="overlay">
    <div id="progstat"></div>
    <div id="progress"></div>
</div>

<div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
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
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="{{ route('home.index') }}"><i class="fa fa-users" aria-hidden="true"></i> จัดการ ข้อมูลสมาชิก</a>
            </li>
            <li>
                <a href="{{ route('foodmenu.all_foodmanu') }}"><i class="fa fa-cutlery"></i> จัดการ เมนูอาหาร</a>
            </li>
            <li>
                <a href="/dining_table"><i class="fa fa-wpforms fa-fw"></i> จัดการ โต๊ะอาหาร</a>
            </li>
            <li>
               <a href="{{ route('promotion.promotion') }}"><i class="fa fa-bullhorn"></i> จัดการ โปรโมชั่น</a>
           </li>
           <li>
               <a href="/shop_atmosphere"><i class="fa fa-picture-o"></i> จัดการ รูปภาพบรรยากาศ</a>
           </li>
           <li>
               <a href="/report_reservation"><i class="fa fa-cutlery"></i> แสดงรายงาน การจอง</a>
           </li>


       </ul>
   </div>
   <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper" style="min-height: 923px;">
    <div class="container-fluid">
        @yield('content')
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>

<!-- Toastr JavaScript -->
<script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>

<script src="{{ asset('/assets/js/lightbox.js') }}"></script>
<script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>


@yield('javascript')
</body>

</html>

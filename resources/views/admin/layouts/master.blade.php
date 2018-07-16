<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>laeavel</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Toastr CSS -->
    <link href="{{ asset('/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/assets/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- styel Css -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    @yield('css')

    <style type="text/css">
        a {
    color: #333333;
    text-decoration: none;
}
    </style>

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

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

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
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('home.index') }}"><i class="fa fa-users" aria-hidden="true"></i> จัดการข้อมูลสมาชิก</a>
            </li>

            <li>
                <a href="{{ route('foodmenu.all_foodmanu') }}"><i class="fa fa-wpforms fa-fw"></i> จัดการเมนูอาหาร</a>
            </li>

            <!-- <li>
                <a href=""><i class="fa fa-wpforms fa-fw"></i> จัดการเมนูอาหาร<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('foodmenu.all_foodmanu') }}"><i class="fa fa-share" aria-hidden="true"></i> เมนูอาหารทั้งหมด</a>
                    </li>
                    <li>
                        <a href="{{ route('foodmenu.recommended_menu')}}"><i class="fa fa-share" aria-hidden="true"></i> เมนูอาหารแนะนำ</a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href=""><i class="fa fa-book" aria-hidden="true"></i> แสดงรายงานการ จอง<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('reportbooking.table_reservation') }}"><i class="fa fa-share" aria-hidden="true"></i> จัดการ โต๊ะอาหาร</a>
                    </li>
                    <li>
                        <a href="{{ route('foodmenu.recommended_menu')}}"><i class="fa fa-share" aria-hidden="true"></i> รายงานยอด</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('home.index') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> จัดการโปรโมชั่น</a>
            </li>
           

            <li>
                <a href=""><i class="fa fa-file-text-o fa-fw"></i> Log</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
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


@yield('javascript')
</body>

</html>

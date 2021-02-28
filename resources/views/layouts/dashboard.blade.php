<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Ecommerce Mini Project</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
          <!-- Top Bar Start -->
          <div class="topbar">
            <div class="topbar-left"> 
            </div>
         </div>
<!-- Top Bar End -->
        <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <div class="space" id="spacing"></div>
                        <li>
                            <a href=" {{url('/dashboard/products/create')}} "  class="waves-effect">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> <span> Add Product </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/products')}}" class="waves-effect">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span> List Products </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/products/export')}}" class="waves-effect">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span> Export Products </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/orders')}}" class="waves-effect">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span> List Orders </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/customers')}}" class="waves-effect">
                            <i class="fa fa-user" aria-hidden="true"></i> <span> Our Customers </span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('/dashboard/customers/create')}} "  class="waves-effect">
                            <i class="fa fa-plus" aria-hidden="true"></i> <span> Add Customer </span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('/Logout')}} "  class="waves-effect">
                            <i class="fa fa-reply-all" aria-hidden="true"></i> <span> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Content -->
        <div class="content-page">
            <div class="content">
                @yield('content')
            </div>
                    <footer class="footer">
                        © 2021 GINF3 <span class="d-none d-sm-inline-block"> - Atelier E-commerce | Bahnini Saad </span>.
                    </footer>

        </div>

    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="assets/pages/dashboard.init.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
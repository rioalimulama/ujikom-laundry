<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>My Laundry @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{asset('assets/img/icon.ico')}}" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Fonts and icons -->
    <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/css/fonts.min.css')}}">

    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900&display=swap" rel="stylesheet">


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/atlantis.min.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark2">

                <i class="fas fa-box-open fa-2x text-white"></i>
                <h3 class="ml-3 mr-3 text-white"><b>Laundry</b></h3>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="dark2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    
                    <ul class="nav nav-primary">
                        

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Menu</h4>
                        </li>

                        @can('manage-outlets', $user ?? '')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('outlets.index')}}">
                            <i class="fa-fw fas fa-box-open"></i>
                            <span>Manage Outlets</span></a>
                        </li>
                        @endcan

                        @can('manage-users', $user ?? '')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Manage Users</span></a>
                        </li>
                        @endcan

                        @can('manage-members', $user ?? '')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('members.index')}}">
                            <i class="fas fa-fw fa-user-alt"></i>
                            <span>Manage Members</span></a>
                        </li>
                        @endcan

                        @can('manage-packets', $user ?? '')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('packets.index')}}">
                            <i class="fa-fw fas fa-box-open"></i>
                            <span>Manage Packets</span></a>
                        </li>
                        @endcan

                        @can('manage-invoice', $user ?? '')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('transactions.index')}}">
                            <i class="fas fa-fw fa-file-invoice"></i>
                            <span>Manage Invoice</span></a>
                        </li>
                        @endcan
                    
                    
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-fw fa-sign-out-alt "></i>
                                <span>Logout</span>
                            </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel mb-5">
            <div class="content">
                {{-- <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                                <h5 class="text-white op-7 mb-2">Hello \Auth::user()->name</h5>
                            </div>

                        </div>
                    </div> --}}
                    
                <div class="page-inner">

                    

                    @yield('content')

                </div>
                </div>


                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                        <form action="{{route("logout")}}" method="POST">
                        @csrf
                        <button class="btn btn-primary" style="cursor:pointer">Sign Out</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>


            </div>
            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright ml-auto">
                        Copyright © Uji Kompetensi 2020
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    {{-- <script src="https://kit.fontawesome.com/20e16e5617.js"></script> --}}


    <!-- jQuery UI -->
    <script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


    <!-- Atlantis JS -->
    <script src="{{asset('assets/js/atlantis.min.js')}}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{asset('assets/js/setting-demo.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>

    @yield('footer-scripts')
    @yield('snap-js')
</body>

</html>
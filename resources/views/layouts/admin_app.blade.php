<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Admin Panel | @yield('title')</title>
    <!-- vendor css -->
    <link href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/Ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Slim CSS -->
    @stack('css')
    <link rel="stylesheet" href="{{asset('assets/css/slim.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>
    <div class="slim-header with-sidebar">
        <div class="container-fluid">
            <div class="slim-header-left">
                <h2 class="slim-logo"><a href="{{route('admin.dashboard')}}"><img
                            src="{{asset('assets/img/logo-black.png')}}" height="40"><span></span></a></h2>
                <a href="" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
            </div>

            <div class="slim-header-right">
                <!-- dropdown -->
                <div class="dropdown dropdown-c">
                    <a href="#" class="logged-user" data-toggle="dropdown">
                        {{-- <img src="{{asset('assets/img/avatar.png')}}"> --}}
                        <span>{{auth()->user()->name}}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <nav class="nav">
                            <a href="{{route('admin.profile')}}" class="nav-link"><i class="icon ion-ios-person"></i>
                                Edit
                                Profile</a>
                            <a href="{{route('admin.logout')}}" class="nav-link"><i class="icon ion-ios-log-out"></i>
                                Sign
                                Out</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slim-body">
        <div class="slim-sidebar">
            <label class="sidebar-label">Navigation</label>
            <ul class="nav nav-sidebar">
                <li class="sidebar-nav-item">
                    <a href="{{route('admin.dashboard')}}" class="sidebar-nav-link dashboard"><i
                            class="icon ion-ios-speedometer"></i>
                        Dashboard</a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="{{route('admin.users')}}" class="sidebar-nav-link users"><i
                            class="icon ion-ios-people"></i>
                        Users</a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="{{route('admin.products.index')}}" class="sidebar-nav-link sales"><i
                            class="icon ion-ios-list"></i>
                        Products</a>
                </li>
                <li class="sidebar-nav-item with-sub">
                    <a href="" class="sidebar-nav-link"><i class="icon ion-ios-cog"></i> Manage Data</a>
                    <ul class="nav sidebar-nav-sub">
                        <li class="nav-sub-item"> <a href="{{route('admin.categories.index')}}" class="nav-sub-link">
                                Manage Categories</a> </li>
                    </ul>
                </li>
                <li class="sidebar-nav-item">
                </li>
            </ul>
        </div>
        <!-- slim-sidebar -->
        <div class="slim-mainpanel">
            @yield('content')
            <div class="slim-footer">
                <div class="container">
                    <p>Copyright {{date('Y')}} &copy; All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="loading hide">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
    <script src="{{asset('assets/lib/jquery/js/jquery.js')}}"></script>
    <script src="{{asset('assets/lib/popper.js/js/popper.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/d3/js/d3.js')}}"></script>
    <script src="{{asset('assets/js/slim.js')}}"></script>
    @stack('js')
    <script>
        $(function () {
            const menuEl = $('.slim-pageheader').data('menu');
            const $menuEl = $('.nav-sidebar .' + menuEl);
            $menuEl.addClass('active');
        });

    </script>
</body>

</html>

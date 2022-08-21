<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('main_theme/assets/img/basic/favicon.ico')}}" type="image/x-icon">
    <title>Solarmart</title>
    <link rel="stylesheet" href="{{asset('main_theme/assets/css/app.css')}}">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #f5f8fa;
            z-index: 9998;
            text-align: center
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%
        }
    </style>
</head>

<body>
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="l-s-2 blink">LOADING</div>
        </div>
    </div>
    <div id="app" class="paper-loading">
        <div class="btn-fixed-top-left"></div><a href="#" data-toggle="offcanvas"
            class="paper-nav-toggle fixed left"><i></i></a>
        <aside class="main-sidebar fixed offcanvas scroll shadow">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="image float-left"> <img class="user_avatar"
                            src="{{asset('main_theme/assets/img/dummy/u2.png')}}" alt="User Image"></div>
                    <div class="info">
                        <h6 class="p-t-10"> {{ Auth::user()->name }}</h6><a href="#"></a>
                    </div>
                </div>
                <ul class="sidebar-menu scroll">
                    <li class="treeview"><a href="dashboard"><i class="icon-sailing-boat-water purple-text"></i>
                            <span>Dashboard</span></a>
                    </li>
                    @if(Auth::user()->role == "admin")
                    <li class="treeview"><a href="#"><i class="icon icon-package blue-text"></i> <span>Users</span></a>
                        <ul class="treeview-menu">
                            <li><a href="list_sellers"><i class="icon icon-circle-o"></i> All Sellers</a>
                            </li>
                            <li><a href="list_buyers"><i class="icon icon-circle-o"></i> All Buyers</a>
                            </li>
                        </ul>
                    </li> 

                    <li class="treeview"><a href="dashboard"><i class="icon icon-package blue-text"></i> <span>Products</span></a>
                        <ul class="treeview-menu">
                            <li><a href="list_items"><i class="icon icon-circle-o"></i> All Products</a>
                            </li>
                            <li><a href="add_item"><i class="icon icon-pencil"></i>Add New</a>
                            </li>
                        </ul>
                    </li>    
                    <!-- <li><a href="#contact"><i class="icon icon-envelope-o"></i> <span>Contact Form</span></a></li> -->
                    @endif

                    @if(Auth::user()->role == "seller")
                    <li class="treeview"><a href="dashboard"><i class="icon icon-package blue-text"></i> <span>Products</span></a>
                        <ul class="treeview-menu">
                            <li><a href="list_items"><i class="icon icon-circle-o"></i> All Products</a>
                            </li>
                            <li><a href="add_item"><i class="icon icon-pencil"></i>Add New</a>
                            </li>
                        </ul>
                    </li>    
                    <!-- <li><a href="#contact"><i class="icon icon-envelope-o"></i> <span>Contact Form</span></a></li> -->
                    @endif

                    @if(Auth::user()->role == "buyer")
                    <li class="treeview"><a href="#"><i class="icon icon-package blue-text"></i> <span>Products</span></a>
                        <!-- <ul class="treeview-menu">
                            <li><a href="list_items"><i class="icon icon-circle-o"></i> All Products</a>
                            </li>
                            <li><a href="add_item"><i class="icon icon-pencil"></i>Add New</a>
                            </li>
                        </ul> -->
                    </li>    
                    <!-- <li><a href="#contact"><i class="icon icon-envelope-o"></i> <span>Contact Form</span></a></li> -->
                    @endif

                </ul>
            </section>
        </aside>
        <div class="page light offcanvas-page">
            <header class="blue accent-3 relative">
                <div class="navbar navbar-expand navbar-dark d-flex justify-content-end bd-navbar">
                    <ul class="navbar-nav p-t-10">
                        <li class="nav-item dropdown"><a class="nav-item nav-link  mr-md-2" href="#" id="bd-versions"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="icon-more_vert s-18"></i></a>
                            <div class="dropdown-menu dropdown-menu-right b-0 shadow1">
                                <a class="dropdown-item" href="#"><i class="icon-profile"></i> View Profile</a>
                                <a class="dropdown-item" href="#"><i class="icon-money"></i> Earning Reports</a>
                                <div class="dropdown-divider"></div>
                                <a type="button" class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-money"></i> Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                @yield('admin_header')
            </header>

            @yield('content')

    </div>
    <script src="{{asset('main_theme/assets/js/app.js')}}"></script>
</body>

</html>
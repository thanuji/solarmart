<!--header-->
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from xvelopers.com/demos/html/paper-1.8.2/home-shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:18:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('main_theme/assets/img/basic/favicon.ico')}}" type="image/x-icon">
    <title>Paper</title>
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
        <div class="btn-fixed-top-left"><a href="documentations.html" class="btn-fab  btn-primary shadow1"><i
                    class="icon icon-clipboard-list"></i></a></div>
        <div class="promotionsBar green responsive"> <img src="{{asset('main_theme/assets/img/dummy/promo-banner.png')}}" alt=""><a href="#"
                class="gtco-nav-toggle gtco-nav-white active closePromotions"><i></i></a></div>
        <div class="header-top hide-for-small-down">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <ul class="top-nav">
                            <li><a href="#">Buyer Protection</a></li>
                            <li class="parent"><a href="#">Help</a>
                                <ul>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Open a Ticket</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Download Mobile App</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <ul class="top-nav text-right">
                            <li><a href="#"><i class="icon icon-exchange"></i>Compare list</a></li>
                            <li><a href="#"><i class="icon icon-heart"></i> Wishlist</a></li>
                            <li><a href="{{ route('login') }}"><i class="icon icon-user"></i>Login</a></li>
                            
                            <li><a href="#{{ route('register') }}"><i class="icon icon-lock"></i>Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-fixed no-b">
            <nav class="mainnav navbar navbar-default justify-content-between">
                <div class="container relative"><a class="offcanvas dl-trigger paper-nav-toggle" type="button"
                        data-toggle="offcanvas" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation"><i></i></a> <a class="navbar-brand" href="index.html"><img
                            class="d-inline-block align-top" alt="" src="{{asset('main_theme/assets/img/basic/logo.png')}}"></a>
                    <div class="paper_menu">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <ul class="dl-menu align-items-center">
                            <li> <a href="{{url('home')}}"> Home</a> </li>

                                <li class="parent"><a href="#">Products</a>
                                    <ul class="lg-submenu">
                                        <li class="parent"><a href="#">Solar System</a>
                                            <ul class="lg-submenu">
                                                <li><a href="services1.html">Off-grid Solar System</a></li>
                                                <li><a href="services2.html">On-grid Solar System</a></li>
                                                <li><a href="services3.html">Hybrid Solar System</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Battery</a>
                                            <ul class="lg-submenu">
                                            <li><a href="services4.html">Lead Acid Battery</a></li>
                                            <li><a href="services6.html">Gel Battery</a></li>
                                            <li><a href="services5.html">Lithium Iron Battery</a></li>


                                        
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Polycrystalline Solar panel</a>
                                            <ul class="lg-submenu">
                                                
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Monocrystalline Solar panel</a>
                                            <ul class="lg-submenu">
                                               
                                            </ul>
                                        </li>
                                       
                                      
                                    </ul>
                                </li>
                                  <li> <a href=""> Solutions</a> </li>
                             
                              <!--  <li class="parent megamenu"><a href="#"><i class="icon icon-shopping-bag2"></i>Shop</a>
                                    <ul class="lg-submenu">
                                        <li><a><i class="icon icon-shopping-bag2 s-24"></i>Shop Pages</a>
                                            <ul class="lg-submenu">
                                                <li><a href="home-shop.html">Shop Home <span
                                                            class="badge badge-warning">unique</span></a></li>
                                                <li><a href="shop.html">Shop Simple</a></li>
                                                <li><a href="shop-single.html">Product Detail <span
                                                            class="badge badge-danger">hot</span></a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="register.html">login/signup</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="password-recovery.html">Forgot Password</a></li>
                                                <li><a href="cart.html">Cart <span class="badge">11 items</span></a>
                                                </li>
                                                <li><a href="checkout.html">Check out</a></li>
                                            </ul><a href="http://xvelopers.com/home10-shop.html"
                                                class="btn btn-success"><i class="icon icon-shopping-bag2 s-24"></i>
                                                Shop Now</a>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="text-center">
                                                    <p> <strong>Best Sale Offer</strong> <span
                                                            class="badge badge-danger">30% Off Today</span></p>
                                                </div>
                                                <figure> <img src="{{asset('main_theme/assets/img/demo/ipad.png')}}" alt=""></figure>
                                            </div>
                                        </li>
                                    </ul>
                                </li> -->
                           
                                <li> <a href=""> Contact Us</a> </li>
                                
                                <li> <a href="">About Us</a></li>

                                <li><a href="{{ route('login') }}" class="btn btn-primary nav-btn">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>


        <div class="container">
        @yield('content')
         </div>

         
        <!--footer-->
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-2 col-xl-3 col-12 responsive-phone"> <a href="#" class="brand"><img
                                src="{{asset('main_theme/assets/img/basic/logo.png')}}" alt="Knowledge"><span class="circle"></span></a></div>
                    <div class="col-6  col-md-4 col-lg-2">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-6  col-md-4 col-lg-2">
                        <h6>Knowledgebase</h6>
                        <ul class="footer-links">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-6  col-md-4 col-lg-2">
                        <h6>About Us</h6>
                        <ul class="footer-links">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-12 col-12 col-xl-3 responsive-phone">
                        <h6>Connect via Social</h6>
                        <ul class="social">
                            <li class="facebook"><a href="#"><i class="icon icon-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="icon icon-twitter"></i></a></li>
                            <li class="gplus"><a href="#"><i class="icon icon-google-plus"></i></a></li>
                        </ul>
                        <div class="copyrights">
                            <p>&#xA9; 2016 knowledge Copyrights</p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog width-400" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                        class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="text-center p-40 p-b-0"> <img src="{{asset('main_theme/assets/img/dummy/u4.png')}}" alt="">
                            <h3>Welcome Back</h3>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                                for you</p>
                        </div>
                        <div class="light p-40 b-t-b">
                            <form action="http://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i> <input type="text"
                                        class="form-control form-control-lg" placeholder="Email Address"></div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i> <input type="text"
                                        class="form-control form-control-lg" placeholder="Password"></div> <input
                                    type="submit" class="btn btn-primary btn-lg btn-block" value="Log In"> <small
                                    class="forget-pass">Have you forgot your username or password ?</small>
                            </form>
                        </div>
                        <div class="p-40"><a href="#" class="btn btn-lg btn-block btn-social facebook"><i
                                    class="icon-facebook"></i> Login with Facebook</a><a href="#"
                                class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i> Login with
                                Twitter</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                        class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-5 grid">
                                <div class="p-40">
                                    <h5 class="p-t-40">Sign Up Using Social Account</h5>
                                    <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff
                                        waiting for you</p><a href="#"
                                        class="btn btn-lg btn-block btn-social facebook"><i class="icon-facebook"></i>
                                        Login with Facebook</a><a href="#"
                                        class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i>
                                        Login with Twitter</a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="light p-t-b-40">
                                    <div class="p-40">
                                        <h5 class="p-b-20">Create New User Account</h5>
                                        <form action="http://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html">
                                            <div class="form-group has-icon"><i class="icon-user-circle"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Your Name"></div>
                                            <div class="form-group has-icon"><i class="icon-envelope-o"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Email Address"></div>
                                            <div class="form-group has-icon"><i class="icon-user-secret"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Password"></div>
                                            <div class="form-group has-icon"><i class="icon-repeat"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Confirm Password"></div> <input type="submit"
                                                class="btn btn-primary btn-lg btn-block" value="Sign Up Now">
                                            <p class="forget-pass">A verification email wil be sent to you</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('main_theme/assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from xvelopers.com/demos/html/paper-1.8.2/home-shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:20:14 GMT -->

</html>
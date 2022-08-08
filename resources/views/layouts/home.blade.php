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
                                                <li><a href="services1.html">Services 1</a></li>
                                                <li><a href="services2.html">Services 2</a></li>
                                                <li><a href="services3.html">Services 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Battery</a>
                                            <ul class="lg-submenu">
                                                
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
        <main>
        <section>
                <div class="xv-slider-wrap text-white" style="background-image:url('{{asset('main_theme/assets/img/dummy/b1.jpg')}}');">
                    <div class="lightSlider" data-item="1" data-pager="false" data-slide-margin="0" data-gallery="false"
                        data-pause="8000" data-pauseonhover="true" data-auto="true" data-loop="true">
                        <div class="xv-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-6 fadeInRight animated">
                                        <div class="xv-slider-content clearfix color-white ">
                                            <h1>Paper Social App</h1>
                                            <p>Sed eget orci eleifend enim mattis suscipit. Suspendisse potenti non
                                                ipsum.</p>
                                            <div class="p-t-40"> <a href="#" class="btn btn-img"><img
                                                        src="{{asset('main_theme/assets/img/basic/btn-appstore.png')}}" alt=""></a> <a href="#"
                                                    class="btn btn-img"><img src="{{asset('main_theme/assets/img/basic/btn-googleplay.png')}}"
                                                        alt=""></a></div>
                                        </div>
                                    </div>
                                    <div class="hidden-sm-down col-lg-6 fadeInLeft animated"> <img
                                            src="{{asset('main_theme/assets/img/demo/slider/iphone.png')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="xv-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="hidden-sm-down col-lg-6 fadeInLeft animated"> <img
                                            src="{{asset('main_theme/assets/img/demo/slider/rocket.png')}}" alt=""></div>
                                    <div class="col-12 col-lg-6 fadeInRight animated">
                                        <div class="xv-slider-content clearfix color-white">
                                            <h1>Paper Booster</h1>
                                            <p>When we designed MacBook Pro with Retina display, we started with a blank
                                                slate. That gave us the freedom to imagine something radical, something
                                                entirely different.</p>
                                            <div class="p-t-40"><a href="#" class="btn btn-primary btn-lg">Buy Now
                                                    19$</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xv-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-6 fadeInRight animated">
                                        <div class="xv-slider-content clearfix color-white">
                                            <h1>Paper Pages</h1>
                                            <p>When we designed MacBook Pro with Retina display, we started with a blank
                                                slate. That gave us the freedom</p>
                                            <div class="p-t-40"><a href="#" class="btn btn-primary btn-lg">Buy Now
                                                    19$</a> <a href="#" class="btn btn-success btn-lg">View All
                                                    Demos</a></div>
                                        </div>
                                    </div>
                                    <div class="hidden-sm-down col-lg-6 fadeInLeft animated"> <img
                                            src="{{asset('main_theme/assets/img/demo/slider/desktop.png')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="sidebar">
                                <div class="widget search-widget">
                                    <form> <input placeholder="Search Product" type="text"
                                            class="form-control form-control-lg"> <button type="submit" class=""><span
                                                class="icon icon-search"></span></button></form>
                                </div>
                                <div class="widget no-p">
                                    <ul class="sidebar-menu border-list">
                                        <li class="treeview"><a href="#"><i class="icon icon-circle-o text-red"></i>
                                                <span>Smart Phones</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Iphones</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Android Phones</a>
                                                </li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Nokia Phones</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview"> <a href="#"><span>Tablets</span> <span
                                                    class="badge badge-pill badge-primary pull-right">10%
                                                    Discount</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Top Navigation</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demos/html/layout/boxed.html"><i
                                                            class="icon icon-circle-o"></i> Boxed</a></li>
                                                <li><a href="http://xvelopers.com/demos/html/layout/fixed.html"><i
                                                            class="icon icon-circle-o"></i> Fixed</a></li>
                                                <li><a
                                                        href="http://xvelopers.com/demos/html/layout/collapsed-sidebar.html"><i
                                                            class="icon icon-circle-o"></i> Collapsed Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview"><a href="#"><i class="icon icon-circle-o text-green"></i>
                                                <span>Cameras</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> ChartJS</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Morris</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Flot</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Inline charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="treeview"><a href="#"><i class="icon icon-circle-o text-green"></i>
                                                <span>Headphones</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Simple tables</a>
                                                </li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Data tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview"> <a href="#"><span>Gaming Gear</span> <span
                                                    class="badge badge-pill badge-success pull-right">7 NEW
                                                    Items</span></a>
                                            <ul class="treeview-menu">
                                                <li class="active"><a href="#">Compose</a></li>
                                                <li><a href="#">Read</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview"><a href="#"><i
                                                    class="icon icon-circle-o text-light-blue"></i>
                                                <span>Other</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Invoice</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Profile</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Login</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview"> <a href="#"><span
                                                    class="badge badge-pill badge-danger">NEW</span>
                                                <span>Accessories</span><i
                                                    class="icon icon-angle-left pull-left"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Level One</a></li>
                                                <li><a href="#">Level One<i
                                                            class="icon icon-angle-left pull-left"></i></a>
                                                    <ul class="treeview-menu">
                                                        <li> <a href="#">Level Two</a></li>
                                                        <li><a href="#">Level Two<i
                                                                    class="icon icon-angle-left pull-left"></i></a>
                                                            <ul class="treeview-menu">
                                                                <li> <a href="#">Level Three</a></li>
                                                                <li><a href="#"><i class="icon icon-circle-o"></i> Level
                                                                        Three</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Level One</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview"><a href="#"><i class="icon icon-circle-o text-green"></i>
                                                <span>Cameras</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> ChartJS</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Morris</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Flot</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Inline charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="treeview"> <a href="#"><span>Headphones</span><i
                                                    class="icon icon-angle-left pull-left"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Simple tables</a>
                                                </li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Data tables</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget-tags">
                                    <h3>Popular Tags</h3>
                                    <ul class="iconList">
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Jewelry</a></li>
                                        <li><a href="#">Art Direction</a></li>
                                        <li><a href="#">User Interface</a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget widget-best-sellers">
                                    <h3>Best Sellers</h3>
                                    <ul>
                                        <li class="shop-product">
                                            <figure> <img src="{{asset('main_theme/assets/img/demo/s3.png')}}" alt=""></figure>
                                            <div class="product-info"><a href="#">FASHION NICE JACKET</a>
                                                <div class="price-tag">$40</div>
                                            </div>
                                        </li>
                                        <li class="shop-product">
                                            <figure> <img src="{{asset('main_theme/assets/img/demo/s4.png')}}" alt=""></figure>
                                            <div class="product-info"><a href="#">FASHION NICE JACKET</a>
                                                <div class="price-tag">$40</div>
                                            </div>
                                        </li>
                                        <li class="shop-product">
                                            <figure> <img src="{{asset('main_theme/assets/img/demo/s5.png')}}" alt=""></figure>
                                            <div class="product-info"><a href="#">FASHION NICE JACKET</a>
                                                <div class="price-tag">$40</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="xv-product-slides grid-view products" data-thumbnail="figure .xv-superimage"
                                data-product=".xv-product-unit">
                                <div class="row">
                                    <div class="xv-product-unit ">
                                        <div class="xv-product mb-15 mt-15 paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s3.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit ">
                                        <div class="xv-product mb-15 mt-15 paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s4.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit">
                                        <div class="xv-product mb-15 mt-15 paper-block">
                                            <figure> <a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s5.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit ">
                                        <div class="xv-product mb-15 mt-15 paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s6.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit ">
                                        <div class="xv-product mb-15 mt-15 paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s7.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit ">
                                        <div class="xv-product mb-15 mt-15 paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s8.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit ">
                                        <div class="xv-product mb-15 mt-15 paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s9.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit">
                                        <div class="xv-product paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s1.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xv-product-unit ">
                                        <div class="xv-product paper-block">
                                            <figure><a href="#"><img class="xv-superimage" src="{{asset('main_theme/assets/img/demo/s2.png')}}"
                                                        alt=""></a>
                                                <figcaption>
                                                    <ul class="style1">
                                                        <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-heart"></i></a></li>
                                                        <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue"
                                                                href="#"><i class="icon icon-exchange"></i></a></li>
                                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                                    class="icon icon-expand"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="xv-product-content">
                                                <h3><a href="shop-single.html">Smartphone Apple iPhone 5 64GB</a></h3>
                                                <p>Aenean sollicitudin, nec sagittis sem lorem quist bibe dum auctor,
                                                    nisi elit consequat ipsum. Duis sed odio sit amet nibh vulputate
                                                    cursus a nec.</p>
                                                <ul class="color-opt">
                                                    <li><a href="#">White</a></li>
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                </ul>
                                                <ul class="extra-links">
                                                    <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
                                                    <li><a href="#"><i class="icon icon-exchange"></i>Compare</a></li>
                                                    <li><a href="#"><i class="icon icon-expand"></i>Expand</a></li>
                                                </ul>
                                                <div class="xv-rating stars-5"></div> <span
                                                    class="xv-price">$250</span><a data-qv-tab="#qvt-cart"
                                                    href="shop-single.html" class="product-buy "><i
                                                        class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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

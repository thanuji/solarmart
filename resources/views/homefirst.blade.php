@extends('layouts.main')

@section('content')
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
                                                <span>Solar System</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Off-grid Solar System</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> On-grid Solar System</a></li>
                                                
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Hybrid Solar System</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview"> <a href="#"><span>Battery</span> <span
                                                    class="badge badge-pill badge-primary pull-right">10%
                                                    Discount</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Lead Acid Battery</a>
                                                </li>
                                                <li><a href="http://xvelopers.com/demos/html/layout/boxed.html"><i
                                                            class="icon icon-circle-o"></i> Gel Battery</a></li>
                                                <li><a href="http://xvelopers.com/demos/html/layout/fixed.html"><i
                                                            class="icon icon-circle-o"></i> Lithium Iron Battery</a></li>
                                              
                                            </ul>
                                        </li>
                                        <li class="treeview"><a href="#"><i class="icon icon-circle-o text-green"></i>
                                                <span>Polycrystaline Solar Panel</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> 60 cells</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i>72 cells </a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i>OtherS Polycrystaline Solar Panel </a></li>
                                        
            
                                            </ul>
                                        </li>
                                        <li class="treeview"><a href="#"><i class="icon icon-circle-o text-green"></i>
                                                <span>Monocrystaline Solar Pannel</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> 132 Half Cells</a>
                                                </li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> 144 Half Cells</a></li>
                                    

                                        <li><a href="#"><i class="icon icon-circle-o"></i> 120 Half Cells</a> </li>
                                        <li><a href="#"><i class="icon icon-circle-o"></i> 96 Cells</a> </li>        
                                        <li><a href="#"><i class="icon icon-circle-o"></i> 72 Cells</a> </li>
                                        <li><a href="#"><i class="icon icon-circle-o"></i> 60 Cells</a> </li>
                                        <li><a href="#"><i class="icon icon-circle-o"></i> Other Monocrystaline Solar Pannel</a> </li>
                                        </ul>
                                       
                                        <li class="treeview"><a href="#"><i
                                                    class="icon icon-circle-o text-light-blue"></i>
                                                <span>Other</span></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Invoice</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Profile</a></li>
                                                <li><a href="#"><i class="icon icon-circle-o"></i> Login</a></li>
                                            </ul>
                                        </li>
                                       
                                    
                                </div>
                                <div class="widget widget-tags">
                                    <h3>Featured List</h3>
                                    <ul class="iconList">
                                        <li><a href="#">Sample Available</a></li>
                                        <li><a href="#">Solar Pannel</a></li>
                                        <li><a href="#">Lithium Battery</a></li>
                                        <li><a href="#"></a> Solar System</li>
                                        <li><a href="#"></a>Battery  </li>
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
       
     @endsection
@extends('layouts.main')
@section('content')

<section>
    <div class="xv-slider-wrap text-white"
        style="background-image:url('{{asset('main_theme/assets/img/dummy/b1.jpg')}}');">
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
                                            src="{{asset('main_theme/assets/img/basic/btn-appstore.png')}}" alt=""></a>
                                    <a href="#" class="btn btn-img"><img
                                            src="{{asset('main_theme/assets/img/basic/btn-googleplay.png')}}"
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
                        <form> <input placeholder="Search Product" type="text" class="form-control form-control-lg">
                            <button type="submit" class=""><span class="icon icon-search"></span></button></form>
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
                                    <li><a href="http://xvelopers.com/demos/html/layout/collapsed-sidebar.html"><i
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
                            <li class="treeview"><a href="#"><i class="icon icon-circle-o text-light-blue"></i>
                                    <span>Other</span></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Invoice</a></li>
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Profile</a></li>
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Login</a></li>
                                </ul>
                            </li>
                            <li class="treeview"> <a href="#"><span class="badge badge-pill badge-danger">NEW</span>
                                    <span>Accessories</span><i class="icon icon-angle-left pull-left"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Level One</a></li>
                                    <li><a href="#">Level One<i class="icon icon-angle-left pull-left"></i></a>
                                        <ul class="treeview-menu">
                                            <li> <a href="#">Level Two</a></li>
                                            <li><a href="#">Level Two<i class="icon icon-angle-left pull-left"></i></a>
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
                    @foreach($items as $key => $item)
                        <div class="xv-product-unit ">
                            <div class="xv-product mb-15 mt-15 paper-block">
                                <figure><a href="#"><img class="xv-superimage"
                                            src="{{ asset('uploads/' . $item->image_name) }}" alt=""></a>
                                    <figcaption>
                                        <ul class="style1">
                                            <li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue" href="#"><i
                                                        class="icon icon-heart"></i></a></li>
                                            <li><a data-qv-tab="#qvt-compare" class=" btn-square btn-blue" href="#"><i
                                                        class="icon icon-exchange"></i></a></li>
                                            <li><a class="btn-cart btn-square btn-blue" href="#"><i
                                                        class="icon icon-expand"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="xv-product-content">
                                    <h3><a href="#">{{$item->name}}</a></h3>
                                    <ul class="color-opt">
                                        <li>{{$item->description}}</li>
                                    </ul>
                                    <div class="xv-rating stars-5"></div> <span class="xv-price">$ {{$item->price}}</span><a
                                        data-qv-tab="#qvt-cart" href="#" class="product-buy "><i
                                            class="icon icon-shopping-basket" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                                <h1>Solarmart Energy Marketplace</h1>
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
                                src="{{asset('main_theme/assets/img/demo/slider/slider1.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="xv-slide">
                <div class="container">
                    <div class="row">
                        <div class="hidden-sm-down col-lg-6 fadeInLeft animated"> <img
                                src="{{asset('main_theme/assets/img/demo/slider/slider2.png')}}" alt=""></div>
                        <div class="col-12 col-lg-6 fadeInRight animated">
                            <div class="xv-slider-content clearfix color-white">
                                <h1>Paper Booster</h1>
                                <p>When we designed MacBook Pro with Retina display, we started with a blank
                                    slate. That gave us the freedom to imagine something radical, something
                                    entirely different.</p>
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
                            </div>
                        </div>
                        <div class="hidden-sm-down col-lg-6 fadeInLeft animated"> <img
                                src="{{asset('main_theme/assets/img/demo/slider/slider3.png')}}" alt=""></div>
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
                        <form action="{{ route('search') }}" method="GET">  
                        <input placeholder="Search Product" name="search" type="text" class="form-control form-control-lg">
                        <button type="submit" class=""><span class="icon icon-search"></span></button>
                        </form>
                    </div>
                    <!-- <div class="widget no-p">
                        <ul class="sidebar-menu border-list">
                            <li class="treeview"><a href="#"><i class="icon icon-circle-o text-green"></i>
                                    <span>Cameras</span></a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- <div class="widget widget-tags">
                        <h3>Popular Tags</h3>
                        <ul class="iconList">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Jewelry</a></li>
                            <li><a href="#">Art Direction</a></li>
                            <li><a href="#">User Interface</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div> -->
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
                                <figure><a href="item/{{$item->id}}"><img class="xv-superimage"
                                            src="{{ asset('uploads/' . $item->image_name) }}" alt=""></a>
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
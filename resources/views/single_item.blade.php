@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="single-product-detail">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="demo">
                        <div class="lSSlideOuter ">
                            <div class="lSSlideWrapper usingCss"
                                style="transition-duration: 400ms; transition-timing-function: ease;">
                
                                <ul
                                    id="lightSliderGallery"
                                    class="lightSlider"
                                    data-gallery="true"
                                    data-item="1"
                                    data-loop="true"
                                    data-auto="true"
                                    data-thumbs="4"
                                    data-controls="false"
                                    data-position="middle"
                                    >
                                    @foreach($images as $key => $image)
                                    <li data-thumb="{{ asset('uploads/' . $image->image_name) }}">
                                        <img src="{{ asset('uploads/' . $image->image_name) }}" />
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-md-auto">
                    <div class="single-product-overview p-t-b-40">
                        <h2>{{$item->name}}</h2>
                        <ul class="review p-t-b-20">
                            <li class="ratings-stars">
                                <i class="icon icon-star text-light-blue"></i><i
                                    class="icon icon-star text-light-blue"></i><i
                                    class="icon icon-star text-light-blue"></i><i
                                    class="icon icon-star text-light-blue"></i><i class="icon icon-star"></i>
                                <span>15 Review(s) | <a href="#">Write a Review</a></span> 
                            </li>
                        </ul>
                        <p class="no-mar">
                        {{$item->description}}
                        </p>
                        <ul class="product-description mt-35 mb-35 iconList">
                            <li><span>Availability</span>: {{$item->quantity}} Available in Stock</li>
                            <!-- <li><span>Product Code</span>: CwT4a</li> -->
                        </ul>
                        <div class="cart-options">
                            <span href="#" class="price"><span>${{($item->price) * (100-$item->discount)/100}}</span> <del>${{$item->price}}</del></span>
                            <div class="cart-buttons">
                                <div class="quantity">
                                    <span class="xv-qyt xv-qup" data-value="1">+</span>
                                    <span class="xv-qyt xv-down" data-value="-1">-</span>
                                    <input step="1" min="1" max="{{$item->quantity}}" name="quantity" value="1" title="Qty"
                                        class="input-text qty text" size="4" type="number">
                                </div>
                                <span><a style="color: white" class="btn btn-lg btn-primary">Buy Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-t-b-80">
                <div class="col-12 col-lg-12">
                    <div class="product-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active nav-item ">
                                <a href="#one-2" data-toggle="tab" class="nav-link">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#two-2" data-toggle="tab" class="nav-link">Specification</a>
                            </li>
                            <li class="nav-item">
                                <a href="#three-2" data-toggle="tab" class="nav-link">Return Info</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in" id="one-2">
                                <p>
                                700W Biggest in The World Free Shipping Half Cell PV Solar Energy System Power Monocrystalline Solar Panel with TUV CE ISO IEC
                                </p>
                                <ul class="iconList p-t-20">
                                    <li>
                                        5.5-inch (diagonal) LED-backlit widescreen
                                        Multi-Touch
                                    </li>
                                    <li>A8 chip with 64-bit architecture</li>
                                    <li>1080p HD video recording (30 fps or 60 fps)</li>
                                    <li>M8 motion coprocessor</li>
                                    <li>Full sRGB standard</li>
                                    <li>Slo-mo video (120 fps or 240 fps)</li>
                                    <li>
                                        Touch ID fingerprint identity sensor built into the
                                        Home button
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="two-2">
                                <ul class="iconList">
                                    <li>
                                        5.5-inch (diagonal) LED-backlit widescreen
                                        Multi-Touch
                                    </li>
                                    <li>A8 chip with 64-bit architecture</li>
                                    <li>1080p HD video recording (30 fps or 60 fps)</li>
                                    <li>M8 motion coprocessor</li>
                                    <li>Full sRGB standard</li>
                                    <li>Slo-mo video (120 fps or 240 fps)</li>
                                    <li>
                                        Touch ID fingerprint identity sensor built into the
                                        Home button
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="three-2">
                                    6 months money back garanty
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="lSSlideOuter">
                    <div class="lSSlideWrapper usingCss">
                        <div class="lightSlider grid-view xv-product-slides lsGrab showSlider lSSlide" data-item="4"
                            data-item-md="2" data-item-sm="1"
                            style="width: 1725px; height: 407.422px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">
                            
                            @foreach($items as $key => $item)
                            <div class="xv-product-unit col-3 lslide active"
                                style="width: 277.5px; margin-right: 10px;">
                                <div class="xv-product paper-block">
                                    <figure>
                                        <a href="item/{{$item->id}}"><img class="xv-superimage"
                                                src="{{ asset('uploads/' . $item->image_name) }}"
                                                alt=""></a>
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3>
                                            <a href="item/{{$item->id}}">{{$item->name}}</a>
                                        </h3>
                                        <span class="xv-price">${{$item->price}}</span><a data-qv-tab="#qvt-cart" href="item/{{$item->id}}"
                                            class="product-buy flytoQuickView"><i class="icon icon-shopping-basket"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- <div class="lSAction"><a class="lSPrev"><span class="icon-left-arrow"></span></a><a
                                class="lSNext"><span class="icon-right-arrow"></span></a></div> -->
                    </div>
                    <!-- <ul class="lSPager lSpg" style="margin-top: 5px;">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
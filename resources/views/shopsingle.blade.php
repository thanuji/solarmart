<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from xvelopers.com/demos/html/paper-1.8.2/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:31:21 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{asset('main_theme/assets/img/basic/favicon.ico')}}" type="image/x-icon" />
    <title>Paper</title>
    <link rel="stylesheet" href="{{asset('main_theme/assets/css/app.css')}}" />
    <style>
      .loader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #f5f8fa;
        z-index: 9998;
        text-align: center;
      }
      .plane-container {
        position: absolute;
        top: 50%;
        left: 50%;
      }
    </style>
  </head>
  <body>
    <div id="loader" class="loader">
      <div class="plane-container"><div class="l-s-2 blink">LOADING</div></div>
    </div>
    <div id="app" class="paper-loading">
      <div class="btn-fixed-top-left">
        <a href="documentations.html" class="btn-fab btn-primary shadow1"
          ><i class="icon icon-clipboard-list"></i
        ></a>
      </div>
      <div class="page shop-single">
        <nav class="mainnav navbar navbar-default justify-content-between">
          <div class="container relative">
            <a
              class="offcanvas dl-trigger paper-nav-toggle"
              type="button"
              data-toggle="offcanvas"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i></i
            ></a>
            <a class="navbar-brand" href="index.html"
              ><img
                class="d-inline-block align-top"
                alt=""
                src="{{asset('main_theme/assets/img/basic/logo.png')}}"
            /></a>
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
        <div class="content-wrapper">
          <div class="container">
            <div class="single-product-detail">
              <div class="row">
                <div class="col-12 col-lg-5">
                  <div class="demo">
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

                    </ul>
                  </div>
                </div>
                <div class="col-12 col-lg-6 mx-md-auto">
                  <div class="single-product-overview p-t-b-40">
                    <h2>Apple New Macbook 2015</h2>
                    <ul class="review p-t-b-20">
                      <li class="ratings-stars">
                        <i class="icon icon-star text-light-blue"></i
                        ><i class="icon icon-star text-light-blue"></i
                        ><i class="icon icon-star text-light-blue"></i
                        ><i class="icon icon-star text-light-blue"></i
                        ><i class="icon icon-star"></i>
                        <span
                          >15 Review(s) | <a href="#">Write a Review</a></span
                        >&#x2003;
                      </li>
                    </ul>
                    <p class="no-mar">
                      This is New Macbook 2015. Proin gravida nibh vel velit
                      auctor aliquet. Aenean sollici tudin, nec sagittis sem
                      lorem quis bibe dum auctor, nisi elit consequat ipsum, nec
                      sagittis sem nibh id elit gravida nibh vel velit.
                    </p>
                    <ul class="product-description mt-35 mb-35 iconList">
                      <li><span>Availability</span>: Available in Stock</li>
                      <li><span>Product Code</span>: CwT4a</li>
                    </ul>
                    <div class="cart-options">
                      <span href="#" class="price"
                        ><span>$2500</span> <del>$7000</del></span
                      >
                      <div class="cart-buttons">
                        <div class="quantity">
                          <span class="xv-qyt xv-qup" data-value="1">+</span>
                          <span class="xv-qyt xv-down" data-value="-1">-</span>
                          <input
                            step="1"
                            min="1"
                            max=""
                            name="quantity"
                            value="1"
                            title="Qty"
                            class="input-text qty text"
                            size="4"
                            type="number"
                          />
                        </div>
                        <span
                          ><a class="btn btn-lg btn-primary"
                            >ADD TO CART</a
                          ></span
                        >
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
                        <a href="#one-2" data-toggle="tab" class="nav-link"
                          >Description</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="#two-2" data-toggle="tab" class="nav-link"
                          >Specification</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="#three-2" data-toggle="tab" class="nav-link"
                          >Return Info</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="one-2">
                        <p>
                          Proin gravida nibh vel velit auctor aliquet. Aenean
                          sollicitudin, nec sagittis sem lorem quis bibe dum
                          auctor, nisi elit consequat ipsum, nec sagittis sem
                          nibh id elit. Duis sed odio sit amet nibh vulputate
                          cursus a nec sagittis sem sit amet mauris. Morbi
                          accumsan ipsum velit. Nam nec tellus a odio tincidunt
                          auctor a ornare odio. Proin gravida nibh vel velit
                          auctor aliquet. Aenean sollicitudin, nec sagittis sem
                          lorem quis bibe dum auctor.
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
                        Proin gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, nec sagittis sem lorem quis bibe dum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh
                        id elit. Duis sed odio sit amet nibh vulputate cursus a
                        nec sagittis sem sit amet mauris. Morbi accumsan ipsum
                        velit. Nam nec tellus a odio tincidunt auctor a ornare
                        odio. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, nec sagittis sem lorem quis bibe
                        dum auctor.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row clearfix">
                <div
                  class="lightSlider grid-view xv-product-slides"
                  data-item="4"
                  data-item-md="2"
                  data-item-sm="1"
                >
                  <div class="xv-product-unit col-3">
                    <div class="xv-product paper-block">
                      <figure>
                        <a href=""
                          ><img
                            class="xv-superimage"
                            src="{{asset('main_theme/assets/img/demo/s1.png')}}"
                            alt=""
                        /></a>
                        <figcaption>
                          <ul class="style1">
                            <li>
                              <a
                                data-qv-tab="#qvt-wishlist"
                                class="btn-square btn-blue"
                                href=""
                                ><i class="icon icon-heart"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                data-qv-tab="#qvt-compare"
                                class="btn-square btn-blue"
                                href=""
                                ><i class="icon icon-exchange"></i
                              ></a>
                            </li>
                            <li>
                              <a class="btn-cart btn-square btn-blue" href="#"
                                ><i class="icon icon-expand"></i
                              ></a>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                      <div class="xv-product-content">
                        <h3>
                          <a href="detail1.html"
                            >Smartphone Apple iPhone 5 64GB</a
                          >
                        </h3>
                        <p>
                          Aenean sollicitudin, nec sagittis sem lorem quist bibe
                          dum auctor, nisi elit consequat ipsum. Duis sed odio
                          sit amet nibh vulputate cursus a nec.
                        </p>
                        <ul class="color-opt">
                          <li><a href="">White</a></li>
                          <li><a href="">Black</a></li>
                          <li><a href="">Gold</a></li>
                        </ul>
                        <ul class="extra-links">
                          <li>
                            <a href=""
                              ><i class="icon icon-heart"></i>Wishlist</a
                            >
                          </li>
                          <li>
                            <a href=""
                              ><i class="icon icon-exchange"></i>Compare</a
                            >
                          </li>
                          <li>
                            <a href=""
                              ><i class="icon icon-expand"></i>Expand</a
                            >
                          </li>
                        </ul>
                        <span class="xv-price">$250</span
                        ><a
                          data-qv-tab="#qvt-cart"
                          href=""
                          class="product-buy flytoQuickView"
                          ><i
                            class="icon icon-shopping-basket"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="xv-product-unit col-3">
                    <div class="xv-product paper-block">
                      <figure>
                        <a href=""
                          ><img
                            class="xv-superimage"
                            src="{{asset('main_theme/assets/img/demo/s2.png')}}"
                            alt=""
                        /></a>
                        <figcaption>
                          <ul class="style1">
                            <li>
                              <a
                                data-qv-tab="#qvt-wishlist"
                                class="btn-square btn-blue"
                                href=""
                                ><i class="icon icon-heart"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                data-qv-tab="#qvt-compare"
                                class="btn-square btn-blue"
                                href=""
                                ><i class="icon icon-exchange"></i
                              ></a>
                            </li>
                            <li>
                              <a class="btn-cart btn-square btn-blue" href="#"
                                ><i class="icon icon-expand"></i
                              ></a>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                      <div class="xv-product-content">
                        <h3>
                          <a href="detail1.html"
                            >Smartphone Apple iPhone 5 64GB</a
                          >
                        </h3>
                        <p>
                          Aenean sollicitudin, nec sagittis sem lorem quist bibe
                          dum auctor, nisi elit consequat ipsum. Duis sed odio
                          sit amet nibh vulputate cursus a nec.
                        </p>
                        <ul class="color-opt">
                          <li><a href="#">White</a></li>
                          <li><a href="#">Black</a></li>
                          <li><a href="#">Gold</a></li>
                        </ul>
                        <ul class="extra-links">
                          <li>
                            <a href=""
                              ><i class="icon icon-heart"></i>Wishlist</a
                            >
                          </li>
                          <li>
                            <a href=""
                              ><i class="icon icon-exchange"></i>Compare</a
                            >
                          </li>
                          <li>
                            <a href=""
                              ><i class="icon icon-expand"></i>Expand</a
                            >
                          </li>
                        </ul>
                        <div class="xv-rating stars-5"></div>
                        <span class="xv-price">$250</span
                        ><a
                          data-qv-tab="#qvt-cart"
                          href=""
                          class="product-buy flytoQuickView"
                          ><i
                            class="icon icon-shopping-basket"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="xv-product-unit col-3">
                    <div class="xv-product paper-block">
                      <figure>
                        <a href=""
                          ><img
                            class="xv-superimage"
                            src="{{asset('main_theme/assets/img/demo/s3.png')}}"
                            alt=""
                        /></a>
                        <figcaption>
                          <ul class="style1">
                            <li>
                              <a
                                data-qv-tab="#qvt-wishlist"
                                class="btn-square btn-blue"
                                href=""
                                ><i class="icon icon-heart"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                data-qv-tab="#qvt-compare"
                                class="btn-square btn-blue"
                                href=""
                                ><i class="icon icon-exchange"></i
                              ></a>
                            </li>
                            <li>
                              <a class="btn-cart btn-square btn-blue" href="#"
                                ><i class="icon icon-expand"></i
                              ></a>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                      <div class="xv-product-content">
                        <h3>
                          <a href="detail1.html"
                            >Smartphone Apple iPhone 5 64GB</a
                          >
                        </h3>
                        <p>
                          Aenean sollicitudin, nec sagittis sem lorem quist bibe
                          dum auctor, nisi elit consequat ipsum. Duis sed odio
                          sit amet nibh vulputate cursus a nec.
                        </p>
                        <ul class="color-opt">
                          <li><a href="#">White</a></li>
                          <li><a href="#">Black</a></li>
                          <li><a href="#">Gold</a></li>
                        </ul>
                        <ul class="extra-links">
                          <li>
                            <a href="#"
                              ><i class="icon icon-heart"></i>Wishlist</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-exchange"></i>Compare</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-expand"></i>Expand</a
                            >
                          </li>
                        </ul>
                        <div class="xv-rating stars-5"></div>
                        <span class="xv-price">$250</span
                        ><a
                          data-qv-tab="#qvt-cart"
                          href="#"
                          class="product-buy flytoQuickView"
                          ><i
                            class="icon icon-shopping-basket"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="xv-product-unit col-3">
                    <div class="xv-product mb-15 mt-15 paper-block">
                      <figure>
                        <a href="#"
                          ><img
                            class="xv-superimage"
                            src="{{asset('main_theme/assets/img/demo/s4.png')}}"
                            alt=""
                        /></a>
                        <figcaption>
                          <ul class="style1">
                            <li>
                              <a
                                data-qv-tab="#qvt-wishlist"
                                class="btn-square btn-blue"
                                href="#"
                                ><i class="icon icon-heart"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                data-qv-tab="#qvt-compare"
                                class="btn-square btn-blue"
                                href="#"
                                ><i class="icon icon-exchange"></i
                              ></a>
                            </li>
                            <li>
                              <a class="btn-cart btn-square btn-blue" href="#"
                                ><i class="icon icon-expand"></i
                              ></a>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                      <div class="xv-product-content">
                        <h3>
                          <a href="detail1.html"
                            >Smartphone Apple iPhone 5 64GB</a
                          >
                        </h3>
                        <p>
                          Aenean sollicitudin, nec sagittis sem lorem quist bibe
                          dum auctor, nisi elit consequat ipsum. Duis sed odio
                          sit amet nibh vulputate cursus a nec.
                        </p>
                        <ul class="color-opt">
                          <li><a href="#">White</a></li>
                          <li><a href="#">Black</a></li>
                          <li><a href="#">Gold</a></li>
                        </ul>
                        <ul class="extra-links">
                          <li>
                            <a href="#"
                              ><i class="icon icon-heart"></i>Wishlist</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-exchange"></i>Compare</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-expand"></i>Expand</a
                            >
                          </li>
                        </ul>
                        <div class="xv-rating stars-5"></div>
                        <span class="xv-price">$250</span
                        ><a
                          data-qv-tab="#qvt-cart"
                          href="#"
                          class="product-buy flytoQuickView"
                          ><i
                            class="icon icon-shopping-basket"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="xv-product-unit col-3">
                    <div class="xv-product mb-15 mt-15 paper-block">
                      <figure>
                        <a href="#"
                          ><img
                            class="xv-superimage"
                            src="{{asset('main_theme/assets/img/demo/s5.png')}}"
                            alt=""
                        /></a>
                        <figcaption>
                          <ul class="style1">
                            <li>
                              <a
                                data-qv-tab="#qvt-wishlist"
                                class="btn-square btn-blue"
                                href="#"
                                ><i class="icon icon-heart"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                data-qv-tab="#qvt-compare"
                                class="btn-square btn-blue"
                                href="#"
                                ><i class="icon icon-exchange"></i
                              ></a>
                            </li>
                            <li>
                              <a class="btn-cart btn-square btn-blue" href="#"
                                ><i class="icon icon-expand"></i
                              ></a>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                      <div class="xv-product-content">
                        <h3>
                          <a href="detail1.html"
                            >Smartphone Apple iPhone 5 64GB</a
                          >
                        </h3>
                        <p>
                          Aenean sollicitudin, nec sagittis sem lorem quist bibe
                          dum auctor, nisi elit consequat ipsum. Duis sed odio
                          sit amet nibh vulputate cursus a nec.
                        </p>
                        <ul class="color-opt">
                          <li><a href="#">White</a></li>
                          <li><a href="#">Black</a></li>
                          <li><a href="#">Gold</a></li>
                        </ul>
                        <ul class="extra-links">
                          <li>
                            <a href="#"
                              ><i class="icon icon-heart"></i>Wishlist</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-exchange"></i>Compare</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-expand"></i>Expand</a
                            >
                          </li>
                        </ul>
                        <div class="xv-rating stars-5"></div>
                        <span class="xv-price">$250</span
                        ><a
                          data-qv-tab="#qvt-cart"
                          href="#"
                          class="product-buy flytoQuickView"
                          ><i
                            class="icon icon-shopping-basket"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="xv-product-unit col-3">
                    <div class="xv-product mb-15 mt-15 paper-block">
                      <figure>
                        <a href="#"
                          ><img
                            class="xv-superimage"
                            src="{{asset('main_theme/assets/img/demo/s6.png')}}"
                            alt=""
                        /></a>
                        <figcaption>
                          <ul class="style1">
                            <li>
                              <a
                                data-qv-tab="#qvt-wishlist"
                                class="btn-square btn-blue"
                                href="#"
                                ><i class="icon icon-heart"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                data-qv-tab="#qvt-compare"
                                class="btn-square btn-blue"
                                href="#"
                                ><i class="icon icon-exchange"></i
                              ></a>
                            </li>
                            <li>
                              <a class="btn-cart btn-square btn-blue" href="#"
                                ><i class="icon icon-expand"></i
                              ></a>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                      <div class="xv-product-content">
                        <h3>
                          <a href="detail1.html"
                            >Smartphone Apple iPhone 5 64GB</a
                          >
                        </h3>
                        <p>
                          Aenean sollicitudin, nec sagittis sem lorem quist bibe
                          dum auctor, nisi elit consequat ipsum. Duis sed odio
                          sit amet nibh vulputate cursus a nec.
                        </p>
                        <ul class="color-opt">
                          <li><a href="#">White</a></li>
                          <li><a href="#">Black</a></li>
                          <li><a href="#">Gold</a></li>
                        </ul>
                        <ul class="extra-links">
                          <li>
                            <a href="#"
                              ><i class="icon icon-heart"></i>Wishlist</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-exchange"></i>Compare</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon icon-expand"></i>Expand</a
                            >
                          </li>
                        </ul>
                        <div class="xv-rating stars-5"></div>
                        <span class="xv-price">$250</span
                        ><a
                          data-qv-tab="#qvt-cart"
                          href="#"
                          class="product-buy flytoQuickView"
                          ><i
                            class="icon icon-shopping-basket"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-xl-3 col-12 responsive-phone">
              <a href="#" class="brand"
                ><img src="{{asset('main_theme/assets/img/basic/logo.png')}}" alt="Knowledge" /><span
                  class="circle"
                ></span
              ></a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="login.html">Login</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <h6>Knowledgebase</h6>
              <ul class="footer-links">
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="login.html">Login</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
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
                <li class="facebook">
                  <a href="#"><i class="icon icon-facebook"></i></a>
                </li>
                <li class="twitter">
                  <a href="#"><i class="icon icon-twitter"></i></a>
                </li>
                <li class="gplus">
                  <a href="#"><i class="icon icon-google-plus"></i></a>
                </li>
              </ul>
              <div class="copyrights">
                <p>&#xA9; 2016 knowledge Copyrights</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <div
        class="modal fade"
        id="modalLogin"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
      >
        <div class="modal-dialog width-400" role="document">
          <div class="modal-content no-r">
            <a
              href="#"
              data-dismiss="modal"
              aria-label="Close"
              class="paper-nav-toggle active"
              ><i></i
            ></a>
            <div class="modal-body no-p">
              <div class="text-center p-40 p-b-0">
                <img src="{{asset('main_theme/assets/img/dummy/u4.png')}}" alt="" />
                <h3>Welcome Back</h3>
                <p class="p-t-b-20">
                  Hey Soldier welcome back signin now there is lot of new stuff
                  waiting for you
                </p>
              </div>
              <div class="light p-40 b-t-b">
                <form
                  action="http://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html"
                >
                  <div class="form-group has-icon">
                    <i class="icon-envelope-o"></i>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Email Address"
                    />
                  </div>
                  <div class="form-group has-icon">
                    <i class="icon-user-secret"></i>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Password"
                    />
                  </div>
                  <input
                    type="submit"
                    class="btn btn-primary btn-lg btn-block"
                    value="Log In"
                  />
                  <small class="forget-pass"
                    >Have you forgot your username or password ?</small
                  >
                </form>
              </div>
              <div class="p-40">
                <a href="#" class="btn btn-lg btn-block btn-social facebook"
                  ><i class="icon-facebook"></i> Login with Facebook</a
                ><a href="#" class="btn btn-lg btn-block btn-social twitter"
                  ><i class="icon-twitter"></i> Login with Twitter</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="modal fade"
        id="modalSignUp"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
      >
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content no-r">
            <a
              href="#"
              data-dismiss="modal"
              aria-label="Close"
              class="paper-nav-toggle active"
              ><i></i
            ></a>
            <div class="modal-body no-p">
              <div class="row">
                <div class="col-lg-5 grid">
                  <div class="p-40">
                    <h5 class="p-t-40">Sign Up Using Social Account</h5>
                    <p class="p-t-b-20">
                      Hey Soldier welcome back signin now there is lot of new
                      stuff waiting for you
                    </p>
                    <a href="#" class="btn btn-lg btn-block btn-social facebook"
                      ><i class="icon-facebook"></i> Login with Facebook</a
                    ><a href="#" class="btn btn-lg btn-block btn-social twitter"
                      ><i class="icon-twitter"></i> Login with Twitter</a
                    >
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="light p-t-b-40">
                    <div class="p-40">
                      <h5 class="p-b-20">Create New User Account</h5>
                      <form
                        action="http://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html"
                      >
                        <div class="form-group has-icon">
                          <i class="icon-user-circle"></i>
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Your Name"
                          />
                        </div>
                        <div class="form-group has-icon">
                          <i class="icon-envelope-o"></i>
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Email Address"
                          />
                        </div>
                        <div class="form-group has-icon">
                          <i class="icon-user-secret"></i>
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Password"
                          />
                        </div>
                        <div class="form-group has-icon">
                          <i class="icon-repeat"></i>
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Confirm Password"
                          />
                        </div>
                        <input
                          type="submit"
                          class="btn btn-primary btn-lg btn-block"
                          value="Sign Up Now"
                        />
                        <p class="forget-pass">
                          A verification email wil be sent to you
                        </p>
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
  <!-- Mirrored from xvelopers.com/demos/html/paper-1.8.2/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:33:16 GMT -->
</html>

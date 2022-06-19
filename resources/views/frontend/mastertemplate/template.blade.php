
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    {{-- ---------------------head----------- --}}
    @include('frontend.includes.head')
    
    
    {{-- ----------------------css--------------------- --}}
    @include('frontend.includes.css')
</head>

<body>
   {{-- ----------------------------------modal----------------- --}}

   @include('frontend.includes.modal')
   
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                               
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
                                    <div><img src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                    <div><img src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                    <div><img src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                    <div><img src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                    <div><img src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                    <div><img src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
       {{-- -------------------heronav------------------- --}}
       @include('frontend.includes.heronav')
    
        {{-- ------------------middle nav with search box--------------- --}}
            @include('frontend.includes.middlenav')
    
        {{-- ----------------------------megamenue----------------------- --}}
    
         @include('frontend.includes.megamenue') 
    
    </header>
  
   {{-- ----------------------------------mobile header-------------- --}}
   @include('frontend.includes.mobileheader')

  @yield('main')
    <footer class="main">
       {{-- ----------------------------footernewsletter---------- --}}
        @include('frontend.includes.footernewslatter')

         {{-- ------------------------footerfeatuers------------------ --}}
         @include('frontend.includes.footerfeatures')
       

        {{-- ------------------------------footer middle-------------------------}}
        @include('frontend.includes.footermiddle')

        {{-- ---------------------------------footer bottom--- footer contact section------------------------ --}}
        @include('frontend.includes.footerbottom')
    </footer>
    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="assets/imgs/theme/loading.gif" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    {{-- --------------------js------------------- --}}
    @include('frontend.includes.script')
</body>

</html>
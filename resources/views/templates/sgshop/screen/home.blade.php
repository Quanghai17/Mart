@php
/*
$layout_page = home
*/ 
$news = $modelNews ->start()->getData();


// dd($news);
$banners_stores = $modelBanner->start()->getBreadcrumb()->getData();
$banners = $modelBanner->start()->getBanner()->getData();
$categories = $modelCategory->start()->getCategoryRoot()->getData();
$products = $modelProduct
    ->start()
    ->getProductLatest()
    ->getData();
$products01 = $modelProduct
    ->start()
    ->getProductLatest()
    ->getProductToCategory('97e1a92d-37d2-4eea-a4fc-4fb00b4d360d')
    ->getData();
$products02 = $modelProduct
    ->start()
    ->getProductLatest()
    ->getProductToCategory('97e1a9a7-233e-41db-8026-ded6bcebf3d7')
    ->getData();
$products03 = $modelProduct
    ->start()
    ->getProductLatest()
    ->getProductToCategory('97e1a9f1-26b2-4b9e-a49c-e87c8b423f29')
    ->getData();
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
{{-- @dd($banners); --}}
   {{--// Render include view --}}
   <main id="main" class="">
      <div id="content" role="main" class="content-area"> 
         <div class="row section1"  id="row-1877860102">
            <div id="col-1593369048" class="col medium-8 small-12 large-8"  >
               <div class="col-inner"  >       
                  <div class="slider-wrapper relative" id="slider-1634107577" >
                     <div class="slider slider-nav-simple slider-nav-large slider-nav-light slider-style-normal"
                        data-flickity-options='{
                              "cellAlign": "center",
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "freeScroll": false,
                              "wrapAround": true,
                              "autoPlay": 6000,
                              "pauseAutoPlayOnHover" : true,
                              "prevNextButtons": true,
                              "contain" : true,
                              "adaptiveHeight" : true,
                              "dragThreshold" : 10,
                              "percentPosition": true,
                              "pageDots": true,
                              "rightToLeft": false,
                              "draggable": true,
                              "selectedAttraction": 0.1,
                              "parallax" : 0,
                              "friction": 0.6        }'
                        >
                        @foreach($banners as $banner) 
                           <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2144891235">
                              <div class="img-inner dark" >
                                 <img width="900" height="400" src="{{ sc_file($banner->image) }}" class="attachment-original size-original" alt="banner 1" decoding="async" loading="lazy" srcset="{{ sc_file($banner->image) }}" sizes="(max-width: 900px) 100vw, 900px" />						
                              </div>                 
                                 <style>
                                 #image_2144891235 {
                                 width: 100%;
                                 }
                                 </style>
                           </div>
                        @endforeach
                        {{-- <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1778631272">
                           <div class="img-inner dark" >
                              <img width="900" height="400" src="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/05/banner-2-sgshop.png')}}" class="attachment-original size-original" alt="banner 2" decoding="async" loading="lazy" srcset="https://sgshop.com.vn/wp-content/uploads/2022/05/banner-2-sgshop.png 900w, https://sgshop.com.vn/wp-content/uploads/2022/05/banner-2-sgshop-300x133.png 300w, https://sgshop.com.vn/wp-content/uploads/2022/05/banner-2-sgshop-768x341.png 768w, https://sgshop.com.vn/wp-content/uploads/2022/05/banner-2-sgshop-600x267.png 600w" sizes="(max-width: 900px) 100vw, 900px" />						
                           </div>
                              
                           <style>
                           #image_1778631272 {
                           width: 100%;
                           }
                           </style>
                        </div> --}}
                     </div>
                     <div class="loading-spin dark large centered"></div>
                  </div>
               </div>
            </div>   
            <div id="col-917848532" class="col head-4 hide-for-medium medium-4 small-12 large-4"  >
                  <div class="col-inner"  >
                        <div class="slider-wrapper relative" id="slider-1873317779" >
                           <div class="slider slider-nav-simple slider-nav-normal slider-nav-light slider-style-normal"
                              data-flickity-options='{
                                    "cellAlign": "center",
                                    "imagesLoaded": true,
                                    "lazyLoad": 1,
                                    "freeScroll": false,
                                    "wrapAround": true,
                                    "autoPlay": 6000,
                                    "pauseAutoPlayOnHover" : true,
                                    "prevNextButtons": true,
                                    "contain" : true,
                                    "adaptiveHeight" : true,
                                    "dragThreshold" : 10,
                                    "percentPosition": true,
                                    "pageDots": true,
                                    "rightToLeft": false,
                                    "draggable": true,
                                    "selectedAttraction": 0.1,
                                    "parallax" : 0,
                                    "friction": 0.6        }'
                              >
                              @foreach($news as $new)   
                                 <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_885352546">
                                    <div class="img-inner image-cover dark" style="padding-top:180px;">
                                       <a href="{{ $new->getUrl() }}"><img width="800" height="800" src="{{sc_file($new->getImage())}}" class="attachment-original size-original" alt="Địa chỉ bán sữa hạt dinh dương hogi" decoding="async" loading="lazy" srcset="" sizes="(max-width: 800px) 100vw, 800px" /></a>						
                                    </div>
                                                   
                                    <style>
                                    #image_885352546 {
                                    width: 100%;
                                    }
                                    </style>
                                 </div>
                              @endforeach
                           {{-- <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1358941569">
                                             <div class="img-inner image-cover dark" style="padding-top:180px;">
                              <img width="800" height="800" src="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/05/sam-lat-mat-ong.jpg')}}" class="attachment-original size-original" alt="Hồng sâm lát tẩm mật ong Sliced Korea Red Ginseng - Jeong Geun Sam 200g Hàn Quốc" decoding="async" loading="lazy" srcset="https://sgshop.com.vn/wp-content/uploads/2022/05/sam-lat-mat-ong.jpg 800w, https://sgshop.com.vn/wp-content/uploads/2022/05/sam-lat-mat-ong-300x300.jpg 300w, https://sgshop.com.vn/wp-content/uploads/2022/05/sam-lat-mat-ong-150x150.jpg 150w, https://sgshop.com.vn/wp-content/uploads/2022/05/sam-lat-mat-ong-768x768.jpg 768w, https://sgshop.com.vn/wp-content/uploads/2022/05/sam-lat-mat-ong-600x600.jpg 600w, https://sgshop.com.vn/wp-content/uploads/2022/05/sam-lat-mat-ong-100x100.jpg 100w" sizes="(max-width: 800px) 100vw, 800px" />						
                                    </div>
                                             
                              <style>
                              #image_1358941569 {
                              width: 100%;
                              }
                              </style>
                              </div>
                        
                           </div> --}}
                        <div class="loading-spin dark large centered"></div>
                     </div>
                  <div class="row box-info"  id="row-144020382">
                     <div id="col-600802747" class="col medium-6 small-12 large-6"  >
                        <div class="col-inner dark"  >
                           <div class="icon-box featured-box icon-box-left text-left"  >
                              <div class="icon-box-img" style="width: 20px">
                                 <div class="icon">
                                    <div class="icon-inner" >
                                       <img width="60" height="60" src="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/04/287317-512.png')}}" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" />					</div>
                                 </div>
                              </div>
                              <div class="icon-box-text last-reset">          
                                 <div id="text-1271963466" class="text info">  
                                    <p class="d-block mb-0 text-uppercase">HÀNG CHẤT LƯỢNG</p>
                                    <div class="category mb-0">Cam kết chính hãng
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="col-483978117" class="col medium-6 small-12 large-6"  >
                        <div class="col-inner dark"  >                       
                           <div class="icon-box featured-box icon-box-left text-left"  >
                              <div class="icon-box-img" style="width: 20px">
                                 <div class="icon">
                                    <div class="icon-inner" >
                                       <img width="60" height="60" src="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/04/4940giao-hang-toan-quoc.png')}}" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" />					</div>
                                 </div>
                              </div>
                              <div class="icon-box-text last-reset">                      
                                 <div id="text-2758439269" class="text info">     
                                    <p class="d-block mb-0 text-uppercase"><span style="font-size: 90%;">GIAO HÀNG TOÀN QUỐC</span></p>
                                       <div class="category mb-0">Chuyển phát nhanh</div>
                                 </div>
                                    
                              </div>
                           </div>
                        </div>
                     </div>                     
                     <div id="col-847357362" class="col medium-6 small-12 large-6"  >
                        <div class="col-inner dark"  >
                           <div class="icon-box featured-box icon-box-left text-left"  >
                              <div class="icon-box-img" style="width: 20px">
                                 <div class="icon">
                                    <div class="icon-inner" >
                                       <img width="60" height="60" src="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/04/7925bao-hanh.png')}}" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" />					</div>
                                 </div>
                              </div>
                              <div class="icon-box-text last-reset">                       
                                 <div id="text-630401771" class="text info">      
                                    <p class="d-block mb-0 text-uppercase">BẢO HÀNH</p>
                                       <div class="category mb-0">Có điều kiện kèm theo</div>
                                 </div>
                              </div>
                           </div>    
                        </div>
                     </div>
                     <div id="col-422175202" class="col medium-6 small-12 large-6"  >
                        <div class="col-inner dark"  >
                           <div class="icon-box featured-box icon-box-left text-left"  >
                              <div class="icon-box-img" style="width: 20px">
                                 <div class="icon">
                                    <div class="icon-inner" >
                                       <img width="60" height="60" src="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/04/3766ho-tro-24-7.png')}}" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" />					</div>
                                 </div>
                              </div>
                              <div class="icon-box-text last-reset">                        
                                 <div id="text-54604441" class="text info">   
                                    <p class="d-block mb-0 text-uppercase">HỖ TRỢ 24/7</p>
                                    <div class="category mb-0">Hỗ trợ nhiệt tình 24/7</div>
                                 </div>
                                    
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         
         
         
      <section class="section best-product" id="section_1163217962">
         <div class="bg section-bg fill bg-fill  " ></div>
            <div class="section-content relative">        
               <div class="row best-product-wrap"  id="row-495755819">
                  <div id="col-117250333" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                        <p class="text-center"><span class="title">Sản phẩm mới ra mắt</span></p>
                           <div class="row best-sell large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                           @foreach($products as $product)
                              <div class="product-small col has-hover product type-product post-505 status-publish first instock product_cat-cham-soc-suc-khoe product_cat-thuc-pham product_tag-dia-chi-ban-dong-trung-ha-thao product_tag-dia-chi-ban-dong-trung-ha-thao-hogi product_tag-dong-trung-ha-thao-hogi product_tag-dong-trung-ha-thao-hogi-so-kho has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                                 <div class="col-inner">
                           
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="{{ $product->getUrl() }}" aria-label="Đông trùng hạ thảo Hogi">
                                                   <img width="300" height="300" src="{{sc_file($product->getImage())}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Đông trùng hạ thảo hogi sợ khô" decoding="async" loading="lazy" srcset="{{sc_file($product->getImage())}}" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover"></div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                          </div>
                                    
                                          <div class="box-text box-text-products text-center grid-style-2">
                                             <div class="title-wrapper"><p class="name product-title woocommerce-loop-product__title"><a href="{{ $product->getUrl() }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{$product->name}}</a></p></div><div class="price-wrapper">
                                                <span class="price"><span class="amountx">Liên hệ</span></span>
                                             </div>		
                                          </div>
                                       </div>
                                 </div>
                              </div>
                           @endforeach
                           </div><div class="product-small col has-hover product type-product post-522 status-publish instock product_cat-uncategorized product_tag-noi-com-dien-happy-time product_tag-noi-com-dien-loai-tot-happy-time-1-8-lit product_tag-noi-com-dien-sunhose product_tag-noi-com-dien-sunhouse-happy-time has-post-thumbnail shipping-taxable purchasable product-type-simple">
                              <div class="col-inner">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      
      
      
            <div class="row row2"
            id="row-294710775">
            <div id="col-1452415533"
               class="col small-12
               large-12">
               <div class="col-inner">
                  <div class="container
                     section-title-container"><h3
                        class="section-title
                        section-title-normal"><b></b><span
                           class="section-title-main">Chăm
                           sóc sức khỏe</span><b></b></h3></div>
                  <div class="row best-sell xborder large-columns-5 medium-columns-3 small-columns-2 row-small">
                  @foreach($products01 as $product)
                     <div
                        class="product-small
                        col has-hover
                        product type-product
                        post-503
                        status-publish first
                        instock
                        product_cat-cham-soc-suc-khoe
                        product_cat-thuc-pham
                        product_tag-cao-dong-trung
                        product_tag-cao-dong-trung-hong-sam-hogi
                        product_tag-dia-chi-ban-cao-dong-trung
                        has-post-thumbnail
                        featured
                        shipping-taxable
                        purchasable
                        product-type-simple">
                        <div
                           class="col-inner">
                           <div
                              class="badge-container
                              absolute left top
                              z-1">
                           </div>
                           <div
                              class="product-small
                              box ">
                              <div
                                 class="box-image">
                                 <div
                                    class="image-fade_in_back">
                                    <a
                                       href="{{ $product->getUrl() }}"
                                       aria-label="Cao
                                       Đông Trùng Hồng
                                       Sâm Hogi">
                                       <img
                                          width="300"
                                          height="300"
                                          src="{{sc_file($product->getImage())}}"
                                          class="attachment-woocommerce_thumbnail
                                          size-woocommerce_thumbnail"
                                          alt="cao đông
                                          trùng hồng sâm
                                          hogi"
                                          decoding="async"
                                          loading="lazy"
                                          srcset="{{sc_file($product->getImage())}}"
                                          sizes="(max-width:
                                          300px) 100vw,
                                          300px" /> </a>
                                 </div>
                                 <div
                                    class="image-tools
                                    is-small top
                                    right
                                    show-on-hover">
                                 </div>
                                 <div
                                    class="image-tools
                                    is-small
                                    hide-for-small
                                    bottom left
                                    show-on-hover">
                                 </div>
                                 <div
                                    class="image-tools
                                    grid-tools
                                    text-center
                                    hide-for-small
                                    bottom
                                    hover-slide-in
                                    show-on-hover">
                                 </div>
                              </div>

                              <div
                                 class="box-text
                                 box-text-products
                                 text-center
                                 grid-style-2">
                                 <div
                                    class="title-wrapper"><p
                                       class="name
                                       product-title
                                       woocommerce-loop-product__title"><a
                                          href="{{ $product->getUrl() }}"
                                          class="woocommerce-LoopProduct-link
                                          woocommerce-loop-product__link">{{$product->name}}</a></p></div><div
                                    class="price-wrapper">
                                    <span
                                       class="price"><span
                                          class="amountx">Liên
                                          hệ</span></span>
                                 </div> </div>
                           </div>
                        </div>
                     </div>
                  @endforeach 
                  </div>
      
      
                  <div class="row row2"
                  id="row-582640476">

                  <div id="col-426627400"
                     class="col small-12
                     large-12">
                     <div class="col-inner">
                        <div class="container
                           section-title-container"><h3
                              class="section-title
                              section-title-normal"><b></b><span
                                 class="section-title-main">ĐỒ
                                 GIA DỤNG</span><b></b></h3></div>
                        <div class="row
                           best-sell xborder
                           large-columns-5
                           medium-columns-3
                           small-columns-2
                           row-small">
                         @foreach($products02 as $product)
                           <div
                              class="product-small
                              col has-hover
                              product type-product
                              post-540
                              status-publish first
                              instock
                              product_cat-do-gia-dung
                              product_cat-nha-cua-va-doi-song
                              product_tag-ban-la-chinh-hang
                              product_tag-ban-la-gia-re
                              product_tag-ban-la-hoi-nuoc
                              product_tag-ban-la-hoi-nuoc-sunhouse-shd2063p
                              product_tag-ban-la-sunhouse-shd2063p
                              has-post-thumbnail
                              shipping-taxable
                              purchasable
                              product-type-simple">
                              <div
                                 class="col-inner">
                                 <div
                                    class="badge-container
                                    absolute left top
                                    z-1">
                                 </div>
                                 <div
                                    class="product-small
                                    box ">
                                    <div
                                       class="box-image">
                                       <div
                                          class="image-fade_in_back">
                                          <a
                                             href="{{ $product->getUrl() }}"
                                             aria-label="Bàn
                                             là hơi nước
                                             Sunhouse
                                             SHD2063P">
                                             <img
                                                width="300"
                                                height="300"
                                                src="{{sc_file($product->getImage())}}"
                                                class="attachment-woocommerce_thumbnail
                                                size-woocommerce_thumbnail"
                                                alt="Bàn là
                                                hơi nước
                                                Sunhouse
                                                SHD2063P"
                                                decoding="async"
                                                loading="lazy"
                                                srcset="{{sc_file($product->getImage())}}"
                                                sizes="(max-width:
                                                300px) 100vw,
                                                300px" /> </a>
                                       </div>
                                       <div
                                          class="image-tools
                                          is-small top
                                          right
                                          show-on-hover">
                                       </div>
                                       <div
                                          class="image-tools
                                          is-small
                                          hide-for-small
                                          bottom left
                                          show-on-hover">
                                       </div>
                                       <div
                                          class="image-tools
                                          grid-tools
                                          text-center
                                          hide-for-small
                                          bottom
                                          hover-slide-in
                                          show-on-hover">
                                       </div>
                                    </div>

                                    <div
                                       class="box-text
                                       box-text-products
                                       text-center
                                       grid-style-2">
                                       <div
                                          class="title-wrapper"><p
                                             class="name
                                             product-title
                                             woocommerce-loop-product__title"><a
                                                href="{{ $product->getUrl() }}"
                                                class="woocommerce-LoopProduct-link
                                                woocommerce-loop-product__link">{{$product->name}}</a></p></div><div
                                          class="price-wrapper">
                                          <span
                                             class="price"><span
                                                class="amountx">Liên
                                                hệ</span></span>
                                       </div> </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach         
                        </div>       
                     </div>
                  </div>
               </div>

                  <div class="row row2"
                  id="row-582640476">

                  <div id="col-426627400"
                     class="col small-12
                     large-12">
                     <div class="col-inner">
                        <div class="container
                           section-title-container"><h3
                              class="section-title
                              section-title-normal"><b></b><span
                                 class="section-title-main">THỰC PHẨM</span><b></b></h3></div>
                        <div class="row
                           best-sell xborder
                           large-columns-5
                           medium-columns-3
                           small-columns-2
                           row-small">
                         @foreach($products03 as $product)
                           <div
                              class="product-small
                              col has-hover
                              product type-product
                              post-540
                              status-publish first
                              instock
                              product_cat-do-gia-dung
                              product_cat-nha-cua-va-doi-song
                              product_tag-ban-la-chinh-hang
                              product_tag-ban-la-gia-re
                              product_tag-ban-la-hoi-nuoc
                              product_tag-ban-la-hoi-nuoc-sunhouse-shd2063p
                              product_tag-ban-la-sunhouse-shd2063p
                              has-post-thumbnail
                              shipping-taxable
                              purchasable
                              product-type-simple">
                              <div
                                 class="col-inner">
                                 <div
                                    class="badge-container
                                    absolute left top
                                    z-1">
                                 </div>
                                 <div
                                    class="product-small
                                    box ">
                                    <div
                                       class="box-image">
                                       <div
                                          class="image-fade_in_back">
                                          <a
                                             href="{{ $product->getUrl() }}"
                                             aria-label="Bàn
                                             là hơi nước
                                             Sunhouse
                                             SHD2063P">
                                             <img
                                                width="300"
                                                height="300"
                                                src="{{sc_file($product->getImage())}}"
                                                class="attachment-woocommerce_thumbnail
                                                size-woocommerce_thumbnail"
                                                alt="Bàn là
                                                hơi nước
                                                Sunhouse
                                                SHD2063P"
                                                decoding="async"
                                                loading="lazy"
                                                srcset="{{sc_file($product->getImage())}}"
                                                sizes="(max-width:
                                                300px) 100vw,
                                                300px" /> </a>
                                       </div>
                                       <div
                                          class="image-tools
                                          is-small top
                                          right
                                          show-on-hover">
                                       </div>
                                       <div
                                          class="image-tools
                                          is-small
                                          hide-for-small
                                          bottom left
                                          show-on-hover">
                                       </div>
                                       <div
                                          class="image-tools
                                          grid-tools
                                          text-center
                                          hide-for-small
                                          bottom
                                          hover-slide-in
                                          show-on-hover">
                                       </div>
                                    </div>

                                    <div
                                       class="box-text
                                       box-text-products
                                       text-center
                                       grid-style-2">
                                       <div
                                          class="title-wrapper"><p
                                             class="name
                                             product-title
                                             woocommerce-loop-product__title"><a
                                                href="{{ $product->getUrl() }}"
                                                class="woocommerce-LoopProduct-link
                                                woocommerce-loop-product__link">{{$product->name}}</a></p></div><div
                                          class="price-wrapper">
                                          <span
                                             class="price"><span
                                                class="amountx">Liên
                                                hệ</span></span>
                                       </div> </div>
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
      </div>   
      <style>
      #section_1163217962 {
        padding-top: 30px;
        padding-bottom: 30px;
      }
      #section_1163217962 .section-bg.bg-loaded {
        background-image: url(wp-content/uploads/2022/04/bg-container.png);
      }
      #section_1163217962 .ux-shape-divider--top svg {
        height: 150px;
        --divider-top-width: 100%;
      }
      #section_1163217962 .ux-shape-divider--bottom svg {
        height: 150px;
        --divider-width: 100%;
      }
      </style>
   </section>

   <section class="section duan" id="section_1230773905">
      <div class="bg section-bg fill bg-fill  bg-loaded" ></div>
         <div class="section-content relative">
               
            <div class="row"  id="row-1120314601">
      
               <div id="col-1656833091" class="col small-12 large-12"  >
                  <div class="col-inner" >         
                     <p class="title font-weight-bold" style="text-align: center;"><span style="color: #808285;"><strong>BÀI VIẾT & TIN TỨC</strong></span></p>
                        <div class="slider-wrapper relative" id="slider-1278861559" >
                           <div class="slider slider-nav-dots-dashes-spaced slider-nav-simple slider-nav-large slider-nav-dark slider-nav-outside slider-style-shadow slider-show-nav"
                              data-flickity-options='{
                                    "cellAlign": "center",
                                    "imagesLoaded": true,
                                    "lazyLoad": 1,
                                    "freeScroll": false,
                                    "wrapAround": true,
                                    "autoPlay": 6000,
                                    "pauseAutoPlayOnHover" : true,
                                    "prevNextButtons": true,
                                    "contain" : true,
                                    "adaptiveHeight" : true,
                                    "dragThreshold" : 10,
                                    "percentPosition": true,
                                    "pageDots": true,
                                    "rightToLeft": false,
                                    "draggable": true,
                                    "selectedAttraction": 0.1,
                                    "parallax" : 0,
                                    "friction": 0.6        }'
                              >    
                              @foreach($news as $new)   
                                 <div class="row"  id="row-660356219">
                                    <div id="col-182914486" class="col small-12 large-12"  >
                                       <div class="col-inner"  >
                                          <div class="box has-hover   has-hover box-text-bottom" >
                                             <div class="box-image" >
                                                   <div class="image-cover" style="padding-top:56.25%;">
                                                      <a href="{{ $new->getUrl() }}"><img width="600" height="350" src="{{sc_file($new->getImage())}}" class="attachment- size-" alt="sụn cá mập" decoding="async" loading="lazy" srcset="{{sc_file($product->getImage())}}" sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                   </div>
                                             </div>
                                             <div class="box-text text-center" >
                                                <div class="box-text-inner">  
                                                   <h4>{{$new->title}}</h4>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                             @endforeach
                                 <div class="loading-spin dark large centered"></div>
                              <style>
                                 #slider-1278861559 .flickity-slider > * { max-width: 55% !important; }
                              </style>
                           </div>
                        </div>
                  </div>   
               </div>
            </div>

                  <style>
                  #section_1230773905 {
                  padding-top: 30px;
                  padding-bottom: 30px;
                  background-color: rgb(250, 250, 250);
                  }
                  #section_1230773905 .ux-shape-divider--top svg {
                  height: 150px;
                  --divider-top-width: 100%;
                  }
                  #section_1230773905 .ux-shape-divider--bottom svg {
                  height: 150px;
                  --divider-width: 100%;
                  }
                  </style>
      </section>          
      </div>
</main>
@endsection

@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush

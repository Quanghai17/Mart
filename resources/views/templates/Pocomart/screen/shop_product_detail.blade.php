@php
/*
$layout_page = shop_product_detail
**Variables:**
- $product: no paginate
- $productRelation: no paginate
*/
@endphp

@extends($sc_templatePath.'.layout')

{{-- block_main --}}
@section('block_main_content_center')
@php
$countItem = 0
@endphp

<div class="main-index">
  <section class="bread-crumb">
    <div class="container">
      <div class="row">
        <div class="col-12 a-left">
          <ul class="breadcrumb">
            <li class="home">
              <a href="/"><span>Trang chủ</span></a>
              <span class="mr_lr">&nbsp;/&nbsp;</span>
            </li>
            <li>
              <a class="changeurl" href="#"><span>{{$product->name}}</span></a>
              <span class="mr_lr">&nbsp;/&nbsp;</span>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="product details-main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="category" content="Samsung">
    <meta itemprop="url" content="//pocomart.mysapo.net/samsung-galaxy-s21-ultra">
    <meta itemprop="name" content="Samsung Galaxy S21 Ultra">
    <meta itemprop="image" content="../bizweb.dktcdn.net/thumb/grande/100/429/689/products/galaxy-s21-ultra-5g-black-didongviet9f5b.jpg?v=1623565189073">

    <div class="d-none" itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
      <meta itemprop="name" content="Samsung" />
    </div>
    <meta itemprop="model" content="">
    <meta itemprop="sku" content="ssultra-1">
    <div class="d-none hidden" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      <div class="inventory_quantity hidden" itemscope itemtype="http://schema.org/ItemAvailability">
        <span class="a-stock" itemprop="supersededBy">
          Còn hàng
        </span>
      </div>
      <link itemprop="availability" href="http://schema.org/InStock">
      <meta itemprop="priceCurrency" content="VND">
      <meta itemprop="price" content="25000000">
      <meta itemprop="url" content="samsung-galaxy-s21-ultra.html">
      <span itemprop="UnitPriceSpecification" itemscope itemtype="https://schema.org/Downpayment">
        <meta itemprop="priceType" content="25000000">
      </span>
      <span itemprop="UnitPriceSpecification" itemscope itemtype="https://schema.org/Downpayment">
        <meta itemprop="priceSpecification" content="25500000">
      </span>
      <meta itemprop="priceValidUntil" content="2099-01-01">
    </div>
    <div class="d-none hidden" id="https://pocomart.mysapo.net" itemprop="seller" itemtype="http://schema.org/Organization" itemscope>
      <meta itemprop="name" content="pocomart" />
      <meta itemprop="url" content="index.html" />
      <meta itemprop="logo" content="../bizweb.dktcdn.net/100/429/689/themes/869367/assets/logoa123.png?1672132862712" />
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-lg-9 col-12">
          <div class="row">
            <div class="product-detail-left product-images col-12 col-md-12 col-lg-5">
              <div class="product-image-detail">
                <div class="swiper-container gallery-top margin-bottom-10">
                  <div class="swiper-wrapper" id="lightgallery">

                    <a class="swiper-slide" data-hash="0" href="../bizweb.dktcdn.net/thumb/1024x1024/100/429/689/products/galaxy-s21-ultra-5g-black-didongviet9f5b.jpg?v=1623565189073" title="Bấm vào để xem thư viện ảnh Samsung Galaxy S21 Ultra">
                      <img src="{{ sc_file($product->getImage()) }}" class="img-responsive mx-auto d-block swiper-lazy" />
                      
                    </a>
                  </div>
                </div>

              </div>
            </div>
            
            
            <div class="col-12 col-md-12 col-lg-7 details-pro">
              <h1 class="title-head">{{$product->name}}</h1>

              <div class="sapo-product-reviews-badge" data-id="21988509" onclick="scrollToxx();">
              </div>

              <div class="product-top clearfix">

                <div class="sku-product clearfix">
                  <span itemprop="brand" itemtype="http://schema.org/Brand" itemscope>
                    <meta itemprop="name" content="Samsung" />Thương hiệu:
                    <strong>{!! empty($product->brand->name) ? 'None' : '<a href="'.$product->brand->getUrl().'">'.$product->brand->name.'</a>' !!}</strong>
                  </span>
                  <span class="variant-sku" itemprop="sku" content="ssultra-1">Mã sản phẩm:
                    <strong>{{ $product->sku }}</strong></span>
                </div>
              </div>
              <div class="group-power">

                <div class="inventory_quantity d-none">

                  <span class="a-stock a2">
                    <link itemprop="availability" href="http://schema.org/InStock" />Còn hàng
                  </span>

                </div>
                <div class="price-box clearfix">

                  <span class="special-price">
                    <span class="price product-price"> {!! $product->showPriceDetail() !!}</span>
                  </span> <!-- Giá Khuyến mại -->
                  <span class="old-price">
                    Giá niêm yết:
                    <del class="price product-price-old">
                    {!! $product->showPriceDetail() !!}
                    </del>
                  </span> <!-- Giá gốca -->
                  
                </div>
              </div>
              <div class="km-hot">
                <div class="box-km">
                  <h2 class="title_km">
                    <span>Khuyến mãi - ưu đãi</span>
                  </h2>
                  <div class="box-promotion">

                    <p>Tặng ngay tai nghe iDot trị giá 1 triệu</p>
                    <p>Tặng ốp lưng chống sốc</p>
                    <p>Tặng phiếu mua hàng trị giá 2.000.000đ</p>
                  </div>
                </div>
              </div>
              <form enctype="multipart/form-data" id="add-to-cart-form" data-cart-form action="{{ sc_route('cart.add') }}" method="post" class="wishItem">
              {{ csrf_field() }}
              <input type="hidden" name="product_id" id="product-detail-id" value="{{ $product->id }}" />
              <input type="hidden" name="storeId" id="product-detail-storeId" value="{{ $product->store_id }}" />
                <div class="form-product">
                  <div class="clearfix from-action-addcart ">
                    <div class="qty-ant clearfix custom-btn-number ">
                      <label class="d-none">Số lượng:</label>
                      <div class="custom custom-btn-numbers clearfix input_number_product">
                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button>
                        <input aria-label="Số lượng" type="text" class="qty input-text" id="qty" name="qty"  size="4" value="1" maxlength="3" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;" />
                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button>
                      </div>
                    </div>
                    <div class="btn-mua">

                      <button type="submit" data-role='addtocart' class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">Thêm vào
                        giỏ<span>Cam kết chính hãng / đổi trả 24h</span></button>
                      <button type="submit" class="btn btn-lg btn-gray btn_buy btn-buy-now">Mua ngay<span>Thanh
                          toán nhanh chóng</span></button>

                    </div>
                  </div>
                  <div class="product-wish">
                    <div class="product-hotline">Gọi <a href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}" title="{{ sc_store('long_phone', ($storeId ?? null)) }}">{{ sc_store('long_phone', ($storeId ?? null)) }}</a> để tư vấn mua hàng</div>
                    <a href="" class="setWishlist" data-wish="samsung-galaxy-s21-ultra" tabindex="0" title="Thêm vào yêu thích">
                      <svg enable-background="new 0 0 412.735 412.735" version="1.1" viewBox="0 0 412.74 412.74" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <path d="m295.71 35.522c-34.43-0.184-67.161 14.937-89.339 41.273-22.039-26.516-54.861-41.68-89.339-41.273-64.633 0-117.03 52.395-117.03 117.03 0 110.76 193.31 218.91 201.14 223.09 3.162 2.113 7.286 2.113 10.449 0 7.837-4.18 201.14-110.76 201.14-223.09 0-64.633-52.396-117.03-117.03-117.03zm-89.339 319.22c-30.302-17.763-185.47-112.33-185.47-202.19 0-53.091 43.039-96.131 96.131-96.131 32.512-0.427 62.938 15.972 80.457 43.363 3.557 4.905 10.418 5.998 15.323 2.44 0.937-0.68 1.761-1.503 2.44-2.44 29.055-44.435 88.631-56.903 133.07-27.848 27.202 17.787 43.575 48.114 43.521 80.615 1e-3 90.907-155.17 184.95-185.47 202.19z" />
                      </svg>
                    </a>
                    <a href="" class="setCompare btn-views" data-compare="samsung-galaxy-s21-ultra" data-type="Smartphone" tabindex="0" title="Thêm vào so sánh">
                      <svg width="419pt" height="419pt" viewBox="0 -45 419.24 419" xmlns="http://www.w3.org/2000/svg">
                        <path d="m359.08 102.91c1.4609 1.5391 3.4766 2.4375 5.6016 2.4844 2.125 0.050781 4.1797-0.75 5.7109-2.2227l46.414-44.898c1.5625-1.5117 2.4414-3.5938 2.4336-5.7656-0.003906-2.1758-0.89453-4.2539-2.4688-5.7539l-46.41-44.41c-3.1953-3.0547-8.2578-2.9414-11.312 0.25-1.4648 1.4922-2.2656 3.5156-2.2188 5.6055 0.046875 2.0898 0.9375 4.0742 2.4688 5.5l32.008 30.426h-64.273c-27.59 0.14453-53.539 13.133-70.191 35.137l-54.852 71.617-79.242-103.46c-1.4961-2.0156-3.8359-3.2305-6.3477-3.2891h-108.4c-4.418 0-8 3.582-8 8 0 4.418 3.582 8 8 8h104.45l79.449 104-79.449 104h-104.45c-4.418 0-8 3.582-8 8 0 4.418 3.582 8 8 8h108.4c2.5195-0.078125 4.8594-1.3086 6.3477-3.3359l79.242-103.41 54.812 71.617c16.66 22.012 42.625 35.004 70.23 35.133h64.273l-32.008 30.426c-2.3555 2.2344-3.1016 5.6875-1.8789 8.6992 1.2227 3.0078 4.1602 4.9648 7.4102 4.9258 2.0625-0.007813 4.043-0.8125 5.5312-2.2461l46.41-44.426c1.5742-1.5039 2.4648-3.5859 2.4688-5.7617 0.007813-2.1758-0.87109-4.2617-2.4336-5.7773l-46.414-44.91c-3.1758-3.0742-8.2422-2.9883-11.312 0.18359-3.0703 3.2539-2.9883 8.3633 0.1875 11.516l32.207 31.371h-64.441c-22.617-0.14062-43.875-10.816-57.5-28.875l-57.461-75.023 57.5-75.227c13.613-18.043 34.855-28.719 57.461-28.875h64.441l-32.207 31.371c-3.1758 3.1094-3.2578 8.1992-0.1875 11.414z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </form>
            </div>
            
            <div class="col-lg-12 col-12 product-tab e-tabs not-dqtab">
              <ul class="tabs tabs-title clearfix">
                <li class="tab-link current" data-tab="tab-1">
                  <span>Chi tiết</span>
                </li>
              </ul>
              <div id="tab-1" class="tab-content content_extab current">
                <div class="rte product_getcontent">
                  <div class="ba-text-fpt">
                    <p style="text-align: justify; text-indent: 0px; -webkit-text-stroke-width: 0px;"> {!! sc_html_render($product->content) !!}</p>
                  </div>
                </div>
              </div>
            </div>
        

          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="detail-right-box care-detail">
            <div class="detail-right-box-title">Thông tin hữu ích</div>
            <div class="detail-right-box-wrap">
              <div class="care-detail-box">

                <div class="care-detail-item bao-hanh-care">
                  <a href="#">
                    <span>
                      <img alt="Trung tâm bảo hành" height="12" width="16" src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/customer-supporta123.png')}}"></span>
                    <span class="txt-e-c">Trung tâm bảo hành</span>
                  </a>
                </div>
                <div class="care-detail-item van-chuyen-care">
                  <a href="#">
                    <span>
                      <img alt="Thông tin vận chuyển" height="12" width="22" src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/delivery-trucka123.png')}}"></span>
                    <span class="txt-e-c">Thông tin vận chuyển</span>
                  </a>
                </div>
                <div class="care-detail-item thanh-toan-care">
                  <a href="#">
                    <span>
                      <img alt="Hướng dẫn thanh toán" height="12" width="18" src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/credit-carda123.png')}}"></span>
                    <span class="txt-e-c">Hướng dẫn thanh toán</span></a>
                </div>
                <div class="support-ask-title">Chat với chúng tôi</div>
                <div class="support-ask-body">
                  <div class="support-ask-item">
                    <span class="support-ask-icon"><a target="_blank" href="https://m.me/meta.vn" title="Chat Facebook" rel="noreferrer nofollow">
                        <img class="lazyload" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/messenger-icona123.png')}}"></a></span>
                    <span class="support-ask-name"><a target="_blank" href="https://m.me/boroncoweb" title="Chat Facebook" rel="noreferrer nofollow">Boronco Web</a></span>
                  </div>
                  <div class="support-ask-item">
                    <span class="support-ask-icon"><a target="_blank" href="https://zalo.me/0388287614" title="Chat Zalo">
                        <img class="lazyload" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/zalo-icona123.png')}}"></a></span>
                    <span class="support-ask-name"><a target="_blank" href="https://zalo.me/0388287614" title="Chat Zalo với pocomart">0388287614</a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-bar" style="margin-top:20px">

            <div class="blog-relatedbar d-none">
              <div class="title"><a href="blogs/all/tagged/samsung-news.html" title="Tin liên quan">Tin liên quan</a></div>
              <div class="clearfix"></div>
              <div class="blog-bar-content"></div>
            </div>

          </div>
          <div class="section-related-product">
            <div class="section_prd_feature swiper-container swiper_related" id="sidebarproduct">
              <div class="title_module section">
                <h2 class="title-block">
                  <a href="samsung.html" title="Sản phẩm tương tự">Sản phẩm tương tự</a>
                </h2>
              </div>
              <div class=" section products product_related swiper-wrapper">
                <div class="item swiper-slide">
                @foreach ($productRelation as $key => $productRel)
                <div class="item_product_main">
                    <form action="https://pocomart.mysapo.net/cart/add" method="post" class="variants product-action wishItem" data-cart-form data-id="product-actions-21989403" enctype="multipart/form-data">
                      <div class="product-thumbnail sale " >
                        <a class="image_thumb" href="samsung-galaxy-note-21.html" title="Samsung Galaxy Note 21">
                          <picture>
                            
                            <img width="240" height="240" src="{{sc_file($productRel->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />
                          </picture>
                        </a>
                        <div class="product-action">
                          <div class="group_action">
                            <a href="javascript:void(0)" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
                              <svg enable-background="new 0 0 412.735 412.735" version="1.1" viewBox="0 0 412.74 412.74" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path d="m295.71 35.522c-34.43-0.184-67.161 14.937-89.339 41.273-22.039-26.516-54.861-41.68-89.339-41.273-64.633 0-117.03 52.395-117.03 117.03 0 110.76 193.31 218.91 201.14 223.09 3.162 2.113 7.286 2.113 10.449 0 7.837-4.18 201.14-110.76 201.14-223.09 0-64.633-52.396-117.03-117.03-117.03zm-89.339 319.22c-30.302-17.763-185.47-112.33-185.47-202.19 0-53.091 43.039-96.131 96.131-96.131 32.512-0.427 62.938 15.972 80.457 43.363 3.557 4.905 10.418 5.998 15.323 2.44 0.937-0.68 1.761-1.503 2.44-2.44 29.055-44.435 88.631-56.903 133.07-27.848 27.202 17.787 43.575 48.114 43.521 80.615 1e-3 90.907-155.17 184.95-185.47 202.19z" />
                              </svg>
                            </a>
                            <a href="javascript:void(0)" class="setCompare btn-views" data-compare="samsung-galaxy-note-21" data-type="Smartphone" tabindex="0" title="Thêm vào so sánh">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z">
                                </path>
                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z">
                                </path>
                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z">
                                </path>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <h3 class="product-name"><a href="samsung-galaxy-note-21.html" title="Samsung Galaxy Note 21">{{$productRel->name}}</a>
                        </h3>
                        <div class="price-box">
                          <span class="price">{!! $productRel->showPrice() !!}</span>
                         
                          <div class="action-cart">

                            <input type="hidden" name="variantId" value="47262129" />
                            <button class="btn-buy btn-views add_to_cart " title="Mua ngay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25">
                                <circle cx="7" cy="17" r="2"></circle>
                                <circle cx="15" cy="17" r="2"></circle>
                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
                                  V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
                                  C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"></path>
                              </svg>
                            </button>

                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                @endforeach
                


              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>
</div>

<!--/product-details-->
@endsection
{{-- block_main --}}


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
@php
/*
$layout_page = shop_product_detail
**Variables:**
- $product: no paginate
- $productRelation: no paginate
*/
$products_news = $modelProduct
    ->start()
    ->getProductLatest()
    ->setLimit(5)
    ->getData();
$categories = $modelCategory
    ->start()
    ->getCategoryRoot()
    ->getData();
@endphp

@extends($sc_templatePath.'.layout')

{{-- block_main --}}
@section('block_main_content_center')
{{-- @dd($product); --}}
@php
    $countItem = 0
@endphp
<div class="page-title shop-page-title product-page-title">
	<div class="page-title-inner flex-row medium-flex-wrap container">
	  <div class="flex-col flex-grow medium-text-center">
	  		<div class="is-medium">
	        <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{ sc_route('home') }}">Trang chủ</a> <span class="divider">&#47;</span> <a href="{{ sc_route('shop') }}">Sản phẩm</a> <span class="divider">&#47;</span>@foreach ($product->categories as $category)
            <a href="{{ $category->getUrl() }}">{{ $category->getTitle() }}</a>
          @endforeach</li></nav></div>
	      </div>
	  
        <div class="flex-col medium-text-center">
		   	</div>
	    </div>
	</div>

  {{-- Product_detail --}}
  <main id="main" class="">

    <div class="shop-container">
      <div class="container">
        <div class="woocommerce-notices-wrapper"></div></div>
          <div id="product-413" class="product type-product post-413 status-publish first instock product_cat-cham-soc-suc-khoe product_cat-thuc-pham product_tag-an-cung-nguu product_tag-an-cung-nguu-hoang-hoan has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
            <div class="row content-row row-divided row-large row-reverse">
              <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span><div class="is-divider small"></div><ul class="product-categories"><li class="cat-item cat-item-70 current-cat">@foreach ($product->categories as $category)
                  <a href="{{ $category->getUrl() }}">{{ $category->getTitle() }}</a>
                @endforeach</li>
                  @foreach($categories as $category)
                  <li class="cat-item cat-item-69"><a href="{{ $category->getUrl() }}">{{$category->title}}</a></li>
                  @endforeach
                  </ul></aside>
                <aside id="block_widget-2" class="widget block_widget">
                <span class="widget-title shop-sidebar">Sản phẩm nổi bật</span><div class="is-divider small"></div>
                <ul class="product_list_widget">
                  @foreach($products_news as $item) 
                  <li>
                    <a href="{{ $item->getUrl() }}" title="{{$item->name}}">
                      <img width="100" height="100" src="{{sc_file($item->getImage())}}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="{{$item->name}}" decoding="async" loading="lazy" srcset="{{sc_file($item->getImage())}}" sizes="(max-width: 100px) 100vw, 100px" />		
                      <span class="product-title">{{$item->name}}</span>
                    </a>
                    <span class="amountx">Liên hệ</span>
                  </li>
                  @endforeach
                </ul>
                  </aside>
                    </div>
  
    <div class="col large-9">
      <div class="product-main">
      <div class="row">
        <div class="large-6 col">
          
        <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
  
            <div class="badge-container is-larger absolute left top z-1"></div>
  
          <div class="image-tools absolute top show-on-hover right z-3"></div>
  
          <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
        data-flickity-options='{
            "cellAlign": "center",
            "wrapAround": true,
            "autoPlay": false,
            "prevNextButtons":true,
            "adaptiveHeight": true,
            "imagesLoaded": true,
            "lazyLoad": 1,
            "dragThreshold" : 15,
            "pageDots": false,
            "rightToLeft": false       }'>
          <div data-thumb="{{ sc_file($product->getImage()) }}" data-thumb-alt="{{$product->name}}" class="woocommerce-product-gallery__image slide first"><a href="{{ sc_file($product->getImage()) }}"><img width="600" height="600" src="{{ sc_file($product->getImage()) }}" class="wp-post-image skip-lazy" alt="{{$product->name}}" decoding="async" loading="lazy" title="an-cung-nguu" data-caption="" data-src="{{ sc_file($product->getImage()) }}" data-large_image="{{ sc_file($product->getImage()) }}" data-large_image_width="800" data-large_image_height="800" srcset="{{ sc_file($product->getImage()) }}" sizes="(max-width: 600px) 100vw, 600px" /></a></div>  </figure>
  
        <div class="image-tools absolute bottom left z-3">
            <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
          <i class="icon-expand" ></i>    </a>
         </div>
    </div>
  
    <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
      data-flickity-options='{
        "cellAlign": "left",
        "wrapAround": false,
        "autoPlay": false,
        "prevNextButtons": true,
        "asNavFor": ".product-gallery-slider",
        "percentPosition": true,
        "imagesLoaded": true,
        "pageDots": false,
        "rightToLeft": false,
        "contain": true
      }'>
    <div class="col is-nav-selected first">
      <a><img src="{{ sc_file($product->getImage()) }}" alt="" width="300" height="300" class="attachment-woocommerce_thumbnail" />				</a>
        </div><div class="col"><a><img src="{{ sc_file($product->getImage()) }}" alt="" width="300" height="300"  class="attachment-woocommerce_thumbnail" /></a></div>	</div>
      </div>
      <div class="product-info summary entry-summary col col-fit product-summary">
          <h1 class="product-title product_title entry-title">{{$product->name}}</h1>
          {{-- @dd($product); --}}
      <div class="is-divider small"></div>
      <div class="price-wrapper">
        <p class="price product-page-price ">
            <span class="amountx">Liên hệ</span></p>
      </div>
      <div class="product-short-description">
        <p><strong>{{$product->name}}</strong></p>
        {{-- @dd($product); --}}
        <p>{{$product->description}}</p>
      </div>
   
    
      <form class="cart"  action="{{ sc_route('cart.add') }}" method="post" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <input type="hidden" name="product_id" id="product-detail-id" value="{{ $product->id }}" />
        <input type="hidden" name="storeId" id="product-detail-storeId" value="{{ $product->store_id }}" />
        <div class="quantity buttons_added">
          <input type="button" value="-" class="minus button is-form"><label class="screen-reader-text" for="quantity_63895e678cf97"></label>
            <input
              type="number"
              id="quantity_63895e678cf97"
              class="input-text qty text"
              step="1"
              min="1"
              max=""
              name="qty"
              value="1"
              title="SL"
              size="4"
              placeholder=""
              inputmode="numeric" />
            <input type="button" value="+" class="plus button is-form">	
        </div>
        <button type="submit" name="add-to-cart" value="413" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>
        <div id="text-432694811" class="text hotline_cart">
          <p><strong><a href="tel:02877714567"> Hotline</a></strong></p>
          <p><span style="font-size: 100%;"><strong>{{ sc_store('long_phone', ($storeId ?? null)) }}</strong></span></p>
        </div>
      </form>

    
        </div>
      </div>
      </div>
      <div class="product-footer">
        
    <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
      <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
        <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
            <a href="#tab-description">Mô tả</a>
        </li>
      </ul>
      <div class="tab-panels">
        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
          <p>{!! sc_html_render($product->content) !!}</p>
        </div>
    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content " id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  
  
    <div class="related related-products-wrapper product-section">
      <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">Sản phẩm tương tự</h3>
        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small">
          @foreach ($productRelation as $key => $productRel)
          <div class="product-small col has-hover product type-product post-441 status-publish instock product_cat-cham-soc-suc-khoe product_cat-thuc-pham product_tag-nam-linh-chi product_tag-nam-linh-chi-han-quoc product_tag-nam-linh-chi-thai-lat has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
            <div class="col-inner">
    
              <div class="badge-container absolute left top z-1">
              </div>
              <div class="product-small box ">
                <div class="box-image">
                  <div class="image-fade_in_back">
                    <a href="{{ $productRel->getUrl() }}" aria-label="{{$productRel->name}}">
                    <img width="300" height="300" src="{{sc_file($productRel->getImage())}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{$productRel->name}}" decoding="async" loading="lazy" srcset="{{sc_file($productRel->getImage())}}" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                  </div>
                  <div class="image-tools is-small top right show-on-hover"></div>
                  <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                  <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                </div>
    
                <div class="box-text box-text-products text-center grid-style-2">
                  <div class="title-wrapper"><p class="name product-title woocommerce-loop-product__title"><a href="{{ $productRel->getUrl() }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{$productRel->name}}</a></p></div><div class="price-wrapper">
                    <span class="price"><span class="amountx">Liên hệ</span></span>
                  </div>		
                </div>
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
    </div><!-- shop container -->
  </main>
      

<!--/product-details-->
@endsection
{{-- block_main --}}


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush

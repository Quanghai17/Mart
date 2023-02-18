@php
/*
$layout_page = shop_home
**Variables:**
- $products: paginate
Use paginate: $products->appends(request()->except(['page','_token']))->links()
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

{{--  block_main_content_center  --}}
@section('block_main_content_center')

  @if (count($products))
	<div class="shop-page-title category-page-title page-title ">
    <div class="page-title-inner flex-row  medium-flex-wrap container">
      <div class="flex-col flex-grow medium-text-center">
	  	  <div class="is-medium">
          <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{ sc_route('home') }}">Trang chủ</a> <span class="divider">&#47;</span> Sản phẩm</nav></div>
            <div class="category-filtering category-filter-row show-for-medium">
              <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                <i class="icon-equalizer"></i>
		            <strong>Lọc</strong>
              </a>
              <div class="inline-block">
			        </div>
            </div>
        </div>
	    <div class="flex-col medium-text-center">
         <!-- Render include filter sort -->
          @include($sc_templatePath.'.common.product_filter_sort', ['filterSort' => $filter_sort])
          <!--// Render include filter sort -->
	    </div>
	  </div>
  </div>

	<main id="main" class="">
    <div class="row category-page-row">
		  <div class="col large-3 hide-for-medium ">
        <div id="shop-sidebar" class="sidebar-inner col-inner">
				  <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span><div class="is-divider small"></div>
            <ul class="product-categories">
              @foreach($categories as $category)
              <li class="cat-item cat-item-70"><a href="{{ $category->getUrl() }}">{{$category->title}}</a></li>
              @endforeach
            </ul>
          </aside>
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
				</div>

		<div class="col large-9">
		  <div class="shop-container">
		    <div class="woocommerce-notices-wrapper"></div><div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">
          @foreach($products as $product)
          <div class="product-small col has-hover product type-product post-413 status-publish first instock product_cat-cham-soc-suc-khoe product_cat-thuc-pham product_tag-an-cung-nguu product_tag-an-cung-nguu-hoang-hoan has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
            <div class="col-inner">
        
              <div class="badge-container absolute left top z-1">
              </div>
              <div class="product-small box ">
                <div class="box-image">
                  <div class="image-fade_in_back">
                    <a href="{{ $product->getUrl() }}" aria-label="{{$product->name}}">
                      <img width="300" height="300" src="{{sc_file($product->getImage())}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{$product->name}}" decoding="async" loading="lazy" srcset="{{sc_file($product->getImage())}}" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="{{sc_file($product->getImage())}}" class="show-on-hover absolute fill hide-for-small back-image" alt="an cung ngưu hoàng hoàn hộp gỗ 60 viên chính hãng hàn quốc" decoding="async" loading="lazy" srcset="{{sc_file($product->getImage())}}" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                  </div>
                  <div class="image-tools is-small top right show-on-hover">
                  </div>
                  <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                  </div>
                  <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                  </div>
                </div>

                <div class="box-text box-text-products text-center grid-style-2">
                  <div class="title-wrapper"><p class="name product-title woocommerce-loop-product__title"><a href="{{ $product->getUrl() }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{$product->name}}</a></p>
                  </div>
                  <div class="price-wrapper">
                    <span class="price"><span class="amountx">Liên hệ</span></span>
                    
                  </div>		
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      <!-- row -->
      @include($sc_templatePath.'.common.pagination', ['items' => $products])

		</div>
  <!-- shop container -->		</div>
  </div>
</main>
    <!-- Render pagination -->
   
    <!--// Render pagination -->
  @else
    <div class="product-top-panel group-md">
      <p style="text-align:center">{!! sc_language_render('front.no_item') !!}</p>
    </div>
  @endif

@endsection
{{--  //block_main_content_center  --}}


@push('styles')
@endpush

@push('scripts')
<!-- //script here -->
@endpush
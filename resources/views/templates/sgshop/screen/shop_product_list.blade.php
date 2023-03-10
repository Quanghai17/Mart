@php
/*
$layout_page = shop_product_list
**Variables:**
- $subCategory: paginate
Use paginate: $subCategory->appends(request()->except(['page','_token']))->links()
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

{{-- block_main_content_center --}}
@section('block_main_content_center')
  {{-- sub category --}}
  @isset ($subCategory)
    @if($subCategory->count())
    <h6 class="aside-title">{{ sc_language_render('front.sub_categories') }}</h6>
    <div class="row item-folder">
        @foreach ($subCategory as $key => $item)
        <div class="col-6 col-sm-6 col-md-3">
            <div class="item-folder-wrapper product-single">
                <div class="single-products">
                    <div class="productinfo text-center product-box-{{ $item->id }}">
                        <a href="{{ $item->getUrl() }}"><img src="{{ sc_file($item->getThumb()) }}"
                                alt="{{ $item->title }}" /></a>
                        <a href="{{ $item->getUrl() }}">
                            <p>{{ $item->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

      {{-- Render pagination --}}
      @include($sc_templatePath.'.common.pagination', ['items' => $subCategory])
      {{--// Render pagination --}}
      
    </div>
    @endif
  @endisset
  {{-- //sub category --}}

  @if (count($products))
  <div class="shop-page-title category-page-title page-title ">
    <div class="page-title-inner flex-row  medium-flex-wrap container">
      <div class="flex-col flex-grow medium-text-center">
	  	  <div class="is-medium">
          <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{ sc_route('home') }}">Trang ch???</a> <span class="divider">&#47;</span> S???n ph???m</nav></div>
            <div class="category-filtering category-filter-row show-for-medium">
              <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                <i class="icon-equalizer"></i>
		            <strong>L???c</strong>
              </a>
              <div class="inline-block">
			        </div>
            </div>
        </div>
	    <div class="flex-col medium-text-center">
          <p class="woocommerce-result-count hide-for-medium">Hi???n th??? 1&ndash;12 c???a 35 k???t qu???</p>
        <form class="woocommerce-ordering" method="get">
          <select name="orderby" class="orderby" aria-label="????n h??ng c???a c???a h??ng">
            <option value="menu_order"  selected='selected'>Th??? t??? m???c ?????nh</option>
            <option value="popularity" >Th??? t??? theo m???c ????? ph??? bi???n</option>
            <option value="rating" >Th??? t??? theo ??i???m ????nh gi??</option>
            <option value="date" >M???i nh???t</option>
            <option value="price" >Th??? t??? theo gi??: th???p ?????n cao</option>
            <option value="price-desc" >Th??? t??? theo gi??: cao xu???ng th???p</option>
          </select>
            <input type="hidden" name="paged" value="1" />
        </form>
	    </div>
	  </div>
  </div>

	<main id="main" class="">
    <div class="row category-page-row">
		  <div class="col large-3 hide-for-medium ">
        <div id="shop-sidebar" class="sidebar-inner col-inner">
				  <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Danh m???c s???n ph???m</span><div class="is-divider small"></div>
            <ul class="product-categories">
              @foreach($categories as $category)
              <li class="cat-item cat-item-70"><a href="{{ $category->getUrl() }}">{{$category->title}}</a></li>
              @endforeach
            </ul>
          </aside>
		      <aside id="block_widget-2" class="widget block_widget">
		        <span class="widget-title shop-sidebar">S???n ph???m n???i b???t</span><div class="is-divider small"></div>
		          <ul class="product_list_widget">
              @foreach($products_news as $product) 
                <li>
	                <a href="{{ $product->getUrl() }}" title="{{$product->name}}">
		                <img width="100" height="100" src="{{sc_file($product->getImage())}}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="{{$product->name}}" decoding="async" loading="lazy" srcset="{{sc_file($product->getImage())}}" sizes="(max-width: 100px) 100vw, 100px" />		
                    <span class="product-title">{{$product->name}}</span>
                  </a>
                  <span class="amountx">Li??n h???</span>
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
                      <img width="300" height="300" src="{{sc_file($product->getImage())}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{$product->name}}" decoding="async" loading="lazy" srcset="{{sc_file($product->getImage())}}" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="{{sc_file($product->getImage())}}" class="show-on-hover absolute fill hide-for-small back-image" alt="an cung ng??u ho??ng ho??n h???p g??? 60 vi??n ch??nh h??ng h??n qu???c" decoding="async" loading="lazy" srcset="{{sc_file($product->getImage())}}" sizes="(max-width: 300px) 100vw, 300px" />				</a>
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
                    <span class="price"><span class="amountx">Li??n h???</span></span>
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
    {{-- @include($sc_templatePath.'.common.pagination', ['items' => $products]) --}}
    <!--// Render pagination -->
  @else
  <div class="product-top-panel group-md">
    <p style="text-align:center">{!! sc_language_render('front.no_item') !!}</p>
  </div>
  @endif

@endsection
{{-- //block_main_content_center --}}


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
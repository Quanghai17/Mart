@php
/*
$layout_page = shop_news
**Variables:**
- $news: paginate
Use paginate: $news->appends(request()->except(['page','_token']))->links()
*/
@endphp


@extends($sc_templatePath.'.layout')

@section('block_main')
<div id="wrapper">
	<main id="main" class="">

		<div id="content" class="blog-wrapper blog-archive page-wrapper">
			<header class="archive-page-header">
				<div class="row">
					<div class="large-12 text-center col">
						<h1 class="page-title is-large uppercase">
							<span>Tin tức</span>	</h1>
					</div>
				</div>
			</header>


		<div class="row row-large row-divided ">

	<div class="large-9 col">
		
	
		<section class="no-results not-found">
			<div class="page-content">
				<div class="shop-container">
          <div class="woocommerce-notices-wrapper"></div>
          <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
            @foreach ($news as $blog)
            <div class="product-small col has-hover product type-product post-413 status-publish first instock product_cat-cham-soc-suc-khoe product_cat-thuc-pham product_tag-an-cung-nguu product_tag-an-cung-nguu-hoang-hoan has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                  <div class="col-inner">
            
                  <div class="badge-container absolute left top z-1">
                  </div>
                  <div class="product-small box ">
                    <div class="box-image">
                      <div class="image-fade_in_back">
                        <a href="{{ $blog->getUrl() }}" aria-label="{{ $blog->title }}">
                          <img style="width:270px; height: 190px" src="{{ sc_file($blog->getThumb()) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{ $blog->title }}" decoding="async" loading="lazy" srcset="{{ sc_file($blog->getThumb()) }}"/>				</a>
                      </div>
                    <div class="image-tools is-small top right show-on-hover">
                          </div>
                    <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                          </div>
                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                          </div>
                      </div>
            
                  <div class="box-text box-text-products text-center grid-style-2">
                    <div class="title-wrapper"><p class="name product-title woocommerce-loop-product__title">
                      <a href="{{ $blog->getUrl() }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{ $blog->description }}</a></p></div><div class="price-wrapper">
                      <a href="{{ $blog->getUrl() }}"><span class="price"><span class="amountx">{{ $blog->title }}</span></span></a>
                    </div>		
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            {{-- <div class="product-small col has-hover product type-product post-452 status-publish last instock product_cat-cham-soc-suc-khoe product_cat-thuc-pham product_tag-nuoc-hong-sam-hogi product_tag-nuoc-hong-sam-hogi-han-quoc has-post-thumbnail shipping-taxable purchasable product-type-simple">
              <div class="col-inner">
        
                  <div class="badge-container absolute left top z-1">
                    </div>
                  <div class="product-small box ">
                    <div class="box-image">
                      <div class="image-fade_in_back">
                        <a href="../../san-pham/nuoc-hong-sam-hogi-han-quoc/index.html" aria-label="Nước Hồng Sâm Hogi Hàn Quốc bồi bổ sức khỏe, tăng sức đề kháng, chống lão hóa">
                          <img width="300" height="300" src="../../wp-content/uploads/2022/05/nuoc-sam-hogi-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="nước hông sâm hogi hàn quốc" decoding="async" loading="lazy" srcset="https://sgshop.com.vn/wp-content/uploads/2022/05/nuoc-sam-hogi-300x300.jpg 300w, https://sgshop.com.vn/wp-content/uploads/2022/05/nuoc-sam-hogi-150x150.jpg 150w, https://sgshop.com.vn/wp-content/uploads/2022/05/nuoc-sam-hogi-768x768.jpg 768w, https://sgshop.com.vn/wp-content/uploads/2022/05/nuoc-sam-hogi-600x600.jpg 600w, https://sgshop.com.vn/wp-content/uploads/2022/05/nuoc-sam-hogi-100x100.jpg 100w, https://sgshop.com.vn/wp-content/uploads/2022/05/nuoc-sam-hogi.jpg 800w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                      </div>
                      <div class="image-tools is-small top right show-on-hover">
                      </div>
                      <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                      </div>
                      <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                      </div>
                    </div>
        
                  <div class="box-text box-text-products text-center grid-style-2">
                    <div class="title-wrapper"><p class="name product-title woocommerce-loop-product__title"><a href="../../san-pham/nuoc-hong-sam-hogi-han-quoc/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Nước Hồng Sâm Hogi Hàn Quốc bồi bổ sức khỏe, tăng sức đề kháng, chống lão hóa</a></p></div><div class="price-wrapper">
                      <span class="price"><span class="amountx">Liên hệ</span></span>
                    </div>		
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          
          <!-- row -->

          {{-- <div class="container">
      <nav class="woocommerce-pagination">
        <ul class="page-numbers nav-pagination links text-center"><li><span aria-current="page" class="page-number current">1</span></li><li><a class="page-number" href="page/2/index.html">2</a></li><li><a class="next page-number" href="page/2/index.html"><i class="icon-angle-right"></i></a></li></ul></nav>
      </div>
      
          </div><!-- shop container --> --}}

			</div>
		</section>
	</div>
	<div class="post-sidebar large-3 col">
		<div id="secondary" class="widget-area " role="complementary">
			<aside id="block-2" class="widget widget_block widget_search">
				<form role="search" method="get" action="https://sgshop.com.vn/" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
					<label for="wp-block-search__input-1" class="wp-block-search__label" >Tìm kiếm</label>
					<div class="wp-block-search__inside-wrapper " >
						<input type="search" id="wp-block-search__input-1" class="wp-block-search__input wp-block-search__input" name="s" value="" placeholder=""  required />
						<button type="submit" class="wp-block-search__button wp-element-button"  >Tìm kiếm</button></div>
				</form>
			</aside>
			<aside id="block-3" class="widget widget_block">
				<div class="is-layout-flow wp-block-group">
					<div class="wp-block-group__inner-container"><h2>Bài viết mới</h2>
						<ul class="wp-block-latest-posts__list wp-block-latest-posts"></ul>
					</div>
				</div>
			</aside>
			<aside id="block-4" class="widget widget_block">
				<div class="is-layout-flow wp-block-group">
					<div class="wp-block-group__inner-container"><h2>Phản hồi gần đây</h2>
						<div class="no-comments wp-block-latest-comments">Không có bình luận nào để hiển thị.</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>

</div>
</main>
{{-- --}}

@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
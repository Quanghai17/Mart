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

	
	<header id="header" class="header has-sticky sticky-jump">
		<div class="header-wrapper">
			<div id="top-bar" class="header-top hide-for-sticky">
    <div class="flex-row container">
      <div class="flex-col hide-for-medium flex-left">
          <ul class="nav nav-left medium-nav-center nav-small  nav- nav-prompts-overlay">
              <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38 menu-item-design-default"><a href="../../gioi-thieu/index.html" class="nav-top-link">Giới thiệu</a></li>
<li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40 menu-item-design-default"><a href="../../san-pham/index.html" class="nav-top-link">Sản phẩm</a></li>
<li id="menu-item-42" class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-42 active menu-item-design-default"><a href="index.html" aria-current="page" class="nav-top-link">Tin tức</a></li>
<li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39 menu-item-design-default"><a href="../../lien-he/index.html" class="nav-top-link">Liên hệ</a></li>
<li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41 menu-item-design-default"><a href="../../thanh-toan-2/index.html" class="nav-top-link">Thanh toán</a></li>
          </ul>
      </div>

      <div class="flex-col hide-for-medium flex-center">
          <ul class="nav nav-center nav-small  nav- nav-prompts-overlay">
                        </ul>
      </div>

      <div class="flex-col hide-for-medium flex-right">
         <ul class="nav top-bar-nav nav-right nav-small  nav- nav-prompts-overlay">
              <li class="header-contact-wrapper">
		<ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
		
						<li class="">
			  <a href="mailto:trungtammuasamsgshop@gmail.com" class="tooltip" title="trungtammuasamsgshop@gmail.com">
				  <i class="icon-envelop" style="font-size:15px;"></i>			       <span>
			       	trungtammuasamsgshop@gmail.com			       </span>
			  </a>
			</li>
					
			
						<li class="">
			  <a href="tel:028 7771 4567" class="tooltip" title="028 7771 4567">
			     <i class="icon-phone" style="font-size:15px;"></i>			      <span>028 7771 4567</span>
			  </a>
			</li>
				</ul>
</li>          </ul>
      </div>

            <div class="flex-col show-for-medium flex-grow">
          <ul class="nav nav-center nav-small mobile-nav  nav- nav-prompts-overlay">
              <li class="header-contact-wrapper">
		<ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
		
						<li class="">
			  <a href="mailto:trungtammuasamsgshop@gmail.com" class="tooltip" title="trungtammuasamsgshop@gmail.com">
				  <i class="icon-envelop" style="font-size:15px;"></i>			       <span>
			       	trungtammuasamsgshop@gmail.com			       </span>
			  </a>
			</li>
					
			
						<li class="">
			  <a href="tel:028 7771 4567" class="tooltip" title="028 7771 4567">
			     <i class="icon-phone" style="font-size:15px;"></i>			      <span>028 7771 4567</span>
			  </a>
			</li>
				</ul>
</li>          </ul>
      </div>
      
    </div>
</div>
<div id="masthead" class="header-main ">
      <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

          <!-- Logo -->
          <div id="logo" class="flex-col logo">
            
<!-- Header logo -->
<a href="../../index.html" title="Trung Tâm Mua Sắm Trực Tuyến SGShop - SGSHOP.COM.VN" rel="home">
		<img width="600" height="200" src="../../wp-content/uploads/2022/05/sgshop-logo-pc-2.png" class="header_logo header-logo" alt="Trung Tâm Mua Sắm Trực Tuyến SGShop"/><img  width="600" height="200" src="../../wp-content/uploads/2022/05/sgshop-logo-nobile-2.png" class="header-logo-dark" alt="Trung Tâm Mua Sắm Trực Tuyến SGShop"/></a>
          </div>

          <!-- Mobile Left Elements -->
          <div class="flex-col show-for-medium flex-left">
            <ul class="mobile-nav nav nav-left ">
              <li class="nav-icon has-icon">
  		<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
		
		  <i class="icon-menu" ></i>
		  		</a>
	</li>            </ul>
          </div>

          <!-- Left Elements -->
          <div class="flex-col hide-for-medium flex-left
            flex-grow">
            <ul class="header-nav header-nav-main nav nav-left  nav-uppercase" >
              <li class="header-search-form search-form html relative has-icon">
	<div class="header-search-form-wrapper">
		<div class="searchform-wrapper ux-search-box relative form-flat is-normal"><form role="search" method="get" class="searchform" action="https://sgshop.com.vn/">
	<div class="flex-row relative">
						<div class="flex-col flex-grow">
			<label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
			<input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
			<input type="hidden" name="post_type" value="product" />
					</div>
		<div class="flex-col">
			<button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
				<i class="icon-search" ></i>			</button>
		</div>
	</div>
	<div class="live-search-results text-left z-top"></div>
</form>
</div>	</div>
</li><li class="header-block"><div class="header-block-block-1">
		<div class="icon-box featured-box align-middle top-icon icon-box-left text-left"  >
					<div class="icon-box-img" style="width: 47px">
				<div class="icon">
					<div class="icon-inner" >
						<img width="300" height="300" src="../../wp-content/uploads/2022/04/phone-call-300x300.png" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call-300x300.png 300w, https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call-150x150.png 150w, https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call-100x100.png 100w, https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call.png 512w" sizes="(max-width: 300px) 100vw, 300px" />					</div>
				</div>
			</div>
				<div class="icon-box-text last-reset">
									

<div class="hotline mr-3">
<p class="mb-0" style="text-align: center;"><span style="font-size: 110%;">Hotline hỗ trợ khách hàng</span></p>
<p style="text-align: center;"><span style="font-size: 110%;">028 7771 4567 </span></p>
</div>

		</div>
	</div>
	
	</div></li>            </ul>
          </div>

          <!-- Right Elements -->
          <div class="flex-col hide-for-medium flex-right">
            <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
              <li class="cart-item has-icon has-dropdown">

<a href="../../gio-hang/index.html" title="Giỏ hàng" class="header-cart-link is-small">


<span class="header-cart-title">
   Giỏ hàng     </span>

  <span class="image-icon header-cart-icon" data-icon-label="0">
    <img class="cart-img-icon" alt="Giỏ hàng" src="../../../www.sgshop.com.vn/wp-content/uploads/2022/04/shopping-cart-white.png"/>
  </span>
</a>

 <ul class="nav-dropdown nav-dropdown-default">
    <li class="html widget_shopping_cart">
      <div class="widget_shopping_cart_content">
        

	<p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>


      </div>
    </li>
     </ul>

</li>
            </ul>
          </div>

          <!-- Mobile Right Elements -->
          <div class="flex-col show-for-medium flex-right">
            <ul class="mobile-nav nav nav-right ">
              <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
	<div class="header-button">	<a href="#" aria-label="Tìm kiếm" class="icon button round is-outline is-small"><i class="icon-search" ></i></a>
	</div>	<ul class="nav-dropdown nav-dropdown-default">
	 	<li class="header-search-form search-form html relative has-icon">
	<div class="header-search-form-wrapper">
		<div class="searchform-wrapper ux-search-box relative form-flat is-normal"><form role="search" method="get" class="searchform" action="https://sgshop.com.vn/">
	<div class="flex-row relative">
						<div class="flex-col flex-grow">
			<label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label>
			<input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
			<input type="hidden" name="post_type" value="product" />
					</div>
		<div class="flex-col">
			<button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
				<i class="icon-search" ></i>			</button>
		</div>
	</div>
	<div class="live-search-results text-left z-top"></div>
</form>
</div>	</div>
</li>	</ul>
</li>
<li class="cart-item has-icon">

      <a href="../../gio-hang/index.html" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
  
  <span class="image-icon header-cart-icon" data-icon-label="0">
    <img class="cart-img-icon" alt="Giỏ hàng" src="../../../www.sgshop.com.vn/wp-content/uploads/2022/04/shopping-cart-white.png"/>
  </span>
</a>


  <!-- Cart Sidebar Popup -->
  <div id="cart-popup" class="mfp-hide widget_shopping_cart">
  <div class="cart-popup-inner inner-padding">
      <div class="cart-popup-title text-center">
          <h4 class="uppercase">Giỏ hàng</h4>
          <div class="is-divider"></div>
      </div>
      <div class="widget_shopping_cart_content">
          

	<p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>


      </div>
             <div class="cart-sidebar-content relative"></div>  </div>
  </div>

</li>
            </ul>
          </div>

      </div>
     
            <div class="container"><div class="top-divider full-width"></div></div>
      </div><div id="wide-nav" class="header-bottom wide-nav hide-for-medium">
    <div class="flex-row container">

                        <div class="flex-col hide-for-medium flex-left">
                <ul class="nav header-nav header-bottom-nav nav-left  nav-box nav-size-large nav-spacing-xsmall nav-uppercase">
                    <li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-84 menu-item-design-default"><a href="../../index.html" class="nav-top-link">Trang chủ</a></li>
<li id="menu-item-392" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-392 menu-item-design-default"><a href="../../danh-muc/cham-soc-suc-khoe/index.html" class="nav-top-link">Chăm Sóc Sức Khỏe</a></li>
<li id="menu-item-393" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-393 menu-item-design-default"><a href="../../danh-muc/do-gia-dung/index.html" class="nav-top-link">Đồ Gia Dụng</a></li>
<li id="menu-item-397" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-397 menu-item-design-default"><a href="../../danh-muc/thuc-pham/index.html" class="nav-top-link">Thực Phẩm</a></li>
<li id="menu-item-394" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-394 menu-item-design-default"><a href="../../danh-muc/me-va-be/index.html" class="nav-top-link">Mẹ và Bé</a></li>
<li id="menu-item-395" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-395 menu-item-design-default"><a href="../../danh-muc/my-pham/index.html" class="nav-top-link">Mỹ Phẩm</a></li>
<li id="menu-item-396" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-396 menu-item-design-default"><a href="../../danh-muc/nha-cua-va-doi-song/index.html" class="nav-top-link">Nhà cửa đời sống</a></li>
<li id="menu-item-401" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-401 menu-item-design-default"><a href="../../danh-muc/san-pham-khac/index.html" class="nav-top-link">Sản phẩm khác</a></li>
<li id="menu-item-400" class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-400 active menu-item-design-default"><a href="index.html" aria-current="page" class="nav-top-link">Tin tức</a></li>
                </ul>
            </div>
            
            
                        <div class="flex-col hide-for-medium flex-right flex-grow">
              <ul class="nav header-nav header-bottom-nav nav-right  nav-box nav-size-large nav-spacing-xsmall nav-uppercase">
                                 </ul>
            </div>
            
            
    </div>
</div>

<div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div>		</div>
	</header>

	
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
				<header class="page-title">
					<h1 class="page-title">Nothing Found</h1>
				</header>

			<div class="page-content">
			
				<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
				<form method="get" class="searchform" action="https://sgshop.com.vn/" role="search">
					<div class="flex-row relative">
						<div class="flex-col flex-grow">
							<input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm&hellip;" />
						</div>
						<div class="flex-col">
							<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
								<i class="icon-search" ></i>				</button>
						</div>
					</div>
					<div class="live-search-results text-left z-top"></div>
				</form>

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
<section class="section section-xl bg-default">
    <div class="container">
      <div class="row row-30">
        @if ($news->count())
            @foreach ($news as $newsDetail)
            <div class="col-sm-6 col-lg-4">
              {{-- Render product single --}}
              @include($sc_templatePath.'.common.blog_single', ['blog' => $newsDetail])
              {{-- //Render product single --}}
            </div>
            @endforeach

        {{-- Render pagination --}}
        @include($sc_templatePath.'.common.pagination', ['items' => $news])
        {{--// Render pagination --}}

        @else
            {!! sc_language_render('front.data_notfound') !!}
        @endif
      </div>

    </div>
  </section>

@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
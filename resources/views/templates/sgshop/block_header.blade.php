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
<header id="header" class="header has-sticky sticky-jump">
  <div class="header-wrapper">
    <div id="top-bar" class="header-top hide-for-sticky">
      <div class="flex-row container">
        <div class="flex-col hide-for-medium flex-left">
          <ul class="nav nav-left medium-nav-center nav-small  nav- nav-prompts-overlay">
            <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38 menu-item-design-default"><a href="{{ sc_route('about') }}" class="nav-top-link">Giới thiệu</a></li>
            <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40 menu-item-design-default"><a href="{{ sc_route('shop') }}" class="nav-top-link">Sản phẩm</a></li>
            <li id="menu-item-42" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-42 menu-item-design-default"><a href="{{ sc_route('news') }}" class="nav-top-link">Tin tức</a></li>
            <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39 menu-item-design-default"><a href="{{ sc_route('contact') }}" class="nav-top-link">Liên hệ</a></li>
            <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41 menu-item-design-default"><a href="{{ sc_route('checkout') }}" class="nav-top-link">Thanh toán</a></li>
            <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41 menu-item-design-default"><a href="{{ sc_route('login') }}" class="nav-top-link">Đăng nhập</a></li>
          </ul>
        </div>

          <div class="flex-col hide-for-medium flex-center">
            <ul class="nav nav-center nav-small  nav- nav-prompts-overlay"></ul>
      </div>

    <div class="flex-col hide-for-medium flex-right">
       <ul class="nav top-bar-nav nav-right nav-small  nav- nav-prompts-overlay">
          <li class="header-contact-wrapper">
            <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
              <li class="">
                <a href="mailto:trungtammuasamsgshop@gmail.com" class="tooltip" title="trungtammuasamsgshop@gmail.com">			       
                  <span>
                  {{ sc_store('email', ($storeId ?? null)) }}</span>
                </a>
              </li>
              <li class="">
                <a href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}" class="tooltip" title="{{ sc_store('long_phone', ($storeId ?? null)) }}">
                  </i>			      <span>{{ sc_store('long_phone', ($storeId ?? null)) }}</span>
                </a>
              </li>
            </ul>
          </li>          
        </ul>
    </div>

    <div class="flex-col show-for-medium flex-grow">
      <ul class="nav nav-center nav-small mobile-nav  nav- nav-prompts-overlay">
        <li class="header-contact-wrapper">
          <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
            <li class="">
              <a href="#" class="tooltip" title="{{ sc_store('email', ($storeId ?? null)) }}">
                		       <span>
                  {{ sc_store('email', ($storeId ?? null)) }}		       </span>
              </a>
            </li>
            <li class="">
              <a href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}" class="tooltip" title="{{ sc_store('long_phone', ($storeId ?? null)) }}">
                			      <span>{{ sc_store('long_phone', ($storeId ?? null)) }}</span>
              </a>
            </li>
          </ul>
        </li>          
      </ul>
    </div>
  </div>
</div>
    <div id="masthead" class="header-main ">
      <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
        <!-- Logo -->
        <div id="logo" class="flex-col logo">
              <!-- Header logo -->
            <a href="{{ sc_route('home') }}" title="" rel="home">
              <img width="600" height="200" src="{{ sc_file(sc_store('logo')) }}" class="header_logo header-logo" alt="Trung Tâm Mua Sắm Trực Tuyến SGShop"/><img  width="600" height="200" src="{{ sc_file(sc_store('logo')) }}" class="header-logo-dark" alt="Trung Tâm Mua Sắm Trực Tuyến SGShop"/></a>
        </div>
                      <!-- Mobile Left Elements -->
        <div class="flex-col show-for-medium flex-left">
          <ul class="mobile-nav nav nav-left ">
              <li class="nav-icon has-icon">
                  <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                    <i class="icon-menu" ></i>
                  </a>
              </li>            
          </ul>
        </div>
                      <!-- Left Elements -->
        <div class="flex-col hide-for-medium flex-left flex-grow">
          <ul class="header-nav header-nav-main nav nav-left  nav-uppercase" >
            <li class="header-search-form search-form html relative has-icon">
              <div class="header-search-form-wrapper">
                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                  <form role="search" method="get" class="searchform" action="{{ sc_route('search') }}" >
                    <div class="flex-row relative">
                      <div class="flex-col flex-grow">
                        <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                        <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
                        <input type="hidden" name="post_type" value="product" />
                      </div>
                        <div class="flex-col">
                          <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                          </button>
                        </div>
                      </div>
                      <div class="live-search-results text-left z-top"></div>
                  </form>
                  {{-- <form class="rd-search" action="{{ sc_route('search') }}"  method="GET">
                    <div class="form-wrap">
                      <input class="rd-navbar-search-form-input form-input"  type="text" name="keyword"  placeholder="{{ sc_language_render('search.placeholder') }}"/>
                      <button class="rd-search-form-submit" type="submit"></button>
                    </div>
                  </form> --}}
                </div>	
              </div>
              </li>
              <li class="header-block"><div class="header-block-block-1">
                <div class="icon-box featured-box align-middle top-icon icon-box-left text-left"  >
                  <div class="icon-box-img" style="width: 47px">
                    <div class="icon">
                      <div class="icon-inner" >
                        <img width="300" height="300" src="wp-content/uploads/2022/04/phone-call-300x300.png" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call-300x300.png 300w, https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call-150x150.png 150w, https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call-100x100.png 100w, https://sgshop.com.vn/wp-content/uploads/2022/04/phone-call.png 512w" sizes="(max-width: 300px) 100vw, 300px" />					</div>
                    </div>
                  </div>
                    <div class="icon-box-text last-reset">
                    <div class="hotline mr-3">
                      <p class="mb-0" style="text-align: center;"><span style="font-size: 110%;">Hotline hỗ trợ khách hàng</span></p>
                      <p style="text-align: center;"><span style="font-size: 110%;">{{ sc_store('long_phone', ($storeId ?? null)) }}</span></p>
                    </div>
                  </div>
                </div>

                </div>
              </li>            
            </ul>
                      
          </div>
                      <!-- Right Elements -->
        <div class="flex-col hide-for-medium flex-right">
          <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
            <li class="cart-item has-icon has-dropdown">
              <a href="{{ sc_route('cart') }}" title="Giỏ hàng" class="header-cart-link is-small">
                <span class="header-cart-title">Giỏ hàng</span>
                <span class="image-icon header-cart-icon" data-icon-label="0">
                  <img class="cart-img-icon" alt="Giỏ hàng" src="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/04/shopping-cart-white.png')}}"/>
                </span>
              </a>
          {{-- <ul class="nav-dropdown nav-dropdown-default">
            <li class="html widget_shopping_cart">
              <div class="widget_shopping_cart_content">
                <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
              </div>
            </li>
          </ul> --}}

          </li>
        </ul>
      </div>

  <!-- Mobile Right Elements -->
    <div class="flex-col show-for-medium flex-right">
      <ul class="mobile-nav nav nav-right ">
        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
          <div class="header-button">	<a href="#" aria-label="Tìm kiếm" class="icon button round is-outline is-small"><i class="icon-search" ></i></a>
          </div>	
          <ul class="nav-dropdown nav-dropdown-default">
            <li class="header-search-form search-form html relative has-icon">
              <div class="header-search-form-wrapper">
                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                  <form role="search" method="get" class="searchform" action="{{ sc_route('search') }}">
                    <div class="flex-row relative">
                      <div class="flex-col flex-grow">
                        <label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                          <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
                          <input type="hidden" name="post_type" value="product" />
                      </div>
                      <div class="flex-col">
                        <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit"><i class="icon-search" ></i></button>
                      </div>
                    </div>
                    <div class="live-search-results text-left z-top"></div>
                  </form>
                </div>
              </div>
            </li>	
          </ul>
        </li>
        <li class="cart-item has-icon">
          <a href="{{ sc_route('cart') }}" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
          <span class="image-icon header-cart-icon" data-icon-label="0">
            <img class="cart-img-icon" alt="Giỏ hàng" src="{{ sc_file($sc_templateFile.'/../www.sgshop.com.vn/wp-content/uploads/2022/04/shopping-cart-white.png')}}"/>
          </span>
          </a>


          <!-- Cart Sidebar Popup -->
            <div id="cart-popup" class="mfp-hide widget_shopping_cart">
              <div class="cart-popup-inner inner-padding">
                <div class="cart-popup-title text-center">
                  <h4 class="uppercase">Giỏ hàng</h4>
                  <div class="is-divider"></div>
                </div>
              <div class="widget_shopping_cart_content"></div>
              <div class="cart-sidebar-content relative"></div>  
            </div>
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
            <li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-84 active menu-item-design-default"><a href="{{ sc_route('home') }}" aria-current="page" class="nav-top-link">Trang chủ</a></li>
            @foreach($categories as $category)
            <li id="menu-item-392" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-392 menu-item-design-default"><a href="{{ $category->getUrl() }}" class="nav-top-link">{{$category->title}}</a></li>
            @endforeach
            <li id="menu-item-400" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-400 menu-item-design-default"><a href="{{ sc_route('news') }}" class="nav-top-link">Tin tức</a></li>
          </ul>
        </div>
          
      <div class="flex-col hide-for-medium flex-right flex-grow">
        <ul class="nav header-nav header-bottom-nav nav-right  nav-box nav-size-large nav-spacing-xsmall nav-uppercase"></ul>
      </div>
    </div>
  </div>
    <div class="header-bg-container fill">
      <div class="header-bg-image fill"></div>
      <div class="header-bg-color fill"></div>
    </div>
  </div>
</header>
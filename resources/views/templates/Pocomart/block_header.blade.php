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
<div class="opacity_menu"></div>
<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-xl-3 col-md-3 col-6 col-logo">

				<a href="index.html" class="logo">
					<img width="170" height="43" src="{{ sc_file(sc_store('logo')) }}" alt="pocomart">
				</a>

			</div>
			<div class="d-lg-none d-block col-2 order-3 menumobilebutton">
				<div class="category-action">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="iconcate-action" x="0px" y="0px" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve">
						<g>
							<g id="Menu_1_">
								<path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03    c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z" />
								<path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03    S379.58,180.455,372.939,180.455z" />
								<path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606    c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z" />
							</g>
						</g>
					</svg>
				</div>
			</div>
			<div class="col-lg-8 col-xl-7 col-md-5 col-10 col-search order-3 order-md-2">
				<div class="theme-search-smart">
					<div class="header_search theme-searchs">
						<form action="{{ sc_route('search') }}"  method="GET" class="input-group search-bar theme-header-search-form ultimate-search" role="search">
							<input type="search" aria-label="Tìm sản phẩm" name="keyword" value="" autocomplete="off" placeholder="Tìm kiếm sản phẩm..." class="search-auto input-group-field auto-search" required="">
							<input type="hidden" name="post_type" value="product" />
							<span class="input-group-btn">
								<button type="submit" class="btn icon-fallback-text" aria-label="Justify">
									<svg enable-background="new 0 0 612.01 612.01" version="1.1" viewBox="0 0 612.01 612.01" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
										<path d="m606.21 578.71-158.01-155.49c41.378-44.956 66.802-104.41 66.802-169.84-0.02-139.95-115.3-253.39-257.51-253.39s-257.49 113.44-257.49 253.39 115.28 253.39 257.49 253.39c61.445 0 117.8-21.253 162.07-56.586l158.62 156.1c7.729 7.614 20.277 7.614 28.006 0 7.747-7.613 7.747-19.971 0.018-27.585zm-348.72-110.91c-120.33 0-217.87-95.993-217.87-214.41s97.543-214.41 217.87-214.41c120.33 0 217.87 95.993 217.87 214.41s-97.542 214.41-217.87 214.41z" />
									</svg>
								</button>
							</span>
						</form>
					</div>
				</div>
				<div class="contact-phone">
					<p>
						Tư vấn hỗ trợ
					</p>
					<a href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}"> {{ sc_store('long_phone', ($storeId ?? null)) }}</a>
				</div>

				@if (sc_config('link_account', null, 1))
					@guest
						<div class="contact-phone account-header not">
							<p>Xin chào!</p>
							<a href="{{ sc_route('login') }}">Đăng nhập</a>
						</div>
					@else
						<div class="contact-phone account-header not">
								<p><a href="{{ sc_route('customer.index') }}">{{ sc_language_render('front.my_profile') }}</a></p>
								
								<a href="{{ sc_route('logout') }}"> {{ sc_language_render('front.logout') }}</a>
								<form id="logout-form" action="{{ sc_route('logout') }}" method="POST" style="display: none;">
								@csrf
								</form>
						</div>
					@endguest
				@endif
			</div>
			<div class="col-lg-2 col-md-3 col-6 col-account order-2 order-md-3">
				<ul class="group-account">
					<li>
						<div class="icon">
							<a href="yeu-thich.html" class="wishlist_header" title="Sản phẩm yêu thích">
								<svg enable-background="new 0 0 412.735 412.735" version="1.1" viewBox="0 0 412.74 412.74" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m295.71 35.522c-34.43-0.184-67.161 14.937-89.339 41.273-22.039-26.516-54.861-41.68-89.339-41.273-64.633 0-117.03 52.395-117.03 117.03 0 110.76 193.31 218.91 201.14 223.09 3.162 2.113 7.286 2.113 10.449 0 7.837-4.18 201.14-110.76 201.14-223.09 0-64.633-52.396-117.03-117.03-117.03zm-89.339 319.22c-30.302-17.763-185.47-112.33-185.47-202.19 0-53.091 43.039-96.131 96.131-96.131 32.512-0.427 62.938 15.972 80.457 43.363 3.557 4.905 10.418 5.998 15.323 2.44 0.937-0.68 1.761-1.503 2.44-2.44 29.055-44.435 88.631-56.903 133.07-27.848 27.202 17.787 43.575 48.114 43.521 80.615 1e-3 90.907-155.17 184.95-185.47 202.19z">
									</path>
								</svg>
								<span class="headerWishlistCount">0</span>
							</a>
						</div>
					</li>

					<li class="cart-drop">
						<div class="icon">
							<a class="img_hover_cart" href="{{ sc_route('cart') }}" title="Giỏ hàng">
								<svg enable-background="new 0 0 407.453 407.453" version="1.1" viewBox="0 0 407.45 407.45" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<g fill="#010002">
										<path d="m255.1 116.52c4.487 0 8.129-3.633 8.129-8.129 0-4.495-3.642-8.129-8.129-8.129h-111.61c-4.487 0-8.129 3.633-8.129 8.129 0 4.495 3.642 8.129 8.129 8.129h111.61z">
										</path>
										<path d="m367.06 100.26h-55.372c-4.487 0-8.129 3.633-8.129 8.129 0 4.495 3.642 8.129 8.129 8.129h47.243v274.68h-310.41v-274.68h44.536c4.487 0 8.129-3.633 8.129-8.129 0-4.495-3.642-8.129-8.129-8.129h-52.664c-4.487 0-8.129 3.633-8.129 8.129v290.94c0 4.495 3.642 8.129 8.129 8.129h326.67c4.487 0 8.129-3.633 8.129-8.129v-290.94c0-4.495-3.634-8.128-8.129-8.128z">
										</path>
										<path d="m282.59 134.8c4.487 0 8.129-3.633 8.129-8.129v-59.273c-1e-3 -37.156-40.115-67.394-89.618-67.394-49.308 0-89.414 30.238-89.414 67.394v59.274c0 4.495 3.642 8.129 8.129 8.129s8.129-3.633 8.129-8.129v-59.274c0-28.198 32.823-51.137 73.36-51.137 40.334 0 73.157 22.939 73.157 51.137v59.274c-1e-3 4.495 3.633 8.128 8.128 8.128z">
										</path>
										<path d="m98.892 147.57c0 11.526 9.389 20.907 20.923 20.907s20.923-9.38 20.923-20.907c0-4.495-3.642-8.129-8.129-8.129s-8.129 3.633-8.129 8.129c0 2.561-2.089 4.65-4.666 4.65-2.569 0-4.666-2.089-4.666-4.65 0-4.495-3.642-8.129-8.129-8.129s-8.127 3.634-8.127 8.129z">
										</path>
										<path d="m282.59 168.47c11.534 0 20.923-9.38 20.923-20.907 0-4.495-3.642-8.129-8.129-8.129s-8.129 3.633-8.129 8.129c0 2.561-2.089 4.65-4.666 4.65s-4.666-2.089-4.666-4.65c0-4.495-3.642-8.129-8.129-8.129s-8.129 3.633-8.129 8.129c2e-3 11.526 9.39 20.907 20.925 20.907z">
										</path>
									</g>
								</svg>
								<span class="count_item count_item_pr">{{ Cart::instance('default')->count() }}</span>
							</a>
						</div>
						<div class="top-cart-content">
							<div class="CartHeaderContainer">
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>

<div class="header_nav_main header-menu d-none d-lg-block clearfix">
	<div class="container">
		<div class="heade_menunavs">
			<div class="wrap_main d-flex">
				<div class="menu_mega indexs">
					<div class="title_menu">
						<span class="title_">Danh mục sản phẩm</span>
					</div>
					<div class="list_menu_header col-lg-3 col-md-3">
						<ul class="ul_menu site-nav-vetical">

							@foreach($categories as $category)
							<li class="nav_item lev-1 lv1 li_check">
								<a class="lazyload" data-src="{{sc_file($category->getImage())}}" href="{{ $category->getUrl() }}" title="Phụ kiện - Thiết bị số">{{$category->title}}
								</a>
							</li>
							@endforeach
							<li class="lev-1 xemthem hidden-lgg nav_item clearfix ">
								<a class="lazyload" data-src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/plus.svg?1672132862712" href="javascript:;">
									Xem thêm
								</a>
							</li>

							<li class="lev-1 thugon hidden-lgg nav_item clearfix ">
								<a class="lazyload" data-src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/minus.svg?1672132862712" href="javascript:;">
									Thu gọn
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="bg-header-nav">
					<nav class="header-nav">
						<ul class="item_big">
							@if (!empty(sc_link_collection()['menu']))
							@foreach (sc_link_collection()['menu'] as $url)
							@if ($url['type'] != 'collection')
							<li class="nav-item ">
								<a class="a-img" {{ ($url['data']['target'] =='_blank')?'target=_blank':''  }} href="{{ sc_url_render($url['data']['url']) }}">{{ sc_language_render($url['data']['name']) }}</a>
							</li>
							@else
							@if (count($url['childs']))
							<li class="nav-item"><a class="a-img caret-down" href="#"><i class="fa fa-caret-down"></i> {{ $url['data']['name'] }}</a>
								<ul class="item_small">
									@foreach ($url['childs'] as $item)
									<li class="">
										<a class="caret-down" {{ ($item['data']['target'] =='_blank')?'target=_blank':''  }} href="{{ sc_url_render($item['data']['url']) }}">{{ sc_language_render($item['data']['name']) }}</a>
									</li>
									@endforeach
								</ul>
							</li>
							@endif
							@endif

							@endforeach
							@endif
							<!-- <li class="nav-item active ">
									<a class="a-img" href="index.html" title="Trang chủ">
										Trang chủ
									</a>
								</li>

								<li class="nav-item ">
									<a class="a-img" href="gioi-thieu.html" title="Giới thiệu">
										Giới thiệu
									</a>
								</li>

								<li class="nav-item ">
									<a class="a-img caret-down" href="collections/all.html" title="Sản phẩm">
										Sản phẩm
									</a>
									<i class="fa fa-caret-down"></i>
									<ul class="item_small">

										<li>
											<a class="caret-down" href="dien-thoai-may-tinh-bang.html"
												title="Điện thoại - Máy tính bảng">
												Điện thoại - Máy tính bảng
											</a>

											<i class="fa fa-caret-down"></i>
											<ul>

												<li>
													<a href="apple.html" title="Apple" class="a3">Apple</a>
												</li>

												<li>
													<a href="samsung.html" title="Samsung" class="a3">Samsung</a>
												</li>

												<li>
													<a href="xiaomi.html" title="Xiaomi" class="a3">Xiaomi</a>
												</li>

											</ul>
										</li>
										<li>
											<a class="" href="phu-kien-thiet-bi-so.html" title="Phụ kiện - Thiết bị số">
												Phụ kiện - Thiết bị số
											</a>

										</li>

										<li>
											<a class="" href="may-anh-quay-phim.html" title="Máy ảnh - Quay phim">
												Máy ảnh - Quay phim
											</a>
										</li>

										<li>
											<a class="" href="dien-gia-dung-nha-bep.html"
												title="Điện gia dụng - Nhà bếp">
												Điện gia dụng - Nhà bếp
											</a>


										</li>

										<li>
											<a class="" href="laptop-thiet-bi-it.html" title="Laptop - Thiết bị IT">
												Laptop - Thiết bị IT
											</a>


										</li>

										<li>
											<a class="" href="may-choi-game-tro-choi.html"
												title="Máy chơi game - Trò chơi">
												Máy chơi game - Trò chơi
											</a>


										</li>

										<li>
											<a class="" href="trang-suc-sanh-dieu.html" title="Trang sức - Sành điệu">
												Trang sức - Sành điệu
											</a>


										</li>

										<li>
											<a class="caret-down" href="thoi-trang-lam-dep.html"
												title="Thời trang - Làm đẹp">
												Thời trang - Làm đẹp
											</a>

											<i class="fa fa-caret-down"></i>


											<ul>

												<li>
													<a href="thoi-trang-nu.html" title="Thời trang nữ" class="a3">Thời
														trang nữ</a>
												</li>

												<li>
													<a href="thoi-trang-nam.html" title="Thời trang nam" class="a3">Thời
														trang nam</a>
												</li>

												<li>
													<a href="dong-ho-trang-suc.html" title="Đồng hồ & Trang sức"
														class="a3">Đồng hồ & Trang sức</a>
												</li>

												<li>
													<a href="giay-dep-nu.html" title="Giày dép nữ" class="a3">Giày dép
														nữ</a>
												</li>

												<li>
													<a href="giay-dep-nam.html" title="Giày dép nam" class="a3">Giày dép
														nam</a>
												</li>

												<li>
													<a href="phu-kien-thoi-trang.html" title="Phụ kiện thời trang"
														class="a3">Phụ kiện thời trang</a>
												</li>

											</ul>

										</li>

										<li>
											<a class="" href="nha-cua-doi-song.html" title="Nhà cửa đời sống">
												Nhà cửa đời sống
											</a>


										</li>

										<li>
											<a class="" href="sach-tieu-thuyet.html" title="Sách - Tiểu thuyết">
												Sách - Tiểu thuyết
											</a>


										</li>

									</ul>
								</li>

								<li class="nav-item ">
									<a class="a-img caret-down" href="tin-moi-nhat.html" title="Tin mới nhất">
										Tin mới nhất
									</a>
									<i class="fa fa-caret-down"></i>
									<ul class="item_small">

										<li>
											<a class="caret-down" href="tin-tuc.html" title="Tin tức">
												Tin tức
											</a>

											<i class="fa fa-caret-down"></i>


											<ul>

												<li>
													<a href="doi-song.html" title="Đời sống" class="a3">Đời sống</a>
												</li>

												<li>
													<a href="giao-duc.html" title="Giáo dục" class="a3">Giáo dục</a>
												</li>

												<li>
													<a href="khuyen-mai.html" title="Khuyến mãi" class="a3">Khuyến
														mãi</a>
												</li>

												<li>
													<a href="su-kien.html" title="Sự kiện" class="a3">Sự kiện</a>
												</li>

											</ul>

										</li>

									</ul>
								</li>
								<li class="nav-item ">
									<a class="a-img" href="cau-hoi-thuong-gap.html" title="Câu hỏi thường gặp">
										Câu hỏi thường gặp
									</a>
								</li>

								<li class="nav-item ">
									<a class="a-img" href="tuyen-dung.html" title="Tuyển dụng">
										Tuyển dụng
									</a>
								</li>

								<li class="nav-item ">
									<a class="a-img" href="lien-he.html" title="Liên hệ">
										Liên hệ
									</a>
								</li> -->
						</ul>
					</nav>
				</div>
			</div>
			<div class="contactbar">
				<div class="incontact">
					<div class="contact-phone">
						<p>
							Tư vấn hỗ trợ
						</p>
						<a href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}">{{ sc_store('long_phone', ($storeId ?? null)) }}</a>
					</div>


					@if (sc_config('link_account', null, 1))
						@guest
							<div class="contact-phone account-header not">
								<p>Xin chào!</p>
								<a href="{{ sc_route('login') }}">Đăng nhập</a>
							</div>
						@else
							<div class="contact-phone account-header not">
									<p><a href="{{ sc_route('customer.index') }}">{{ sc_language_render('front.my_profile') }}</a></p>
									
									<a href="{{ sc_route('logout') }}"> {{ sc_language_render('front.logout') }}</a>
									<form id="logout-form" action="{{ sc_route('logout') }}" method="POST" style="display: none;">
									@csrf
									</form>
							</div>
						@endguest
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
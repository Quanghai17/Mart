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
->setRandom() 
->setLimit(8)
->getData();
$products01 = $modelProduct
->start()
->getProductLatest()
->getProductToCategory('986e3833-2dcd-44a3-bb1f-a6ab9c7275a8')
->getData();
$products02 = $modelProduct
->start()
->getProductLatest()
->getProductToCategory('986e39b1-f8ec-4d38-a0e4-0d5e6d973e11')
->getData();
$products03 = $modelProduct
->start()
->getProductLatest()
->getProductToCategory('98c0ab3e-ff9a-4945-893d-f5ef1fd17ab6')
->getData();
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<div class="main-index">
	<h1 class="d-none">Siêu thị QuangHai17Mart</h1>
	<div class="section_slider ">
		<div class="container">
			<div class="swiper-container slide-container">
				<div class="swiper-main">
					<div class="swiper-wrapper">
					@foreach($banners as $banner)
						<div class="swiper-slide">
							<a href="#" class="clearfix" title="HOT SALE - Sập Sàn">
								<picture>
									<img src="{{ sc_file($banner->image) }}" alt="HOT SALE - Sập Sàn" class="img-responsive center-block" />
								</picture>
							</a>
						</div>
						@endforeach
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>

	<section class="section_category">
		<div class="container">
			<div class="cate-list">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						@foreach($categories as $category)
						<div class="swiper-slide">
							<div class="cate-item">
								<a class="image" href="{{ $category->getUrl() }}" title="Điện thoại - Máy tính bảng">

									<img class="image_cate_thumb lazyload" width="80" height="80" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($category->getImage())}}" alt="Điện thoại - Máy tính bảng" />
								</a>
								<h4 class="title_cate_"><a href="{{ $category->getUrl() }}" title="Điện thoại - Máy tính bảng">{{$category->title}}</a></h4>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>

	<section class="section_tab_product">
		<div class="container">
			<div class="not-dqtab e-tabs ajax-tab-1 ajax" data-section="ajax-tab-1">
				<ul class="nav-tab">
					<li class="tab-link tabs-title tabtitle1 ajax has-content current" data-tab="tab-1" data-url="san-pham-noi-bat">
						<h4>Điện thoại</h4>
						<p>Giảm ngay 1 triệu khi mua online</p>
					</li>
					<li class="tab-link tabs-title tabtitle1 ajax " data-tab="tab-2" data-url="san-pham-khuyen-mai">
						<h4>Thời trang</h4>
						<p>Giảm giá cực lớn lên tới 70%</p>
					</li>
					<li class="tab-link tabs-title tabtitle1 ajax " data-tab="tab-3" data-url="san-pham-ban-chay">
						<h4>Gia Dụng</h4>
						<p>Giá siêu ưu đãi lên tới 30%</p>
					</li>
				</ul>
				<div class="tab-container">
					<div class="tab-item tab-content tab-1 current">
						<div class="banner-left">
							<a href="#" title="siêu sale">
								<img class="lazyload" width="285" height="312" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/banner_1_tab.jpg?1672132862712" alt="siêu sale" />
							</a>
						</div>
						<div class="contentfill">
							<div class="swiper-container">
								<div class="swipertab swiper-tab-top swiper-first">
									<div class="swiper-wrapper">
										@foreach($products01 as $product)
										<div class="swiper-slide ajax-carousel">
											<div class=" item_product_main">
												<form class="variants product-action wishItem" data-cart-form data-id="product-actions-21989403" enctype="multipart/form-data">
												
												@if ($product->price != $product->getFinalPrice())
													<div class="product-thumbnail sale " data-sale="Giảm giá ">
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
													@else
													<div class="product-thumbnail" >
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
												@endif
													<div class="product-info">
														<h3 class="product-name"><a href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">{{$product->name}}</a></h3>
														<div class="price-box">
															
														<span class="price">{!!$product->showPrice()!!}</span>

														<!-- <span class="compare-price">30.500.000₫</span> -->
															
															<div class="action-cart">
																<input type="hidden" name="variantId" value="47262129" />
																<button class="btn-buy btn-views add_to_cart " onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Mua ngay">
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
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-item tab-content tab-2 ">
						<div class="banner-left">
							<a href="#" title="Sale mạnh tới 50%">
								<img class="lazyload" width="285" height="312" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/banner_2_tab.jpg?1672132862712" alt="Sale mạnh tới 50%" />
							</a>
						</div>
						<div class="contentfill">
							<div class="swiper-container">
								<div class="swipertab swiper-tab-top swiper-first">
									<div class="swiper-wrapper">
										@foreach($products as $product)
										<div class="swiper-slide ajax-carousel">
											<div class=" item_product_main">
												<form class="variants product-action wishItem" data-cart-form data-id="product-actions-21989403" enctype="multipart/form-data">
													<div class="product-thumbnail sale " data-sale="Giảm giá ">
														<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
															<picture>

																<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

															</picture>
														</a>
														<div class="product-action">
															<div class="group_action">
																<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
														<h3 class="product-name"><a href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">{{$product->name}}</a></h3>
														<div class="price-box">

															{!! $product->showPrice() !!}
															<div class="action-cart">
																<input type="hidden" name="variantId" value="47262129" />
																<button class="btn-buy btn-views add_to_cart " onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Mua ngay">
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
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-item tab-content tab-3 ">
						<div class="banner-left">
							<a href="#" title="Siêu giảm giá tới 60%">
								<img class="lazyload" width="285" height="312" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/banner_3_tab.jpg?1672132862712" alt="Siêu giảm giá tới 60%" />
							</a>
						</div>
						<div class="contentfill">
							<div class="swiper-container">
								<div class="swipertab swiper-tab-top swiper-first">
									<div class="swiper-wrapper">
										@foreach($products as $product)
										<div class="swiper-slide ajax-carousel">
											<div class=" item_product_main">
												<form class="variants product-action wishItem" data-cart-form data-id="product-actions-21989403" enctype="multipart/form-data">
													<div class="product-thumbnail sale " data-sale="Giảm giá ">
														<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
															<picture>

																<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

															</picture>
														</a>
														<div class="product-action">
															<div class="group_action">
																<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
														<h3 class="product-name"><a href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">{{$product->name}}</a></h3>
														<div class="price-box">

															{!! $product->showPrice() !!}
															<div class="action-cart">
																<input type="hidden" name="variantId" value="47262129" />
																<button class="btn-buy btn-views add_to_cart " onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Mua ngay">
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
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section_tech">
		<div class="container">
			<div class="swap">
				<h2 class="title-block upscape">
					<a href="san-pham-noi-bat.html" title="Đồ công nghệ">Đồ công nghệ</a>
				</h2>
				<ul>
					<li>
						<a href="category/dien-thoai-may-tinh-bang.html" title="Điện thoại - Máy tính bảng">Điện thoại - Máy
							tính bảng</a>
					</li>
					<li>
						<a href="category/phu-kien-thiet-bi-so.html" title="Phụ kiện - Thiết bị số">Phụ kiện - Thiết bị
							số</a>
					</li>
					<li>
						<a href="category/may-anh-quay-phim.html" title="Máy ảnh - Quay phim">Máy ảnh - Quay phim</a>
					</li>
					<li>
						<a href="category/dien-gia-dung-nha-bep.html" title="Điện gia dụng - Nhà bếp">Điện gia dụng - Nhà
							bếp</a>
					</li>
					<li>
						<a href="category/laptop-thiet-bi-it.html" title="Laptop - Thiết bị IT">Laptop - Thiết bị IT</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-lg-3 d-md-none d-lg-block col-12 order-2 order-lg-1 block-image">
						<a class="d-block banner-vertical" href="#" title="Săn sale thả ga">
							<img class="lazyload" width="280" height="310" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/banner_1.jpg?1672132862712" alt="Săn sale thả ga" />
						</a>
						<a class="d-block banner-vertical" href="#" title="Giảm sốc">
							<img class="lazyload" width="280" height="310" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/banner_2.jpg?1672132862712" alt="Giảm sốc" />
						</a>
					</div>
					<div class="col-lg-9 col-md-12 col-12 order-1 order-lg-2 no-padding-left">
						<div class="slide-tech row">
							@foreach($products02 as $product)
							<div class="col-lg-3 col-md-3 col-6">
								<div class=" item_product_main">
									<form  class="variants product-action wishItem" data-cart-form data-id="product-actions-21989403" enctype="multipart/form-data">
									@if ($product->price != $product->getFinalPrice())
													<div class="product-thumbnail sale " data-sale="Giảm giá ">
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
													@else
													<div class="product-thumbnail" >
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
												@endif
										<div class="product-info">
											<h3 class="product-name"><a href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">{{$product->name}}</a></h3>
											<div class="price-box">
											{!! $product->showPrice() !!}
												
												<div class="action-cart">
													<input type="hidden" name="variantId" value="47262129" />
													<button class="btn-buy btn-views add_to_cart " title="Mua ngay" onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')">
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
	</section>


	<div class="section_fashion">
		<div class="container">
			<div class="swap">
				<h2 class="title-block upscape">
					<a href="category/san-pham-khuyen-mai.html" title="Thời trang">Ghế Massage</a>
				</h2>
				<ul>
					<li>
						<a href="category/dien-thoai-may-tinh-bang.html" title="Điện thoại - Máy tính bảng">Điện thoại - Máy
							tính bảng</a>
					</li>
					<li>
						<a href="category/phu-kien-thiet-bi-so.html" title="Phụ kiện - Thiết bị số">Phụ kiện - Thiết bị
							số</a>
					</li>
					<li>
						<a href="category/may-anh-quay-phim.html" title="Máy ảnh - Quay phim">Máy ảnh - Quay phim</a>
					</li>
					<li>
						<a href="category/dien-gia-dung-nha-bep.html" title="Điện gia dụng - Nhà bếp">Điện gia dụng - Nhà
							bếp</a>
					</li>
					<li>
						<a href="category/laptop-thiet-bi-it.html" title="Laptop - Thiết bị IT">Laptop - Thiết bị IT</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-lg-5 col-12">
						<div class="swiper-container swiper-banner">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<a class="d-block banner-big" href="#" title="siêu sale">
										<img class="lazyload" width="480" height="322" src="https://tongkhodienmay2t.com/wp-content/uploads/2023/02/dien-lanh-1-2048x915.jpg" alt="siêu sale" />
									</a>
								</div>
								<div class="swiper-slide">
									<a class="d-block banner-big" href="#" title="siêu giảm giá">
										<img class="lazyload" width="480" height="322" src="https://tongkhodienmay2t.com/wp-content/uploads/2023/02/image_2023-02-14_165220878-2048x915.png" alt="siêu giảm giá" />
									</a>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>

					@foreach($products03 as $product)
					<div class="col-lg-2 ex col-6 col-md-3">
						<div class=" item_product_main">
							<form action="https://pocomart.mysapo.net/cart/add" method="post" class="variants product-action wishItem" data-cart-form data-id="product-actions-21992458" enctype="multipart/form-data">
								@if ($product->price != $product->getFinalPrice())
													<div class="product-thumbnail sale " data-sale="Giảm giá ">
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
													@else
													<div class="product-thumbnail" >
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
												@endif
								<div class="product-info">
									<h3 class="product-name"><a href="{{ $product->getUrl() }}" title="Kappa giày thể thao Nam/Nữ 001">{{$product->name}}</a></h3>
									<div class="price-box">
									{!! $product->showPrice() !!}
										
									<div class="action-cart">
											<input type="hidden" name="variantId" value="47262129" />
											<button class="btn-buy btn-views add_to_cart " title="Mua ngay" onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')">
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

	<section class="section_maybe_iwish">
		<div class="container">
			<div class="swap">
				<h2 class="title-block upscape">
					<a href="san-pham-noi-bat.html" title="Gợi ý hôm nay">Gợi ý hôm nay</a>
				</h2>
				<div class="slide-iwish">
					<div class="swiper-container">
						<div class="swiper-iwish">
							<div class="swiper-wrapper">
							@foreach($products as $product)
								<div class="swiper-slide">
									<div class=" item_product_main">
										<form  class="variants product-action wishItem" data-cart-form data-id="product-actions-21989403" enctype="multipart/form-data">
										@if ($product->price != $product->getFinalPrice())
													<div class="product-thumbnail sale " data-sale="Giảm giá ">
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
													@else
													<div class="product-thumbnail" >
															<a class="image_thumb" href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">
																<picture>

																	<img width="240" height="240" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{sc_file($product->getImage())}}" alt="Samsung Galaxy Note 21" class="lazyload img-responsive center-block" />

																</picture>
															</a>
															<div class="product-action">
																<div class="group_action">
																	<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="samsung-galaxy-note-21" tabindex="0" title="Thêm vào yêu thích">
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
												@endif
											<div class="product-info">
												<h3 class="product-name"><a href="{{ $product->getUrl() }}" title="Samsung Galaxy Note 21">{{$product->name}}</a>
												</h3>
												<div class="price-box">
												{!! $product->showPrice() !!}
													
													<div class="action-cart">
														<input type="hidden" name="variantId" value="47262129" />
														<button class="btn-buy btn-views add_to_cart " title="Mua ngay" onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')">
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
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</div>
	</section>

	<div class="container section_blog">
		<div class="swap">
			<h2 class="title-block upscape">
				<a href="blogs/all.html" title="Tin tức mới nhất">Tin tức mới nhất</a>
			</h2>
			<div class="row blogs_mobile_base">
			@foreach($news as $new)   	
			
			<div class="col-lg-3 col-md-3 col-8">
					<div class="item_blog_base">
						<a class="thumb" href="{{ $new->getUrl() }}" title="{{$new->title}}">

							<img src="{{sc_file($new->getImage())}}" alt="{{$new->title}}" class="lazyload img-responsive" />

							<span class="thead">Tin tức</span>
						</a>
						<div class="content_blog clearfix">
							<h3><a href="{{ $new->getUrl() }}" title="{{$new->title}}" class="a-title">{{$new->title}}</a>
							</h3>

							<p>{{ $new->description}}
							
							</p>

						</div>
					</div>
				</div>
				@endforeach
				
			</div>

		</div>
	</div>
</div>
@endsection

@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
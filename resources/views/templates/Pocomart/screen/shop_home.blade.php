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

{{-- block_main_content_center  --}}
@section('block_main_content_center')

@if (count($products))
<div class="main-index">
	<link rel="preload" as="script" href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/search_filtera123.js')}}" />
	<script src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/search_filtera123.js')}}" type="text/javascript"></script>
	<div class="section wrap_background">
		<section class="bread-crumb">
			<div class="container">
				<div class="row">
					<div class="col-12 a-left">
						<ul class="breadcrumb">
							<li class="home">
								<a href="/"><span>Trang chủ</span></a>
								<span class="mr_lr">&nbsp;/&nbsp;</span>
							</li>
							<li><strong><span> Tất cả sản phẩm</span></strong></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="container ">
			<div class="bg_collection section">
				<div class="row">

					<aside class="dqdt-sidebar sidebar left-content col-lg-3 col-md-4 col-sm-4">
						<div class="wrap_background_aside asidecollection">

							<div class="category-collection">
								<h4>
									Danh mục sản phẩm
								</h4>
								<ul>
									@foreach($categories as $category)
									<li class="thumb_s">
										<a class="image lazyload" data-src="{{sc_file($category->getImage())}}" href="{{ $category->getUrl() }}" title="{{$category->title}}">
											{{$category->title}}
										</a>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</aside>

					<div class="main_container collection col-lg-9 col-md-12 col-sm-12">

						<div class="block-des" style="border: solid 1px #ebebeb;margin: 0 0 43px; padding: 10px">
							<div class="des ">
								<h1 class="collectiontitle">Tất cả sản phẩm</h1>
								<div class="scrolldes">
									Ở đây chúng tôi có rất nhiều sản phẩm đáp ứng cho nhu cầu thiết yếu của khách
									hàng, với phương châm bán hàng chất lượng gặt hái thành công, mọi thông tin thắc
									mắc xin gửi về <b>{{ sc_store('email', ($storeId ?? null)) }}</b> hoặc qua số điện thoại
									<b>{{ sc_store('long_phone', ($storeId ?? null)) }}</b> để được hỗ trợ giải đáp thắc mắc về sản phẩm. Chúng tôi hy
									vọng đem lại lợi ích cho khách hàng nhiều hơn qua từng sản phẩm.
								</div>
							</div>
						</div>

						<div class="category-products products">
							<div class="section">
								<div class="sortPagiBar">			
									<!-- Render include filter sort -->
									@include($sc_templatePath.'.common.product_filter_sort', ['filterSort' => $filter_sort])
									<!--// Render include filter sort -->
								</div>
							</div>
							<section class="products-view products-view-grid collection_reponsive list_hover_pro">
								<div class="row">
									@foreach($products as $product)
									<div class="col-6 col-md-3 col-lg-3 product-col">
										<div class="item_product_main">
											<form  class="variants product-action wishItem" data-cart-form data-id="product-actions-22054504" enctype="multipart/form-data">
												<div class="product-thumbnail  ">
													<a class="image_thumb" href="{{ $product->getUrl() }}" title="Kệ gia vị nhà bếp hiện đại">
														<picture>
															<img width="240" height="240" src="{{sc_file($product->getImage())}}" data-src="{{sc_file($product->getImage())}}" alt="Kệ gia vị nhà bếp hiện đại" class="lazyload img-responsive center-block" />
														</picture>
													</a>
													<div class="product-action">
														<div class="group_action">
															<a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')" class="setWishlist btn-views" data-wish="ke-gia-vi-nha-bep-hien-dai" tabindex="0" title="Thêm vào yêu thích">
																<svg enable-background="new 0 0 412.735 412.735" version="1.1" viewBox="0 0 412.74 412.74" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
																	<path d="m295.71 35.522c-34.43-0.184-67.161 14.937-89.339 41.273-22.039-26.516-54.861-41.68-89.339-41.273-64.633 0-117.03 52.395-117.03 117.03 0 110.76 193.31 218.91 201.14 223.09 3.162 2.113 7.286 2.113 10.449 0 7.837-4.18 201.14-110.76 201.14-223.09 0-64.633-52.396-117.03-117.03-117.03zm-89.339 319.22c-30.302-17.763-185.47-112.33-185.47-202.19 0-53.091 43.039-96.131 96.131-96.131 32.512-0.427 62.938 15.972 80.457 43.363 3.557 4.905 10.418 5.998 15.323 2.44 0.937-0.68 1.761-1.503 2.44-2.44 29.055-44.435 88.631-56.903 133.07-27.848 27.202 17.787 43.575 48.114 43.521 80.615 1e-3 90.907-155.17 184.95-185.47 202.19z" />
																</svg>
															</a>
															<a href="javascript:void(0)" class="setCompare btn-views" data-compare="ke-gia-vi-nha-bep-hien-dai" data-type="Nội thất" tabindex="0" title="Thêm vào so sánh">
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
													<h3 class="product-name"><a href="{{ $product->getUrl() }}" title="Kệ gia vị nhà bếp hiện đại">{{$product->name}}</a></h3>
													<div class="price-box">
														{!! $product->showPrice() !!}
														<div class="action-cart">
															<input type="hidden" name="variantId" value="47547122" />
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
								@include($sc_templatePath.'.common.pagination', ['items' => $products])
								<!-- <div class="section pagenav ">
									<nav class="clearfix relative nav_pagi w_100">
										<ul class="pagination clearfix">
											<li class="page-item disabled"><a class="page-link" href="#"><i class="icon icon-left"></i></a></li>
											<li class="active page-item disabled"><a class="page-link" href="javascript:;">1</a></li>
											<li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>
											<li class="page-item hidden-xs"><a class="page-link" onclick="doSearch(2)" href="javascript:;"><i class="icon icon-right" aria-hidden="true"></i>
												</a></li>
										</ul>
									</nav>
								</div> -->
							</section>
						</div>

						<div id="open-filters" class="open-filters d-lg-none d-xl-none">
							<svg class="i-bar-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
								<g>
									<g xmlns="http://www.w3.org/2000/svg">
										<g>
											<g>
												<path d="M85.333,170.667c39.765,0,73.173-27.193,82.645-64h322.688c11.782,0,21.333-9.551,21.333-21.333     C512,73.551,502.449,64,490.667,64H167.979c-9.472-36.807-42.88-64-82.645-64C38.202,0,0,38.202,0,85.333     S38.202,170.667,85.333,170.667z M85.333,42.667c23.567,0,42.667,19.099,42.667,42.667S108.901,128,85.333,128     s-42.667-19.099-42.667-42.667S61.766,42.667,85.333,42.667z" fill="#ffffff" data-original="#000000" style="" class="" />
												<path d="M426.667,341.333c-39.765,0-73.173,27.193-82.645,64H21.333C9.551,405.333,0,414.885,0,426.667S9.551,448,21.333,448     h322.688c9.472,36.807,42.88,64,82.645,64C473.798,512,512,473.798,512,426.667S473.798,341.333,426.667,341.333z      M426.667,469.333c-23.567,0-42.667-19.099-42.667-42.667S403.099,384,426.667,384s42.667,19.099,42.667,42.667     S450.234,469.333,426.667,469.333z" fill="#ffffff" data-original="#000000" style="" class="" />
												<path d="M490.667,234.667H338.645c-9.472-36.807-42.88-64-82.645-64s-73.173,27.193-82.645,64H21.333     C9.551,234.667,0,244.218,0,256s9.551,21.333,21.333,21.333h152.021c9.472,36.807,42.88,64,82.645,64s73.173-27.193,82.645-64     h152.021c11.782,0,21.333-9.551,21.333-21.333S502.449,234.667,490.667,234.667z M256,298.667     c-23.567,0-42.667-19.099-42.667-42.667s19.099-42.667,42.667-42.667s42.667,19.099,42.667,42.667S279.567,298.667,256,298.667z" fill="#ffffff" data-original="#000000" style="" class="" />
											</g>
										</g>
									</g>
								</g>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 492 492" style="enable-background:new 0 0 14 14" xml:space="preserve" class="i-close-white">
								<g xmlns="http://www.w3.org/2000/svg">
									<path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" fill="#ffffff" data-original="#000000" style="" class=""></path>
								</g>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--// Render pagination -->
@else
<div class="product-top-panel group-md">
	<p style="text-align:center">{!! sc_language_render('front.no_item') !!}</p>
</div>
@endif

@endsection
{{-- //block_main_content_center  --}}


@push('styles')
@endpush

@push('scripts')
<!-- //script here -->
@endpush
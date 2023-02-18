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

<div class="main-index">
		<section class="bread-crumb">
			<div class="container">
				<div class="row">
					<div class="col-12 a-left">
						<ul class="breadcrumb">
							<li class="home">
								<a href="../index.html"><span>Trang chủ</span></a>
								<span class="mr_lr">&nbsp;/&nbsp;</span>
							</li>
							<li><strong><span>Tin tức</span></strong></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="blogpage clearfix">
			<div class="containers" itemscope itemtype="https://schema.org/Blog">
				<meta itemprop="name" content="Tin tức">
				<meta itemprop="description"
					content="Giao diện siêu thị điện máy tuyệt đẹp tối ưu SEO hiệu quả cho chủ cửa hàng POCO Mart">

				<div class="section full_background_blog clearfix">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 order-last">
								<aside
									class="aside-item blog-sidebar sidebar-category collection-category margin-bottom-25">
									<h2 class="title-block"><span>Danh mục tin tức</span></h2>
									<div class="aside-content">
										<nav class="nav-category navbar-toggleable-md">
											<ul class="nav navbar-pills">
												<li class="nav-item"><a class="nav-link" href="../index.html">Trang chủ

													</a>
												</li>
												<li class="nav-item"><a class="nav-link" href="../gioi-thieu.html">Giới thiệu

													</a>
												</li>
												<li class="nav-item">
													<a href="../collections/all.html" class="nav-link ">
														Sản phẩm
													</a>													
												</li>
												<li class="nav-item">
													<a href="../tin-moi-nhat.html" class="nav-link ">
														Tin mới nhất
													</a>																					
												</li>
												<li class="nav-item"><a class="nav-link" href="../tuyen-dung.html">Tuyển dụng
													</a>
												</li>
												<li class="nav-item"><a class="nav-link" href="../lien-he.html">Liên hệ
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</aside>
							</div>

							<div class="right-content col-xl-9 col-lg-9 col-md-12 col-12 order-lg-last order-xl-last">
								<div class="title-block-page">
									<h1>Tin tức</h1>
								</div>
								<section class="list-blogs blog-main listmain_blog clearfix">
									<div class="row clearfix">
									@foreach ($news as $blog)
										<div class="col-xl-4 col-md-6 col-12">
											<div class="blog-grid clearfix">
												<a class="thumb"
													href="{{ $blog->getUrl() }}"
													title="{{ $blog->title }}">
													<img src="{{ sc_file($blog->getThumb()) }}" style="height: 200px"
														alt="{{ $blog->title }}"
														class="lazyload img-responsive" />
												</a>
												<div class="content_blog clearfix">
													<h5><a href="{{ $blog->getUrl() }}"
															title="{{ $blog->title }}"
															class="a-title">{{ $blog->title }}</a></h5>
													<p>
													{{ $blog->description }}
													</p>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									<div class="text-xs-right pageinate-page-blog section clearfix">
										<nav class="clearfix relative nav_pagi f-right w_100">
											<ul class="pagination clearfix">

												<li class="page-item hidden-xs"><a class="page-link"
														href="tin-tuc2679.html?page=1"><i class="icon icon-left"
															aria-hidden="true"></i>
													</a></li>
												<li class="page-item"><a class="page-link"
														href="tin-tuc2679.html?page=1">1</a></li>
												<li class="active page-item disabled"><a class="page-link"
														href="#">2</a></li>
												<li class="page-item disabled"><a class="page-link" href="#"><i
															class="icon icon-right"></i></a></li>
											</ul>
										</nav>

									</div>
								</section>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
	</div>

@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
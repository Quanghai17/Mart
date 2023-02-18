@php
/*
$layout_page = shop_news_detail
**Variables:**
- $news: no paginate
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
								<a href="index.html"><span>Trang chủ</span></a>
								<span class="mr_lr">&nbsp;/&nbsp;</span>
							</li>

							<li>
								<a href="tin-tuc.html"><span>Tin tức</span></a>
								<span class="mr_lr">&nbsp;/&nbsp;</span>
							</li>
							<li><strong><span>{{$news->title}}</span></strong></li>

						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="blogpage clearfix">
			<div class="container article-wraper" itemscope itemtype="">
				<div class="wrap_background_aside padding-top-0 margin-bottom-40 clearfix">
					<div class="row">
						<section class="right-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<article class="article-main clearfix">
								<div class="row">
									<div class="col-lg-3 col-md-12 col-sm-12 col-12 order-last">
										<aside
											class="aside-item blog-sidebar sidebar-category collection-category margin-bottom-25">
											<h2 class="title-block"><span>Danh mục tin tức</span></h2>
											<div class="aside-content">
												<nav class="nav-category navbar-toggleable-md">
													<ul class="nav navbar-pills">


														<li class="nav-item"><a class="nav-link" href="index.html">Trang chủ
															</a>
														</li>
														<li class="nav-item"><a class="nav-link"
																href="gioi-thieu.html">Giới thiệu
															</a>
														</li>
														<li class="nav-item">
															<a href="collections/all.html" class="nav-link ">
																Sản phẩm
															</a>
															
														</li>

														<li class="nav-item">
															<a href="tin-moi-nhat.html" class="nav-link ">
																Tin mới nhất
															</a>
															
														</li>
														<li class="nav-item"><a class="nav-link"
																href="tuyen-dung.html">Tuyển dụng

															</a>
														</li>
														<li class="nav-item"><a class="nav-link"
																href="lien-he.html">Liên hệ

															</a>
														</li>
													</ul>
												</nav>
											</div>
										</aside>

									
									</div>
									<div class="col-lg-9 col-md-12 col-sm-12 col-12 order-lg-last order-xl-last">
										<div class="article-details clearfix">
											<h1 class="article-title clearfix">{{$news->title}}</h1>
											<div class="time-post">

												<span class="icon posted">
													<span class="text bold">Admin</span> | <span
														class="text">13/06/2021</span>
												</span>
											</div>

											<div class="article-content clearfix">
												<div class="rte">
													
													<article>
														<p>{!! sc_html_render($news->content) !!}</p>
													</article>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
						</section>
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

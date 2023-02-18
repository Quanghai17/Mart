@php
/*
$layout_page = shop_about
**Variables:**
- $page: no paginate
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

							<li><strong><span>Giới thiệu</span></strong></li>

						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="page">
			<div class="container">
				<div class="wrap_background_aside padding-top-15 margin-bottom-40">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="title-block-page">
								<h1 class="title-head">Giới thiệu</h1>
							</div>
							<div class="content-page rte">
								<p>{!! sc_html_render($page->content ?? '') !!}</p>
                                <img src="{{sc_file($page->getImage())}}"></img>
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
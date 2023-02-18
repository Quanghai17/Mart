@php
/*
$layout_page = shop_contact
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

							<li><strong><span>Liên hệ</span></strong></li>

						</ul>
					</div>
				</div>
			</div>
		</section>

		<div class="page_contact ">
			<div class="container">
				<div class="title-block-page">
					<h1>Liên hệ</h1>
				</div>
				<div class="row">
					<div class="col-12 order-lg-2 order-2">
						<div class="row">
							
							<div class="col-lg-10 col-12">
								<div id="pagelogin">
									<form method="post" action="{{ sc_route('contact.post') }}" id="contact"
										accept-charset="UTF-8">
                                        {{ csrf_field() }}


										<div class="form-signup clearfix">
											<div class="row group_contact">
												<fieldset class="form-group col-lg-6 col-12">
													<label>Họ và tên <em>*</em></label>
													<input placeholder="" type="text"
														class="form-control  form-control-lg" required value=""
														name="name">
												</fieldset>

												<fieldset class="form-group col-lg-6 col-12">
													<label>Email <em>*</em></label>
													<input placeholder="" type="email"
                                                    name="email" class="form-control form-control-lg" value=""
														>
												</fieldset>

												<fieldset class="form-group col-12">
													<label>Nội dung <em>*</em></label>
													<textarea placeholder="" name="content"
														class="form-control content-area form-control-lg" rows="5"
														Required></textarea>
												</fieldset>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<button type="submit" class="button-default">Gửi liên hệ</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 order-1 order-lg-1">
						<div class="wrapcontact">
							<div class="iFrameMap">
								<div id="contact_map" class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.022495838348!2d105.80419231539095!3d21.585044973929314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352738b1bf08a3%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAmIFRydXnhu4FuIHRow7RuZyBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1676082487170!5m2!1svi!2s" width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
						</div>
					</div>

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
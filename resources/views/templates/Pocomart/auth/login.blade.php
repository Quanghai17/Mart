@extends($sc_templatePath.'.layout')

@section('block_main')
<div class="main-index">
		<section class="bread-crumb">
			<div class="container">
				<div class="row">
					<div class="col-12 a-left">
						<ul class="breadcrumb">
							<li class="home">
								<a href="/"><span>Trang chủ</span></a>
								<span class="mr_lr">&nbsp;/&nbsp;</span>
							</li>

							<li><strong><span>Đăng nhập tài khoản</span></strong></li>

						</ul>
					</div>
				</div>
			</div>
		</section>

		<div class="page-content-account">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
						<div class="d-group">
							<div class="left-col">
								<div class="group-login group-log">
									<h1>
										Đăng nhập tài khoản
									</h1>
									<form method="post" action="{{ sc_route('postLogin') }}"
										id="customer_login" accept-charset="UTF-8"><input name="FormType" type="hidden"
											value="customer_login" /><input name="utf8" type="hidden" value="true" />
                                        {!! csrf_field() !!}
										<p class="error">

										</p>
										<fieldset class="form-group">
											<label>Email <span class="required">*</span></label>
											<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
												class="form-control form-control-lg" value="" name="email"
												id="customer_email" placeholder="Email" Required>
										</fieldset>
										<fieldset class="form-group">
											<label>Mật khẩu <span class="required">*</span> </label>
											<input type="password" class="form-control form-control-lg" value=""
												name="password" id="customer_password" placeholder="Mật khẩu" Required>
										</fieldset>
										<button class="btn-login" type="submit" value="Đăng nhập">Đăng nhập</button>
									</form>
									<div class="block social-login--facebooks">
										<p class="a-center">
											<span>Hoặc đăng nhập bằng</span>
										</p>
										<script>function loginFacebook() { var a = { client_id: "947410958642584", redirect_uri: "https://store.mysapo.net/account/facebook_account_callback", state: JSON.stringify({ redirect_url: window.location.href }), scope: "email", response_type: "code" }, b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0); window.location.href = b } function loginGoogle() { var a = { client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com", redirect_uri: "https://store.mysapo.net/account/google_account_callback", scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile", access_type: "online", state: JSON.stringify({ redirect_url: window.location.href }), response_type: "code" }, b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0); window.location.href = b } function encodeURIParams(a, b) { var c = []; for (var d in a) if (a.hasOwnProperty(d)) { var e = a[d]; null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e)) } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&") }</script>
										<a href="javascript:void(0)" class="social-login--facebook"
											onclick="loginFacebook()"><img width="129px" height="37px"
												alt="facebook-login-button"
												src="http://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
										<a href="javascript:void(0)" class="social-login--google"
											onclick="loginGoogle()"><img width="129px" height="37px"
												alt="google-login-button"
												src="http://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
									</div>
									<p>
										Bạn quên mật khẩu bấm <a href="{{ sc_route('forgot') }}"
											onclick="showRecoverPasswordForm();return false;">vào đây</a>
									</p>
								</div>
								<div class="group-login group-recover d-none">
									<h2>
										Quên mật khẩu
									</h2>
									<p class="description">
										Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.
									</p>
									<form method="post" action="https://pocomart.mysapo.net/account/recover"
										id="recover_customer_password" accept-charset="UTF-8"><input name="FormType"
											type="hidden" value="recover_customer_password" /><input name="utf8"
											type="hidden" value="true" />
										<p class="error">

										</p>

										<fieldset class="form-group">
											<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
												class="form-control form-control-lg" value="" name="Email"
												id="recover-email" placeholder="Email" Required>
										</fieldset>
										<input class="btn-login" type="submit" value="Gửi yêu cầu" />
										<a href="#" class="btn-ref"
											onclick="hideRecoverPasswordForm();return false;">Hủy</a>
									</form>
								</div>
							</div>
							<div class="right-col">
								<h4>
									Quyền lợi với thành viên
								</h4>
								<div>
									<p>Vận chuyển siêu tốc</p>
									<p>Sản phẩm đa dạng </p>
									<p>Đổi trả dễ dàng</p>
									<p>Tích điểm đổi quà</p>
									<p>Được giảm giá cho lần mua tiếp theo lên đến 10% </p>

								</div>
								<a href="{{ sc_route('register') }}" class="btn-register-default">Đăng ký</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
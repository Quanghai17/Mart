@php
/*
$layout_page = shop_cart
**Variables:**
- $cart: no paginate
- $countries: array
- $attributesGroup: array
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

                        <li><strong><span>Giỏ hàng</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="main-cart-page main-container col1-layout">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside margin-bottom-40">
                <div class="header-cart">
                    <div class="title-block-page">
                        <h1 class="title_cart">
                            <span>Giỏ hàng của bạn</span>
                        </h1>
                    </div>
                </div>
                <div class="cart-page d-xl-block d-none">
                    <div class="drawer__inner">
                        <div class="CartPageContainer">
                            <div class="row">
                                @if (count($cart) ==0)

                                <div class="col-md-12">
                                    {!! sc_language_render('cart.cart_empty') !!}!
                                </div>

                                @else
                                @php
                                $cartTmp = $cart->groupBy('storeId');
                                @endphp

                                {{-- Render cart item for earch shop --}}
                                @foreach ($cartTmp as $sId => $cartItem)


                                <div class="col-md-12">
                                    <form action="{{ sc_route('checkout.prepare') }}" method="POST">
                                        <input type="hidden" name="store_id" value="{{ $sId }}">
                                        @csrf

                                        {{-- Item cart detail --}}
                                        @include($sc_templatePath.'.common.cart_list', ['cartItem' => $cartItem])
                                        {{-- //Item cart detail --}}

                                        {{-- Button checkout --}}
                                        <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                                            <div class="row">
                                                <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                                                    <div class="ajaxcart__subtotal">
                                                    </div>
                                                    <div class="cart__btn-proceed-checkout-dt">
                                                        <button type="submit" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Button checkout --}}
                                    </form>
                                </div>
                                @endforeach
                                {{--// Render cart item for earch shop --}}
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cart-mobile-page d-block d-xl-none">
                    <div class="CartMobileContainer">
                        <div class="row">
                            @if (count($cart) ==0)

                            <div class="col-md-12">
                                {!! sc_language_render('cart.cart_empty') !!}!
                            </div>

                            @else
                            @php
                            $cartTmp = $cart->groupBy('storeId');
                            @endphp

                            {{-- Render cart item for earch shop --}}
                            @foreach ($cartTmp as $sId => $cartItem)


                            <div class="col-md-12">
                                <form action="{{ sc_route('checkout.prepare') }}" method="POST">
                                    <input type="hidden" name="store_id" value="{{ $sId }}">
                                    @csrf

                                    {{-- Item cart detail --}}
                                    @include($sc_templatePath.'.common.cart_list', ['cartItem' => $cartItem])
                                    {{-- //Item cart detail --}}

                                    {{-- Button checkout --}}
                                    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                                        <div class="row">
                                            <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                                                <div class="ajaxcart__subtotal">
                                                </div>
                                                <div class="cart__btn-proceed-checkout-dt">
                                                    <button type="submit" style="    background-color: #eb3e32; color: aliceblue;" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Button checkout --}}
                                </form>
                            </div>
                            @endforeach
                            {{--// Render cart item for earch shop --}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection



@push('scripts')
{{-- //script here --}}
@endpush

@push('styles')
{{-- Your css style --}}
@endpush
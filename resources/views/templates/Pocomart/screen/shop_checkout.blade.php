@php
/*
$layout_page = shop_checkout
**Variables:**
- $cartItem: collection
- $storeCheckout: int
- $shippingMethod: string
- $paymentMethod: string
- $totalMethod: array
- $dataTotal: array
- $shippingAddress: array
- $countries: array
- $attributesGroup: array
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<section class="section section-xl bg-default text-md-left" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            @if (count($cartItem) ==0)
            <div class="col-md-12 text-danger min-height-37vh">
                {!! sc_language_render('cart.cart_empty') !!}!
            </div>
            @else

            {{-- Item cart detail --}}
            @include($sc_templatePath.'.common.checkout_list', ['cartItem' => $cartItem])
            {{-- //Item cart detail --}}


            <div class="col-md-12">
            <form class="sc-shipping-address" id="form-process" role="form" method="POST" action="{{ sc_route('checkout.process') }}">
                @csrf
                <div class="row">
                    {{-- Begin address shipping --}}
                    <div class="col-md-7">
                        {{-- Select address if customer login --}}
                        @if (auth()->user())
                            <div class="">
                                <select class="form-control" name="address_process" style="width: 100%;" id="addressList">
                                    <option value="">{{ sc_language_render('cart.change_address') }}</option>
                                    @foreach ($addressList as $k => $address)
                                    <option value="{{ $address->id }}" {{ (old('address_process') ==  $address->id) ? 'selected':''}}>- {{ $address->first_name. ' '.$address->last_name.', '.$address->address1.' '.$address->address2.' '.$address->address3 }}</option>
                                    @endforeach
                                    <option value="new" {{ (old('address_process') ==  'new') ? 'selected':''}}>{{ sc_language_render('cart.add_new_address') }}</option>
                                </select>
                            </div>
                        @endif
                        {{--// Select address if customer login --}}
                        
                        {{-- Render address shipping --}}
                        <table class="table table-borderless table-responsive">
                            <tr width=100%>
                                @if (sc_config('customer_lastname'))
                                    <td class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        
                                        <input class="form-control" name="first_name" type="text"
                                            placeholder="{{ sc_language_render('order.first_name') }}"
                                            value="{{old('first_name', $shippingAddress['first_name'])}}">
                                        @if($errors->has('first_name'))
                                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </td>
                                    <td class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        
                                        <input class="form-control" name="last_name" type="text" placeholder="{{ sc_language_render('order.last_name') }}"
                                            value="{{old('last_name',$shippingAddress['last_name'])}}">
                                        @if($errors->has('last_name'))
                                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </td>
                                @else
                                    <td colspan="2"
                                        class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="first_name" type="text" placeholder="{{ sc_language_render('order.name') }}"
                                            value="{{old('first_name',$shippingAddress['first_name'])}}">
                                        @if($errors->has('first_name'))
                                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </td>
                                @endif
                            </tr>

                            @if (sc_config('customer_name_kana'))
                                <tr>
                                <td class="form-group{{ $errors->has('first_name_kana') ? ' has-error' : '' }}">
                                    
                                    <input class="form-control" name="first_name_kana" type="text"
                                        placeholder="{{ sc_language_render('order.first_name_kana') }}"
                                        value="{{old('first_name_kana', $shippingAddress['first_name_kana'])}}">
                                    @if($errors->has('first_name_kana'))
                                    <span class="help-block">{{ $errors->first('first_name_kana') }}</span>
                                    @endif
                                </td>
                                <td class="form-group{{ $errors->has('last_name_kana') ? ' has-error' : '' }}">
                                    
                                    <input class="form-control" name="last_name_kana" type="text" placeholder="{{ sc_language_render('order.last_name_kana') }}"
                                        value="{{old('last_name_kana',$shippingAddress['last_name_kana'])}}">
                                    @if($errors->has('last_name_kana'))
                                    <span class="help-block">{{ $errors->first('last_name_kana') }}</span>
                                    @endif
                                </td>
                                </tr>
                            @endif

                            <tr>
                                @if (sc_config('customer_phone'))
                                    <td class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      
                                        <input class="form-control" name="email" type="text" placeholder="{{ sc_language_render('order.email') }}"
                                            value="{{old('email', $shippingAddress['email'])}}">
                                        @if($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </td>
                                    <td class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="phone" type="text" placeholder="{{ sc_language_render('order.phone') }}"
                                            value="{{old('phone',$shippingAddress['phone'])}}">
                                        @if($errors->has('phone'))
                                            <span class="help-block">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </td>
                                @else
                                    <td colspan="2" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="email" type="text" placeholder="{{ sc_language_render('order.email') }}"
                                            value="{{old('email',$shippingAddress['email'])}}">
                                        @if($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </td>
                                @endif
                            </tr>

                            <tr>
                                @if (sc_config('customer_postcode'))
                                    <td class="form-group {{ $errors->has('postcode') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="postcode" type="text" placeholder="{{ sc_language_render('order.postcode') }}"
                                            value="{{ old('postcode',$shippingAddress['postcode'])}}">
                                        @if($errors->has('postcode'))
                                            <span class="help-block">{{ $errors->first('postcode') }}</span>
                                        @endif
                                    </td>
                                @endif

                                @if (sc_config('customer_company'))
                                    <td class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="company" type="text" placeholder="{{ sc_language_render('order.company') }}"
                                            value="{{ old('company',$shippingAddress['company'])}}">
                                        @if($errors->has('company'))
                                            <span class="help-block">{{ $errors->first('company') }}</span>
                                        @endif
                                    </td>
                                @endif
                            </tr>

                            @if (sc_config('customer_address1'))
                            <tr>
                                    <td colspan="2"
                                        class="form-group {{ $errors->has('address1') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="address1" type="text" placeholder="{{ sc_language_render('order.address1') }}"
                                            value="{{ old('address1',$shippingAddress['address1'])}}">
                                        @if($errors->has('address1'))
                                            <span class="help-block">{{ $errors->first('address1') }}</span>
                                        @endif
                                    </td>
                            </tr>
                            @endif

                            @if (sc_config('customer_address2'))
                            <tr>
                                    <td colspan="2"
                                        class="form-group {{ $errors->has('address2') ? ' has-error' : '' }}">
                                        
                                        <input class="form-control" name="address2" type="text" placeholder="{{ sc_language_render('order.address2') }}"
                                            value="{{ old('address2',$shippingAddress['address2'])}}">
                                        @if($errors->has('address2'))
                                            <span class="help-block">{{ $errors->first('address2') }}</span>
                                        @endif
                                    </td>
                            </tr>
                            @endif

                            @if (sc_config('customer_address3'))
                            <tr>
                                    <td colspan="2"
                                        class="form-group {{ $errors->has('address3') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="address3" type="text" placeholder="{{ sc_language_render('order.address3') }}"
                                            value="{{ old('address3',$shippingAddress['address3'])}}">
                                        @if($errors->has('address3'))
                                            <span class="help-block">{{ $errors->first('address3') }}</span>
                                        @endif
                                    </td>
                            </tr>
                            @endif

                            <tr>
                                <td colspan="2">
                                  
                                    <textarea class="form-control" rows="5" name="comment"
                                        placeholder="{{ sc_language_render('cart.note') }}....">{{ old('comment','')}}</textarea>
                                </td>
                            </tr>

                        </table>
                        {{-- //Render address shipping --}}
                    </div>
                    {{--// End address shipping --}}


                    <div class="col-md-5">
                        {{-- Total --}}
                        <div class="row">
                            <div class="col-md-12">
                                {{-- Data total --}}
                                @include($sc_templatePath.'.common.render_total')
                                {{-- Data total --}}

                                {{-- Total method --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="form-group {{ $errors->has('totalMethod') ? ' has-error' : '' }}">
                                            @if($errors->has('totalMethod'))
                                                <span class="help-block">{{ $errors->first('totalMethod') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            @foreach ($totalMethod as $key => $plugin)
                                                @includeIf($plugin['pathPlugin'].'::render')
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- //Total method --}}

                            @if (!sc_config('shipping_off'))
                                {{-- Shipping method --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="form-group {{ $errors->has('shippingMethod') ? ' has-error' : '' }}">
                                            <h3 class="control-label"><i class="fa fa-truck" aria-hidden="true"></i>
                                                {{ sc_language_render('order.shipping_method') }}:<br></h3>
                                            @if($errors->has('shippingMethod'))
                                            <span class="help-block">{{ $errors->first('shippingMethod') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            @foreach ($shippingMethod as $key => $shipping)
                                            <div>
                                                <label class="radio-inline">
                                                    <input type="radio" name="shippingMethod"
                                                        value="{{ $shipping['key'] }}"
                                                        {{ (old('shippingMethod') == $key)?'checked':'' }}
                                                        style="position: relative;"
                                                        {{ ($shipping['permission'])?'':'disabled' }}>
                                                    {{ $shipping['title'] }}
                                                </label>
                                            </div>

                                            {{-- Render view --}}
                                            @includeIf($shipping['pathPlugin'].'::render')
                                            {{-- //Render view --}}

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- //Shipping method --}}
                                @endif

                                @if (!sc_config('payment_off'))
                                {{-- Payment method --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="form-group {{ $errors->has('paymentMethod') ? ' has-error' : '' }}">
                                            <h3 class="control-label"><i class="fa fa-credit-card-alt"></i>
                                                {{ sc_language_render('order.payment_method') }}:<br></h3>
                                            @if($errors->has('paymentMethod'))
                                            <span class="help-block">{{ $errors->first('paymentMethod') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group cart-payment-method">
                                            @foreach ($paymentMethod as $key => $payment)
                                            <div>
                                                <label class="radio-inline">
                                                    <input type="radio" name="paymentMethod"
                                                        value="{{ $payment['key'] }}"
                                                        {{ (old('shippingMethod') == $key)?'checked':'' }}
                                                        style="position: relative;"
                                                        {{ ($payment['permission'])?'':'disabled' }}>
                                                        <label class="radio-inline" for="payment-{{ $payment['key'] }}">
                                                            <img title="{{ $payment['title'] }}"
                                                                alt="{{ $payment['title'] }}"
                                                                src="{{ sc_file($payment['image']) }}">
                                                        </label>
                                                </label>
                                            </div>

                                            {{-- Render view --}}
                                            @includeIf($payment['pathPlugin'].'::render')
                                            {{-- //Render view --}}

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- //Payment method --}}
                                    @endif

                            </div>
                            
                        </div>
                        {{-- End total --}}

                        {{-- Button checkout --}}
                        <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                            <div class="row">
                                <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                                    <div class="ajaxcart__subtotal">
                                    </div>
                                    <div class="cart__btn-proceed-checkout-dt">
                                        <button style="    background-color: #eb3e32; color: aliceblue;" type="submit" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Button checkout --}}

                    </div>
                </div>
            </form>
        </div>





            @endif
        </div>
    </div>
</section>

@endsection




@push('scripts')

{{-- Render script from total method --}}
@foreach ($totalMethod as $key => $plugin)
    @includeIf($plugin['pathPlugin'].'::script')
@endforeach
{{--// Render script from total method --}}

{{-- Render script from shipping method --}}
@foreach ($shippingMethod as $key => $plugin)
    @includeIf($plugin['pathPlugin'].'::script')
@endforeach
{{--// Render script from shipping method --}}

{{-- Render script from payment method --}}
@foreach ($paymentMethod as $key => $plugin)
    @includeIf($plugin['pathPlugin'].'::script')
@endforeach
{{--// Render script from payment method --}}

<script type="text/javascript">

    $('#button-form-process').click(function(){
        $('#form-process').submit();
        $(this).prop('disabled',true);
    });

    $('#addressList').change(function(){
        var id = $('#addressList').val();
        if(!id) {
            return;   
        } else if(id == 'new') {
            $('#form-process [name="first_name"]').val('');
            $('#form-process [name="last_name"]').val('');
            $('#form-process [name="phone"]').val('');
            $('#form-process [name="postcode"]').val('');
            $('#form-process [name="company"]').val('');
            $('#form-process [name="country"]').val('');
            $('#form-process [name="address1"]').val('');
            $('#form-process [name="address2"]').val('');
            $('#form-process [name="address3"]').val('');
        } else {
            $.ajax({
            url: '{{ sc_route('customer.address_detail') }}',
            type: 'GET',
            dataType: 'json',
            async: false,
            cache: false,
            data: {
                id: id,
            },
            success: function(data){
                error= parseInt(data.error);
                if(error === 1)
                {
                    alert(data.msg);
                }else{
                    $('#form-process [name="first_name"]').val(data.first_name);
                    $('#form-process [name="last_name"]').val(data.last_name);
                    $('#form-process [name="phone"]').val(data.phone);
                    $('#form-process [name="postcode"]').val(data.postcode);
                    $('#form-process [name="company"]').val(data.company);
                    $('#form-process [name="country"]').val(data.country);
                    $('#form-process [name="address1"]').val(data.address1);
                    $('#form-process [name="address2"]').val(data.address2);
                    $('#form-process [name="address3"]').val(data.address3);
                }

                }
        });
        }
    });

</script>

@endpush

@push('styles')
{{-- Your css style --}}
@endpush
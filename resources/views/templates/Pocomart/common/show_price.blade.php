<div class="product-price-wrap">
@switch($kind)
    @case(SC_PRODUCT_GROUP)
    <div class="product-price">{!! sc_language_render('product.price_group') !!}</div>
        @break
    @default
        @if ($price == $priceFinal)
            <div class="product-price">{!! sc_currency_render($price) !!}</div>
        @else
            <span class="price">{!! sc_currency_render($priceFinal) !!}</span>
			<span class="compare-price">{!!  sc_currency_render($price) !!}</span>
        @endif
@endswitch
</div>    
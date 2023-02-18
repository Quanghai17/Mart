<div class="col-md-12">
  <div class="table-responsive">
      <table class="table box table-bordered">
          <thead>
              <tr style="background: #eaebec">
                  
                  <th>Thông tin sản phẩm</th>
                  <th>Đơn giá</th>
                  <th>Số lượng</th>
                  <th>Thành tiền</th>

              </tr>
          </thead>
          <tbody>
              @foreach($cartItem as $item)
                  @php
                      $n = (isset($n)?$n:0);
                      $n++;
                      // Check product in cart
                      $product = $modelProduct->start()->getDetail($item->id, null, $item->storeId);
                      if(!$product) {
                          continue;
                      }
                      // End check product in cart
                  @endphp
              <tr class="row_cart form-group {{ session('arrErrorQty')[$product->id] ?? '' }}{{ (session('arrErrorQty')[$product->id] ?? 0) ? ' has-error' : '' }}">
                 
                  <td>
                      <a href="{{$product->getUrl() }}" class="row_cart-name">
                          <img width="100" src="{{sc_file($product->getImage())}}"
                              alt="{{ $product->name }}">
                      </a>
                          <span>
                            <a href="{{$product->getUrl() }}" class="row_cart-name">{{ $product->name }}</a><br />
                            <a onClick="return confirm('Confirm?')" title="Remove Item" alt="Remove Item"
                            class="cart_quantity_delete"
                            href="{{ sc_route("cart.remove", ['id'=>$item->rowId, 'instance' => 'cart']) }}">
                            <i class="fa fa-times" aria-hidden="true">Xóa sản phẩm</i>
                            </a>
                          </span>
                          
                  </td>

                  <td>{!! $product->showPrice() !!}</td>

                  <td class="cart-col-qty">
                      <div class="cart-qty">
                          <input style="width: 150px; margin: 0 auto" type="number" data-id="{{ $item->id }}"
                              data-rowid="{{$item->rowId}}" data-store_id="{{$product->store_id}}" onChange="updateCart($(this));"
                              class="item-qty form-control" name="qty-{{$item->id}}" value="{{$item->qty}}">
                      </div>
                      <span class="text-danger item-qty-{{$item->id}}" style="display: none;"></span>
                      @if (session('arrErrorQty')[$product->id] ?? 0)
                      <span class="help-block">
                          <br>{{ sc_language_render('cart.minimum_value', ['value' => session('arrErrorQty')[$product->id]]) }}
                      </span>
                      @endif
                  </td>

                  <td align="right">
                      {{sc_currency_render($item->subtotal)}}
                  </td>
              </tr>

              @endforeach
          </tbody>
      </table>
  </div>
</div>


@push('scripts')
<script type="text/javascript">
    function updateCart(obj){
        let new_qty = obj.val();
        let storeId = obj.data('store_id');
        let rowid = obj.data('rowid');
        let id = obj.data('id');
        $.ajax({
            url: '{{ sc_route('cart.update') }}',
            type: 'POST',
            dataType: 'json',
            async: false,
            cache: false,
            data: {
                id: id,
                rowId: rowid,
                new_qty: new_qty,
                storeId: storeId,
                _token:'{{ csrf_token() }}'},
            success: function(data){
                error= parseInt(data.error);
                if(error ===0)
                {
                    window.location.replace(location.href);
                }else{
                    $('.item-qty-'+id).css('display','block').html(data.msg);
                }

                }
        });
    }

    function buttonQty(obj, action){
        var parent = obj.parent();
        var input = parent.find(".item-qty");
        if(action === 'reduce'){
            input.val(parseInt(input.val()) - 1);
        }else{
            input.val(parseInt(input.val()) + 1);
        }
        updateCart(input)
    }
</script>
@endpush
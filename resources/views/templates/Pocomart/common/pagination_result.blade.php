<p class="product-top-panel-title">
  {!! sc_language_render('front.result_item', ['item_from' => $items->firstItem(), 'item_to'=> $items->lastItem(), 'total'=> $items->total() ]) !!}
</p>
<!-- <li class="page-item disabled"><a class="page-link" href="#"><i class="icon icon-left"></i></a></li>
<li class="active page-item disabled"><a class="page-link" href="javascript:;">1</a></li>
<li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>
<li class="page-item hidden-xs"><a class="page-link" onclick="doSearch(2)" href="javascript:;"><i class="icon icon-right" aria-hidden="true"></i>
</a></li> -->
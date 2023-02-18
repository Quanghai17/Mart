{{-- <div class="pagination-wrap">
    <nav aria-label="Page navigation">
      <ul class="pagination">
        
      </ul>
    </nav>
</div> --}}
<div class="container">
  <nav class="woocommerce-pagination">
    <ul class="page-numbers nav-pagination links text-center">
      {{ $items->appends(request()->except(['page','_token']))->links() }}
    </ul>
  </nav>
</div>

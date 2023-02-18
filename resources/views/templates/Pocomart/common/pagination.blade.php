<!-- <div class="pagination-wrap">
  <nav aria-label="Page navigation">
    <ul class="pagination">
      {{ $items->appends(request()->except(['page','_token']))->links() }}
    </ul>
  </nav>
</div> -->
<div class="section pagenav ">
  <nav class="clearfix relative nav_pagi w_100">
    <ul class="pagination clearfix">
    {{ $items->appends(request()->except(['page','_token']))->links() }}
     
    </ul>
  </nav>
</div>
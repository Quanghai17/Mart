<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700">
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta name="description" content="{{ $description??sc_store('description') }}">
    <meta name="keywords" content="{{ $keyword??sc_store('keyword') }}">
    <title>{{$title??sc_store('title')}}</title>
    <link rel="icon" href="{{ sc_file(sc_store('icon', null, 'images/icon.png')) }}" type="image/png" sizes="16x16">
    <meta property="og:image" content="{{ !empty($og_image)?sc_file($og_image):sc_file('images/org.jpg') }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $title??sc_store('title') }}" />
    <meta property="og:description" content="{{ $description??sc_store('description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link rel="preload" as='style' type="text/css"
		href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/plugincssa123.css')}}">
	<link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/plugincssa123.css')}}" rel="stylesheet"
		type="text/css" media="all" />
    <link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/collection_style.scssa123.css')}}" rel="stylesheet"
		type="text/css" media="all" />
	<link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/product_style.scssa123.css')}}" rel="stylesheet"
		type="text/css" media="all" />
	<link rel="preload" as='style'
		href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.scssa123.css')}}">
	<link rel="preload" as='style'
		href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/header.scssa123.css')}}">

	<link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.scssa123.css')}}" rel="stylesheet"
		type="text/css" media="all" />
	<link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/header.scssa123.css')}}"
		rel="stylesheet" type="text/css" media="all" />
	<link rel="preload" as='style' type="text/css"
		href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/index.scssa123.css')}}">
	<link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/index.scssa123.css')}}" rel="stylesheet"
		type="text/css" media="all" />
	<link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/all.min.css')}}" rel="stylesheet"
	type="text/css" media="all" />
	<link href="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/account_oder_style.scssa123.css')}}" rel="stylesheet"
	type="text/css" media="all" />


	<script>
		var Bizweb = Bizweb || {};
		Bizweb.store = 'pocomart.mysapo.net';
		Bizweb.id = 429689;
		Bizweb.theme = { "id": 869367, "name": "poco mart - 2509", "role": "main" };
		Bizweb.template = 'index';
		if (!Bizweb.fbEventId) Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
			var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
			return v.toString(16);
		});		
	</script>
	<script>
		(function () {
			function asyncLoad() {
				var urls = [];
				for (var i = 0; i < urls.length; i++) {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = urls[i];
					var x = document.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				}
			};
			window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
		})();
	</script>

	<script>
		window.BizwebAnalytics = window.BizwebAnalytics || {};
		window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
		window.BizwebAnalytics.meta.currency = 'VND';
		window.BizwebAnalytics.tracking_url = 's.html';

		var meta = {};


		for (var attr in meta) {
			window.BizwebAnalytics.meta[attr] = meta[attr];
		}
	</script>

	<script src="{{ sc_file($sc_templateFile.'/dist/js/stats.min4143.js')}}"></script>

  </head>
<body>

    <script src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/jquerya123.js')}}"
		type="text/javascript"></script>
	<script rel="preload" src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/ajaxsubmita123.js')}}"
		type="text/javascript"></script>
	<script rel="preload" src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/notifya123.js')}}"
		type="text/javascript"></script>
	<script src="{{ sc_file($sc_templateFile.'/bizweb.dktcdn.net/100/429/689/themes/869367/assets/swipera123.js')}}"
		type="text/javascript"></script>
	<script>
		$(document).ready(function ($) {
			awe_lazyloadImage();
		});
		function awe_lazyloadImage() {
			var ll = new LazyLoad({
				elements_selector: ".lazyload",
				load_delay: 500,
				threshold: 5
			});
		} window.awe_lazyloadImage = awe_lazyloadImage;
	</script>
   
        {{-- Block header --}}
        @section('block_header')
            @include($sc_templatePath.'.block_header')
        @show
        {{--// Block header --}}

        {{-- Block main --}}
        @section('block_main')
            <section class="section section-xxl bg-default text-md-left">
                <div class="container">
                    <div class="row row-50">
                        @section('block_main_content')

                        @if (empty($hiddenBlockLeft))
                            

                            <!--Block center-->
                            <div class="col-lg-12 col-xl-12">
                                @section('block_main_content_center')
                                    @include($sc_templatePath.'.block_main_content_center')
                                @show
                            </div>
                            <!--//Block center-->
                        @else
                            <!--Block center-->
                            @section('block_main_content_center')
                                @include($sc_templatePath.'.block_main_content_center')
                            @show
                            <!--//Block center-->
                        @endif

                        @if (empty($hiddenBlockRight))
                            <!--Block right -->
                            @section('block_main_content_right')
                                @include($sc_templatePath.'.block_main_content_right')
                            @show
                            <!--//Block right -->
                        @endif

                        @show
                    </div>
                </div>
            </section>
        @show
        {{-- //Block main --}}
        
        {{-- Block footer --}}
        @section('block_footer')
            @include($sc_templatePath.'.block_footer')
        @show
        {{-- //Block footer --}}
    
    <!-- js default for item s-cart -->
    @include($sc_templatePath.'.common.js')
    <!--//end js defaut -->
    @stack('scripts')

</body>
</html>
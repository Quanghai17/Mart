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

    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://sgshop.com.vn/",
        "url":"https://sgshop.com.vn/","name":"Trang chủ - Trung Tâm Mua Sắm Trực Tuyến SGShop","isPartOf":{"@id":"https://sgshop.com.vn/#website"},
        "datePublished":"2022-04-18T03:40:51+00:00","dateModified":"2022-05-17T13:05:11+00:00","breadcrumb":{"@id":"https://sgshop.com.vn/#breadcrumb"},
        "inLanguage":"vi","potentialAction":[{"@type":"ReadAction","target":["https://sgshop.com.vn/"]}]},{"@type":"BreadcrumbList","@id":"https://sgshop.com.vn/#breadcrumb",
        "itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ"}]},{"@type":"WebSite","@id":"https://sgshop.com.vn/#website","url":"https://sgshop.com.vn/",
        "name":"Trung Tâm Mua Sắm Trực Tuyến SGShop","description":"SGSHOP.COM.VN","potentialAction":[{"@type":"SearchAction",
        "target":{"@type":"EntryPoint","urlTemplate":"https://sgshop.com.vn/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"vi"}]}</script>
        <!-- / Yoast SEO plugin. -->
    
    
    <link rel='dns-prefetch' href='http://cdn.jsdelivr.net/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Trung Tâm Mua Sắm Trực Tuyến SGShop &raquo;" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Trung Tâm Mua Sắm Trực Tuyến SGShop &raquo;" href="comments/feed/index.html" />
    <link rel="prefetch" href="{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/js/chunk.countup.fe2c1016.js')}}" />
    <link rel="prefetch" href="{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/js/chunk.sticky-sidebar.a58a6557.js')}}" />
    <link rel="prefetch" href="{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/js/chunk.tooltips.29144c1c.js')}}" />
    <link rel="prefetch" href="{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/js/chunk.vendors-popups.947eca5c.js')}}" />
    <link rel="prefetch" href="{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/js/chunk.vendors-slider.f0d2cbc9.js')}}" />
    <script type="text/javascript">
    window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png",
    "svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg",
    "source":{"concatemoji":"https:\/\/sgshop.com.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"}};
    /*! This file is auto-generated */
    !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,
    e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),
    e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",
    a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
        <style id='wp-block-library-inline-css' type='text/css'>
    :root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.screen-reader-text:focus{background-color:#ddd;clip:auto!important;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}figure{margin:0 0 1em}
    </style>
    <link rel='stylesheet' id='classic-theme-styles-css' href='{{ sc_file($sc_templateFile.'/wp-includes/css/classic-themes.min68b3.css?ver=1')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='{{ sc_file($sc_templateFile.'/wp-content/plugins/contact-form-7/includes/css/styles42f0.css?ver=5.6.3')}}' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel='stylesheet' id='flatsome-main-css' href='{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/css/flatsomebb93.css?ver=3.15.5')}}' type='text/css' media='all' />
    <style id='flatsome-main-inline-css' type='text/css'>
    @font-face {
                    font-family: "fl-icons";
                    font-display: block;
                    src: url(wp-content/themes/flatsome/assets/css/icons/fl-icons4090.eot?v=3.15.5);
                    src:
                        url(wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.15.5) format("embedded-opentype"),
                        url(wp-content/themes/flatsome/assets/css/icons/fl-icons4090.woff2?v=3.15.5) format("woff2"),
                        url(wp-content/themes/flatsome/assets/css/icons/fl-icons4090.ttf?v=3.15.5) format("truetype"),
                        url(wp-content/themes/flatsome/assets/css/icons/fl-icons4090.woff?v=3.15.5) format("woff"),
                        url(wp-content/themes/flatsome/assets/css/icons/fl-icons4090.svg?v=3.15.5#fl-icons) format("svg");
                }
    </style>
    <link rel='stylesheet' id='flatsome-shop-css' href='{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/css/flatsome-shopbb93.css?ver=3.15.5')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css' href='{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome-child/style4558.css?ver=Pro')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-googlefonts-css' href='http://fonts.googleapis.com/css?family=Roboto%3Aregular%2C700%2Cregular%2C700%2Cregular&amp;display=swap&amp;ver=3.9' type='text/css' media='all' />
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1')}}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2')}}' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/2.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.1" />
    <meta name="generator" content="WooCommerce 6.9.1" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed8bec.json?url=https%3A%2F%2Fsgshop.com.vn%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed54e8?url=https%3A%2F%2Fsgshop.com.vn%2F&amp;format=xml" />
    <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style><!--[if IE]><link rel="stylesheet" type="text/css" href="https://sgshop.com.vn/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://sgshop.com.vn/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]--><meta name="facebook-domain-verification" content="f4a7s1ggo32lzdl16t0w66v1ngq6rl" />	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
        <link rel="icon" href="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/05/cropped-icon-gsshop-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/05/cropped-icon-gsshop-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ sc_file($sc_templateFile.'/wp-content/uploads/2022/05/cropped-icon-gsshop-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="https://sgshop.com.vn/wp-content/uploads/2022/05/cropped-icon-gsshop-270x270.png" />
    <style id="custom-css" type="text/css">:root {--primary-color: #c9ac5f;}.container-width, .full-width .ubermenu-nav, .container, .row{max-width: 1170px}.row.row-collapse{max-width: 1140px}.row.row-small{max-width: 1162.5px}.row.row-large{max-width: 1200px}.header-main{height: 90px}#logo img{max-height: 90px}#logo{width:271px;}#logo img{padding:5px 0;}.header-bottom{min-height: 45px}.header-top{min-height: 30px}.transparent .header-main{height: 90px}.transparent #logo img{max-height: 90px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 170px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.search-form{ width: 44%;}.header-bg-color {background-color: #000000}.header-bottom {background-color: #f1f1f1}.top-bar-nav > li > a{line-height: 16px }.header-bottom-nav > li > a{line-height: 45px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.header-top{background-color:#f4f5f9!important;}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #c9ac5f;}/* Color !important */[data-text-color="primary"]{color: #c9ac5f!important;}/* Background Color */[data-text-bg="primary"]{background-color: #c9ac5f;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .header-vertical-menu__opener ,.is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #c9ac5f;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #c9ac5f}.nav-tabs > li.active > a{border-top-color: #c9ac5f}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #c9ac5f }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #c9ac5f }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #c9ac5f;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step{ background-color:#ff8805; }[data-text-bg="secondary"]{background-color: #ff8805;}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #ff8805}/* Color !important */[data-text-color="secondary"]{color: #ff8805!important;}/* Border */.secondary.is-outline:hover{border-color:#ff8805}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family:"Roboto", sans-serif}body{font-weight: 0}body{color: #000000}.nav > li > a {font-family:"Roboto", sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family:"Roboto", sans-serif;}.nav > li > a {font-weight: 700;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Roboto", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #000000;}.alt-font{font-family: "Roboto", sans-serif;}.alt-font{font-weight: 0!important;}.header:not(.transparent) .top-bar-nav > li > a {color: #000000;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #000000;}a{color: #ff7200;}.price del, .product_list_widget del, del .woocommerce-Price-amount { color: #ff8805; }@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.absolute-footer, html{background-color: #000000}.page-title-small + main .product-container > .row{padding-top:0;}button[name='update_cart'] { display: none; }.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>	<meta name="google-site-verification" content="VgSqD1PAromk0gIo1B67dafjlg44XiA33eY9w0iZqL0" />
    
    
    {{-- <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/style.css')}}"> --}}
</head>


<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-2 theme-flatsome woocommerce-no-js lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border mobile-submenu-slide mobile-submenu-slide-levels-1">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    {{-- <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="{{ sc_file($sc_templateFile.'/images/ie8-panel/warning_bar_0000_us.jpg')}}')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
        </a>
    </div> --}}

    <div id="wrapper">
        {{-- Block header --}}
        @section('block_header')
            @include($sc_templatePath.'.block_header')
        @show
        {{--// Block header --}}
        
        {{-- Block top --}}
        {{-- @section('block_top')
            @include($sc_templatePath.'.block_top')

            <!--Breadcrumb -->
            @section('breadcrumb')
                @include($sc_templatePath.'.common.breadcrumb')
            @show
            <!--//Breadcrumb -->

            <!--Notice -->
            @include($sc_templatePath.'.common.notice')
            <!--//Notice -->
        @show --}}
        {{-- //Block top --}}

        {{-- Block main --}}
        @section('block_main')
            <section class="section section-xxl bg-default text-md-left">
                <div class="container">
                    <div class="row row-50">
                        @section('block_main_content')

                        @if (empty($hiddenBlockLeft))
                            <!--Block left-->
                            <div class="col-lg-4 col-xl-3">
                                @section('block_main_content_left')
                                    @include($sc_templatePath.'.block_main_content_left')
                                @show
                            </div>
                            <!--//Block left-->

                            <!--Block center-->
                            <div class="col-lg-9 col-xl-9">
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

        <!-- Render include view -->
        {{-- @include($sc_templatePath.'.common.include_view') --}}
        <!--// Render include view -->


        {{-- Block bottom --}}
        {{-- @section('block_bottom')
            @include($sc_templatePath.'.block_bottom')
        @show --}}
        {{-- //Block bottom --}}

        {{-- Block footer --}}
       @section('block_footer')
            @include($sc_templatePath.'.block_footer')
        @show 
        {{-- //Block footer --}}

    </div>

    <div id="sc-loading">
        <div class="sc-overlay"><i class="fa fa-spinner fa-pulse fa-5x fa-fw "></i></div>
    </div>

    <script src="{{ sc_file($sc_templateFile.'/js/core.min.js')}}"></script>
    <script src="{{ sc_file($sc_templateFile.'/js/script.js')}}"></script>
    
    
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide mobile-sidebar-slide mobile-sidebar-levels-1" data-levels="1">
        <div class="sidebar-menu no-scrollbar ">	
            <ul class="nav nav-sidebar nav-vertical nav-uppercase nav-slide" data-tab="1">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-84"><a href="index.html" aria-current="page">Trang chủ</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-392"><a href="danh-muc/cham-soc-suc-khoe/index.html">Chăm Sóc Sức Khỏe</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-393"><a href="danh-muc/do-gia-dung/index.html">Đồ Gia Dụng</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-397"><a href="danh-muc/thuc-pham/index.html">Thực Phẩm</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-394"><a href="danh-muc/me-va-be/index.html">Mẹ và Bé</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-395"><a href="danh-muc/my-pham/index.html">Mỹ Phẩm</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-396"><a href="danh-muc/nha-cua-va-doi-song/index.html">Nhà cửa đời sống</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-401"><a href="danh-muc/san-pham-khac/index.html">Sản phẩm khác</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-400"><a href="category/tin-tuc/index.html">Tin tức</a></li>
            </ul>
        </div>
    </div>
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="ux-body-overlay"></div>    
    <div id="login-form-popup" class="lightbox-content mfp-hide">
        <div class="woocommerce-notices-wrapper"></div>
        <div class="account-container lightbox-inner">
            <div class="account-login-inner">

                <h3 class="uppercase">Đăng nhập</h3>

                    <form class="woocommerce-form woocommerce-form-login login" method="post">

                        
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" />					</p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                        </p>

                        
                        <p class="form-row">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
                            </label>
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="cf50e38207" /><input type="hidden" name="_wp_http_referer" value="/" />						<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
                        </p>
                        <p class="woocommerce-LostPassword lost_password">
                            <a href="my-account/lost-password/index.html">Quên mật khẩu?</a>
                        </p>

                        
                    </form>
                </div>

                
        </div>

    </div>
  	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<style id='global-styles-inline-css' type='text/css'>
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    </style>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/plugins/contact-form-7/includes/swv/js/index42f0.js?ver=5.6.3')}}' id='swv-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {"api":{"root":"https:\/\/sgshop.com.vn\/wp-json\/","namespace":"contact-form-7\/v1"}};
    /* ]]> */
    </script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/plugins/contact-form-7/includes/js/index42f0.js?ver=5.6.3')}}' id='contact-form-7-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min609d.js?ver=2.7.0-wc.6.9.1')}}' id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"https:\/\/sgshop.com.vn\/gio-hang\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min4d80.js?ver=6.9.1')}}' id='wc-add-to-cart-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.mina12c.js?ver=2.1.4-wc.6.9.1')}}' id='js-cookie-js'></script>
    <script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min4d80.js?ver=6.9.1')}}' id='woocommerce-js'></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_29e5dc00a1fbcd097637a9057e60a308","fragment_name":"wc_fragments_29e5dc00a1fbcd097637a9057e60a308","request_timeout":"5000"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min4d80.js?ver=6.9.1')}}' id='wc-cart-fragments-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-searchbb93.js?ver=3.15.5')}}' id='flatsome-live-search-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9')}}' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0')}}' id='wp-polyfill-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-includes/js/hoverIntent.min3e5a.js?ver=1.10.2')}}' id='hoverIntent-js'></script>
    <script type='text/javascript' id='flatsome-js-js-extra'>
    /* <![CDATA[ */
    var flatsomeVars = {"theme":{"version":"3.15.5"},"ajaxurl":"https:\/\/sgshop.com.vn\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"70","assets_url":"https:\/\/sgshop.com.vn\/wp-content\/themes\/flatsome\/assets\/js\/","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu","toggleButton":"Toggle"},"options":{"cookie_notice_version":"1","swatches_layout":false,"swatches_box_select_event":false,"swatches_box_behavior_selected":false,"swatches_box_update_urls":"1","swatches_box_reset":false,"swatches_box_reset_extent":false,"swatches_box_reset_time":300,"search_result_latency":"0"},"is_mini_cart_reveal":"1"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/js/flatsome53d9.js?ver=8d32fe071187c00e5c8eae51dcdefdd9')}}' id='flatsome-js-js'></script>
    <script type='text/javascript' src='{{ sc_file($sc_templateFile.'/wp-content/themes/flatsome/assets/js/woocommerce48f4.js?ver=7a63f7aa2c4bbf851812535d8e4e7958')}}' id='flatsome-theme-woocommerce-js-js'></script>
    <!--[if IE]>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/intersection-observer-polyfill@0.1.0/dist/IntersectionObserver.js?ver=0.1.0' id='intersection-observer-polyfill-js'></script>
    <![endif]-->
     <!-- js default for item s-cart -->
     @include($sc_templatePath.'.common.js')
     <!--//end js defaut -->
     @stack('scripts')
 


</body>
</html>
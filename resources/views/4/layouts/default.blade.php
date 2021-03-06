<!DOCTYPE html>
<head>

<!-- ##############################################
    __  _____   ________ __                       
   / / / /   | / ____/ //_/   _________ ___  _____
  / /_/ / /| |/ /   / ,<     / ___/ __ `__ \/ ___/
 / __  / ___ / /___/ /| |   / /__/ / / / / (__  ) 
/_/ /_/_/  |_\____/_/ |_|   \___/_/ /_/ /_/____/  
                                                  
############################################### -->

	<html lang="{{ $page->language }}">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>{{ $page->title }}</title>
	<meta name="keywords" content="{{ $page->keywords }}">
	<meta name="description" content="{{ $page->description }}">
	<meta name="robots" content="{{ $page->robots }}">
	<meta name="last-modified" content="{{ $page->updated_at->format('Y-m-d') }}">
	<meta property="og:title" content="{{ ($page->og_title) ? $page->og_title : $page->title  }}"/>
	<meta property="og:description" content="{{ ($page->og_description) ? $page->og_description : $page->description }}"/>
	<meta property="og:type" content="{{ ($page->og_type) ? $page->og_type : 'page' }}"/>
	<meta property="og:url" content="{{ Request::url() }}"/>
	
	@if($page->og_image->has())
	<meta property="og:image" content="{{ $page->og_image }}"/>
	<meta property="og:image:type" content="image/{{ $page->og_image->extension }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
	@endif
	@if($page->favicon->has())
	<link rel="shortcut icon" href="{{ $page->favicon }}" type="image/x-icon" />
	@endif
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1 minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="no" />
    <meta name="mobile-web-app-capable" content="no" />
</head>
<body>

	@yield('content')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/frontend.css') }}?version={{ (config('app.debug')) ? rand(1,1000) : $page->browser_cache_hash }}">
    <script src="https://use.fontawesome.com/5daec6a801.js"></script>

	@yield('script')

	@if(App::environment() === 'production')
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-102966628-1', 'auto');
			ga('send', 'pageview');
		</script>
	@else
		<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"></script>
	@endif

</body>
</html>
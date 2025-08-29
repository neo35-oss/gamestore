<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="theme-color" content="#3b9cb2"/>
<meta property="og:description" content="{{ $description ?? ''}}">
<meta name="twitter:description" content="{{ $description ?? ''}}">
<meta name="description" content="{{ $description ?? ''}}"/>
<meta name="keywords" content=""/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Game Store</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@vite(['resources/css/app.css'])
@fluxAppearance
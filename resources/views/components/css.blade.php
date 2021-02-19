<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="#" />
<meta property="og:title" content="#" />
<meta property="og:description" content="#" />
<meta property="og:image" content="social-image.png" />
<meta name="format-detection" content="telephone=no">

<!-- FAVICONS ICON -->
<link rel="icon" href="{{asset('assets/images/menuicon/oxdora.ico')}}" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/menuicon/oxdora.png')}}" />
<!-- PAGE TITLE HERE -->
<title>@yield('title')</title>
<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- WEB STYLESHEETS -->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!--load all styles -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"> <!--load all styles -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- CUSTOM STYLESHEETS -->

@stack('css')
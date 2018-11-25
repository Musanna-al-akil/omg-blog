<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'STARTUPLY') }}</title>

    <link rel="icon"  href="favicon.ico">
    <!-- Scripts -->
    <script  src="{{ asset('js/app.js') }}"></script>
    <script  src="{{ asset('js/jquery.min.js') }}"></script>
    <script  src="{{ asset('js/owl.carousel.js') }}"></script>
  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   <!--  <link href="{{ asset('css/docs.theme.min.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    
    <!--search -->
    <meta name="google-site-verification" content="gH4BqgENQA6hrlId1Bbln6tj3eAATc2YCGutS2yHAwA" />
    <meta name="msvalidate.01" content="ED4B62524CD424322202340751119EDF" />
    
    <script src='https://www.google.com/recaptcha/api.js?render=6LdYZ3oUAAAAAOVAuJEKOehH691Fg9pA2wAW8z0A'></script>
    
    <!--google ads-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5721580940069619",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
    <div id="app">
       @include('inc.navbar')

        <div class="container">
            @include('inc.messages')

        <main class="py-4">
            @yield('content')
        </main>
  
    </div>
    <div>

        @include('inc.footer')
  
  <br>
</div>
</div>
<script>
    $('#slider-area').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayHoverPause: true,

        margin: 10,
        nav:true,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    
</script>


<script type="text/javascript">
    $('#slider-areaa').owlCarousel({
        items: 1,
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                items: 1,
                loop: false,
                center: true,
                margin: 10,
                callbacks: true,
                URLhashListener: true,
                autoplayHoverPause: true,
                startPosition: 'URLHash',
                 loop:true
              });
            })
          </script>

              <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

  <script type="text/javascript" src="{{ asset('js/highlight.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app1.js') }}"></script>


<script>
grecaptcha.ready(function() {
grecaptcha.execute('6LdYZ3oUAAAAAOVAuJEKOehH691Fg9pA2wAW8z0A', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});
</script>

</body>
</html>
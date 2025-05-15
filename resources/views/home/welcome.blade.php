<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kaira</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="ecommerce,fashion,store">
    <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendor.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">
</head>

<body class="homepage">
    @include('home.header')

    @include('home.new_collection')

    @include('home.features')

    @include('home.categories')

    @include('home.new_arrival')

    @include('home.collection')

    @include('home.best_sellers')

    @include('home.video')

    @include('home.comments')
    
    @include('home.suggestions')

    @include('home.blog')

    @include('home.clients')
    
    @include('home.instagram_part')
    
    @include('home.footer')
    
    

    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
    <script src="{{ url('assets/js/plugins.js')}}"></script>
    <script src="{{ url('assets/js/SmoothScroll.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ url('assets/js/script.min.js')}}"></script>
</body>

</html>

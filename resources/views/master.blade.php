<!doctype html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <title>Laravel Template</title>
    <meta name="description" content="Laravel test site">
    <meta name="keywords" content="HTML, CSS, JS, PHP, MySQL">
    <meta name="author" content="Eugene Mamonov">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=0.5,maximum-scale=2,user-scalable=yes">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    {!! Html::script('assets/js/vendor/modernizr/modernizr.min.js', ['async']) !!}
    {!! Html::style('assets/css/vendor/bootstrap/bootstrap.min.css') !!}
    {!! Html::style('assets/css/app.css') !!}
</head>
<body>

    @yield('content')

    {!! Html::script('assets/js/vendor/jquery/jquery.min.js') !!}
    {!! Html::script('assets/js/vendor/bootstrap/bootstrap.min.js') !!}
    {!! Html::script('assets/js/app.js') !!}
</body>
</html>
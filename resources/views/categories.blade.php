
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Все Категории</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
@include('inc.header')

<div class="container">
    <div class="starter-template">
                                    <div class="panel">
            <a href="{{route('category')}}">
                <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg">
                <h2>Мобильные телефоны</h2>
            </a>
            <p>
                В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
            </p>
        </div>
            <div class="panel">
            <a href="/portable">
                <img src="http://internet-shop.tmweb.ru/storage/categories/portable.jpg">
                <h2>Портативная техника</h2>
            </a>
            <p>
                Раздел с портативной техникой.
            </p>
        </div>
            <div class="panel">
            <a href="/appliances">
                <img src="http://internet-shop.tmweb.ru/storage/categories/appliance.jpg">
                <h2>Бытовая техника</h2>
            </a>
            <p>
                Раздел с бытовой техникой
            </p>
        </div>
        </div>
</div>
</body>
</html>

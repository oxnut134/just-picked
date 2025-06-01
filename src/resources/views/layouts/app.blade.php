<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body>
    <header class="product-form_header">
               <img class="product-form_header_logo" src=" {{ asset('storage/mogitate-logo.png')}}" alt="error">
    </header>
    <main>
        @yield('content')
    </main>

</body>

</html>

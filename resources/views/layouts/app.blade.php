<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Un pinshi proyecto')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    {{--fonteawesome--}}
    {{--Tipografia--}}

    @stack('css')

</head>
<body>

    <header></header>

    @yield('content')

    <footer></footer>

</body>
</html>
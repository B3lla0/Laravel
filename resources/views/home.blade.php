<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue test</title>
</head>
<body>
    <div id="app"></div>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('/js/app.js') }}"></script>
    {{-- <script src="/resources/js/app.js"></script> --}}
    {{-- <script src="/js/app.js"></script> --}}
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body class="antialiased">
    {{$title}}
    <br/>
    Comment: {{$comment}}
</body>
</html>

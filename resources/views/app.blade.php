<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Nunito|Roboto+Condensed|Signika&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
    <title>fmt</title>
</head>
@extends('header')
<body>
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>

    </div>
</body>
@extends('footer')

</html>

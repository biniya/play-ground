<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    @if (Auth::check())
    @php
    $user_auth_data = [
    'isLoggedin' => true,
    'user' => Auth::user()
    ];
    @endphp
    @else
    @php
    $user_auth_data = [
    'isLoggedin' => false
    ];
    @endphp
    @endif
    <script>
        window.Laravel = JSON.parse(atob('{{ base64_encode(json_encode($user_auth_data)) }}'));
    </script>
    <div id="app">
        <router-view></router-view>

    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
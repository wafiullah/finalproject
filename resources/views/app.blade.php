<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('resources/assets/images/favicon/favicon.png')}}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('css/app-plugins.css') }}">
    </head>
    <body class="antialiased">
       <div id="app">
         <app/>
       </div>
       @routes
       <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>

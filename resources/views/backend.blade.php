<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Shop-vue</title>
        <link rel="stylesheet" href="/css/backend.css">
        <link rel="apple-touch-icon" sizes="76x76" href="/imgs/backend/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/imgs/backend/favicon.png">
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/backend.js"></script>
    <script src="/js/app.js"></script>
    </body>
</html>

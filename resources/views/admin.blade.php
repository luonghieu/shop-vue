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
        {{--<script>--}}
            {{--$(function() {--}}
                {{--var data, options;--}}

                {{--// headline charts--}}
                {{--data = {--}}
                    {{--labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],--}}
                    {{--series: [--}}
                        {{--[23, 29, 24, 40, 25, 24, 35],--}}
                        {{--[14, 25, 18, 34, 29, 38, 44],--}}
                    {{--]--}}
                {{--};--}}

                {{--options = {--}}
                    {{--height: 300,--}}
                    {{--showArea: true,--}}
                    {{--showLine: false,--}}
                    {{--showPoint: false,--}}
                    {{--fullWidth: true,--}}
                    {{--axisX: {--}}
                        {{--showGrid: false--}}
                    {{--},--}}
                    {{--lineSmooth: false,--}}
                {{--};--}}

                {{--new Chartist.Line('#headline-chart', data, options);--}}


                {{--// visits trend charts--}}
                {{--data = {--}}
                    {{--labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],--}}
                    {{--series: [{--}}
                        {{--name: 'series-real',--}}
                        {{--data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],--}}
                    {{--}, {--}}
                        {{--name: 'series-projection',--}}
                        {{--data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],--}}
                    {{--}]--}}
                {{--};--}}

                {{--options = {--}}
                    {{--fullWidth: true,--}}
                    {{--lineSmooth: false,--}}
                    {{--height: "270px",--}}
                    {{--low: 0,--}}
                    {{--high: 'auto',--}}
                    {{--series: {--}}
                        {{--'series-projection': {--}}
                            {{--showArea: true,--}}
                            {{--showPoint: false,--}}
                            {{--showLine: false--}}
                        {{--},--}}
                    {{--},--}}
                    {{--axisX: {--}}
                        {{--showGrid: false,--}}

                    {{--},--}}
                    {{--axisY: {--}}
                        {{--showGrid: false,--}}
                        {{--onlyInteger: true,--}}
                        {{--offset: 0,--}}
                    {{--},--}}
                    {{--chartPadding: {--}}
                        {{--left: 20,--}}
                        {{--right: 20--}}
                    {{--}--}}
                {{--};--}}

                {{--new Chartist.Line('#visits-trends-chart', data, options);--}}


                {{--// visits chart--}}
                {{--data = {--}}
                    {{--labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],--}}
                    {{--series: [--}}
                        {{--[6384, 6342, 5437, 2764, 3958, 5068, 7654]--}}
                    {{--]--}}
                {{--};--}}

                {{--options = {--}}
                    {{--height: 300,--}}
                    {{--axisX: {--}}
                        {{--showGrid: false--}}
                    {{--},--}}
                {{--};--}}

                {{--new Chartist.Bar('#visits-chart', data, options);--}}


                {{--// real-time pie chart--}}
                {{--var sysLoad = $('#system-load').easyPieChart({--}}
                    {{--size: 130,--}}
                    {{--barColor: function(percent) {--}}
                        {{--return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";--}}
                    {{--},--}}
                    {{--trackColor: 'rgba(245, 245, 245, 0.8)',--}}
                    {{--scaleColor: false,--}}
                    {{--lineWidth: 5,--}}
                    {{--lineCap: "square",--}}
                    {{--animate: 800--}}
                {{--});--}}

                {{--var updateInterval = 3000; // in milliseconds--}}

                {{--setInterval(function() {--}}
                    {{--var randomVal;--}}
                    {{--randomVal = getRandomInt(0, 100);--}}

                    {{--sysLoad.data('easyPieChart').update(randomVal);--}}
                    {{--sysLoad.find('.percent').text(randomVal);--}}
                {{--}, updateInterval);--}}

                {{--function getRandomInt(min, max) {--}}
                    {{--return Math.floor(Math.random() * (max - min + 1)) + min;--}}
                {{--}--}}

            {{--});--}}
        {{--</script>--}}
    </body>
</html>
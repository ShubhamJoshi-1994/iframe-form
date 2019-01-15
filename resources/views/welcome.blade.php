<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery-1.8.0.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

       
    </head>
    <body>
        <iframe name="myFrame" id="frame1" src="/html/frame.html"></iframe>

        <button onclick="document.getElementById('frame1').contentWindow.doCall();">click me</button>
    </body>
</html>

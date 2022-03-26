<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
        <style>
            .nav-link{
                color:brack;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <ul class="nav nav-tabs">
        <li class="nav-item"><a href="/record" class="nav-link" >記録</a></li>
        <li class="nav-item"><a href="omk/grades" class="nav-link">成績</a></li>
        <li class="nav-item"><a href="omk/timeline" class="nav-link">タイムライン</a></li>
        <li class="nav-item"><a href="omk/maketimeline" class="nav-link">タイムライン作成</a></li>
        <li class="nav-item"><a href="omk/login" class="nav-link">ログイン</a></li>
       </ul>
        </div>
    </body>
    </html>
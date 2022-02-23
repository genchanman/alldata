<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
    </head>
    <body>
        @foreach($timelines as $timeline)
        <div class='title'>{{$timeline->title}}</div>
        <div class='body'>{{$timeline->body}}</div>
        <div class='post'>{{$timeline->post}}</div>
        @endforeach
    </body>
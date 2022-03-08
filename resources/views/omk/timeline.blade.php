<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
    </head>
    <body>
        <div class="timeline">
            @foreach($timelines as $timeline)
            <div class='title'>
                <h2>{{$timeline->title}}</h2>
                </div>
            <div class='body'>{{$timeline->body}}</div>
            <div class='post'>{{$timeline->post}}</div>
             @foreach($timeline->users as $user)
          <div class="name">
        <h3 class='name'>{{$user->name}}</h3>
        @endforeach
        </div>
        @endforeach
        <a href="/maketimeline">make</a>
    </body>
    </html>
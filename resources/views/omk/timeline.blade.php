<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
    </head>
    <body>
         @foreach($users as $user)
          <div class="name">
        <h2 class='name'>{{$user->name}}</h2>
        </div>
        <div class="timeline">
            @foreach($user->timelines as $timeline)
            <div class='title'>{{$timeline->title}}</div>
            <div class='body'>{{$timeline->body}}</div>
            <div class='post'>{{$timeline->post}}</div>
            @endforeach
        </div>
        @endforeach
        <a href="/maketimeline">make</a>
    </body>
    </html>
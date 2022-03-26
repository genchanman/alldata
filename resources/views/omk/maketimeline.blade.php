<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
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
        <form action="/maketimeline" method="POST">
            @csrf
            <input type="hidden" value={{$user->id}} name="make[user_id]">
                <h1>{{$user->name}}</h1>
                </input>
                <div class="maketitle">
                    <h3>タイトル</h3>
                    <input type="text" name="make[title]" placeholder="徳田健汰"/>
                </div>
                <div class="makebody">
                        <h3>投稿</h3>
                     <textarea name="make[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
                </div>
                <div class="picture">
                    <h3>写真</h3>
                    <input type="file" name="make[post]" accept="image">
                </div>
                 <input type="submit" value="保存"/>
        </form>
    </body>
    </html>            
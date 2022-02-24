<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
    </head>
    <body>
        <form action="/maketimeline" method="POST">
            @csrf
             @foreach($users as $user)
               <label>
                    <input type="checkbox" value="{{$user->id}}" name="users_array[]"/>
                    {{$user->name}}
                </lavel>
                 </div>
                @endforeach
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
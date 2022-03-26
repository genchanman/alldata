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
        <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="学年">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
    </body>
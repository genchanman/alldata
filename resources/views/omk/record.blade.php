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
         <h1>{{$user->name}}</h1>
        <form action="/record" method="POST">
            @csrf
             <input type="hidden" value={{$user->id}} name="user_id"/>
            
                     
            <div class="container">
                <div class="row">
            <div class="atbat col-md-3">
                <h3>打席</h3>
                <input type="number" name="record[atbat]" plaseholder="0" />
            </div>
             <div class="storoke col-md-3">
                <h3>打数</h3>
                <input type="number" name="record[storoke]" plaseholder="0"/>
                </div>
                <div class="error col-md-3">
                <h3>エラー</h3>
                <input type="number" name="record[error]" plaseholder="0"/>
                </div>
                <div class="run col-md-3">
                <h3>失点</h3>
                <input type="number" name="record[run]" plaseholder="0"/>
                </div>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                <div class="givedeadball col-md-3">
                <h3>与四死球</h3>
                <input type="number" name="record[givedeadball]" plaseholder="0"/>
                </div>
                <div class="hit col-md-3">
                <h3>安打数</h3>
                <input type="number" name="record[hit]" plaseholder="0"/>
                </div>
                <div class="strikeout col-md-3">
                <h3>三振</h3>
                <input type="number" name="record[strikeout]" plaseholder="0"/>
                </div>
                <div class="outssllow col-md-3">
                <h3>捕殺</h3>
                <input type="number" name="record[outssllow]" plaseholder="0"/>
                </div>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                <div class="remosepoint col-md-3">
                <h3>自責点</h3>
                <input type="number" name="record[remosepoint]" plaseholder="0"/>
                </div>
                <div class="deadball col-md-3">
                <h3>四死球</h3>
                <input type="number" name="record[deadball]" plaseholder="0"/>
                </div>
                <div class="doppotunity col-md-3">
                <h3>守備機会</h3>
                <input type="number" name="record[doppotunity]" plaseholder="0"/>
                </div>
                <div class="poppotuinity col-md-3">
                <h3>投球回</h3>
                <input type="number" name="record[poppotunity]" plaseholder="0"/>
                </div>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                <div class="gstrikeout col-md-3">
                <h3>奪三振</h3>
                <input type="number" name="record[gstrikeout]" plaseholder="0"/>
                </div>
                <div class="twobase col-md-3">
                <h3>二塁打</h3>
                <input type="number" name="record[twobase]" plaseholder="0"/>
                </div>
                <div class="givehit col-md-3">
                <h3>被安打</h3>
                <input type="number" name="record[givehit]" plaseholder="0"/>
                </div>

                <div class="threebase col-md-3">
                    <h3>三塁打</h3>
                <input type="number" name="record[threebase]" plaseholder="0"/>    
                </div>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                <div class="hr col-md-4">
                    <h3>HR</h3>
                    <input type="number" name="record[hr]" plaseholder="0"/>
                    </div>
                <div class="slugging col-md-4">
                    <h3>長打</h3>
                    <input type="number" name="record[slugging]" plaseholder="0"/>
                </div>
                <div class="userselect col-4">
             
                <input type="submit" value="保存" />
                </div>
                </div>
                </div>
                </form>
    </body>
   </html>
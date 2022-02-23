<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
    </head>
    @foreach($users as $user)
        <h2 class='name'>{{$user->name}}</h2>
    @endforeach    
    <body>
        <div class="totalrecord">
            <table border="1">
            <tr>
            <th>打席</th>
            <th>打数</th>
            <th>安打数</th>
            <th>二塁打</th>
            <th>三塁打</th>
            <th>HR</th>
            <th>四死球</th>
            <th>三振</th>
            <th>守備機会</th>
            <th>エラー</th>
            <th>捕殺</th>
            <th>投球回</th>
            <th>失点</th>
            <th>自責点</th>
            <th>被安打数</th>
            <th>奪三振</th>
            <th>与四死球</th>
            </tr>
        @foreach($user->datas as $datas)
        <tr>
        <td class="atbat">{{$datas->atbat}}</td>
        <td class="storoke">{{$datas->storoke}}</td>
        <td class="hit">{{$datas->hit}}</td>
        <td class="twobase">{{$datas->twobase}}</td>
        <td class="threebase">{{$datas->threebase}}</td>
        <td class="hr">{{$datas->hr}}</td>
        <td class="deadball">{{$datas->deaball}}</td>
        <td class="strikeout">{{$datas->strikeout}}</td>
        <td class="doppotunity">{{$datas->doppotunity}}</td>
        <td class="error">{{$datas->error}}</td>
        <td class="outssllow">{{$datas->outssllow}}</td>
        <td class="poppotunity">{{$datas->poppotunity}}</td>
        <td class="run">{{$datas->run}}</td>
        <td class="remosepoint">{{$datas->remosepoint}}</td>
        <td class="givehit">{{$datas->givehit}}</td>
        <td class="gstrikeout">{{$datas->gstrikeout}}</td>
        <td class="givedeadball">{{$datas->givedeadball}}</td>
        </tr>
        @endforeach
        </table>
        </div>
        
        
    </body>
    </html>
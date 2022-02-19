<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
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
        @foreach($users as $user)
        <tr>
        <td class="atbat">{{$user->datas as $datas}}</td>
        <td class="storoke">{{$user->datas as $datas}}</td>
        <td class="hit">{{$user->datas as $datas}}</td>
        <td class="twobase">{{$user->datas as $datas}}</td>
        <td class="threebase">{{$user->datas as $datas}}</td>
        <td class="hr">{{$user->datas as $datas}}</td>
        <td class="deadball">{{$user->datas as $datas}}</td>
        <td class="strikeout">{{$user->datas as $datas}}</td>
        <td class="doppotunity">{{$user->datas as $datas}}</td>
        <td class="error">{{$user->datas as $datas}}</td>
        <td class="outssllow">{{$user->datas as $datas}}</td>
        <td class="poppotunity">{{$user->datas as $datas}}</td>
        <td class="run">{{$user->datas as $datas}}</td>
        <td class="remosepoint">{{$user->datas as $datas}}</td>
        <td class="givehit">{{$user->datas as $datas}}</td>
        <td class="gstrikeout">{{$user->datas as $datas}}</td>
        <td class="givedeadball">{{$user->datas as $datas}}</td>
        </tr>
        @endforeach
        </table>
        </div>
        
        
    </body>
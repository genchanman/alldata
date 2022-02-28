<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
    </head>
    <body>
    @foreach($users as $user)
        <h2 class='name'>{{$user->name}}</h2>
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
        <td class="deadball">{{$datas->deadball}}</td>
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
     <h2>合計</h2>
     <table border=1>
          <tr>
            <th>打席</th>
            <th>打数</th>
            <th>安打数</th>
            <th>打率</th>
            <th>二塁打</th>
            <th>三塁打</th>
            <th>HR</th>
            <th>長打率</th>
            <th>四死球</th>
            <th>三振</th>
            <th>守備機会</th>
            <th>エラー</th>
            <th>捕殺</th>
            <th>投球回</th>
            <th>失点</th>
            <th>自責点</th>
            <th>防御率</th>
            <th>被安打数</th>
            <th>奪三振</th>
            <th>与四死球</th>
            </tr>
    <tr>
        <td class="atbat">{{$user->datas->sum('atbat')}}</td>
        <td class="storoke">{{$user->datas->sum('storoke')}}</td>
        <td class="hit">{{$user->datas->sum('hit')}}</td>
        <td class="drate">{{$user->datas->sum('hit')/$user->datas->sum('storoke')}}</td>
        <td class="twobase">{{$user->datas->sum('twobase')}}</td>
        <td class="threebase">{{$user->datas->sum('threebase')}}</td>
        <td class="hr">{{$user->datas->sum('hr')}}</td>
        <td class="srate">{{$user->datas->sum('twobase', 'threebase', 'hr')/$user->datas->sum('hit')}}</td>
        <td class="deadball">{{$user->datas->sum('deadball')}}</td>
        <td class="strikeout">{{$user->datas->sum('strikeout')}}</td>
        <td class="doppotunity">{{$user->datas->sum('doppotunity')}}</td>
        <td class="error">{{$user->datas->sum('error')}}</td>
        <td class="outssllow">{{$user->datas->sum('outssllow')}}</td>
        <td class="poppotunity">{{$user->datas->sum('poppotunity')}}</td>
        <td class="run">{{$user->datas->sum('run')}}</td>
        <td class="remosepoint">{{$user->datas->sum('remosepoint')}}</td>
        <td class="drate">{{$user->datas->sum('remosepoint')/$user->datas->sum('poppotunity')*9}}</td>
        <td class="givehit">{{$user->datas->sum('givehit')}}</td>
        <td class="gstrikeout">{{$user->datas->sum('gstrikeout')}}</td>
        <td class="givedeadball">{{$user->datas->sum('givedeadball')}}</td>
    </tr>
        </table>
        </div>
        @endforeach
    </body>
    </html>
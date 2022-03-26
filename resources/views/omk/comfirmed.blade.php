<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OMK</title>
    </head>
    <body>
        <form action="/comfirmed" method="POST">
            @csrf
        <table>
            <tr>打率</tr>
            <tr>長打率</tr>
            <tr>出塁率</tr>
            <tr>防御率</tr>
            <td class='baverage' name="call['baverage']">{{$users->datas->sum('hit')/$users->datas->sum('storoke')}}</td>
            <td class='srate' name="call['srate']">{{$users->datas->sum('slugging')/$users->datas->sum('hit')}}</td>
            <td class='startingaverage' name="call['startingaverage]">{{($users->datas->sum('hit')+$users->datas->sum('deadball'))/($users->datas->sum('storoke')+$users->datas->sum('deadball'))}}</td>
            <td class="drate" name="call['drate']">{{($users->datas->sum('remosepoint')*27)/($users->datas->sum('poppotuinity')*3)}}</td>
        </table>  
         <input type="submit" value="確認"/>
        
    </body>
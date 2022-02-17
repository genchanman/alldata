<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="/" method="POST">
            @csrf
            <div class="atbat">
                <h3>打席</h3>
                <input type="number" name="record[atbat]" plaseholder="0"/>
            </div>
             <div class="storoke">
                <h3>打数</h3>
                <input type="number" name="record[storoke]" plaseholder="0"/>
                </div>
                <div class="error">
                <h3>エラー</h3>
                <input type="number" name="record[error]" plaseholder="0"/>
                </div>
                <div class="run">
                <h3>失点</h3>
                <input type="number" name="record[run]" plaseholder="0"/>
                </div>
                <div class="givedeadball">
                <h3>与四死球</h3>
                <input type="number" name="record[givedeadball]" plaseholder="0"/>
                </div>
                <div class="hit">
                <h3>安打数</h3>
                <input type="number" name="record[hit]" plaseholder="0"/>
                </div>
                <div class="strikeout">
                <h3>三振</h3>
                <input type="number" name="record[strikeout]" plaseholder="0"/>
                </div>
                <div class="outssllow">
                <h3>捕殺</h3>
                <input type="number" name="record[outssllow]" plaseholder="0"/>
                </div>
                <div class="remosepoint">
                <h3>自責点</h3>
                <input type="number" name="record[remosepoint]" plaseholder="0"/>
                </div>
                <div class="deadball">
                <h3>四死球</h3>
                <input type="number" name="record[deadball]" plaseholder="0"/>
                </div>
                <div class="doppotunity">
                <h3>守備機会</h3>
                <input type="number" name="record[doppotunity]" plaseholder="0"/>
                </div>
                <div class="poppotuinity">
                <h3>投球回</h3>
                <input type="number" name="record[poppotunity]" plaseholder="0"/>
                </div>
                <div class="gstrikeout">
                <h3>奪三振</h3>
                <input type="number" name="record[gstrikeout]" plaseholder="0"/>
                </div>
                <div class="twobase">
                <h3>二塁打</h3>
                <input type="number" name="record[twobase]" plaseholder="0"/>
                </div>
                <div class="givehit">
                <h3>被安打</h3>
                <input type="number" name="record[givehit]" plaseholder="0"/>
                </div>

                <div class="threebase">
                    <h3>三塁打</h3>
                <input type="number" name="record[threebase]" plaseholder="0"/>    
                </div>
                <div class="hr">
                    <h3>HR</h3>
                    <input type="number" name="record[hr]" plaseholder="0"/>
                </div>
                <input type="submit" value="保存"/>
                </form>
                
    </body>
   </html>
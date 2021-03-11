<?php
// タイムゾーン
date_default_timezone_set("Asia/Tokyo");
    $d1=new DateTime("2021/2/1 11:59:00");
    $d2=new DateTime();
    $diff=$d1->diff($d2);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.3.2/dist/confetti.browser.min.js"></script>
    <title>practice</title>
    <!-- Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
            font-family: "Times New Roman", serif;
            padding: 30px;
        }

        #timeArea {
            font-size: 3em;
            background-color: #000;
            color: #fff;
            padding: 20px;
            margin-bottom: 10px;
        }

        .btn {
            width: 100%;
        }


    </style>
</head>
<body>
    <?php var_dump() ?>
    <!-- 時間表示エリア -->
    <div id="timeArea">
        <span id="time">00:00:00</span>
    </div>
    <div id="dispArea">
        <span id="disp">こんにちは</span>
    </div>


    <!-- JavaScript -->
    <script>
        var now;
        var start;
        var timer = "00:00:00";
        var timer_id;
        var milliSeconds;
        var seconds;
        var minutes;
        var hours;

        // 繰り返し処理
        var birthday = new Date("2021/2/1 11:59:00");
        document.getElementById("dispArea").style.display = "none";

        // ゼロを付け加えて2桁にする処理
        var addZero = function (value) {
            if (value < 10) {
                value = "0" + value;
            }
            return value;
        };

        function dateCounter() {
        var timer = setInterval(function() {
            // インスタンス化
            now = new Date();
            var ms = (birthday - now);

            var h = Math.floor(ms/(3600 * 1000));
            var _h = h % 24;
            //分を取得
            var m = Math.floor((ms - h * 3600000) / 60000);
            //秒を取得
            var s = Math.round((ms - h * 3600000 - m * 60000) / 1000);

            document.getElementById("time").innerHTML = addZero(_h) + ":" + addZero(m) + ":" + addZero(s);
            // document.getElementById("time").innerHTML = addZero(_h) + ":" + addZero(m) + ":" + addZero(s);
            if ((ms < 0)) {
                clearInterval(timer);
                document.getElementById("timeArea").style.display = "none";
                document.getElementById("dispArea").style.display = "block";
                confetti();
                setInterval(confetti, 1500);
            }
        }, 500);
        }
        dateCounter();

    </script>
    <!-- Bootstrap4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Stopwatch</title>
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <style>
        body {
            background-color: paleturquoise;
        }
        .container {
            margin-top: 100px;
            text-align: center;
        }
        #timerLabel {
            margin: 100px 0px;
            color: white;
        }
        .myButton {
            width: 180px;
            height: 50px;
            border: none;
            border-radius: 6px;
            background-color: white;
            font-size: 16px;
        }
        .title, .myButton {
            font-family: 'Berkshire Swash', cursive;
            color: midnightblue;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="title">StopWatch</h1>
    <h1 id="timerLabel">00:00:00</h1>
    <input type="button" class="myButton" onclick="start()" value="START" id="startBtn">
    <input type="button" class="myButton" onclick="stop()" value="STOP">
    <input type="button" class="myButton" onclick="reset()" value="RESET">
</div>
<script>
    var status = 0; // 0:stop 1:running
    var time = 0;
    var startBtn = document.getElementById("startBtn");
    var timerLabel = document.getElementById('timerLabel');
    function start(){
        status = 1;
        startBtn.disabled = true;
        timer();
    }
    function stop(){
        status = 0;
        startBtn.disabled = false;
    }
    function reset(){
        status = 0;
        time = 0;
        timerLabel.innerHTML = '00:00:00';
        startBtn.disabled = false;
    }
    function timer(){
        if (status == 1) {
            setTimeout(function() {
                time++;
                var min = Math.floor(time/100/60);
                var sec = Math.floor(time/100);
                var mSec = time % 100;
                if (min < 10) min = "0" + min;
                if (sec >= 60) sec = sec % 60;
                if (sec < 10) sec = "0" + sec;
                if (mSec < 10) mSec = "0" + mSec;
                timerLabel.innerHTML = min + ":" + sec + ":" + mSec;
                timer();
            }, 10);
        }
    }
    document.onkeydown = function(event) {
        if (event) {
            if (event.keyCode == 32 || event.which == 32) {
                if(status == 1) {
                    stop();
                } else if (status == 0) {
                    start();
                }
            }
        }
    };
</script>
</body>
</html>
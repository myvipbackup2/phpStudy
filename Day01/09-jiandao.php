<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/8 0008
 * Time: 21:24
 */

//猜拳

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>猜拳游戏</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #container {
            margin: 100px auto;
            width: 400px;
            height: 400px;
            /*background-color: red;*/
            border: 1px solid;
        }

        #img {
            width: 204px;
            height: 249px;
            margin: 20px auto;
            background: url("img/jiandao.jpg") no-repeat 30px 0;
        }

        #ncq {
            width: 100%;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 20px auto;
        }

        h4 {
            text-align: center;
            display: block;
            color: #f00;
        }
    </style>
</head>
<body>
<div id="container">
    <div id="img"></div>
    <div id="ncq">
        <span>你出拳：</span>
        <select name="sel" id="sel">
            <option>剪刀</option>
            <option>石头</option>
            <option>布</option>
        </select>
        <input type="submit" name="sub" id="sub" value="提交">
    </div>
    <h4 id="h4">
        请你出拳
    </h4>
</div>

<script>
    window.onload = function () {

        (function () {

            var oBtn = document.getElementById('sub');
            var oImg = document.getElementById('img');
            var oH4 = document.getElementById('h4');
            var arr = [30, -205, -430];  //剪刀石头布背景X轴坐标
            var timer = null;

            timer = setInterval(function () {
                arr.sort(function () {
                    return Math.random() - 0.5;
                });
                oImg.style.backgroundPosition = arr[0] + 'px' + ' 0'
            }, 50);

            oBtn.onclick = function () {

                clearInterval(timer);
                var val = document.getElementById('sel').value; //获取选择的
//                    console.log(val);
//                switch (arr[0]) {
//                    case 30  //剪刀
//                        if (val == '石头') {
//                            oH4.innerHTML = '你赢了！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }else if (val == '剪刀'){
//                            oH4.innerHTML = '平局！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }else {
//                            oH4.innerHTML = '你输了！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }
//                        break;
//                    case -205
//                        if (val == '石头') {
//                            oH4.innerHTML = '平局！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }else if (val == '剪刀'){
//                            oH4.innerHTML = '你输了！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }else {
//                            oH4.innerHTML = '你赢了！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }
//                        break;
//                    case -430
//                        if (val == '剪刀') {
//                            oH4.innerHTML = '你赢了！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }else if (val == '布'){
//                            oH4.innerHTML = '平局！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }else {
//                            oH4.innerHTML = '你输了！你出的是：'+val+',电脑出的是：'+arr[0];
//                        }
//                        break;
//                }
            }


        })();

    }
</script>
</body>
</html>

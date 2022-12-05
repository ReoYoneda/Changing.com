<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../css/style.css"/>

    <title>Document</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-3">
                <div id = "nav">
                    <ul class = sub><div class = sub_design>
                        <a href="http://localhost/web/CC/src/3_Mypage/mypage.php">
                            マイページ<br>
                        </a>
                        <a href="http://localhost/web/CC/src/4_Post/post_1.php">
                            投稿する<br>
                        </a>
                        <a href="http://localhost/web/CC/src/5_Human/human.php">
                            投稿を覗く<br>
                        </a>
                        <a href="http://localhost/web/CC/src/6_Point/point_select.php">
                            チャンポ交換<br>
                        </a>
                        <a href="../logout.php">
                            ログアウト<br>
                        </a>
                            <br><br><br><br>
                        </div>
                        </ul>
                    </div>
                </div>
                <div class = "col-9" >
                <br><br>
                <div style = "margin-left:150px">
               <h2>以下の内容でチャンポを交換しますか？</h2>
</div>
               <br><br>
                <div class = "pointbox2" style = "width:600px; margin-left:150px;"> 
                <div class = "field">
                <h3 style =  "margin:40px">保有チャンポ　　</h3>
                <h3 style = "margin-top:40px; margin-left:90px">500pt</h3>
            </div>
            <div class = "field">
                <h3 style = "margin-left:40px">交換するチャンポ</h3>
                <h3 style = "margin-left:130px">500pt</h3>
            </div>
            <hr class="hr1">
                <div class = "field">
                <h3 style = "margin:40px">交換後の保有チャンポ</h3>
                <h3 style = "margin-top:40px; margin-left:60px">0pt</h3>
            </div>
        </div>
        <br><br>
        <div class = "field">
        <div class = "button" style = "margin-left:150px; width:300px">
                <a href="point_select.php">選択画面へ戻る</a>
            </div>
            <div class = "button" style = "margin-left:30px; width:300px">
                <a href="point_ok.php">チャンポを交換する</a>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
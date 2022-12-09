<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, content="height=device-height,initial-scale=1.0">
    <title>投稿情報確認画面</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css"/>
	
</head>
<body>
<?php 
require '../DAO.php';

$dao = new DAO();
session_start();

$id = $dao -> id($_POST[$_POST["nmCategoryEntirety"]]);

$_SESSION['user'] = ['human' => $_POST["human"],
                     'kaizen' => $_POST["kaizen"],
                     'level' => $_POST["level"],
                     'category' => $id[0]["category_id"],
                     'subcategory' => $id[0]["category_sub_id"],
                     'kigyou' =>$_POST["kigyoumei"],
                     'tenpo' => $_POST["tenpo"],
                     'shohin' => $_POST["shohin"]];
?>
<div class = "container-fluid">
<div class = "row">
            <div class = "col-3">
                <div id = "nav">
                    <ul class = sub>
                    <div class = sub_design>
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
                        </ul>
                    </div>
                </div>

        <div  class = "col-9">
        <form action="?" method="post">

<div style="margin-left:20%;margin-top:5%">
	<h4 style="margin-top:5%">以下の内容で不満を投稿しますか？</h4>
</div>
<div style="margin-left:15%;margin-top:2%">
<?php
	echo '不満の内容<br>'.$_SESSION['user']['human'].
         '<br>
	     改善点<br>';
        if(TRUE == isset($_SESSION['user']['kaizen'])){
         echo $_POST["kaizen"].'<br>';
        }else{
         echo '未入力<br>';
        }
    echo '不満レベル<br>'.
	     $_POST["level"].'<br>
         カテゴリ<br>'.
	     $_POST["nmCategoryEntirety"].'<br>'.
         'サブカテゴリ<br>'.
         $_POST[$_POST["nmCategoryEntirety"]].'
         <br>
	     企業名<br>';
         if(TRUE == isset($_POST["kigyoumei"])){
            echo $_POST["kigyoumei"].'<br>';
           }else{
            echo '未入力<br>';
        }
	echo '店舗・支店名<br>';
        if(TRUE == isset($_POST["tenpo"])){
            echo $_POST["tenpo"].'<br>';
        }else{
            echo '未入力<br>';
        }
	echo '商品・サービス名<br>';
        if(TRUE == isset($_POST["shohin"])){
            echo $_POST["shohin"].'<br>';
        }else{
            echo '未入力<br>';
        }
         
    ?>
</div>
<div style="display:flex;margin-top:3%;">


    <div style="margin-left:15%;">

    <input type='submit'value="修正する" formaction="post_1.php"  onmouseover="this.style.background=''" onmouseout="this.style.background=''">
    </div>

    <div style="margin-left:3%;">
    <input type='submit' value="登録する" name="check" formaction="post_3.php"  onmouseover="this.style.background=''" onmouseout="this.style.background=''">
    </div>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
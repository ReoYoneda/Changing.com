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
                <div style="text-align: center" class = "col-9" >
                <br><br><br><br><br><br>
                <div class="container_fluid">
                    <div class="row">
                        <div class = "col-3">
                            <h1 class = "my_su">100</h1>
                            <h2>総投稿数</h2>
                        </div>
                        <div class = "col-3">
                        <h1 class = "my_su">100</h1>
                            <h2>保有チャンポ</h2>
                        </div>
                        <div class = "col-3">
                        <h1 class = "my_su">100</h1>
                            <h2>総わかる数</h2>
                        </div>
                    </div>
                       
                    <div class = "row">
                        <div class="tabbox">
                            <br><br><br><br><br><br><br>


                                    <input type="radio" name="tabset" id="tabcheck1" checked><label for="tabcheck1" class="tab">投稿履歴</label>
                                   <input type="radio" name="tabset" id="tabcheck2"><label for="tabcheck2" class="tab">チャンポ履歴</label>
                                   <div class="tabcontent" id="tabcontent1">
                
                                   <div class = "box"> 
                                    <?php
                                    echo '<h2 style = "text-align:left">カテゴリ名</h2>
                                    <h3 style = "text-align:left">サブカテゴリ名</h2><br>
                                    <h4 style = "text-align:left">さんぷる</h2>
                                    <br>
                                    <div class = "field">';
                                    ?>
                                    </div>  
                                       
                                   
                                    <div class="tabcontent" id="tabcontent2">
                                    <?php
                                       for($i=0;$i < 5; $i++){
                                           echo '<div class = "field">';
                                           echo '<h2>';
                                           echo '投稿';
                                           echo date("Y/m/d");
                                           echo  '30cp';
                                           echo '</h2></div>';
                                    }
                                        ?>

                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="./css/style.css"/>

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
                        
                            マイページ<br>
                            投稿する<br>
                            投稿を覗く<br>
                            チャンポ交換<br>
                            ログアウト<br>
                            <br><br><br><br>
                        </div>
                        </ul>
                    </div>
                </div>
                <div class = "col-9">
                <br><br>

                <div class = "pointbox1">
                    <div class = "container">
                    <div class = "row"> 
                        <p><font size="5">現在の保有チャンポ　　</font></p><h1>　　500</h1><h3>pt</h3>
                    </div>
                </div>
            </div>
            <br>
            <p>現在の保有チャンポをCCカードに交換します。<br>
               交換したい金額を選択してください</p>

               <div class = "pointbox2">
                <div class ="container">
                <?php
               for($i=1000;$i < 3000;$i=$i+500){
            echo '
                    <div class = "field">
                    <p style="position:relative;  left:50px"><font size= "6">CCカード'. $i .'円分</p>
                    <div class = "button">
                        <a href="cleate_account.php" style="width:300px; height:70px; position:relative; top:30px; left:200px">交換する</a>
                        </div>
                    </div>
                    <p style="position:relative;  left:40px"><font size= "5">　必須チャンポ　'.$i.'</p>
                    
                    <hr class="hr1">';
               }
               ?>
         </div>
    </div>
</div>               

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
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
    <?php
    require '../DAO.php';
    $dao = new DAO();
    session_start();
    ?>
    <form action = "point_check.php" method = "post">
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
                <div class = "col-9">
                <br><br>

                <div class = "pointbox1">
                    <div class = "container">
                    <div class = "row"> 
                        <p><font size="5">現在の保有チャンポ　　</font></p><h1><?php echo $_SESSION['point']; ?></h1><h3>pt</h3>
                    </div>
                </div>
            </div>
            <br>
            <p>現在の保有チャンポをCCカードに交換します。<br>
               交換したい金額を選択してください</p>

               <div class = "pointbox2">
                <div class ="container">
                <?php
                $trade  = $dao ->  trade();


               foreach($trade as $row){
                   echo '
                    <div class = "field">
                    <p style="position:relative;  left:50px"><font size= "6">' . $row["gift_name"] . $row["required_chanpo"] .'円分</p>
                    <div class = "button">
                        <button type = "submit" name="botton" value = "' . $row["gift_id"] . '" style="width:300px; height:70px; position:relative; top:30px; left:200px">交換する</button>
                        </a>
                        </div>
                    </div>
                    <p style="position:relative;  left:40px"><font size= "5">　必須チャンポ　'.$row["required_chanpo"].'pt</p>
                    
                    <hr class="hr1">';
               }              
               ?>
               
         </div>
    </div>
</div>               
            </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
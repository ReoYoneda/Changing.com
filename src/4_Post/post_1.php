
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, content="height=device-height,initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/post_1.css">
    <link rel="stylesheet" href="../css/style.css"/>
    <style>
    .CategoryGoods {
      display: none;
    }
  </style>
</head>
<script>
  window.onload = Display_CategoryGoods;
  function Display_CategoryGoods() {
    let wCategoryEntirety = document.getElementsByName("nmCategoryEntirety")[0];
    let wGoodsEntirety = document.getElementsByName("nmGoodsEntirety")[0];
    let iSelectedIndex = wCategoryEntirety.selectedIndex;
    let sSelectedValue = wCategoryEntirety.options[iSelectedIndex].value;
    console.log("sSelectedValue: " + sSelectedValue);
    let a1wCategoryGoods = wGoodsEntirety.querySelectorAll(".CategoryGoods");
    for (let item of a1wCategoryGoods) {
      item.style.display = "none";
    }
    let wCategoryGoods_Select = wGoodsEntirety.querySelector("[name=" + sSelectedValue + "]");
    console.log("wCategoryGoods.name: " + wCategoryGoods_Select.name);
    let wCategoryGoods_Parent = wCategoryGoods_Select.parentNode;
    console.log(wCategoryGoods_Parent);
    wCategoryGoods_Parent.style.display = "inline-block";
  }
</script>
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
                <div  class = "col-9" >
<?php
echo "<h3>（ニックネーム）</h3>";
?>
<form action="post_2.php" method="post">

<div class = "box" style = "background-color: rgb(231, 231, 231);">
<h4>あなたの不満を教えてください。最低15字から投稿できます</h4>
	<textarea name="human" style="display:inline-block; width:70%;higth:300px; height:200px"></textarea>

<h4>その不満について改善案があれば教えてください（任意）</h4>
	<textarea type="text" name="kaizen"style="display:inline-block; width:70%;higth:300px; height:120px"></textarea>
<h4>
その不満の不満レベルを選択してください
</h4>
<div class = "field">
<?php 
for($i=1;$i<=5;$i++){
echo '<div class="form-check is-invalid">
    <label class="form-check-label" for="radio">'.$i.'</label>
    <input class="form-check-input is-invalid" type="radio" name="human" id="radio" value="'.$i.'">
</div>';
}
?>
</div>

<h5 class="invalid-feedback">
あなたの不満と不満レベルを教えてください
</h5>


<br>
<h4>カテゴリー選択</h4>

<select name="nmCategoryEntirety" onchange="Display_CategoryGoods()">;
<option value="">カテゴリ、サブカテゴリを選択してください</option>
<?php 
require '../DAO.php';
$dao = new DAO();
$category = $dao->post1();
foreach($category as $row){
    echo '<option value="'.$row["category_name"].'">'.$row["category_name"].'</option>';
}
?>
</select>

<h4>サブカテゴリー選択</h4>



<div name="nmGoodsEntirety">
        <span class="CategoryGoods">
            <?php
            require '../DAO.php';
            $dao = new DAO();
            $category = $dao->post1();
            
            foreach($category as $main){         
            echo '<select name="'. $main["category_name"] .'">';
            $dao2 = new DAO();
            $sub_category = $dao2 -> post2($row["category_id"]);
            foreach($sub_category as $sub){

            echo '<option value="'.$sub["category_sub_name"].'">'.$sub["category_sub_name"].'</option>';
            }
        }
        ?>
        </select>
        </span>
    </div>
</select>'

<h4>企業名(任意）</h4>
	<input type="text" name="kigyoumei">

<h4>店舗・支店名（任意）</h4>
	<input type="text" name="tenpo">

<h4>商品名・サービス名（任意）</h4>
	<input type="text" name="syouhin">
    <br><br>
<input type="submit" value="戻る">
<input type="submit" value="次へ→">
</div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
</div>

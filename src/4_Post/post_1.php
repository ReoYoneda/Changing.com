
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, content="height=device-height,initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="post.css">
    
</head>
<?php
echo "<h2>（ニックネーム）</h2>";
?>
<body>
<p>あなたの不満を教えてください。最低15字から投稿できます</p>
<form action="post_check.php" method="post">
	<input type="text" name="human">
</form>
<p>その不満について改善案があれば教えてください（任意）</p>
<form action="post_check.php" method="post">
	<input type="text" name="kaizen">
</form>
<p>
その不満の不満レベルを選択してください
</p>
<div class="form-check is-invalid">
    <input class="form-check-input is-invalid" type="radio" name="radio" id="radio">
    <label class="form-check-label" for="radio">1</label>
</div>
<div class="form-check is-invalid">
    <input class="form-check-input is-invalid" type="radio" name="radio" id="radio">
    <label class="form-check-label" for="radio">2</label>  
</div>
<div class="form-check is-invalid">
    <input class="form-check-input is-invalid" type="radio" name="radio" id="radio">
    <label class="form-check-label" for="radio">3</label>
</div>
<div class="form-check is-invalid">
    <input class="form-check-input is-invalid" type="radio" name="radio" id="radio">
    <label class="form-check-label" for="radio">4</label>
</div>
<div class="form-check is-invalid">
    <input class="form-check-input is-invalid" type="radio" name="radio" id="radio">
    <label class="form-check-label" for="radio">5</label>
</div>
<div class="invalid-feedback">
あなたの不満と不満レベルを教えてください
</div>



<p>カテゴリー選択</p>
<select name="kategori">
<option value="">カテゴリ、サブカテゴリを選択してください</option>
    <option value="apple">りんご</option>
    <option value="orange">みかん</option>
    <option value="banana">バナナ</option>
    <option value="grapes">ぶどう</option>
    <option value="melon">メロン</option>
</select>

<p>サブカテゴリー選択</p>
<select name="kategori">
<option value="">カテゴリ、サブカテゴリを選択してください</option>
    <option value="apple">りんご</option>
    <option value="orange">みかん</option>
    <option value="banana">バナナ</option>
    <option value="grapes">ぶどう</option>
    <option value="melon">メロン</option>
</select>

<p>企業名(任意）</p>
<form action="post_check.php" method="post">
	<input type="text" name="kigyoumei">
</form>

<p>店舗・支店名（任意）</p>
<form action="post_check.php" method="post">
	<input type="text" name="tenpo">
</form>

<p>商品名・サービス名（任意）</p>
<form action="post_check.php" method="post">
	<input type="text" name="syouhin">
</form>
<input type="submit" value="戻る">
<input type="submit" value="次へ→">
</body>
</html>

<?php

?>
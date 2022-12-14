    <q></q><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equir="content-type" charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/acnt_1.css">
<title>新規登録画面</title>
</head>

<body>
<div class="blocktext">
<h2>新規登録画面</h2>
<form action="acnt_3(usually).php" method="post">
メールアドレス:<input type="text" name="mail"placeholder="メールアドレスを入力してください" style = "width:240px;">
<br><br>
パスワード:　　<input type="password" name="pass"placeholder="パスワードを入力してください" style = "width:240px;">
<br><br>
ニックネーム:　<input type="text" name="name"placeholder="パスワードを入力してください" style = "width:240px;">
<br><br>
生年月日　　　<select name="year">

<?php
$Date = date("Y");
for($i=1900;$i<$Date-3;$i++){
    if($i == 1900){
    echo '<option value="">-</option>';
    }
    if($i == 2000){
       echo '<option value="2000" selected>2000</option>';
       continue;
    }
    echo '<option value = '."$i".'>'.$i.'</option>';
}
?>
</select>年


<select name="month">
<option value="">-</option>

<?php
for($j=1;$j<=12;$j++){
    echo '<option value="'.$j.'">'.$j.'</option>';
}
?>
</select>月


<select name="day">
<option value="">-</option>

<?php
for($k=1;$k<=31;$k++){
    echo '<option value="'.$k.'">'.$k.'</option>';
}
?>

</select>日<br><br>
性別　　　　　<input type= "radio"name="meal" value="男性">男性
<input type= "radio"name="meal" value="女性">女性
<input type= "radio"name="meal" value="無回答">無回答<br><br>
<div class="box">
    職業　　　　　<select name="job">
    <option value="会社員">会社員</option>
    <option value="学生">学生</option>
    <option value="主婦">主婦 </option>
    <option value="公務員">公務員</option>
</select>
</div><br><br>
<div class="invalid-feedback">
未入力の情報がある場合 「登録情報を入力してください」
</div><br>
<input type = "submit" value="確認画面へ進む">
</form>
<h2>acnt_2のファイルを追加してください</h2><br>
<h3>ファイルが存在しないため<br>acnt_3のusuallyタイプへ転送します</h3><br>
<h3>このフォルダにはrobotタイプ、blueタイプが存在しています</h3>
</p>
</div>
</body>
</html>
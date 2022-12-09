<?php
session_start();

require '../DAO.php';
$dao = new DAO();
$searchArray = $dao->loginUser($_POST['mail'],$_POST['pass']);

foreach($searchArray as $row){
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['id'] = $row['user_id'];
    header('Location: ../3_Mypage/mypage.php');
}
if(count($searchArray) == 0){
    header('Location: login.php');
}

?>
<?php
class DAO{
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=kaihatsu;charset=utf8','webuser','abccsd2');
        return $pdo;
    }
    public function insertUser($mail,$pass,$name,$birthday,$gender,$job){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO user(mail,pass,name,birthday,gender,job)
                VALUES(?,?,?,?,?,?)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(1,$mail,PDO::PARAM_STR);
        $ps->bindValue(2,$pass,PDO::PARAM_STR);
        $ps->bindValue(3,$name,PDO::PARAM_STR);
        $ps->bindValue(4,$birthday,PDO::PARAM_STR);
        $ps->bindValue(5,$gender,PDO::PARAM_STR);
        $ps->bindValue(6,$job,PDO::PARAM_STR);

        $ps->execute();
    }

    public function loginUser($mail,$pass){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE mail = ? AND pass = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$mail,PDO::PARAM_INT);
        $ps -> bindValue(2,$pass,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
}
?>
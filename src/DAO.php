<?php
class DAO{
    private function dbConnect(){
        $pdo=new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417481;charset=utf8','LAA1417481','CCkaihatu2022');
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
        $ps -> bindValue(1,$mail,PDO::PARAM_STR);
        $ps -> bindValue(2,$pass,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
    public function post1(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM category";
        $searchArray = $pdo -> query($sql);
        return $searchArray;
    }
}
?>
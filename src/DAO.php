<?php
class DAO{
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=kaihatsu;charset=utf8','wqbuser','abccsd2');
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

    public function post2($category){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM category_sub WHERE category_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps ->bindValue(1,$category,PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps ->fetchAll();
        return $searchArray;
    }

    public function post3($user_id,$human,$kaizen,$level,$category,$sub_category,$kigyou,$tenpo,$shohin){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO post(user_id,post_time,category_id,category_sub_id,content,improvement,level,company,store,product,absence)
                VALUES(?,?,?,?,?,?,?,?,?,?,?)";

        $ps = $pdo->prepare($sql);
        $now = date('Y/m/d');

        $ps->bindValue(1,$user_id,PDO::PARAM_INT);
        $ps->bindValue(2,$now,PDO::PARAM_INT);
        $ps->bindValue(3,$category,PDO::PARAM_STR);
        $ps->bindValue(4,$sub_category,PDO::PARAM_STR);
        $ps->bindValue(5,$human,PDO::PARAM_STR);
        $ps->bindValue(6,$kaizen,PDO::PARAM_STR);
        $ps->bindValue(7,$level,PDO::PARAM_INT);
        $ps->bindValue(8,$kigyou,PDO::PARAM_STR);
        $ps->bindValue(9,$tenpo,PDO::PARAM_STR);
        $ps->bindValue(10,$shohin,PDO::PARAM_STR);
        $ps->bindValue(11,0,PDO::PARAM_INT);

        $ps->execute();
    }

    public function id($sub){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM category_sub WHERE category_sub_name = ?";
        $ps = $pdo -> prepare($sql);
        $ps ->bindValue(1,$sub,PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps ->fetchAll();
        return $searchArray;
    }

    public function my_human($id){
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM post WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1,$id,PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    public function human(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM post";
        $searchArray = $pdo -> query($sql);
        return $searchArray;
    }

    public function main_change($id){
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM category WHERE category_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1,$id,PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    public function sub_change($id){
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM category_sub WHERE category_sub_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1,$id,PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    public function trade(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM exchange_gift_list";
        $searchArray = $pdo -> query($sql);
        return $searchArray;
    }

    public function get(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM get_history WHERE  (SELECT * FROM )";
    }

    public function exchange(){
    }
}
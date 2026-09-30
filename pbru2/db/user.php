<?php
class user{
    private $db;

    function __construct($con){
        $this->db=$con;
    }

    function insertUser($username,$password){
        try{
            // $new_password = md($password.$username);
            $sql="INSERT INTO user(username,password) VALUES(:username,:password)";
            $stmt=$this->db->prepare($sql);
            $stmt->bindParam(":username",$username);
            $stmt->bindParam(":password",$password);
            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getUser($username,$password){
        try{
            $sql="SELECT * FROM user WHERE username=:username AND password=:password";
            $stmt=$this->db->prepare($sql);
            $stmt->bindParam(":username",$username);
            $stmt->bindParam(":password",$password);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

}
?>
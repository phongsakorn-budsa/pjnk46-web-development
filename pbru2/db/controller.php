<?php
class controller{
    private $db;

    function __construct($con){
        $this->db=$con;
    }

    function get_race_type(){
        try{
            $sql="SELECT * FROM race_type";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    function get_age_group(){
        try{
            $sql="SELECT * FROM age_group";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }


    function edit_race_type($id){
        try{
            $sql="SELECT * FROM race_type WHERE race_id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function insert_race_type($race_name,$start_time,$distance,$time_limit,$fee,$Giveaway){
        try{
            $sql="INSERT INTO
            race_type(race_name,start_time,distance,time_limit,fee,Giveaway)
            VALUES(:race_name,:start_time,:distance,:time_limit,:fee,:Giveaway)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":race_name",$race_name);
            $stmt->bindParam(":start_time",$start_time);
            $stmt->bindParam(":distance",$distance);
            $stmt->bindParam(":time_limit",$time_limit);
            $stmt->bindParam(":fee",$fee);
            $stmt->bindParam(":Giveaway",$Giveaway);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function delete($id){
        try{
            $sql="DELETE FROM race_type WHERE race_id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function update($race_name,$start_time,$distance,$time_limit,$fee,$Giveaway,$race_id){
        try{
            $sql="UPDATE race_type SET
                    race_name = :race_name,
                    start_time = :start_time,
                    distance = :distance,
                    time_limit = :time_limit,
                    fee = :fee,
                    Giveaway = :Giveaway
                    WHERE race_id = :race_id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":race_name",$race_name);
            $stmt->bindParam(":start_time",$start_time);
            $stmt->bindParam(":distance",$distance);
            $stmt->bindParam(":time_limit",$time_limit);
            $stmt->bindParam(":fee",$fee);
            $stmt->bindParam(":Giveaway",$Giveaway);
            $stmt->bindParam(":race_id",$race_id);
            $stmt->execute();

            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}

?>
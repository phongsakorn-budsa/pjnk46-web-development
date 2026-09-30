<?php
require_once("db/connect.php");

if(isset($_POST["submit"])){
    $race_name = $_POST["race_name"];
    $start_time = $_POST["start_time"];
    $distance = $_POST["distance"];
    $time_limit = $_POST["time_limit"];
    $fee = $_POST["fee"];
    $Giveaway = $_POST["Giveaway"];
    $race_id = $_POST["race_id"];
    $result = $controller->update($race_name,$start_time,$distance,$time_limit,$fee,$Giveaway,$race_id);

    if($result){
        header("Location:select_race.php");
    }
}
?>

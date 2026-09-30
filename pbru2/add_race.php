<?php
require_once("db/connect.php");
require_once("layout/header.php");

if(isset($_POST["submit"])){

    $race_name = $_POST["race_name"];
    $start_time = $_POST["start_time"];
    $distance = $_POST["distance"];
    $time_limit = $_POST["time_limit"];
    $fee = $_POST["fee"];
    $Giveaway = $_POST["Giveaway"];

    $result = $controller->insert_race_type($race_name,$start_time,$distance,$time_limit,$fee,$Giveaway);
    if($result){
        echo '<div class="alert alert-success"> success </div>';
    }else{
        echo '<div class="alert alert-danger"> error </div>';
    }
}
?>

<div class="container my-5">
    <h1 class="text-center">เพิ่มการแข่งขัน</h1>
   <form action="add_race.php" method="POST">
    <div class="form-group">
        <label for="">ชื่อการแข่งขัน</label>
        <input type="text" name="race_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">เวลาเริ่ม</label>
        <input type="text" name="start_time" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">ระยะทาง</label>
        <input type="text" name="distance" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">สิ้นสุด</label>
        <input type="text" name="time_limit" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">ราคา</label>
        <input type="number" name="fee" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">ของที่ได้รับ</label>
        <input type="text" name="Giveaway" class="form-control" required>
    </div>

    <input type="submit" name="submit" value="บันทึก" class="btn btn-success my-5">
   </form>
</div>
<?php
require_once("layout/footer.php")
?>
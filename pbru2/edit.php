<?php
require_once("db/connect.php");
require_once("layout/header.php");

if(!isset($_GET["id"])){
   
}else{
    $id =$_GET["id"];
    $race = $controller -> edit_race_type($id);
}
?>

<div class="container my-5">
    <h1 class="text-center">แก้ไขการแข่งขัน</h1>
   <form action="update_race.php" method="POST">
    <input type="hidden" name="race_id" value="<?php echo $race["race_id"]?>">
    <div class="form-group">
        <label for="">ชื่อการแข่งขัน</label>
        <input type="text" name="race_name" class="form-control" value="<?php echo $race["race_name"];?>">
    </div>
    <div class="form-group">
        <label for="">เวลาเริ่ม</label>
        <input type="text" name="start_time" class="form-control" value="<?php echo $race["start_time"];?>">
    </div>
    <div class="form-group">
        <label for="">ระยะทาง</label>
        <input type="text" name="distance" class="form-control" value="<?php echo $race["distance"];?>">
    </div>
    <div class="form-group">
        <label for="">สิ้นสุด</label>
        <input type="text" name="time_limit" class="form-control" value="<?php echo $race["time_limit"];?>">
    </div>
    <div class="form-group">
        <label for="">ราคา</label>
        <input type="number" name="fee" class="form-control" value="<?php echo $race["fee"];?>">
    </div>
    <div class="form-group">
        <label for="">ของที่ได้รับ</label>
        <input type="text" name="Giveaway" class="form-control" value="<?php echo $race["Giveaway"];?>">
    </div>

    <input type="submit" name="submit" value="บันทึก" class="btn btn-success my-4">
   </form>
</div>
<?php
require_once("layout/footer.php")
?>
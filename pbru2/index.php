<?php
require_once("db/connect.php");
require_once("layout/header.php");

$result = $controller->get_race_type();
?>

<div class="container my-4">
    <img src="img/img.jpg" alt="" >
</div>

<div class="container my-2">
    <h1 class="text-center">รายการวิ่ง MARATHON</h1>
    <div class="row">
        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)){?>
            <div class="col-mb-4 col-lg-4 my-3">
                <div class="card">
                    <div class="card-header bg-info text-white justify-content-between align-items-center">
                        <h5 class="text-center"><?php echo $row["race_name"];?></h5>
                    </div>
                    <div class="card-body p-4">
                        <p><h5>ชื่อ : <?php echo $row["race_name"];?></h5></p>
                        <p><h5>เวลา : <?php echo $row["start_time"];?></h5></p>
                        <p><h5>ระยะทาง : <?php echo $row["distance"];?></h5></p>
                        <p><h5>ระยะเวลา : <?php echo $row["time_limit"];?></h5></p>
                        <p><h5>ราคา : <?php echo $row["fee"];?></h5></p>
                        <p><h5>สิ่งที่ได้รับเมื่อสมัคร : <?php echo $row["Giveaway"];?></h5></p>

                        <div class="text-center">
                            <a href="regis_run.php?id=<?php echo $row["race_id"]?>" class="btn btn-success">สนใจสมัคร</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    
</div>
<?php
require_once("layout/footer.php")
?>
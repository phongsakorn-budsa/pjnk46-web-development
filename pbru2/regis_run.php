<?php
require_once("db/connect.php");
require_once("layout/header.php");

//ken
$msg = "";
if(isset($_POST["SUBMIT"])){
    $status = $controller->insert_regis($_POST[full_name], $_POST[phone], $_POST[race_type], $_POST[gender], $_POST[age], $_POST[shipping], $_POST[address],);


    if($status)
         {
            echo '<div class="alert alert-success text-center">ลงทะเบียนเรียบร้อยเเล้ว</div>' ;
        }
        else {
        echo '<div class="alert alert-danger text-center">เกิดข้อผิดพลาด กรุณาลองใหม่</div>' ;
        }
}

$age = $controller->get_age_group();
$race = $controller->get_race_type();
?>
<div class="container my-5">
    <form action="regis_run.php" method="POST">
        <h1 class="text-center">ลงทะเบียน</h1>
        <h5 class="text-muted mb -3">ข้อมูลผู้สมัคร</h5>
            
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">ชื่อ-นามสกุล</label>
                            <input type="text" name="full_name" class="form-control" required placeholder="สมชาย รุ่งเรือง">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">เบอร์โทรศัพท์ติดต่อ</label>
                            <input type="tel" name="phone" class="form-control" required placeholder="08x-xxxxxxx">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">เพศ</label>
                            <select name="gender" class="form-select" required>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">อายุ</label>
                            <input type="number" name="age" class="form-control" required>
                        </div>
                    </div>

                        <hr class="my-4">
                        <h5 class="text-muted mb-3">รายละเอียดประเภทการวิ่ง</h5>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">ประเภท</label>
                            <select name="age_id" id="" class="form-select">
                                <option value="">----กรุณาเลือกประเภท----</option>
                                <?php while($row= $race->fetch(PDO::FETCH_ASSOC)){?>
                                <option value="<?php echo $row["race_id"];?>"><?php echo $row["race_name"]," ",$row["distance"];?></option>
                                <?php };?>
                            </select>
                        </div>
                            <div class="col-md-6">
                            <label class="form-label">รุ่นอายุ</label>
                            <select name="age_id" id="" class="form-select">
                                <option value="">----กรุณาเลือกรุ่นอายุ----</option>
                                <?php while($row= $age->fetch(PDO::FETCH_ASSOC)){?>
                                <option value="<?php echo $row["age_id"];?>"><?php echo $row["gender"],$row["label_age"];?></option>
                                <?php };?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">การจัดส่งเสื้อวิ่ง</label>
                            <select name="shipping" class="form-select" required>
                                <option value="รับด้วยตัวเอง">รับด้วยตัวเอง</option>
                                <option value="ส่งไปรษณีย์">ส่งไปรษณีย์</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                            <label class="form-label">ที่อยู่จัดส่งเสื้อ (ถ้ามี)</label>
                            <input type="text" name="adress" class="form-control" required>
                    </div>

                    <input type="submit" value="submit" class="btn btn-success">

        </div>
    </form>
</div>


<?php
require_once("layout/footer.php"); ?>
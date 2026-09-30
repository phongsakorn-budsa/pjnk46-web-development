<?php
require_once("db/connect.php");
require_once("layout/header.php");

$result = $controller->get_race_type();
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ชื่อ</th>
                <th>เวลาเริ่ม</th>
                <th>ระยะทาง</th>
                <th>เวลาสิ้นสุด</th>
                <th>ราคา</th>
                <th>สิ่งของ</th>
                <th>
                    ดำเนินการ
                </th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)){?>
            <tr>
                <td><?php echo $row["race_name"];?></td>
                <td><?php echo $row["start_time"];?></td>
                <td><?php echo $row["distance"];?></td>
                <td><?php echo $row["time_limit"];?></td>
                <td><?php echo $row["fee"];?></td>
                <td><?php echo $row["Giveaway"];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row["race_id"];?>" class="btn btn-warning">แก้ไข</a>
                    <a onclick="return confirm('คุณต้องการลบหรือไม่?')";
                     href="delete.php?id=<?php echo $row["race_id"];?>" class="btn btn-danger">ลบ</a>
                </td>
            </tr>
            <?php  };?>
        </tbody>
    </table>
</div>
<?php
require_once("layout/footer.php")
?>
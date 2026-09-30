<?php 
require_once ("layout/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">MARATHON</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navitem">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navitem">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">หน้าแรก</a>
                    </li>
                    <?php if(isset($_SESSION["userid"]) && $_SESSION["role"] == "admin"){?>
                    <li class="nav-item">
                        <a href="add_race.php" class="nav-link">เพิ่มการวิ่ง</a>
                    </li>
                    <li class="nav-item">
                        <a href="select_race.php" class="nav-link">ดูรายการวิ่ง</a>
                    </li>
                    <?php } ?>
                    <?php if(!isset($_SESSION["userid"])){?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">เข้าสู่ระบบ</a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown">
                            สวัสดี,<?php echo $_SESSION["username"];?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                             <li><a href="logout.php" class="dropdown-item">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

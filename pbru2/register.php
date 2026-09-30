<?php
require_once ("db/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<?php 
if(isset($_POST["submit"])){
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');
    $confirm = trim($_POST["comfirm_password"] ?? '');

    $error ="";

    if($password !== $confirm){
        $error = "password ไม่ตรงกัน";
    }

    if($error != ""){
        echo '<div class="alert alert-danger text-center">'.$error.'</div>';
    }else{
        $user->insertUser($username,$password);
        header("Location:login.php");
        exit;
    }
}
?>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info">
                        <h1 class="text-center text-white">สมัครสมาชิก</h1>
                    </div>
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            <div class="form-group">
                                <label for="">username</label>
                                <input type="text" name="username" class="form-control" required minlength="6">
                            </div>
                            <div class="form-group">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control" required pattern=[A-Za-z0-9]{6,} title="อย่างน้อย 6 ตัว">
                            </div>
                            <div class="form-group">
                                <label for="">comfirm_password</label>
                                <input type="password" name="comfirm_password" class="form-control" required>
                            </div>
                            <input type="submit" name="submit" value="บันทึก" class="btn btn-success my-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
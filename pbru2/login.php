<?php
require_once("db/connect.php");
require_once("layout/header.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // $new_password =md5($password.$username);
    $result=$user->getUser($username,$password);

    if(!$result){
        echo '<div class="alert alert-danger"> username หรือ password ผิด </div>';
    }else{
        $_SESSION["username"] = $username;
        $_SESSION["userid"] = $result["user_id"];
        $_SESSION["role"] = $result["role"];


        header("Location:index.php");
    }
}
?>

<div class="container my-4">
    <h1 class="text-center">เข้าสู่ระบบ</h1>
    <form   method="POSt" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
        <div class="form-group">
            <label for="">username</label>
            <input type="text"
            name="username"
            value="<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["username"];?>"
            class="form-control">
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div>
            <input type="submit" name="submit" value="เข้าสู่ระบบ" class="btn btn-info my-3">
            <a href="register.php" class="btn btn-success">สมัครสมาชิก</a>
        </div>
    </form>
</div>
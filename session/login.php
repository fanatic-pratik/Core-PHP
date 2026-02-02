<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:home.php");
    exit;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
$name = trim($_POST['username']);
if($name==='pratik'){
    
    $_SESSION['id']=123;
    header("location:home.php");
    exit;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="username" id="username">
        <button type="submit" name="submit" value="submit">Login</button>
    </form>
</body>
</html>
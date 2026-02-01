<?php
session_start();
if(empty($_SESSION['id'])){
    header('location:login.php');
    exit;
}
if(isset($_POST['submit'])){
    session_unset();
    session_destroy();
    header('location:login.php');
    exit;
    
}
echo "hello home page";
echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <button type="submit" name="submit">LOGOUT</button>
    </form>
</body>
</html>
<script>
    function logout(){

    }
</script>
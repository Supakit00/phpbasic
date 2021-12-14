<?php
$username = $_POST ['username'];
$password = $_POST ['password'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ส่งข้อมูล post</title>
</head>
<body>
    <h1>ส่งข้อมูลผ่าน Form (get)</h1>
    <form action="getform.php" method="get">
        Username : <input type="text" name="username"><br>
        password : <input type="password" name="password"><br>
        <input type="submit" value="login"><br>
    </form>
</body>
</html>
<?php
if(isset ($username)){
    echo"$username<br>";
    echo"$password<br>";
}else{
    echo "ไม่มีข้อมูล";
}
?>

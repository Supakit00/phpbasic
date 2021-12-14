<?php
$number1 = $_POST["nember1"];
$number2 = $_POST["nember2"];
$number3 = $_POST["nember3"];
$number4 = $_POST["nember4"];
$number5 = $_POST["nember5"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form>action="number.php" method="POST">
        number 1 : <input type ="number" name="number1"><br>
        number 2 : <input type ="number" name="number2"><br>
        number 3 : <input type ="number" name="number3"><br>
        number 4 : <input type ="number" name="number4"><br>
        number 5 : <input type ="number" name="number5"><br>
        <input type="submit" value="send">
        <input type="rest" value="reset">
    </form>
</body>
</html>
<?php
        if(isset($number1)) {
            $sum = $number1+$number2+$number3+$number4+$number5;
            echo $sum;
        }else{
            echo "ไม่มีข้อมูล";
        }
?>
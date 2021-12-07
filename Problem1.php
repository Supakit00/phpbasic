<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade</title>
</head>
<body>
    <?php
    $birthYear = 2000;
    echo $birthYear;
    echo("<br>");

    $currentYear = 2021;
    echo$currentYear;
    echo("<br>");

    $age =$currentYear-$birthYear;
    echo"อายุของคุณ : $age <br>";

                if($age > 10 && $age < 20) {
                    echo "รุ่นที่ 1 ไม่จำกัดอายุ";
                    echo("<br>");
                }  elseif ($age> 20 &&  $age <30){
                    echo"รุ่นที่ 2";
                    echo("<br>");
                }else{
                    echo "รุ่นที่ 3";
                    echo("<br>");
                }
    ?>
</body>
</html>
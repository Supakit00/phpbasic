<?php
$a = "hello";
echo ($a);
echo ("<br>");
define("PROVINCE", "Bangkok");
echo PROVINCE;
echo("<br>");
define("SALARY",18000);
echo SALARY;
echo("<br>");

date_default_timezone_set("Europe/Berlin");
date_default_timezone_set("Asia/Bangkok");
$t = date("H");
echo $t;

echo("<br>");
if($t <"20") {
    echo "Have a good day !";
}else {
    echo "Have a night !"; 
}

if($t <"10") {
    echo "Have a good morning !";
}elseif ($t < "20") {
    echo "Have a good day !";
}else {
    echo "Have a night !"; 
}


$favcolor = "red";

    switch ($favcolor ) {
        case "red";
            echo "Your favorite color is red !";
            break;
        case "blue";
            echo "Your favorite color is blue !";
            break;
        case "green";
            echo "Your favorite color is green !";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";            
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
         <?php
         $a = "hello";
         echo ($a);
         ?>
    </h1>
    <div style = "font-size:larger; color : blue;">
          <?php 
                echo "<b> คณะบริหารธุรกิจ สาขาเทคโนโลยีสารสนเทศทางธุรกิจจ
                ประกอบด้วย 3 วิชาเอก</b>";
            ?>    
    </div>
    <ul>
                <?php
                    echo "<li>การจัดการ</li>";
                    echo"<li>พัฒนาซอฟแวร์</li>";
                    echo"<li>มัลติมีเดีย</li>";
                 ?>   
    </ul>

</body>
</html>
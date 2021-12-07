<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $I = "25";
    $II = "25";
    $III = "25";
    $IV = "25";
    $total = $I + $II + $III + $IV;
    echo"คะแนนของคูณทั้งหมด : $total คะแนน<br>";
    switch($total) {
        case ($I > "25");
            echo "===มีคะแนนเกิน===<br>";
            break;
        case ($II > "25");
            echo "===มีคะแนนเกิน===<br>";
            break;
        case ($III > "25");
            echo "===มีคะแนนเกิน===<br>";
            break;
        case ($IV > "25");
            echo "===มีคะแนนเกิน===<br>";
            break;
        case(($total>=80)&&($total<=100));
            echo " เกรดที่คุณได้รับคือ : A<br>";
            break;
        case(($total >=75)&&($total <=100));
            echo " เกรดที่คุณได้รับคือ : B+<br>";
            break;
        case(($total  >=70)&&($total <=100));
            echo " เกรดที่คุณได้รับคือ : B<br>";
            break;
        case(($total >=65)&&($total <=100));
            echo " เกรดที่คุณได้รับคือ : C+<br>";
            break;
        case(($total >=60)&&($total <=100));
            echo " เกรดที่คุณได้รับคือ : C<br>";
            break;
        case(($total >=55)&&($total <=100));
            echo " เกรดที่คุณได้รับคือ : D+<br>";
            break;
        case(($total >=50)&&($total <=100));
            echo " เกรดที่คุณได้รับคือ : D<br>";
            break;
        case($total<=49);
        echo " เกรดที่คุณได้รับคือ : F <br>";
        break;
    }
    ?>
</body>
</html>
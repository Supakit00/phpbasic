<?php
// array
    $cars = array("Volvo","BMW","Toyota");
    echo " I Like " . $cars[0] . "," .$cars[1] . "and" . $cars[2] . ".";
    echo("<br>");
    echo " I Like   $cars[0]  , $cars[1]  and  $cars[2]  .";
    for($i=0;i<count($cars);$i++){
            echo ("$cars[$i]<br>");
    }

    //Associative Array
    $age = array ("Peter" =>"35" , "Ben" =>"37", "Joe" =>"43");
    echo "Peter is" .  $cars['Peter'] . "years old.";
    echo "Ben is" .  $cars['Ben'] . "years old.";
    echo "Joe is" .  $cars['Joe'] . "years old.";

   //Multidimensional Arrays
    $cars1 = array (
        array ("Volvo" , 22 ,18),
        array ("BMW" ,15 ,13),
        array ("Saab" , 5 ,2),
        array ("Land Rrover" , 17 ,15)
    );
    echo $cars1[0] [0] . ": In stock: ".  $cars[0] [1].", sold; ".  $cars[0] [2].".<br>";
    echo $cars1[1] [0] . ": In stock: ".  $cars[1] [1].", sold; ".  $cars[1] [2].".<br>";
    echo $cars1[2] [0] . ": In stock: ".  $cars[2] [1].", sold; ".  $cars[2] [2].".<br>";
    echo $cars1[3] [0] . ": In stock: ".  $cars[3] [1].", sold; ".  $cars[3] [2].".<br>";

    //Sot Array
    Sort($cars);
    for ($i0;$i<count ($cars);$i++){
    echo("$cars[$i]<br>");
    }
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    for ($i0;$i<count ($numbers);$i++){
    echo("$numbers[$i],");
    }

/**
 *  sort() - sort arrays in ascendinf order
 */
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
    
</body>
</html>
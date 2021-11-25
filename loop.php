<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php
    # for loop
    echo("for loop <br>");
    #x+2=2; x=x+2
    for( $x = 1; $x <10; $x+=2   ){
        echo "The number is : $x <br>"; 
      #  echo "The number is : ".$x." <br>"; (syntax old)
    }
    #while loop
    echo ("while loop <br>");
    $w=1;
    while( $w<=10 ) {
        echo "The number is : $w <br>";
        $w++;
    }
    #do while loop
    echo("do while loop <br>");
    $d=1;
    do{
        echo "The number is :$d <br>";
        $d++;
    }while( $d<=10 );

    #continue
    echo("continue <br>");
    for ($a=0;$a<10;$a++){
        if ($a == 4){
            continue;
        }
        echo "The number is : $a <br>";
    }

    #break
    echo("break <br>");
    for($a=0;$a<10;$a++){
        if ($a ==4){
            break;
        }
        echo "The number is :$a <br>";
    }
    ?> 

</body>
</html>
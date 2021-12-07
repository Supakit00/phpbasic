<?php
echo "ข้อที่ 3";
echo"<br>";
# for loop
echo("for loop <br>");
#x+2=2; x=x+2
for( $x = 1; $x <20; $x+=2   ){
    echo "The number is : $x <br>"; 
    #  echo "The number is : ".$x." <br>"; (syntax old)
}

echo"ข้อที่ 4";
echo"<br>";
    #while loop
    echo("while loop<br>");
    $i =1;
 
while ($i<=100) {#เป็นการันค่าตั้งแต่ 1ถึง100
    echo "$i\n";
    $i++;
}

echo"ข้อที่ 5";
echo"<br>";
    #do while loop
    echo("do while loop <br>");
    $d=1;
    do{
        echo "The number is :$d <br>";
        $d++;
    }while( $d<=10 );


echo"ข้อที่ 6";
echo"<br>";
#Continue
echo("continue <br>");
for ($a=10;$a<20;$a++){
    if ($a == 15){
        continue;
    }
    echo "The number is : $a <br>";
}

echo"ข้อที่ 7";
echo"<br>";
#break
    echo("break <br>");
    echo "ตัวอย่าง break <br>";
    for($a=1;$a<100;$a++){
        if ($a ==50){
            echo " ถึงคิวที่ $a คนสุดท้ายแล้ว ออกไปเลย ถ้ามีโอกาสหน้ารีบมานะ";
            break;
        }
        echo "ถึงคิดที่ :$a <br>";
    }
?>

<?php
#continue
echo("continue <br>");
for($a=0; $a<10 ; $a++){
if($a>10) {
    continue;
}
echo "The number is : $a <br>";
}

 #break
    echo("break <br>");
    for($a=0;$a<10;$a++){
        if ($a ==10){
            break;
        }
        echo "The number is :$a <br>";
    }
?>
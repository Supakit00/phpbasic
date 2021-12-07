<?php
$money =20;
if($money >=100){
    echo "ซื้อโจ๊กหมู";
}else{
    echo "ซื้อโจ๊กหมูใส่ไข่";
}

echo("<br>");
echo("<br>");

$t =("25");
if ($t <"10")  {
    echo"แยกไข่";
}elseif($t < "20") {
    echo"แยกผัก";
}else {
    echo"ตังพอไม่เลยไม่ได้ซื้อ";
}
?>
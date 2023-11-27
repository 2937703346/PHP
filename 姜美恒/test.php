<?php
$str1="hello";
$str2=124;
function test(&$s1,$s2){
    $s1 = $s1."world\n";
    echo $s1;
    $s2 = $s2 +100;
    echo "<br>";
    echo '$s2'.$s2;
}
//     function (&$s1,$s2){
//         $s1 = $s1."world<br>";
//         echo $s1;
//         $s2 = $s2 + 100;
//         echo "<br>";
//         echo '$s2'.$s2;
// }
test($str1,$str2);
echo "<br>________________________________________<br>";
echo '$str1:'.$str1."<br";
echo '$str2:'.$str2."<br>";

?>
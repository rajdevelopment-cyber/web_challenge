<?php
$a = $_POST["a"];

if($a > 170)
{
    echo "Tinggi badan anda sangat ideal,tinggi anda $a cm";
}
elseif($a >= 160 && $a <=170)
{
    echo "Tinggi badan anda ideal,tinggi anda $a cm";
}
else
{
    echo "Tinggi badan anda kurang ideal,tinggi anda $a cm";
}

?>
<br>
<a href="index.php">BALIK</a>

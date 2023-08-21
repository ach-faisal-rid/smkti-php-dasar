<?php
    $x = 1;
    while($x <= 5) {
        echo "angka sekarang: $x <br>";
    $x++;
    }
// perulangan while
echo "<hr>";
$x = 3;
    do {
        echo "angka sekarang: $x <br>";
    $x++;
    } while($x <= 5);
// perulangan do
echo "<hr>";
for($x = 0;$x <= 10; $x++)
    {
        echo "angka sekarang: $x <br>";
    }
// perulangan for
echo "<hr>";
$age = array("budi"=>"35", "udin"=>"37", "dwi"=>"43");
    foreach($age as $x =>$val) {
    echo "$x = $val<br>";
    }

// perulangan foreach
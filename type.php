<?php
$umur = 23;
echo "umur saya $umur tahun";
// variabel string
echo "<hr>";
$pertama = 54;
$kedua = 80;
echo "ini nilai bilangan $pertama dan ini $kedua";
// variabel integer bulat
echo "<br>";
$pertama = 5.49;
echo "tampilkan nilai dari bilangan $pertama";
//variabel float desimal
echo "<hr>";
$x = true;
$y = false;
echo $x;
echo "<br>";
echo $y;
// variabel boolean
echo "<hr>";
$tas = array('pulpen', 'penggaris', 'buku');
    echo $tas[0]. "<br>";
    echo $tas[1]. "<br>";
    echo $tas[2]. "<br>";
// variabel array
echo "<hr>";
class sapa {
    public $str;
}
$pesan = new sapa();
$pesan->str = "hi, apa kabar ?";
echo $pesan->str;
// variabel objek
echo "<hr>";
$x = 2;
if($x > 0) {
echo "bisa dibandingkan karena tidak null";
}
echo "<br>";
$y = NULL;
if($y == 0) {
echo "tidak bisa dibandingkan karena null";
}
// variabel null
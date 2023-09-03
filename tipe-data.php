<?php
// Tipe data string
$nama = "faisal ridhani"; // Variabel nama menyimpan nama lengkap seseorang
$alamat = "Jl. bali jombatan";
// Tipe data integer
$umur = 23;
$tinggi = 170;
// Tipe data float
$berat = 75.5;
// Tipe data boolean
$sudah_menikah = false;
// Tipe data array
$hobi = array("membaca", "menulis", "berenang");
// Tipe data NULL
$pekerjaan = NULL;
// Tipe data object
$orang = new stdClass();
$orang->nama = "faisal ridhani";
$orang->umur = 23;
// Tipe data resource
$koneksi = mysqli_connect("localhost", "root", "root", "belajar-php"); // masuk ke database

// Mencetak nilai dari variabel 
echo "Nama: $nama";
echo "<br>";
echo "Alamat: $alamat";
echo "<br>";
echo "Umur: $umur tahun";
echo "<br>";
echo "Tinggi: $tinggi cm";
echo "<br>";
echo "Berat: $berat kg";
echo "<br>";
echo "Sudah menikah: $sudah_menikah";
echo "<br>";
echo "Hobi: ";

foreach ($hobi as $item) {
    echo " * $item";
}
echo "<br>";
echo "Pekerjaan: $pekerjaan";
echo "<br>";
echo "Orang: ";
print_r($orang);
echo "<br>";
echo "Koneksi: ";
echo mysqli_connect_error();
echo "<br>";
?>
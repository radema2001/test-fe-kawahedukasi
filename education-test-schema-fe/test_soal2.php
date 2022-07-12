<!-- Nama : Radema Panjaitan
Alamat Email: rademapanjaitan09@gmail.com
Waktu Mulai :12.30
Waktu Selesai :13.00 -->
<?php
// output:  1
$input1 = 'hallo jesika24 selamat datang!';
$input12 = preg_replace("/[^0-9]/","",$input1);
if ($input1) {
    echo("Sistem kami menolak untuk inputan berisi angka $input12");
} else {
    echo("Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan $input1 " );
}
echo"<br>"; // baris baru

// output:  2
$input2 = 'hallo anggun selamat datang!';
$input21 = preg_replace("/[0-9]/","",$input2);
if ( $input2){
    echo("Sistem kami menolak untuk inputan berisi angka $input21");
} else {
    echo("Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan $input2");
}
echo"<br>"; // baris baru

// output:  3
$input3 = 'hallo ** selamat datang!';
$input31 = preg_replace("/[0-9^]/","",$input3);
if ( $input3) {
    echo("Sistem kami menolak untuk inputan berisi angka $input31");
} else {
    echo("Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan $input3");
}
echo"<br>"; // baris baru

// output:  4
$input4 = 'hallo Mariage889120! selamat datang!';
$input41 = preg_replace("/[^0-9]/","",$input4);
if ( $input4) {
    echo("Sistem kami menolak untuk inputan berisi angka $input41");
} else {
    echo("Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan $input4");
}
echo"<br>"; // baris baru

?>
<!-- Nama : Radema Panjaitan
Alamat Email: rademapanjaitan09@gmail.com
Waktu Mulai :12.00
Waktu Selesai :12.30 -->

<?php
	$baris=6;

	echo "output 1:";
	echo"<br>";

	for($i=1; $i<=$baris; $i++)
   {
     for($j=1; $j <= $baris-$i; $j++)
     echo " "; // space 
     for($k=1; $k <= $i; $k++)
     echo "*"; // bintang

     echo"<br>"; // baris baru
   }


	echo "output 2:";
	echo"<br>";

	for($i=$baris;$i>0;$i--){
	for($j=1; $j<=$i; $j++){
		echo " &nbsp";// space 
	}
	for($i1=$baris;$i1>=$i;$i1--){
		echo"*";// bintang

	}
	echo"<br>";// baris baru
	}

?>
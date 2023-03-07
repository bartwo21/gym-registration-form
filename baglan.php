<?php
$conn = mysqli_connect("localhost","root","","bar2_gym_data");

/* bağlantı kontrolü */

if ( mysqli_connect_errno()) {
	echo "Bağlantı başarısız. Hata : ".mysqli_connect_error();
	die();
}
else {
//  echo "Baglanti başarılı";
	mysqli_query($conn,"SET NAMES 'utf8'");
}

/* baglantiyi sonlandirmak icin */
// mysqli_close($conn)




?>
<?php

$conn = mysqli_connect('localhost', 'root', '', '15183207005_spk_ahp');

$un = mysqli_real_escape_string($conn, $_POST['username']);
$sql = "select * from ahp_pengguna where username = '$un'";
$process = mysqli_query($conn, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " &#10004; Username Tidak ada";
}else{
    echo " &#10004; Username dapat diubah";
}
?>
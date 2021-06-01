<?php		
$host		= "localhost";
$username	= "root";
$password	= "";
$database	= "dani_311810554";

$sekarang	= date("d-m-Y H:i:s");

$tersambung	= mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_error($tersambung)){
	
		echo "gagal tersambung kedalam database " . mysqli_connect_error();

}
?>
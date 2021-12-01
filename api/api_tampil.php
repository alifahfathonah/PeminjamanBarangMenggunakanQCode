<?php
require_once('../config.php');
$IdBarang = $_GET['idbarang'];
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM barang  WHERE IdBarang = '$IdBarang' " )) {
    	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        	$myArray[] = $row;
    	}
	mysqli_close($conn);
    	echo json_encode($myArray);
}
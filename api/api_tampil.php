<?php
require_once('../config.php');
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM barang  ")) {
    	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        	$myArray[] = $row;
    	}
	mysqli_close($conn);
    	echo json_encode($myArray);
}
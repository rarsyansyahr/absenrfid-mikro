<?php
	// file_get_contents("https://pro2pray.com/projek/absenku/add/?rfid=$_GET[rfid]");

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://pro2pray.com/projek/absenku/add/?rfid=$_GET[rfid]");
	// 3386158499
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close();

	echo $output;
?>
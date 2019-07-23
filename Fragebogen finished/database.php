<?php

    $user = "root";
    $pass = "";
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=db855337', $user, $pass);

    }catch (PDOException $e){
        echo  "fehler beim verbinden";
    }
		echo print " Verbunden";
	
?>
<?php
     $mysqli = new MySQLi("localhost", "root","", "bictia");
		if ($mysqli -> connect_error) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_error()
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
?>


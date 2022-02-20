<?php
	function conexion()
	{
		$con = mysqli_connect("localhost","usuario", "1234", "p04tests");
		return $con;
	}	
?>

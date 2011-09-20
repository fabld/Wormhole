<?php
require('db.php');

//be sure get is happening
if($_GET){

	// this is an ajax function, use each for diff things.
	if($_GET['fn']=='saveUser'){
			
		// store the $_GET values in nice sql-friendly variables
		$name = $_GET['name'];
		$email = $_GET['email'];
		
		//write the query to perform
		$sql = "INSERT INTO users (name, email) VALUES ('".$name."','".$email."')";
		
		//execute it or kick back an error
		mysql_query($sql) or die(mysql_error());
		
		echo 'ok';
	}
}
?>
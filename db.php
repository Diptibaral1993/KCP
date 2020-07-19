<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db='newspost';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

function fetchrow($conn,$Sql)
 {
	
	$rows=array();
	$result = mysqli_query($conn,$Sql);
	while($row = mysqli_fetch_assoc($result))
	{
		array_push($rows,$row);
	}
	return $rows;
	 
 }

 function fetchrows($conn,$Sql)
 {
	
	if(! $conn ) 
	{
   
		die('Database connection fail!!' . mysqli_error());  

    }
	else if ($conn) 
	{
		$rows=array();
		$result = mysqli_query($conn,$Sql);
		
		return $result;
		
	} 
 mysqli_close($conn); 
 }

<?php
$con = mysql_connect('localhost','root', 'root');
//if connection fails
if (!$con) 
{
	echo "cannot connect to database";
} 
else 
{
	//select database
	$db = mysql_select_db('arp_oth', $con) or die("problem selecting database '$MYSQL[DATABASENAME]'");
}
?>
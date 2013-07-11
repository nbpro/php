<?php
session_start(); 
$var1 = $_POST['uname'];
$var2 = $_POST['pass'];
mysql_connect("localhost","root","");
mysql_select_db("Application");
$query = "select * from login where name = '".$var1."' and password = '".$var2."' ";
$result = mysql_query($query);
$num=mysql_num_rows($result);
?>
<?php
if ($num){

	$_SESSION['uname']="1";
	header('location:controlpanel.php');

}

else{
	header('location:registration.php');
}
?>
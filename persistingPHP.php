<?php
header("Content-Type:application/json;charset=UTF-8");
$obj=json_decode($_GET["x"],false);
$a=$obj->Name;
$b=$obj->Database;
$c=$obj->Type;
$con=mysql_connect("Localhost","root","");
if($con)
{
echo "connected";
}
$db=mysql_select_db("json",$con);
if($db)
{
echo "connected";
}
$sql="insert into json_data(Name,Dbname,Type) values('$a','$b','$c')";
$z=mysql_query($sql,$con);
echo json_encode($obj);
?>
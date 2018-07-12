<?php
$n=$_GET["id"];
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("details") or die (mysql_error());
$sq="select age from names where name='$n'";
$ss=mysql_query($sq) or die(mysql_error());
$num=mysql_num_rows($ss);
if($num==1)
{
while($row=mysql_fetch_array($ss))
{
	$a=$row['age'];

	
	echo"<table ><tr>Age </tr><tr><td>$a</td></tr></table>";
}}
else
{}
?>



<form method=get action=fetchage.php>
NAME<input type=text name=id>

<input type=submit value=submit>
</form>
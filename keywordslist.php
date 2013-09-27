<?php include ('conect.php');

$sql1="SELECT * FROM kw ORDER BY keyword ASC";
$sql_exec1=mysql_query($sql1);
while($row=mysql_fetch_array($sql_exec1)){
echo $row['keyword'].", ";
}
?>
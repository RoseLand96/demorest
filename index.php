<?php
$db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $db_name = "gi7dwhbm867q5tbw";
     $db_user = "w6fjotyp3hvjylth";
     $db_password = "at3a7s63349xgogh";
    
     $connection = mysqli_connect($db_host,$db_user, $db_password,"3306") or die("Connection Error: " . mysqli_error());
    
mysqli_select_db($db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysql_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM contactos;";
$result = mysqli_query($sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>

<?php 
require "db_connect.php";
$result = array();
$result['data'] = array();
$select = "SELECT *from users";
$responce = mysqli_query($conn, $select);
while($row = mysqli_fetch_array($responce)){
    $index['id'] = $row['0'];
    $index['name'] = $row['1'];
    $index['phone'] = $row['2'];
    $index['email'] = $row['3'];
    array_push($result['data'], $index);

}
$result["success"] = "1";



?>
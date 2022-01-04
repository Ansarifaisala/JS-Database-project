<!--
    @author: Ansari Mohammed Faisal 
    Student number: 000812671
-->
<?php
//include connect.php is needed here because this is function!
//this file is used to insert new data into file
include "connect.php";
$item = filter_input(INPUT_GET, "item", FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_GET,"quantity",FILTER_VALIDATE_INT);
    
    //command to check if the email address exists in the database
    $command ="INSERT into products(item, quantity) Values(?,?)";
    $stmt = $dbh->prepare($command);
    $param=[$item,$quantity];
    $success = $stmt->execute($param);
    
?>

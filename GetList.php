<?php
/*
@author: Ansari Mohammed Faisal 
Student number: 000812671
*/
include "connect.php";
/*
this fuction is used for preparing and executing database commands
this file is used to fetch data from database
*/

    //command to check if the email address exists in the database
    $command ="SELECT item, quantity from products Order by item";
    $stmt = $dbh->prepare($command);
    global $success;
    $success = $stmt->execute();
    $itemlist = [];
    while($rows = $stmt->fetch()){
       $items = [
                "item"=>$rows["item"],
                "quantity"=>(int)$rows["quantity"]
          ];
          array_push($itemlist,$items);
    }

  
echo json_encode($itemlist);
    

?>


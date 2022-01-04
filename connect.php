<?php
/**
 * @author Ansari Mohammed Faisal 
 * Student number: 000812671
 */
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000812671",
        "000812671",
        "20000614"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
?>
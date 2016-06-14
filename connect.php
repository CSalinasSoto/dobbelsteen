<?php
require_once ('db_const.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($mysqli->connect_errno){
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_errno}</p>";
    exit();
}

$userID = "666";
$aWorp = array(3,4,3,4,3);
$worp = implode($aWorp);
$score = "Full house";

$sql = "INSERT INTO dobbel_scores (user_ID, Worp, Score)
        VALUES ('$userID','$worp','$score')";

if($mysqli ->query($sql) === TRUE){
    echo '<br>update succesvol<br>';
    echo $sql;
}else{
    echo '<br>Error: '. $sql . '<br>' . $mysqli->error;
}
$mysqli -> close();
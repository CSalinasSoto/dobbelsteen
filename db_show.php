<?php
function showAll(){
require_once ('db_const.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($mysqli->connect_errno){
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_errno}</p>";
    exit();
}

$sql = "SELECT User_ID, Worp, Score, Time From dobbel_scores ORDER BY  time DESC;";//regelen dat op tijd gesorteerd wordt aflopend
$result = $mysqli ->query($sql);


if($result -> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "User ID: " . $row["User_ID"]. " Worp: ". $row["Worp"]. " Score ". $row["Score"]. " Tijd ". $row["Time"]. "<br>";
    }
}else{
    echo "niets gevonden";
}

$mysqli -> close();
}

?>
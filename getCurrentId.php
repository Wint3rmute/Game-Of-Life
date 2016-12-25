<?php
$servername = "mysql.ct8.pl";
$username = "m3452_wintermute";
$password = "123Qwe";
$DBNAME = "m3452_wintermute";

$DB = new mysqli($servername, $username, $password, $DBNAME);


    $result = $DB->query("SELECT max(id) FROM chatDB");

    if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo $row["max(id)"];
     }
   }


$DB->close();
?>

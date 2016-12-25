<?php
$servername = "mysql.ct8.pl";
$username = "m3452_wintermute";
$password = "123Qwe";
$DBNAME = "m3452_wintermute";

$DB = new mysqli($servername, $username, $password, $DBNAME);

    $id = intval($_GET['i']) - 10;

    $result = $DB->query("SELECT * FROM chatDB WHERE id > " . $id);

    if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo  $row["login"]. ": ". $row["message"]. "<br>";
     }
} else {
     echo "0 results";
}

$DB->close();


?>

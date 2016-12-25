<?php
$servername = "mysql.ct8.pl";
$username = "m3452_wintermute";
$password = "123Qwe";
$DBNAME = "m3452_wintermute";

$DB = new mysqli($servername, $username, $password, $DBNAME);

    $login = '"' . $_GET['l'] . '"';
  $message = '"' . $_GET['m'] . '"';




if (!$DB) {
    echo "NC";
  }else {
    echo "YC";
  }



$sql = "INSERT INTO chatDB
VALUES (DEFAULT," . $login . " , " . $message . ")";


  if ($DB->query($sql) === TRUE) {
    echo "YS";
} else {
    echo "NS";
}


?>

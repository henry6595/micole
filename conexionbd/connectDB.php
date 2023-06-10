<?php



$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "fvzihtls_mc_andresbello";

class DBi {

    public static $mysqli;

}

DBi::$mysqli = new mysqli($localhost, $username, $password, $dbname);

if (DBi::$mysqli->connect_error) {
    exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
DBi::$mysqli->set_charset("utf8mb4");
?>
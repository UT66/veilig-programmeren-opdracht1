<?php

include "db.php";

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $pas = $_POST["pass"];

    echo "Your Username is ".$name."<br>".PHP_EOL;
    echo "Your Password is ".$pas."<br>".PHP_EOL;

}

$myConn = new DB;
$query = "SELECT * FROM user WHERE username = "$name" ";
$result = $myConn->executeSQL($query);

echo gettype($result)."<br>";

if (!empty($result)) {
    echo "<br> Login as "$name" <br>";
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}

?>

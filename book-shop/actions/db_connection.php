<?php
$localhost = "173.212.235.205";
$user = "wahidacodefactor_wahida-book";
$pass = "1Yw(cXHz9_S4";
// database name
$db_name = "wahidacodefactor_book-shop";

try {
    $conn = mysqli_connect($localhost, $user, $pass, $db_name);
    // echo "Connected";
} catch (Exception $e) {
    echo "Failed to connect: " . mysqli_connect_error();
}

function var_dump_pretty($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
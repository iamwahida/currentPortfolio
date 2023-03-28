<?php
$localhost = "173.212.235.205";
$user = "wahidacodefactor_wahida-pet";
$pass = "f?y*.VMZLh7d";
$db_name = "wahidacodefactor_pet-shop";

// check connection
try {
    $connect = mysqli_connect($localhost, $user, $pass, $db_name);
    // echo "Connected";
} catch (Exception $e) {
    echo "Failed to connect: " . mysqli_connect_error();
}

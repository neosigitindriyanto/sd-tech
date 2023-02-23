<?php

//Variabel database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sensor_test";

$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");

// -------------------------------------Prepare the SQL statement--------------------------------------------//
// $data_value = $_GET['data'];
// $nopeg = $_GET['nopeg'];
// // $result = mysqli_query($conn, "UPDATE datapegawai SET nopeg = '$nopeg' WHERE id = 1");
// // $update = mysqli_query($conn, "UPDATE datasensor SET data = '$data_value' WHERE id = 90 ");
// $hammer_value = $_GET['hammer'];
// $wrench_value = $_GET['wrench'];
// $file_value = $_GET['file'];
// $drill_value = $_GET['drill'];
// $rivetgun_value = $_GET['rivetgun'];
// $hammer = mysqli_query($conn, "UPDATE datatools SET value = '$hammer_value' WHERE id = 1");
// $wrench = mysqli_query($conn, "UPDATE datatools SET value = '$wrench_value' WHERE id = 2");
// $file = mysqli_query($conn, "UPDATE datatools SET value = '$file_value' WHERE id = 3");
// $drill = mysqli_query($conn, "UPDATE datatools SET value = '$drill_value' WHERE id = 4");
// $rivetgun = mysqli_query($conn, "UPDATE datatools SET value = '$rivetgun_value' WHERE id = 5");

// if (!$update) {
//     die('Invalid query: ' . mysqli_error($conn));
// }

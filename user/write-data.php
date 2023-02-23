<?php

//Variabel database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sensor_test";

$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");

// Prepare the SQL statement
// $data_value = $_GET['data'];
$nopeg = $_GET['nopeg'];
// $result = mysqli_query($conn, "UPDATE datapegawai SET nopeg = '$nopeg' WHERE id = 1");
// $update = mysqli_query($conn, "UPDATE datasensor SET data = '$data_value' WHERE id = 90 ");
$hammer_value = $_GET['hammer'];
$wrench_value = $_GET['wrench'];
$combwrench_value = $_GET['combwrench'];
$ratchet_value = $_GET['ratchet'];
$punch_value = $_GET['punch'];

$hammer = mysqli_query($conn, "UPDATE datatools SET value = '$hammer_value' WHERE id = 1");
$wrench = mysqli_query($conn, "UPDATE datatools SET value = '$wrench_value' WHERE id = 2");
$combwrench = mysqli_query($conn, "UPDATE datatools SET value = '$combwrench_value' WHERE id = 3");
$ratchet = mysqli_query($conn, "UPDATE datatools SET value = '$ratchet_value' WHERE id = 4");
$punch = mysqli_query($conn, "UPDATE datatools SET value = '$punch_value' WHERE id = 5");


$gethammer = mysqli_query($conn, "INSERT INTO datapeminjaman (tools,nopeg) VALUES ('$hammer,$nopeg')");
$getwrench = mysqli_query($conn, "INSERT INTO datapeminjaman (tools,nopeg) VALUES ('$wrench,$nopeg')");
$getcombwrench = mysqli_query($conn, "INSERT INTO datapeminjaman (tools,nopeg) VALUES ('$combwrench,$nopeg')");
$getratchet = mysqli_query($conn, "INSERT INTO datapeminjaman (tools,nopeg) VALUES ('$ratchet,$nopeg')");
$getpunch = mysqli_query($conn, "INSERT INTO datapeminjaman (tools,nopeg) VALUES ('$punch,$nopeg')");


// if (!$update) {
//     die('Invalid query: ' . mysqli_error($conn));
// }

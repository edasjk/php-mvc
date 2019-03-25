<?php

$host = "localhost";
$db_name = "mvc";
$user = "mvc";
$password = "mvc";

/**
 * Create connection
 */
$conn = new mysqli($host, $user, $password, $db_name);

/**
 * Check connection
 */
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully, connection data are ok.";
}

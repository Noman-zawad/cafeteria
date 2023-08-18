<?php
// Include the database connection
include_once('db_connection.php');

if ($_SERVER["POST"]) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the user exists and has provided valid credentials
    if (mysqli_num_rows($result) === 1) {
        // Successful login
        header("Location: ./");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}

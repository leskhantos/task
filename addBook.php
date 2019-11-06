<?php
require 'connect.php';
$conn = connectionToDB();
if (isset($_POST["name"]) && isset($_POST["body"]) ) {

    $name = $_POST['name'];
    $body = $_POST['body'];
    $stmt = $conn->prepare("INSERT INTO guest_book(dtime, name, body) values (NOW(),?,?)");
    $stmt->bind_param("ss", $name, $body);
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Unable to create record";
    }
}
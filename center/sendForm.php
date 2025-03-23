<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "db.php";
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $course = trim($_POST["course"]);
    $sql = "INSERT INTO applications (name, email, course) VALUES ('$name', '$email', '$course')";
    $conn->query($sql);
}
header("Location: form.php");
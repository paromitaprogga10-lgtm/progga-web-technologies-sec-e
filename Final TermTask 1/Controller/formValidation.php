<?php
session_start();

$username = $_POST["username"] ?? "";
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$phone = $_POST["phone"] ?? "";

$hasError = false;

if ($username == "") {
    $_SESSION["usernameErr"] = "Username is required";
    $hasError = true;
}

if ($name == "") {
    $_SESSION["nameErr"] = "Name is required";
    $hasError = true;
}

if ($email == "") {
    $_SESSION["emailErr"] = "Email is required";
    $hasError = true;
}

if ($phone == "") {
    $_SESSION["phoneErr"] = "Phone is required";
    $hasError = true;
}

if ($hasError) {
    $_SESSION['form_data'] = $_POST;
    header("Location: ../View/form.php");
    exit();
}
else {
    echo "<h2>Form Submitted Successfully</h2>";
    echo "Username: " . $username . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
}
?>
<?php
session_start();

$usernameErr = $_SESSION["usernameErr"] ?? "";
$nameErr = $_SESSION["nameErr"] ?? "";
$emailErr = $_SESSION["emailErr"] ?? "";
$phoneErr = $_SESSION["phoneErr"] ?? "";

$formData = $_SESSION['form_data'] ?? [];
$username = $formData['username'] ?? "";
$name = $formData['name'] ?? "";
$email = $formData['email'] ?? "";
$phone = $formData['phone'] ?? "";

unset($_SESSION["usernameErr"]);
unset($_SESSION["nameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["phoneErr"]);
unset($_SESSION['form_data']);
?>

<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>User Form</h2>

<form method="post" action="../Controller/formValidation.php">

    Username:
    <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
    <span style="color:red;"><?php echo $usernameErr; ?></span>
    <br><br>

    Full Name:
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
    <span style="color:red;"><?php echo $nameErr; ?></span>
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <span style="color:red;"><?php echo $emailErr; ?></span>
    <br><br>

    Phone:
    <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
    <span style="color:red;"><?php echo $phoneErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>
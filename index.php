<?php

include 'connect.php';
if (isset($_POST['submit'])) 
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['password'])) {
        echo "All fields are required.";
    } else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql="insert into `crud`(`name`, `email`, `mobile`, `password`)
    values('$name','$email','$mobile','$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       // echo "Data inserted successfully";
        header('Location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Form</title>
</head>

<body>
    <h2>CRUD Form</h2>
    <form method="post">

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="mobile">Mobile:</label><br>
        <input type="text" id="mobile" name="mobile"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
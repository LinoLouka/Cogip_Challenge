<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $password = $_POST['password'];

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form method="POST" action="login">
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" required>

        <label for="password">Password : </label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
<?php       
session_start();
    echo $_SESSION['first_name'];

    
    
    ?>

</body>
</html>
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
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <main>
        <h1>Login</h1>
            <form method="POST">
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="password">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="submit">Submit</button>
                <?php       
// session_start();
// $_SESSION['user_id'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
if(isset($_POST['submit'])){
    if ($data == null) {
        echo 'invalid email or incorrect password';
    }
}
}
?>
        </form>
    </main>
</body>
</html>


</body>
</html>
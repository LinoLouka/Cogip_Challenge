<?php
$lastname = $firstname = $adresseMail = $confirmPassword = $hashedPassword = '';
$lastnameError = $firstnameError = $addressEmailError = $passwordError = $confirmPasswordError = '';
$successRegister = "";

$formSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST') && empty($lastnameError) && empty($firstnameError) && empty($addressEmailError) && empty($passwordError) && empty($confirmPasswordError);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <form method="POST" action="register">
        <label for="lastname">Lastname :</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" placeholder="ex. Dupont" required>
        <span class="error"><?php if(isset($_POST['submit'])) {
            echo $data['lastnameError'];
        } ?></span>

        <br>

        <label for="firstname">Firstname :</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" placeholder="ex. Dupont" required>
        <span class="error"><?php if(isset($_POST['submit'])) {
            echo $data['firstnameError'];
        } ?></span>
        <br>

        <label for="email">Email : </label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($adresseMail)?>" placeholder="ex. Dupont.Henri@gmail.com" required>
        <span class="error"><?php if(isset($_POST['submit'])) {
            echo $data['addressEmailError'];
        } ?></span>
        <br>

        <label for="password">Password : </label>
        <input type="password" id="password" name="password" required>
        <span class="error"><?php if(isset($_POST['submit'])) {
            echo $data['passwordError'];
        } ?></span>
        <br>

        <label for="confirmPassword">Confirm your password : </label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <span class="error"><?php if(isset($_POST['submit'])) {
            echo $data['confirmPasswordError'];
        } ?></span>
        <br>

        <button type="submit" name="submit">Register</button>
    </form>
    <?php if ($formSubmitted && !empty($successRegister)) : ?>
    <div>
        <?php echo $successRegister; ?>
    </div>
    <?php endif; ?>
</body>
</html>


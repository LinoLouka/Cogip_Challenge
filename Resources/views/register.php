<?php
$lastname = $firstname = $adresseMail = $hashedPassword = '';
$lastnameError = $firstnameError = $addressEmailError = '';
$successRegister = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $adresseMail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $lastnameError = validateLastname($lastname);
    $firstnameError = validateFirstname($firstname);
    $addressEmailError = validateEmail($adresseMail);

    if(empty($lastnameError) && empty($firstnameError) && empty($addressEmailError)) {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $successRegister = "Your register is successful";
    }
}

function validateLastname($lastname)
{
    if(empty($lastname)) {
        return "The lastname is required";
    }
    $minLength = 2;
    if(strlen($lastname) < $minLength) {
        return "The lastname must be at least $minLength characters long ";
    }

    return "";
}

function validateFirstname($firstname)
{
    if(empty($firstname)) {
        return "The firstname is required";
    }
    $minLength = 2;
    if(strlen($firstname) < $minLength) {
        return "The firstname must be at least $minLength characters long ";
    }
    return "";
}

function validateEmail($email)
{
    if(empty($email)) {
        return "The email is required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "The format email isn't valid";
    }
    return "";
}
$formSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST') && empty($lastnameError) && empty($firstnameError) && empty($addressEmailError);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <form method="POST" action="register">
        <label for="lastname">Lastname :</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" placeholder="ex. Dupont" required>
        <span class="error"><?php echo $lastnameError; ?></span>
        <br>
        <label for="firstname">Firstname :</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" placeholder="ex. Dupont" required>
        <span class="error"><?php echo $firstnameError; ?></span>
        <br>

        <label for="email">Email : </label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($adresseMail)?>" placeholder="ex. Dupont.Henri@gmail.com" required>
        <span class="error"><?php echo $addressEmailError; ?></span>
        <br>
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="password">Confirm your password : </label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <label for="role">Choose your role</label>
            <select name="role" id="role">
                <option value="1">User</option>
                <option value="2">Admin</option>
            </select>

        <button type="submit" name="submit">Register</button>
    </form>
    <?php if ($formSubmitted && !empty($successRegister)) : ?>
    <div>
        <?php echo $successRegister; ?>
    </div>
<?php endif; ?>
</body>
</html>
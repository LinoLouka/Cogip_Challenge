<?php
$lastname = $firstname = $adresseMail = '';
$lastnameError = $firstnameError = $addressEmailError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['role'])) {
        $selectedRole = $_POST['role'];
        $password = $_POST['password'];

        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $adresseMail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if ($selectedRole !== '') {
            echo "You selected the role: ";

            switch ($selectedRole) {
                case '1':
                    echo "Admin";
                    break;
                case '2':
                    echo "User";
                    break;
                default:
                    break;
            }
        } else {
            echo "You must select a choice";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <form method="post" action="/register">
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
                <option value=""></option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>

        <button type="submit" name="submit">Register</button>
    </form>

</body>
</html>
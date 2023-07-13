<?php
$name = $username = $adresseMail = '';
$nameError = $usernameError = $addressEmailError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['role'])) {
        $selectedRole = $_POST['role'];

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
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" placeholder="ex. Dupont" required>
        <span class="error"><?php echo $nameError; ?></span>
        <br>
        <label for="username">Username : </label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username) ?>" placeholder="ex. Dudu" required>
        <span class="error"><?php echo $usernameError; ?></span>
        <br>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($adresseMail)?>" placeholder="ex. Dupont.Henri@gmail.com" required>
        <span class="error"><?php echo $addressEmailError; ?></span>
        <br>
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="password">Confirm your password : </label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="role">Choose your role</label>
            <select name="role" id="role">
                <option value=""></option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>

        <button type="submit" name="submit">Register </button>
    </form>

</body>
</html>
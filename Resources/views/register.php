<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <form method="post" action="/register">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name" required>

        <label for="username">Username : </label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email : </label>
        <inpur type="email" id="email" name="email" required>

        <label for="password">Password : </label>
        <input type="password" id="password" name="password" required>

        <label for="role">Choose your role</label>
        <select name="role" id="role">
            <!-- fonction pour prévenir  -->
            <option value=""></option>
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select>

        <button type="submit">Register </button>
    </form>

</body>
</html>
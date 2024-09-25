<?php
    include_once 'config/settings-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <h1>Sign-in<h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        <input type="email" name="email" placeholder="Enter Email" required> <br>
        <input type="password" name="password" placeholder="Enter Password" required> <br>
        <button type="Submit" name="btn-signin">Sign in</button>
    </form>


    <h1>Registration</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        <input type="text" name="username" placeholder="Enter Username" required> <br>
        <input type="email" name="email" placeholder="Enter Email" required> <br>
        <input type="password" name="password" placeholder="Enter Password" required> <br>
        <button type="submit" name="btn-signup">Sign up</button>
    </form>   
</body>
</html>
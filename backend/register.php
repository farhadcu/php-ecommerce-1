<?php
session_start();
require_once '../app/Database.php';
$messages = [];

if (isset($_POST['register'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $username = trim($_POST['username']);
    $mobile_number = trim($_POST['mobile_number']);
    $result = $connection->insert('users', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'username' => $username,
        'mobile_number' => $mobile_number,
    ]);

    if ($result) {
        $messages['success'] = 'Registration successful';
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Ecommerce Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">
</head>

<body>
<form class="form-signin" action="" method="post">
    <?php include_once 'partials/message.php'; ?>

    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">PHP Ecommerce Admin Panel</h1>
    </div>

    <div class="form-label-group">
        <input type="email" name="email" class="form-control" placeholder="Email address" required>
        <label>Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <label>Password</label>
    </div>

    <div class="form-label-group">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <label>Username</label>
    </div>

    <div class="form-label-group">
        <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" required>
        <label>Mobile Number</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
</form>
</body>
</html>

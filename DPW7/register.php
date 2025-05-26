<?php
require 'koneksi.php';

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT id FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) > 0) {
        $error = "Username sudah terdaftar!";
    } else {
        mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
        $success = "Registrasi berhasil! Silakan login.";
    }
}
?>

<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100"
    style="background: linear-gradient(135deg, #6AC47E, #0B3D2E);">
    <div class="card p-4 shadow" style="width: 350px;">
        <h4 class="text-center mb-3">Register</h4>
        <?php if ($error): ?>
            <div class="alert alert-danger text-center"><?= $error ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="alert alert-primary text-center"><?= $success ?></div>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
        <p class="text-center mt-3">
            Sudah punya akun? <a href="index.php">Login</a>
        </p>
    </div>
</body>

</html>
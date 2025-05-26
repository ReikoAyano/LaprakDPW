<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$result = $conn->query("SELECT username FROM users");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100"
  style="background: linear-gradient(135deg, #e6f7ff, #b3e0ff);">
    <div class="container py-5">
        <div class="card mx-auto shadow" style="max-width: 600px;">
            <div class="card-body text-center">
                <h2 class="mb-3">Selamat Datang, <?= htmlspecialchars($_SESSION['username']) ?> Gantenk!</h2>
                <h4 class="mb-3">Daftar Pengguna Terdaftar:</h4>
                <ul class="list-group mb-4">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <li class="list-group-item"><?= htmlspecialchars($row['username']) ?></li>
                    <?php endwhile; ?>
                </ul>
                <form action="logout.php" method="POST">
                    <button class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

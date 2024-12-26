<?php include_once '../Connections/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scripture Spreadsheet</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="nav">
        <h1>Scripture Spreadsheet</h1>
        <div class="nav-links">
            <a href="index.php" class="active"><i class="fas fa-home"></i> Home</a>
            <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="register.php"><i class="fas fa-user-plus"></i> Register</a>
        </div>
    </div>
    <header>
        <h1 align="center">Welcome to Scripture Spreadsheet</h1>
    </header>
    <main>
        <p align="center">Where you can upload and save bible scriptures and find them with ease.</p>
    </main>

    <div class="get-started-login">
        <a href="register.php">Get Started</a>
        <a href="login.php" class="login-btn">Login</a>
    </div>
    
    <footer class="footer">
        <p>&copy; 2023 Scripture Spreadsheet</p>
    </footer>
</body>
</html>
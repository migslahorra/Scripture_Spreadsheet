<?php
// Include the PHP login handler (if it's included here, login_handler.php is included in your case too)
include_once '../Connections/login_handler.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="nav">
        <h1>Scripture Spreadsheet</h1>
        <div class="nav-links">
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <a href="login.php" class="active"><i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="register.php"><i class="fas fa-user-plus"></i> Register</a>
        </div>
    </div>
    
    <div class="login-container">
        <h2>Login</h2>
        
        <!-- Display error message if any -->
        <?php if (isset($error) && !empty($error)) { echo "<p class='error'>$error</p>"; } ?>

        <form action="login.php" method="post"> <!-- action is now self-referencing -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <footer class="footer">
        <p>&copy; 2023 Scripture Spreadsheet</p>
    </footer>
</body>
</html>

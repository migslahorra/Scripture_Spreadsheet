<?php
// Include the database connection configuration
include_once("config.php");

// Start the session to store user information after login
session_start();

// Default error message
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Validate the input fields
    if (empty($username) || empty($password)) {
        $error = "Both fields are required.";
    } else {
        // Query the database to check if the username exists
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        
        if ($stmt === false) {
            $error = "Database query failed.";
        } else {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Fetch user data
                $user = $result->fetch_assoc();
                
                // Verify the password (plain text in the database)
                if ($password === $user['password']) {
                    // Successful login: Set session variables
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    
                    // Redirect to the dashboard or home page
                    header("Location: ../Pages/homepage.php");
                    exit();
                } else {
                    // Incorrect password
                    $error = "Invalid username or password.";
                }
            } else {
                // User not found
                $error = "Invalid username or password.";
            }
        }
    }
}
?>
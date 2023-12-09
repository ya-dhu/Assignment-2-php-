<?php
session_start();

// Include database connection file
include('./db.php');

// Function to securely hash passwords
function hashPassword(string $password): string {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Function to verify hashed password
function verifyPassword(string $password, string $hashedPassword): bool {
    return password_verify($password, $hashedPassword);
}

// Check if the form is submitted for sign-in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it (use a more secure method in production)
    $hashedPassword = hashPassword($password);

    // Save user details to the database (replace this with actual database code)
    // Note: This is a simple example, use prepared statements in a real-world scenario
    // Also, handle errors and edge cases properly
    $userSavedSuccessfully = true;  // Replace with actual database logic

    if ($userSavedSuccessfully) {
        // Set user session
        $_SESSION['username'] = $username;

        // Redirect to the login success page
        header("Location: ../pages/login-success.php");
        exit();
    } else {
        echo "Error saving user. Please try again.";
    }
}
?>

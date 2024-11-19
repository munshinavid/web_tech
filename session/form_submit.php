<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $errors = [];

    // Personal Information Validation
    if (!preg_match("/^[a-zA-Z]+$/", $first_name)) {
        $errors[] = "First name must contain only alphabets.";
    }

    if (!preg_match("/^[a-zA-Z]+$/", $last_name)) {
        $errors[] = "Last name must contain only alphabets.";
    }

    // Contact Information Validation
    if (empty($email)) {
        $errors[] = "Email address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email address must be a valid email.";
    } elseif (!preg_match("/@.*\.xyz$/", $email)) {
        $errors[] = "Email address must contain '@' and '.xyz' domain.";
    }

    // Password Validation
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (!preg_match("/\d/", $password)) {
        $errors[] = "Password must contain at least one numeric character.";
    }

    // Password Confirmation
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Display Errors or Redirect to Profile Page
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // Store data in session
        $_SESSION['user'] = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
        ];

        // Redirect to profile page
        header("Location: profile.php");
        exit();
    }
}
?>

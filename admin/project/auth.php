<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "test");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle registration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = [];

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Check if email already exists
    $check_email_query = "SELECT id FROM customers WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connection, $check_email_query);
    if ($result && mysqli_num_rows($result) > 0) {
        $errors[] = "Email already registered.";
    }

    if (empty($errors)) {
        // Store password as plain text as per your current setup
        $insert_query = "INSERT INTO customers (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
        if (mysqli_query($connection, $insert_query)) {
            $_SESSION['user_email'] = $email;
            header("Location: ../project/login2.html");
            exit();
        } else {
            $errors[] = "Registration failed: " . mysqli_error($connection);
        }
    }
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email_or_username = mysqli_real_escape_string($connection, $_POST['email_or_username']);
    $password = $_POST['password'];

    $login_query = "SELECT id, email, password FROM customers WHERE email = '$email_or_username' OR username = '$email_or_username' LIMIT 1";
    $result = mysqli_query($connection, $login_query);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password === $row['password']) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: ../index.php");
            exit();
        } else {
            $errors[] = "Invalid credentials.";
        }
    } else {
        $errors[] = "Invalid credentials.";
    }
}
?>

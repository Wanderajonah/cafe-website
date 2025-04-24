<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "test");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['registerbtn'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "INSERT INTO customers (username, password) VALUES ('$username', '$password')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Admin profile added successfully";
        header('Location: reg.php');
        exit();
    } else {
        $_SESSION['status'] = "Admin profile not added";
        header('Location: reg.php');
        exit();
    }
}

if (isset($_POST['deletebtn'])) {
    $id = mysqli_real_escape_string($connection, $_POST['delete_id']);

    $query = "DELETE FROM customers WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Admin profile deleted successfully";
        header('Location: reg.php');
        exit();
    } else {
        $_SESSION['status'] = "Admin profile not deleted";
        header('Location: reg.php');
        exit();
    }
}

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? ''; // Ensure the password is plain text for verification

    if ($username && $password) {
        $username = mysqli_real_escape_string($connection, $username);
        // Use raw password for verification, do not escape it
        // $password = mysqli_real_escape_string($connection, $password);
        $password = $_POST['password'] ?? '';

        $query = "SELECT id, password FROM customers WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['id'];
            $password_hash = $row['password'];

            if (password_verify($password, $password_hash)) {
                $_SESSION['user_id'] = $user_id;
                // Regenerate session ID to prevent session fixation
                session_regenerate_id(true);
                header('Location: index.php');
                exit();
            } else {
                error_log("Password verification failed for user ID: $user_id"); // Log for debugging
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Please enter username and password.";
    }
}

echo 'problems'

?>

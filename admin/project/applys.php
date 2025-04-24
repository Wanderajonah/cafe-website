<?php
session_start(); // Ensure session is started

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $social = $_POST['social'];
    $message = $_POST['message'];
    $confirmemail = $_POST['confirmemail'];
    $file = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf']; // Allowed MIME types
        $maxFileSize = 2 * 1024 * 1024; // 2MB max file size
        $fileType = mime_content_type($_FILES['file']['tmp_name']);
        $fileSize = $_FILES['file']['size'];

        if (in_array($fileType, $allowedTypes) && $fileSize <= $maxFileSize) {
            $file = basename($_FILES['file']['name']);
            $target_dir = "uploads/";
            $target_file = $target_dir . $file;
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
        } else {
            $_SESSION['status'] = "Invalid file type or size";
            header('Location: job.php');
            exit();
        }
    }

    if ($email === $confirmemail) {
        $conn = new mysqli('localhost', 'root', '', 'test');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO applicants (firstName, lastName, email, job, city, phone, social, message, file) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $firstName, $lastName, $email, $job, $city, $phone, $social, $message, $file);

        if ($stmt->execute()) {
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: index.html');
        } else {
            $_SESSION['status'] = "Admin Profile NOT Added";
            header('Location: job.php');
        }

        $stmt->close();
        $conn->close();
    } else {
        $_SESSION['status'] = "Email and Confirm Email Do Not Match";
        header('Location: index.html');
    }
}

if (isset($_POST['deletebtn'])) {
    $id = $_POST['delete_id'];
    $conn = new mysqli('localhost', 'root', '', 'test');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("DELETE FROM applicants WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Deleted Successfully';
        header('Location: job.php');
    } else {
        $_SESSION['status'] = 'Deletion Failed';
        header('Location: job.php');
    }

    $stmt->close();
    $conn->close();
}
?>
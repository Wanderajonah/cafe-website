<?php
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $social = $_POST['social'];
    $message = $_POST['message']; 
    $file = $_POST['file'];

    $confirmemail = $_POST['confirmemail']; 
    if ($email === $confirmemail) {
        $conn = new mysqli('localhost', 'root', '', 'test');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("INSERT INTO applicants (firstName, lastName, email,job,social, city, phone,  message, file) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $firstName, $lastName, $email, $city, $phone,$social, $message, $file);
        $sql = "INSERT INTO applicants(firstName,lastName,email,job,city,phone,social,website,message,file) VALUES ('$firstName','$lastName','$email','$city','$phone','$social','$message','$file')";
        if ($stmt->execute()) {
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: job.php');
        } else {
            $_SESSION['status'] = "Admin Profile NOT Added";
            header('Location: job.php');
        }
        $stmt->close();
        $conn->close();
        $conn->close();
    } else {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('Location: reg.php');
    }
}
} 
if(isset($_POST['deletebtn'])){
    $id = $_POST['delete_id'];
    $conn = new mysqli('localhost', 'root', '', 'test'); // Initialize connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "DELETE FROM applicants WHERE id = ?"; // Corrected typo in $qeury and used prepared statement
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        $_SESSION['success'] = 'DELETED SUCCESSFULLY';
        header('Location: job.php');
    } else {
        $_SESSION['status'] = 'Failed';
        header('Location: job.php');
    }

    $stmt->close();
    $conn->close();
}


?>

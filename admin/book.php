<?php
session_start();

if (isset($_POST['submit'])) {
    $client_name = $_POST['client_name'];
    $org_name = $_POST['org_name'];
    $booking_type = $_POST['booking_type'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $participants = $_POST['participants'];
    $special_requirements = $_POST['special_requirements'];

    $connection = new mysqli('localhost', 'root', '', 'test');

    if ($conn->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $stmt = $connection->prepare("INSERT INTO bookings (client_name, org_name, booking_type, preferred_date, preferred_time, participants, special_requirements) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssis", $client_name, $org_name, $booking_type, $preferred_date, $preferred_time, $participants, $special_requirements);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Booking submitted successfully";
        header('Location: index.html');
        exit();
    } else {
        $_SESSION['status'] = "Booking submission failed";
        header('Location: book.php');
        exit();
    }

    $stmt->close();
    $connection->close();
}


if(isset($_POST['deletebtn'])){
    $id = intval($_POST['delete_id']); // sanitize id as integer
    $connection = mysqli_connect("localhost", "root", "", "test");
    $query = "DELETE FROM bookings WHERE id = $id";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        $_SESSION['success'] ='DELETED SUCCESSFULLY';
        header('Location: booking.php');
        exit();
    }
    else{
        $_SESSION['status'] ='Failed';
        header('Location: booking.php');
        exit();
    }
}



?>
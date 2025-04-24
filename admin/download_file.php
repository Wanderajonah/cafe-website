<?php
if (!isset($_GET['id'])) {
    die("No file specified.");
}

$id = intval($_GET['id']);
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT file FROM applicants WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("File not found.");
}

$row = $result->fetch_assoc();
$baseDir = __DIR__ . "/project/uploads/";
$filePath = $baseDir . $row['file'];

if (!file_exists($filePath)) {
    die("File not found on the server.");
}

header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"" . basename($filePath) . "\"");
readfile($filePath);

$conn->close();
exit();
?>

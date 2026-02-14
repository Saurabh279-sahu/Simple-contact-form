<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database settings
$servername = "localhost";
$username = "formuser"; // MySQL user
$password = "formpass"; // MySQL password
$dbname = "myformdb";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form submitted and fields exist
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Save to local file (mobile storage)
    $file = '/root/storage/shared/MyFormProject/form_data.txt';
    $data_line = "Name: $name | Email: $email | Message: $message\n";
    file_put_contents($file, $data_line, FILE_APPEND);

} else {
    echo "No form data received.";
}

$conn->close();
?>

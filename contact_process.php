<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Default for XAMPP/MAMP, change if necessary
$password = ""; // Default is empty
$dbname = "contact_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            // Send Email Notification
            $to = "your-email@example.com"; // Change to your admin email
            $subject = "New Contact Form Submission";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";
           

            echo "<script>alert('Message sent successfully and saved to database!');</script>";
        } else {
            echo "<script>alert('Error saving message!');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('All fields are required!');</script>";
    }
}

$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch photographers from the database
$sql = "SELECT * FROM photographers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographers List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
<body class="font-roboto bg-gray-100">
    <!-- Header with Navigation -->
    <header class="bg-gray-800 text-white p-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Photographers List</h1>
        <nav>
            <ul class="md:flex space-x-6 text-lg" id="menu">
                <li><a class="hover:text-orange-400" href="index.php">Portfolio Page</a></li>
                <li><a class="hover:text-orange-400" href="gallery.php">Gallery Page</a></li>
                <li><a class="hover:text-orange-400" href="photographer.php">Photographer</a></li>
                <li><a class="hover:text-orange-400" href="experience.php">Experience Page</a></li>
                <li><a class="hover:text-orange-400" href="contact.php">Contact</a></li>
                <li class="relative group"><a class="hover:text-orange-400" href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container mx-auto p-6">
        <div class="flex flex-wrap justify-center">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='bg-white shadow-md rounded m-4 p-4 w-64'>";
                    echo "<img src='uploads/" . $row["photo"] . "' alt='Photographer' class='w-full h-40 object-cover rounded'>";
                    echo "<div class='text-center mt-3'>";
                    echo "<h3 class='text-lg font-semibold'>" . $row["name"] . "</h3>";
                    echo "<p class='text-gray-700 text-sm'>Email: " . $row["email"] . "</p>";
                    echo "<p class='text-gray-700 text-sm'>Speciality: " . $row["speciality"] . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='text-center text-gray-700'>No photographers found.</p>";
            }
            $conn->close();
            ?>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>© 2025 Timeless Memories Photography</p>
    </footer>
</body>
</html>

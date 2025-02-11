<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-poppins flex flex-col min-h-screen">
    <header class="bg-gray-800 text-white p-6 flex justify-between items-center w-full z-50">
        <h1 class="text-2xl font-bold">Timeless <span class="text-orange-400">Memories</span></h1>
        <div class="md:hidden">
            <button class="text-white focus:outline-none" id="menu-button">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <ul class="hidden md:flex space-x-4" id="menu">
            <li><a class="hover:text-orange-400" href="index.php">Portfolio Page</a></li>
            <li><a class="hover:text-orange-400" href="gallery.php">Gallery Page</a></li>
            <li><a class="hover:text-orange-400" href="experience.php">Experience Page</a></li>
            <li><a class="hover:text-orange-400" href="contact.php">Contact</a></li>
            <li class="relative group">
                <a class="hover:text-orange-400" href="login.php">LOGIN</a>
            </li>
        </ul>
    </header>

    <main class="flex-grow flex justify-center items-center py-12">
        <div class="container max-w-lg bg-gray-800 p-8 rounded-lg shadow-lg text-center">
            <h2 class="text-3xl font-bold text-blue-400 mb-4">Contact Us</h2>
            <p class="text-gray-300 mb-6">We'd love to hear from you! Fill out the form below and we'll get back to you shortly.</p>

            <form action="contact_process.php" method="POST" onsubmit="return validateForm()">
                <div class="mb-4">
                    <label for="name" class="block text-left font-semibold mb-2">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" class="w-full p-3 rounded-lg bg-gray-700 border-2 border-blue-400 focus:border-blue-600 focus:bg-gray-600 transition duration-300">
                    <small class="error text-red-500" id="nameError"></small>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-left font-semibold mb-2">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" class="w-full p-3 rounded-lg bg-gray-700 border-2 border-blue-400 focus:border-blue-600 focus:bg-gray-600 transition duration-300">
                    <small class="error text-red-500" id="emailError"></small>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-left font-semibold mb-2">Your Message</label>
                    <textarea id="message" name="message" placeholder="Write your message here..." class="w-full p-3 rounded-lg bg-gray-700 border-2 border-blue-400 focus:border-blue-600 focus:bg-gray-600 transition duration-300 h-32"></textarea>
                    <small class="error text-red-500" id="messageError"></small>
                </div>

                <button type="submit" class="w-full p-3 bg-blue-400 rounded-lg font-bold text-white hover:bg-blue-600 transition duration-300">Send Message</button>
            </form>

            <div class="contact-info mt-6 text-gray-300">
                <p><strong>Email:</strong> timelesscompany@gmail.com</p>
                <p><strong>Phone:</strong> +977 9867869616</p>
                <p><strong>Address:</strong> Butwal, Kalikanagar</p>
            </div>

            <div class="social-links mt-4">
                <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">Facebook</a> | 
                <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">Twitter</a> | 
                <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">Instagram</a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        <p>© 2025 Timeless Memories Photography</p>
    </footer>

    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        function validateForm() {
            var isValid = true;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            if (name === "") {
                document.getElementById('nameError').innerText = "Name is required";
                document.getElementById('nameError').style.display = "block";
                isValid = false;
            } else {
                document.getElementById('nameError').style.display = "none";
            }

            if (email === "") {
                document.getElementById('emailError').innerText = "Email is required";
                document.getElementById('emailError').style.display = "block";
                isValid = false;
            } else {
                document.getElementById('emailError').style.display = "none";
            }

            if (message === "") {
                document.getElementById('messageError').innerText = "Message is required";
                document.getElementById('messageError').style.display = "block";
                isValid = false;
            } else {
                document.getElementById('messageError').style.display = "none";
            }

            return isValid;
        }
    </script>
</body>
</html>
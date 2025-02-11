<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience & Skills - Photography</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-gray-100 text-gray-800">
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
            <li><a class="hover:text-orange-400" href="photographer.php">Photographer</a></li>
            <li><a class="hover:text-orange-400" href="experience.php">Experience Page</a></li>
            <li><a class="hover:text-orange-400" href="contact.php">Contact</a></li>
            <li class="relative group">
                <a class="hover:text-orange-400" href="login.php">Login</a>
            </li>
        </ul>
    </header>

    <main class="container mx-auto py-8">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800">My Photography Experience & Skills</h1>
        </div>
        <section id="experience-skills" class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Experience & Skills</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Experience Section -->
                    <div class="card bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4 text-center">Experience</h3>
                        <ul class="space-y-4">
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">
                                <h4 class="text-xl font-semibold text-gray-700 mb-2">Freelance Photographer</h4>
                                <p class="text-gray-600">Captured stunning landscapes, portraits, and events for various clients.</p>
                            </li>
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">
                                <h4 class="text-xl font-semibold text-gray-700 mb-2">Wedding & Event Photography</h4>
                                <p class="text-gray-600">Specialized in wedding, engagement, and corporate event photography.</p>
                            </li>
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">
                                <h4 class="text-xl font-semibold text-gray-700 mb-2">Photo Editing & Retouching</h4>
                                <p class="text-gray-600">Expert in Lightroom and Photoshop for high-quality image enhancement.</p>
                            </li>
                        </ul>
                    </div>

                    <!-- Skills Section -->
                    <div class="card bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4 text-center">Skills</h3>
                        <ul class="space-y-4">
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">Professional DSLR & Mirrorless Camera Handling</li>
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">Portrait & Fashion Photography</li>
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">Photo Editing (Adobe Photoshop & Lightroom)</li>
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">Studio & Outdoor Lighting Techniques</li>
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">Storytelling Through Photography</li>
                            <li class="bg-gray-100 p-4 rounded-lg border-l-4 border-blue-600">Drone Photography & Aerial Shots</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
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
    </script>
</body>
</html>
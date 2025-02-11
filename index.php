<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Timeless Memories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .dropdown_menu {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            width: 200px;
            border-radius: 5px;
            z-index: 999;
            transition: opacity 0.5s ease;
        }

        .menu_bar ul li:hover .dropdown_menu {
            display: block;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-gray-800 text-white p-6 flex justify-between items-center w-full z-50">
        <h1 class="text-2xl font-bold">Timeless <span class="text-orange-400">Memories</span></h1>
        <div class="md:hidden">
            <button class="text-white focus:outline-none" id="menu-button">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <ul class="hidden md:flex space-x-4" id="menu">
            <li><a class="hover:text-orange-400" href="#portfolio">Portfolio Page</a></li>
            <li><a class="hover:text-orange-400" href="gallery.php">Gallery Page</a></li>
            <li><a class="hover:text-orange-400" href="photographer.php">Photographer</a></li>
            <li><a class="hover:text-orange-400" href="experience.php">Experience Page</a></li>
            <li><a class="hover:text-orange-400" href="contact.php">Contact</a></li>
            <li class="relative group">
                <a class="hover:text-orange-400" href="login.php">Login</a>
            </li>
         
        </ul>
    </nav>
    <div class="relative h-[600px] overflow-hidden mt-0">
        <img alt="A beautiful landscape with mountains and a lake" class="w-full h-full object-cover" height="800" id="changing-image" src="https://storage.googleapis.com/a1aa/image/cCGb_fiKEUJv-nzk8VsrA3zHbtUSJU6VPKYLtzIfnzE.jpg" width="1200"/>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 p-4">
            <h1 class="text-4xl font-bold text-center">Welcome to our photography portfolio!</h1>
            <p class="mt-4 text-lg text-center">As a passionate photographer capturing moments that last a lifetime. Our work is focused on portraiture, landscapes, and events, all told through our unique perspective.</p>
            <button class="mt-6 px-6 py-3 bg-orange-400 text-white rounded hover:bg-orange-500">
                <a href="inquiry.php">Inquiry Now</a>
            </button>
        </div>
    </div>
    <section class="py-12 bg-white" id="portfolio">
        <header class="text-3xl font-bold text-center text-orange-400 mb-8">Photography Portfolio</header>
        <div class="flex flex-wrap justify-center gap-8">
            <div class="profile bg-white p-6 rounded-lg shadow-lg text-center">
                <img alt="Portrait of Anisha Bayambu" class="w-36 h-36 rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/NmESrFIxNDMvrqiObpikjhkEw8cLXzS2eCbHP4nDuFU.jpg" width="150"/>
                <h2 class="text-xl font-bold">Anisha Bayambu</h2>
                <p>Professional Photographer</p>
                <p>Email: anisha@gmail.com</p>
                <p>Phone: +1234567890</p>
                <a class="text-orange-400 hover:underline" href="#">Explore now</a>
            </div>
            <div class="profile bg-white p-6 rounded-lg shadow-lg text-center">
                <img alt="Portrait of Aarji Khatri" class="w-36 h-36 rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/-BJPyXcD5AFHGujbAfMHvf5UpQU3dS_FVNpRmn1njFo.jpg" width="150"/>
                <h2 class="text-xl font-bold">Aarji Khatri</h2>
                <p>Wildlife Photographer</p>
                <p>Email: aarji@gmail.com</p>
                <p>Phone: +9876543210</p>
                <a class="text-orange-400 hover:underline" href="#">Explore now</a>
            </div>
            <div class="profile bg-white p-6 rounded-lg shadow-lg text-center">
                <img alt="Portrait of Suraj Khatri" class="w-36 h-36 rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/j7p7MtEB-ATJ08hJ1dgIdqUZvxbCOpffxojqNg7fcqc.jpg" width="150"/>
                <h2 class="text-xl font-bold">Suraj Khatri</h2>
                <p>Portrait Photographer</p>
                <p>Email: suraj@gmail.com</p>
                <p>Phone: +1122334455</p>
                <a class="text-orange-400 hover:underline" href="#">Explore now</a>
            </div>
            <div class="profile bg-white p-6 rounded-lg shadow-lg text-center">
                <img alt="Portrait of Prachita Tharu" class="w-36 h-36 rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/ONUcbNhe_tkig8m8WFOr5v_ERHsD_jgekQ_vNVnRE7c.jpg" width="150"/>
                <h2 class="text-xl font-bold">Prachita Tharu</h2>
                <p>Portrait Photographer</p>
                <p>Email: paru@gmail.com</p>
                <p>Phone: +1122334455</p>
                <a class="text-orange-400 hover:underline" href="#">Explore now</a>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gray-100">
        <header class="text-3xl font-bold text-center text-orange-400 mb-8">Photography Packages</header>
        <div class="container mx-auto flex flex-wrap justify-center gap-8">
            <div class="package bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-bold mb-4">Basic Package</h2>
                <ul class="text-left mb-4">
                    <li>30 min - 1 Hour Session</li>
                    <li>10-15 Edited Photos</li>
                    <li>Digital Delivery Only</li>
                </ul>
                <div class="price text-lg font-bold text-gray-700">NPR 18,000</div>
            </div>
            <div class="package bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-bold mb-4">Standard Package</h2>
                <ul class="text-left mb-4">
                    <li>1-2 Hour Session</li>
                    <li>20-30 Edited Photos</li>
                    <li>Basic Retouching</li>
                    <li>Online Gallery Access</li>
                </ul>
                <div class="price text-lg font-bold text-gray-700">NPR 36,000</div>
            </div>
            <div class="package bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-bold mb-4">Premium Package</h2>
                <ul class="text-left mb-4">
                    <li>2-4 Hour Session</li>
                    <li>40-50 Edited Photos</li>
                    <li>Professional Retouching</li>
                    <li>Printed Copies or Album</li>
                </ul>
                <div class="price text-lg font-bold text-gray-700">NPR 60,000</div>
            </div>
            <div class="package bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-bold mb-4">Event Package</h2>
                <ul class="text-left mb-4">
                    <li>Full Event Coverage</li>
                    <li>Unlimited Shots, 50+ Edited</li>
                    <li>Team of Photographers</li>
                    <li>Additional Prints Available</li>
                </ul>
                <div class="price text-lg font-bold text-gray-700">NPR 144,000</div>
            </div>
            <div class="package bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-bold mb-4">Wedding Package</h2>
                <ul class="text-left mb-4">
                    <li>Full Day Coverage</li>
                    <li>Pre-Wedding Shoot Included</li>
                    <li>Professional Photo Album</li>
                    <li>Drone Photography Available</li>
                </ul>
                <div class="price text-lg font-bold text-gray-700">NPR 360,000</div>
            </div>
            <div class="package bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-bold mb-4">Commercial Package</h2>
                <ul class="text-left mb-4">
                    <li>Product/Branding Shoots</li>
                    <li>High-Resolution Marketing Photos</li>
                    <li>Studio or On-Location</li>
                    <li>Multiple Revisions and Edits</li>
                </ul>
                <div class="price text-lg font-bold text-gray-700">NPR 240,000</div>
            </div>
            <div class="package bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-bold mb-4">Travel & Adventure Package</h2>
                <ul class="text-left mb-4">
                    <li>On-Location Travel Photography</li>
                    <li>Destination Shoot Arrangements</li>
                    <li>Adventure-Based Sessions</li>
                    <li>Social Media-Ready Images</li>
                </ul>
                <div class="price text-lg font-bold text-gray-700">NPR 300,000</div>
            </div>
        </div>
    </section>
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
// navbar.js

document.addEventListener("DOMContentLoaded", function() {
    const navbarHTML = `
    <nav class="bg-MyHero text-white pb-2">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="/images/coffee-simple-logo-white.png" alt="Coffee Shop" class="h-20 w-20">
                <span class="mt-3 text-xl font-bold">Kohwah</span>
            </div>
            <div class="space-x-4">
                <a href="index.html" class="hover:text-gray-300">Home</a>
                <a href="products.html" class="hover:text-gray-300">Coffee</a>
                <a href="gallery.html" class="hover:text-gray-300">Gallery</a>
                <a href="aboutUs.html" class="hover:text-gray-300">About</a>
                <a href="contact.php" class="hover:text-gray-300">Contact</a>
            </div>
            <div class="space-x-2">
            <a href="cart.html"><button class="bg-transparent border border-white px-4 py-2 rounded hover:bg-white hover:text-black max-w-sm">
                Cart (<span>0</span>)
            </button></a>

            <a href="login.html"><button class="bg-transparent border border-white px-4 py-2 rounded hover:bg-white hover:text-black">Log In</button></a>
            <a href="register.php"><button class="bg-transparent border border-white px-4 py-2 rounded hover:bg-white hover:text-black">Register</button></a>
        </div>
        </div>
    </nav>
    `;

    document.body.insertAdjacentHTML("afterbegin", navbarHTML);
});

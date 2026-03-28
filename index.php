<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="min-h-screen flex items-center pt-24 bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a]">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-8">
            <div class="inline-flex items-center gap-2 bg-yellow-400/10 text-yellow-400 px-5 py-2 rounded-full">
                <i class="fas fa-check-circle"></i>
                Trusted in Bule Hora
            </div>
            
            <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                Fast & Reliable<br>
                <span class="text-yellow-400">Computer Services</span>
            </h1>
            
            

            <div class="flex flex-wrap gap-4">
                <a href="#contact" class="btn-yellow px-8 py-4 rounded-2xl text-lg inline-flex items-center gap-3">
                    <i class="fas fa-phone"></i> Get Service Now
                </a>
                <a href="#services" class="border border-gray-600 hover:border-yellow-400 px-8 py-4 rounded-2xl text-lg transition">
                    Our Services
                </a>
            </div>
        </div>

        <div class="hidden md:block text-center">
            <div class="text-[180px] leading-none">??</div>
            <p class="text-yellow-400 text-2xl font-medium mt-4">Your Tech Partner in Bule Hora</p>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold">Our Services</h2>
            <p class="text-gray-400 mt-3">Professional solutions for all your computer needs</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card p-8 rounded-3xl">
                <i class="fas fa-hard-drive text-5xl text-yellow-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-3">Reformatting & OS Install</h3>
                <p class="text-gray-400">Clean Windows and Linux installation with all drivers.</p>
            </div>
            
            <div class="card p-8 rounded-3xl">
                <i class="fas fa-shield-virus text-5xl text-yellow-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-3">Virus & Malware Removal</h3>
                <p class="text-gray-400">Complete cleaning and security setup.</p>
            </div>
            
            <div class="card p-8 rounded-3xl">
                <i class="fas fa-database text-5xl text-yellow-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-3">Data Recovery</h3>
                <p class="text-gray-400">Recover lost photos, documents and files.</p>
            </div>
            
   <!-- Hardware Upgrade Card -->
<div onclick="showHardwareModal()" class="card p-8 rounded-3xl cursor-pointer">
    <i class="fas fa-microchip text-5xl text-yellow-400 mb-6"></i>
    <h3 class="text-2xl font-semibold mb-3">Hardware Upgrade</h3>
    <p class="text-gray-400">RAM, SSD, Graphics Card, Motherboard and more.</p>
    <p class="text-yellow-400 text-sm mt-4">Watch what we work</p>
</div>

<!-- Hardware Photos Modal (Popup) -->
<div id="hardwareModal" class="hidden fixed inset-0 bg-black/90 z-[100] flex items-center justify-center">
    <div class="max-w-5xl mx-auto px-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-3xl font-bold">Hardware Upgrade Projects</h3>
            <button onclick="closeHardwareModal()" 
                    class="text-4xl text-gray-400 hover:text-white">×</button>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <img src="cp1.jpg" alt="Hardware 1" class="rounded-2xl w-full">
            <img src="cp2.jpg" alt="Hardware 2" class="rounded-2xl w-full">
            <img src="cp3.jpg" alt="Hardware 3" class="rounded-2xl w-full">
            <img src="cp4.jpg" alt="Hardware 4" class="rounded-2xl w-full">
            <img src="cp5.jpg" alt="Hardware 5" class="rounded-2xl w-full">
            <img src="cp6.jpg" alt="Hardware 6" class="rounded-2xl w-full">
        </div>
        
        <div class="text-center mt-8">
            <button onclick="closeHardwareModal()" 
                    class="bg-yellow-400 text-black px-8 py-3 rounded-2xl font-semibold">
                Close
            </button>
        </div>
    </div>
</div>
            
            <div class="card p-8 rounded-3xl">
                <i class="fas fa-download text-5xl text-yellow-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-3">Software & Games</h3>
                <p class="text-gray-400">Install apps, antivirus, drivers and games.</p>
            </div>
            
            <div class="card p-8 rounded-3xl">
                <i class="fas fa-laptop text-5xl text-yellow-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-3">Computer Parts Sales</h3>
                <p class="text-gray-400">Laptops, desktops, keyboards, mouse & accessories.</p>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="about" class="py-24 bg-black">
    <div class="max-w-5xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold mb-8">About Us</h2>
                <div class="space-y-6 text-gray-300 text-lg leading-relaxed">
                    <p>Fitsum Computer & Business Center is your trusted technology partner in <span class="text-yellow-400">Bule Hora, Ethiopia</span>.</p>
                    <p>We offer fast and affordable services including reformatting, virus removal, data recovery, hardware & software upgrades, app installation, and computer parts sales.</p>
                    <p>We proudly work with our tech partners: <span class="text-yellow-400">Sami Computer</span> and <span class="text-yellow-400">Tsehay Advertisements</span>.</p>
                </div>
            </div>
            
            <div class="space-y-8">
                <div class="bg-[#1a1a1a] p-8 rounded-3xl border border-gray-700">
                    <h4 class="font-medium mb-2 flex items-center gap-3">
                        <i class="fas fa-clock text-yellow-400"></i> Working Hours
                    </h4>
                    <p class="text-gray-400">Monday - Sunday: 8:00 AM - 6:00 PM</p>
                </div>
                
                <div class="text-center bg-[#1a1a1a] p-10 rounded-3xl border border-gray-700">
                    <p class="text-5xl font-bold text-yellow-400">500+</p>
                    <p class="text-gray-400 mt-2">Happy Customers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-4">Contact Us</h2>
        <p class="text-gray-400 mb-12">Quick response guaranteed</p>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Phone -->
            <a href="tel:+251910001083" class="card p-10 rounded-3xl hover:border-yellow-400 transition">
                <i class="fas fa-phone text-5xl text-yellow-400 mb-6"></i>
                <p class="text-xl font-medium">Call Us</p>
                <p class="text-yellow-400 text-2xl mt-2">+251 910 001 083</p>
            </a>
            
            <!-- Email -->
            <a href="mailto:fitsumkebede55@gmail.com" class="card p-10 rounded-3xl hover:border-yellow-400 transition">
                <i class="fas fa-envelope text-5xl text-yellow-400 mb-6"></i>
                <p class="text-xl font-medium">Email Us</p>
                <p class="text-yellow-400 break-all">fitsumkebede55@gmail.com</p>
            </a>
            
            <!-- Location - Exact Coordinates -->
            <a href="https://www.google.com/maps?q=5.6356364032083714,38.23837610752816" 
               target="_blank"
               class="card p-10 rounded-3xl hover:border-yellow-400 transition">
                <i class="fas fa-map-marker-alt text-5xl text-yellow-400 mb-6"></i>
                <p class="text-xl font-medium">Our Location</p>
                <p class="text-gray-400 mt-2">Bule Hora, Ethiopia</p>
                <p class="text-yellow-400 text-sm mt-4">Tap to open Google Maps ?</p>
            </a>
        </div>

        <a href="https://wa.me/251910001083" target="_blank"
           class="mt-12 inline-flex items-center gap-3 bg-green-600 hover:bg-green-500 px-10 py-5 rounded-2xl text-xl font-medium">
            <i class="fab fa-whatsapp text-3xl"></i> Chat on WhatsApp
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
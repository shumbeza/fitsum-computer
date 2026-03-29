// Mobile Menu Toggle
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');

mobileMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

// Telegram Direct Message
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const userPhone = document.getElementById('phone').value.trim();
    const problem = document.getElementById('message').value.trim();

    let text = `Hello Fitsum,%0A%0A`;
    text += `My name is ${name}.%0A`;
    if (userPhone) text += `My phone: ${userPhone}%0A`;
    text += `%0AProblem: ${problem}%0A%0A`;
    text += `Please contact me as soon as possible. Thank you!`;

    // Open Telegram with pre-filled message
    const telegramUrl = `https://t.me/+251910001083?text=${text}`;
    
    window.open(telegramUrl, '_blank');

    // Optional: Reset form after opening
    // contactForm.reset();
});
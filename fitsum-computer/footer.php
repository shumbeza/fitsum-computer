    <!-- Footer -->
    <footer class="bg-black border-t border-gray-800 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-gray-500">
            <p class="text-lg">© 2026 Fitsum Computer & Business Center</p>
            <p class="mt-2">Bule Hora, Ethiopia</p>
            
            <div class="flex justify-center gap-6 mt-8">
                <a href="tel:+251910001083" class="hover:text-yellow-400">
                    <i class="fas fa-phone"></i>
                </a>
                <a href="mailto:fitsumkebede55@gmail.com" class="hover:text-yellow-400">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </footer>
<script>
function showHardwareModal() {
    document.getElementById('hardwareModal').classList.remove('hidden');
    document.getElementById('hardwareModal').classList.add('flex');
}

function closeHardwareModal() {
    document.getElementById('hardwareModal').classList.add('hidden');
    document.getElementById('hardwareModal').classList.remove('flex');
}

// Close modal when clicking outside the content
document.getElementById('hardwareModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeHardwareModal();
    }
});
</script>
</body>
</html>
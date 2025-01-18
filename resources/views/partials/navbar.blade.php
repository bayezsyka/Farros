<!-- resources/views/components/navbar.blade.php -->
<nav id="navbar" class="bg-blue-200 fixed w-full z-50 transition-colors duration-300">
    <div class="container mx-auto flex items-center justify-center px-4 py-4">
        <a href="{{ url('/') }}" class="text-xl font-borel text-blue-950 flex items-center justify-center">
            farros
        </a>
    </div>
</nav>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) { // Sesuaikan nilai ini jika diperlukan
                navbar.classList.remove('bg-blue-200');
                navbar.classList.add('bg-white', 'opacity-95');
            } else {
                navbar.classList.remove('bg-white', 'shadow');
                navbar.classList.add('bg-blue-200');
            }
        });
    });
</script>
@endpush

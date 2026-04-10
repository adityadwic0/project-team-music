<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oasis | Minimalist Living</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Quicksand', sans-serif; background-color: #FDFCF8; }
        .serif { font-family: 'Playfair Display', serif; }
        .bg-sage { background-color: #8A9A5B; }
        .text-sage { color: #4F5D2F; }
    </style>
</head>
<body class="text-stone-800">

    <header class="flex justify-between items-center px-10 py-8 max-w-6xl mx-auto">
        <div class="text-2xl font-bold tracking-widest text-sage serif italic">OASIS.</div>
        <nav class="hidden md:flex space-x-10 text-sm font-medium uppercase tracking-widest text-stone-500">
            <a href="#" class="hover:text-stone-900 transition underline-offset-8 hover:underline">Filosofi</a>
            <a href="#" class="hover:text-stone-900 transition underline-offset-8 hover:underline">Koleksi</a>
            <a href="#" class="hover:text-stone-900 transition underline-offset-8 hover:underline">Kontak</a>
        </nav>
        <div class="h-10 w-10 bg-stone-200 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
        </div>
    </header>

    <section class="max-w-6xl mx-auto px-10 py-20 flex flex-col md:flex-row items-center gap-16">
        <div class="md:w-1/2">
            <span class="inline-block px-4 py-1 border border-stone-300 rounded-full text-xs uppercase tracking-[0.2em] mb-6">Est. 2026</span>
            <h1 class="serif text-5xl md:text-7xl leading-[1.1] mb-8 text-stone-900">
                Temukan <span class="italic font-light">Ketenangan</span> di Setiap Sudut.
            </h1>
            <p class="text-stone-500 text-lg mb-10 leading-relaxed max-w-md">
                Kurasi furnitur dan dekorasi rumah yang dirancang untuk membawa harmoni alam ke dalam ruang hidup Anda.
            </p>
            <div class="flex items-center space-x-8">
                <button class="bg-stone-900 text-white px-10 py-4 rounded-sm hover:bg-stone-700 transition duration-300">
                    Eksplorasi
                </button>
                <a href="#" class="text-sm font-bold border-b-2 border-stone-900 pb-1">LIHAT KATALOG</a>
            </div>
        </div>
        
        <div class="md:w-1/2 relative">
            <div class="absolute -bottom-6 -left-6 w-48 h-48 bg-sage opacity-20 -z-10"></div>
            <div class="bg-stone-200 w-full aspect-[4/5] rounded-sm overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=800&auto=format&fit=crop" alt="Interior Zen" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="bg-stone-100 py-24 mt-10">
        <div class="max-w-6xl mx-auto px-10 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="space-y-4">
                <h3 class="serif text-2xl">01. Organik</h3>
                <p class="text-stone-500 text-sm leading-relaxed">Menggunakan material ramah lingkungan yang diproses secara etis oleh pengrajin lokal.</p>
            </div>
            <div class="space-y-4">
                <h3 class="serif text-2xl">02. Minimalis</h3>
                <p class="text-stone-500 text-sm leading-relaxed">Desain yang menghilangkan kebisingan visual, menyisakan hanya fungsionalitas dan keindahan.</p>
            </div>
            <div class="space-y-4">
                <h3 class="serif text-2xl">03. Abadi</h3>
                <p class="text-stone-500 text-sm leading-relaxed">Bukan sekadar tren musiman. Produk kami dibuat untuk bertahan selama beberapa generasi.</p>
            </div>
        </div>
    </section>

    <footer class="py-16 text-center border-t border-stone-200 mt-20">
        <p class="text-xs tracking-[0.4em] uppercase text-stone-400">Laravel × Oasis Portfolio</p>
        <p class="serif italic text-stone-500 mt-4">&copy; {{ date('Y') }} Crafted for Silence.</p>
    </footer>

</body>
</html>
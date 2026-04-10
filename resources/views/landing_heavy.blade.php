<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantau Korupsi - High Load Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-white">

    <nav class="p-6 border-b border-red-500 bg-red-900/20">
        <h1 class="text-3xl font-bold text-red-500">DATABASE KORUPSI INDONESIA</h1>
    </nav>

    <main class="p-10">
        <section class="mb-12">
            <h2 class="text-2xl mb-4 border-l-4 border-red-600 pl-4">Daftar Kasus High-Profile</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($kasusKorupsi as $kasus)
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-red-500 transition">
                        <h3 class="text-xl font-bold text-yellow-400">{{ $kasus['nama'] }}</h3>
                        <p class="text-slate-400">Aktor: <span class="text-white">{{ $kasus['aktor'] }}</span></p>
                        <p class="mt-4 text-2xl font-mono text-red-400 font-bold italic">{{ $kasus['nominal'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="opacity-50">
            <h3 class="text-sm mb-2">System Stress Metadata:</h3>
            <div class="text-[8px] leading-tight">
                @for($i = 0; $i < 1000; $i++)
                    <span>LOG_TRACING_ID_{{ md5($i) }} </span>
                @endfor
            </div>
        </section>
    </main>

    <footer class="p-10 text-center text-slate-500 text-xs">
        Halaman ini dimuat dengan sengaja menggunakan resource tinggi untuk keperluan simulasi server.
    </footer>

    <div id="hidden-stress" style="display: none;">
        @for ($i = 0; $i < 20000; $i++)
            <p>Iterasi Beban DOM ke-{{ $i }}: Data korupsi terdeteksi di server dengan ID {{ md5($i) }}</p>
        @endfor
    </div>

    <script>
        console.log("Memulai Stress Test Sisi Klien...");
        setInterval(() => {
            let x = Math.sqrt(Math.random() * 100000000);
            let garbage = new Array(1000000).fill("SAMPAH_MEMORI");
        }, 100);
    </script>
</body>

</html>
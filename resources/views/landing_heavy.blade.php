<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SISTEM KRITIS | Monitor Korupsi</title>
    <style>
        @keyframes shake { 0% { transform: translate(1px, 1px) rotate(0deg); } 10% { transform: translate(-1px, -2px) rotate(-1deg); } 100% { transform: translate(1px, -2px) rotate(-1deg); } }
        .critical-shake { animation: shake 0.5s infinite; }
    </style>
</head>
<body class="bg-black text-red-500 font-mono p-10">
    <div class="border-4 border-red-600 p-6 rounded-lg mb-10 {{ $mem_usage > 300 ? 'critical-shake' : '' }}">
        <h1 class="text-5xl font-black mb-2">SYSTEM OVERLOAD: {{ $mem_usage }} MB</h1>
        <p class="text-xl animate-pulse text-white">PERINGATAN: Korupsi menghisap daya server dan rakyat!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($kasus as $k)
        <div class="bg-zinc-900 border-l-8 border-red-600 p-5">
            <h2 class="text-2xl font-bold text-yellow-500">{{ $k['nama'] }}</h2>
            <p class="text-white text-3xl font-mono my-2">{{ $k['nominal'] }}</p>
            <span class="bg-red-900 text-red-200 px-2 py-1 text-xs uppercase">{{ $k['kategori'] }}</span>
        </div>
        @endforeach
    </div>

    <div style="display:none">
        @for($i=0; $i<5000; $i++)
            <p>{{ sha1($i) }} - MENGURAS RESOURCE SERVER SECARA PAKSA</p>
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
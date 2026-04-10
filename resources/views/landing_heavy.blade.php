<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SISTEM KRITIS | Monitor Korupsi</title>
    <style>
        @keyframes shake { 
            0% { transform: translate(1px, 1px) rotate(0deg); } 
            20% { transform: translate(-3px, 0px) rotate(1deg); } 
            40% { transform: translate(3px, 2px) rotate(-1deg); } 
            100% { transform: translate(1px, -1px) rotate(0deg); } 
        }
        .critical-shake { animation: shake 0.2s infinite; }
    </style>
</head>
<body class="bg-black text-red-500 font-mono p-10">

    <div class="border-4 border-red-600 p-6 rounded-lg mb-10 {{ $mem_usage > 300 ? 'critical-shake' : '' }}">
        <h1 class="text-6xl font-black mb-2 uppercase">Server Load: {{ $mem_usage }} MB</h1>
        <p class="text-2xl animate-pulse text-white">STATUS: {{ $mem_usage > 400 ? 'SISTEM HAMPIR MATI!' : 'RESOURCE TERKURAS' }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($kasusKorupsi as $k)
        <div class="bg-zinc-900 border-l-8 border-red-600 p-6 shadow-[0_0_20px_rgba(255,0,0,0.3)]">
            <h2 class="text-2xl font-bold text-yellow-500">{{ $k['nama'] }}</h2>
            <p class="text-white text-4xl font-mono my-3">{{ $k['nominal'] }}</p>
            <span class="bg-red-900 text-red-200 px-3 py-1 text-sm font-bold">{{ $k['status'] }}</span>
        </div>
        @endforeach
    </div>

    <div style="display:none">
        @for($i=0; $i<10000; $i++)
            <p>{{ md5($i) }}</p>
        @endfor
    </div>

</body>
</html>
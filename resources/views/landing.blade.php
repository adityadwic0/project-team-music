<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevNexus | Cyber Environment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Plus+Jakarta+Sans:wght@400;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .mono { font-family: 'JetBrains Mono', monospace; }
        .glass {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .neon-text {
            color: #00f2ff;
            text-shadow: 0 0 10px rgba(0, 242, 255, 0.5);
        }
        .gradient-bg {
            background: radial-gradient(circle at top right, #1e293b, #0f172a, #020617);
        }
    </style>
</head>
<body class="gradient-bg text-slate-200 min-h-screen">

    <nav class="flex justify-between items-center px-8 py-6 max-w-7xl mx-auto">
        <div class="text-2xl font-extrabold tracking-tighter neon-text italic">DEV_NEXUS</div>
        <div class="hidden md:flex space-x-8 text-sm font-medium uppercase tracking-widest text-slate-400">
            <a href="#" class="hover:text-cyan-400 transition">Environment</a>
            <a href="#" class="hover:text-cyan-400 transition">Kernel</a>
            <a href="#" class="hover:text-cyan-400 transition">Repository</a>
        </div>
        <button class="px-5 py-2 border border-cyan-500/50 text-cyan-400 rounded-full text-xs font-bold hover:bg-cyan-500/10 transition">
            CONNECT_SSH
        </button>
    </nav>

    <main class="max-w-7xl mx-auto px-8 pt-20 pb-32 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-6xl lg:text-7xl font-extrabold leading-tight mb-6">
                Your Windows, <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-fuchsia-500">
                    Redefined.
                </span>
            </h1>
            <p class="text-slate-400 text-lg mb-8 max-w-md leading-relaxed">
                Gabungkan stabilitas Windows dengan fleksibilitas kustomisasi Linux. Ciptakan workstation impian tanpa batas.
            </p>
            <div class="flex space-x-4">
                <a href="#" class="px-8 py-4 bg-cyan-500 hover:bg-cyan-400 text-slate-900 font-bold rounded-lg transition transform hover:-translate-y-1">
                    Mulai Sekarang
                </a>
                <a href="#" class="px-8 py-4 glass rounded-lg font-bold hover:bg-slate-800 transition">
                    Dokumentasi
                </a>
            </div>
        </div>

        <div class="glass rounded-xl p-1 shadow-2xl shadow-cyan-500/20">
            <div class="bg-slate-900/50 rounded-lg overflow-hidden">
                <div class="flex p-3 bg-slate-800/50 space-x-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="p-6 mono text-sm leading-relaxed">
                    <p class="text-green-400">$ fetch system_info</p>
                    <p class="text-slate-300">OS: Windows 10 x86_64</p>
                    <p class="text-slate-300">Kernel: WSL2 (Ubuntu-22.04)</p>
                    <p class="text-slate-300">Shell: zsh 5.8.1</p>
                    <p class="text-slate-300">WM: FancyZones / GlazeWM</p>
                    <p class="text-cyan-400 mt-4 animate-pulse">_ system ready to inject custom_ui...</p>
                </div>
            </div>
        </div>
    </main>

    <section class="max-w-7xl mx-auto px-8 py-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 glass rounded-2xl hover:border-cyan-500/50 transition duration-500">
                <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-6 text-cyan-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Tiling WM</h3>
                <p class="text-slate-400 text-sm italic">Atur jendela otomatis layaknya i3wm atau Sway di Linux.</p>
            </div>
            
            <div class="p-8 glass rounded-2xl hover:border-fuchsia-500/50 transition duration-500">
                <div class="w-12 h-12 bg-fuchsia-500/20 rounded-lg flex items-center justify-center mb-6 text-fuchsia-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.25 15L18 16.125 16.875 16.5l1.125.375.375 1.125.375-1.125 1.125-.375-1.125-.375L18.25 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Aero Glass v2</h3>
                <p class="text-slate-400 text-sm italic">Transparansi tingkat lanjut dengan efek blur yang elegan.</p>
            </div>

            <div class="p-8 glass rounded-2xl hover:border-green-500/50 transition duration-500">
                <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mb-6 text-green-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Native Performance</h3>
                <p class="text-slate-400 text-sm italic">Tampilan Linux tanpa mengorbankan performa gaming Windows.</p>
            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-slate-800 text-center text-slate-500 text-sm mono">
        &copy; {{ date('Y') }} DEV_NEXUS // BUILT_WITH_LARAVEL_11
    </footer>

</body>
</html>
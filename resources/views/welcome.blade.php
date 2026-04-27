<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | OS Environment Hub</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,800" rel="stylesheet" />

    <style>
        :root {
            --primary: #f97316;
            --accent: #7c3aed;
            --danger: #ef4444;
            --bg: #050505;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
                opacity: 0.4;
            }

            33% {
                transform: translate(30px, -50px) scale(1.2);
                opacity: 0.6;
            }

            66% {
                transform: translate(-20px, 20px) scale(0.8);
                opacity: 0.3;
            }
        }

        @keyframes pulse-danger {

            0%,
            100% {
                box-shadow: 0 0 15px rgba(239, 68, 68, 0.2);
                border-color: rgba(239, 68, 68, 0.3);
            }

            50% {
                box-shadow: 0 0 30px rgba(239, 68, 68, 0.6);
                border-color: #ef4444;
            }
        }

        body {
            background-color: var(--bg);
            color: white;
            margin: 0;
            font-family: 'Instrument Sans', sans-serif;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .glow-blob {
            position: fixed;
            border-radius: 50%;
            filter: blur(100px);
            z-index: -1;
            animation: float 15s infinite ease-in-out;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 3rem;
            border-radius: 2.5rem;
            text-align: center;
            max-width: 900px;
            width: 90%;
            box-shadow: 0 50px 100px -20px rgba(0, 0, 0, 0.7);
        }

        .btn {
            padding: 1rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #f97316, #ea580c);
            color: white;
        }

        .btn-outline {
            background: rgba(255, 255, 255, 0.05);
            color: #9ca3af;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: rgba(124, 58, 237, 0.2);
            color: #a78bfa;
            border-radius: 99px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(124, 58, 237, 0.3);
        }

        .grid-choices {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            /* Ubah ke 3 kolom */
            gap: 1rem;
            margin-top: 3rem;
        }

        .choice-card {
            background: rgba(255, 255, 255, 0.03);
            padding: 1.5rem;
            border-radius: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: 0.3s;
            text-decoration: none;
            color: inherit;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .choice-card:hover {
            background: rgba(255, 255, 255, 0.07);
            transform: translateY(-5px);
        }

        /* Style khusus untuk tombol Stress Test yang menonjol */
        .choice-card.stress-test {
            background: rgba(239, 68, 68, 0.05);
            border: 1px solid rgba(239, 68, 68, 0.2);
            animation: pulse-danger 2s infinite;
        }

        .choice-card.stress-test:hover {
            background: rgba(239, 68, 68, 0.15);
            border-color: #ef4444;
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            letter-spacing: -0.04em;
            margin: 0;
            line-height: 1;
        }

        p.subtitle {
            color: #6b7280;
            font-size: 1.1rem;
            margin-top: 1rem;
        }
    </style>
</head>

<body class="antialiased">

    <div class="glow-blob" style="width: 500px; height: 500px; background: #ea580c; top: -150px; left: -100px;"></div>
    <div class="glow-blob"
        style="width: 400px; height: 400px; background: #4f46e5; bottom: -100px; right: -50px; animation-delay: -5s;">
    </div>
    <div class="glow-blob"
        style="width: 300px; height: 300px; background: #b91c1c; top: 40%; left: 60%; animation-delay: -2s;"></div>

    <main>
        <div class="glass-card">
            <span class="badge">SYSTEM READY v2.0</span>

            <h1>OS <span style="color: var(--primary);">Craft</span> Nexus</h1>
            <p class="subtitle">Pilih lingkungan kerja Laravel Anda atau jalankan simulasi beban sistem.</p>

            <div class="grid-choices">
                <a href="/landing" class="choice-card">
                    <div>
                        <div style="color: var(--primary); font-weight: 800; margin-bottom: 0.5rem;">01. TERMINAL</div>
                        <div style="font-size: 0.75rem; color: #9ca3af;">Linux WSL2 performa baris perintah.</div>
                    </div>
                </a>

                <a href="/zen" class="choice-card">
                    <div>
                        <div style="color: #60a5fa; font-weight: 800; margin-bottom: 0.5rem;">02. ZEN MODE</div>
                        <div style="font-size: 0.75rem; color: #9ca3af;">Fokus minimalis tanpa distraksi.</div>
                    </div>
                </a>

                <a href="/dod" class="choice-card">
                    <div>
                        <div
                            style="color: #10b981; font-weight: 800; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 4px;">
                            <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>
                            03. DOD
                        </div>
                        <div style="font-size: 0.75rem; color: #9ca3af;">Definition Of Done</div>
                    </div>
                </a>

                <a href="/ubuntu" class="choice-card stress-test">
                    <div>
                        <div
                            style="color: #ef4444; font-weight: 800; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 4px;">
                            <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                            04. Ubuntu
                        </div>
                        <div style="font-size: 0.75rem; color: #fca5a5;">Tutor menjadi gila(Resource Heavy).</div>
                    </div>
                </a>
            </div>
        </div>
    </main>

</body>

</html>
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
                --bg: #050505;
            }

            @keyframes float {
                0%, 100% { transform: translate(0, 0) scale(1); opacity: 0.4; }
                33% { transform: translate(30px, -50px) scale(1.2); opacity: 0.6; }
                66% { transform: translate(-20px, 20px) scale(0.8); opacity: 0.3; }
            }

            @keyframes pulse-glow {
                0%, 100% { box-shadow: 0 0 20px rgba(249, 115, 22, 0.2); }
                50% { box-shadow: 0 0 40px rgba(249, 115, 22, 0.5); }
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
                max-width: 800px;
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
                animation: pulse-glow 3s infinite;
            }

            .btn-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(234, 88, 12, 0.4);
            }

            .btn-outline {
                background: rgba(255, 255, 255, 0.05);
                color: #9ca3af;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .btn-outline:hover {
                background: rgba(255, 255, 255, 0.1);
                color: white;
                border-color: rgba(255, 255, 255, 0.3);
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
                grid-template-columns: 1fr 1fr;
                gap: 1.5rem;
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
            }

            .choice-card:hover {
                background: rgba(255, 255, 255, 0.07);
                border-color: var(--primary);
                transform: scale(1.02);
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
        <div class="glow-blob" style="width: 400px; height: 400px; background: #4f46e5; bottom: -100px; right: -50px; animation-delay: -5s;"></div>
        <div class="glow-blob" style="width: 300px; height: 300px; background: #7c3aed; top: 40%; left: 60%; animation-delay: -2s;"></div>

        <main>
            <div class="glass-card">
                <span class="badge">SYSTEM READY v2.0</span>
                
                <h1>OS <span style="color: var(--primary);">Craft</span> Nexus</h1>
                <p class="subtitle">Pilih lingkungan kerja Laravel Anda untuk memulai sesi hari ini.</p>

                <div class="grid-choices">
                    <a href="/landing" class="choice-card">
                        <div style="color: var(--primary); font-weight: 800; margin-bottom: 0.5rem;">01. TERMINAL MODE</div>
                        <div style="font-size: 0.8rem; color: #9ca3af;">Lingkungan Linux (WSL2) dengan performa baris perintah maksimal.</div>
                    </a>

                    <a href="/zen" class="choice-card">
                        <div style="color: #60a5fa; font-weight: 800; margin-bottom: 0.5rem;">02. ZEN DESKTOP</div>
                        <div style="font-size: 0.8rem; color: #9ca3af;">Lingkungan fokus minimalis untuk produktivitas tanpa gangguan visual.</div>
                    </a>
                </div>

                <div style="margin-top: 3rem; display: flex; gap: 1rem; justify-content: center;">
                    <a href="https://laravel.com/docs" class="btn btn-primary">
                        <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Documentation
                    </a>
                    <a href="#" class="btn btn-outline">System Config</a>
                </div>

                <footer style="margin-top: 3rem; font-size: 0.7rem; color: #4b5563; letter-spacing: 0.1em;">
                    POWERED BY LARAVEL // KERNEL_STABLE_8.2
                </footer>
            </div>
        </main>

    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            /* Custom CSS Animations */
            @keyframes float {
                0%, 100% { transform: translateY(0px) scale(1); opacity: 0.3; }
                50% { transform: translateY(-20px) scale(1.1); opacity: 0.6; }
            }

            .glow-blob {
                position: fixed;
                border-radius: 50%;
                filter: blur(80px);
                z-index: -1;
                animation: float 10s infinite ease-in-out;
            }

            .glass-card {
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            }

            /* Fallback Tailwind-like classes in case Vite is off */
            body { 
                background-color: #050505; 
                color: white; 
                margin: 0; 
                font-family: 'Instrument Sans', sans-serif; 
                overflow: hidden;
            }
        </style>
    </head>
    <body class="antialiased">
        
        <!-- Background Blobs -->
        <div class="glow-blob" style="width: 400px; height: 400px; background: #f91616; top: -100px; left: -100px;"></div>
        <div class="glow-blob" style="width: 300px; height: 300px; background: #7c3aed; bottom: -50px; right: -50px; animation-delay: -5s;"></div>

        <main style="display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 2rem;">
            
            <div class="glass-card" style="max-width: 600px; width: 100%; padding: 4rem; border-radius: 2rem; text-align: center;">
                
                <!-- Logo/Icon -->
                <div style="display: inline-flex; margin-bottom: 2rem; background: linear-gradient(135deg, #f97316, #ea580c); padding: 1rem; border-radius: 1.25rem; box-shadow: 0 10px 20px rgba(249, 115, 22, 0.3);">
                    <svg style="width: 3rem; height: 3rem; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>

                <h1 style="font-size: 4rem; font-weight: 800; letter-spacing: -0.05em; margin-bottom: 1rem; line-height: 1;">
                    Laravel <span style="color: #f97316;">Craft</span>
                </h1>

                <p style="color: #9ca3af; font-size: 1.25rem; margin-bottom: 2.5rem; line-height: 1.6;">
                    The PHP framework for Web Artisans. <br>Build something beautiful today.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    <a href="https://laravel.com" style="background: white; color: black; padding: 1rem 2rem; border-radius: 1rem; font-weight: 600; text-decoration: none; transition: 0.3s; transform: scale(1);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        Get Started
                    </a>
                    <a href="https://github.com" style="background: rgba(255,255,255,0.1); color: white; padding: 1rem 2rem; border-radius: 1rem; font-weight: 600; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">
                        GitHub
                    </a>
                </div>

                <div class="glow-blob" style="width: 200px; height: 200px; background: #7c3aed; bottom: -100px; right: -100px; animation-delay: -5s;"></div>

                <div class="">
                    <p><strong>WIBU</strong></p>
                </div>

            </div>
        </main>

    </body>
</html>

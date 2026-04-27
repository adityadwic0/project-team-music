<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuntu Modern Experience</title>
    
    <!-- Google Fonts -->
    <link href="https://googleapis.com" rel="stylesheet">
    
    <style>
        :root {
            --ubuntu-orange: #E95420;
            --ubuntu-purple: #772953;
            --dark-bg: #111111;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: var(--dark-bg);
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Navbar Modern (Glassmorphism) */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.5rem 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(17, 17, 17, 0.8);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(to right, #fff, var(--ubuntu-orange));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hero Section Interaktif */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: radial-gradient(circle at top right, var(--ubuntu-purple), transparent),
                        radial-gradient(circle at bottom left, #2c001e, transparent);
            padding: 0 5%;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 8vw, 5rem);
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 1s forwards 0.5s;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            color: #ccc;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeIn 1s forwards 0.8s;
        }

        /* Button Interaktif */
        .btn-modern {
            position: relative;
            padding: 15px 35px;
            background: var(--ubuntu-orange);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: 0 10px 20px rgba(233, 84, 32, 0.3);
        }

        .btn-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(233, 84, 32, 0.5);
            background: #ff6a38;
        }

        /* Grid Section dengan Efek Hover Card */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 100px 8%;
            background: #111;
        }

        .card {
            background: var(--glass-bg);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: var(--transition);
            cursor: pointer;
        }

        .card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: scale(1.05);
            border-color: var(--ubuntu-orange);
        }

        .card h3 {
            color: var(--ubuntu-orange);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        /* Animasi Sederhana */
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        footer {
            padding: 50px;
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #666;
        }

        /* Efek Interaktif Tambahan: Background Moving Orbs (Opsional) */
        .orb {
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--ubuntu-orange);
            filter: blur(150px);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.2;
            animation: move 20s infinite alternate;
        }

        @keyframes move {
            from { transform: translate(0, 0); }
            to { transform: translate(100px, 100px); }
        }
    </style>
</head>
<body>

    <div class="orb"></div>

    <nav>
        <div class="logo">Ubuntu_OS</div>
        <div style="font-size: 0.9rem; letter-spacing: 2px;">V.24.04 LTS</div>
    </nav>

    <header class="hero">
        <h1>Future is Open.</h1>
        <p>Rasakan kecepatan dan keamanan sistem operasi Linux paling populer di dunia. Dioptimalkan untuk pengembang, kreatif, dan profesional.</p>
        <a href="#" class="btn-modern">Explore Experience</a>
    </header>

    <section class="features">
        <div class="card">
            <h3>Fast & Fluid</h3>
            <p>Booting super cepat dan manajemen memori yang cerdas untuk multitasking tanpa lag.</p>
        </div>
        <div class="card">
            <h3>Dev Ready</h3>
            <p>Lengkap dengan toolchain modern seperti Python, Docker, dan VS Code out of the box.</p>
        </div>
        <div class="card">
            <h3>Ironclad Security</h3>
            <p>Sistem keamanan kernel Linux yang solid dengan update keamanan rutin selama 10 tahun.</p>
        </div>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} Project Team Music | Powered by Laravel</p>
    </footer>

</body>
</html>

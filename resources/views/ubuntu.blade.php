<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuntu | Enterprise Open Source</title>
    <link href="https://googleapis.com" rel="stylesheet">
    <style>
        :root {
            --u-orange: #E95420;
            --u-aubergine: #2c001e;
            --u-mid-purple: #772953;
            --bg-light: #ffffff;
            --text-main: #333333;
            --text-muted: #666666;
            --section-bg: #f7f7f7;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Ubuntu', sans-serif; color: var(--text-main); background: var(--bg-light); line-height: 1.6; }

        /* Navigation */
        nav {
            padding: 1.5rem 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            position: sticky; top: 0; background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); z-index: 100;
        }
        .logo-text { font-weight: 700; font-size: 1.4rem; color: var(--u-orange); }
        .nav-links a { text-decoration: none; color: var(--text-main); margin-left: 2rem; font-size: 0.9rem; font-weight: 500; }

        /* Hero Section */
        .hero {
            padding: 120px 10% 80px;
            display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: 50px;
            background: linear-gradient(135deg, #fff 0%, #fdfdfd 100%);
        }
        .hero h1 { font-size: 4rem; line-height: 1.1; margin-bottom: 1.5rem; color: var(--u-aubergine); }
        .hero p { font-size: 1.25rem; color: var(--text-muted); margin-bottom: 2.5rem; max-width: 500px; }
        .cta-group { display: flex; gap: 15px; }
        .btn { padding: 14px 28px; border-radius: 6px; text-decoration: none; font-weight: 500; transition: 0.3s; }
        .btn-primary { background: var(--u-orange); color: white; }
        .btn-secondary { border: 1px solid #ccc; color: var(--text-main); }
        .hero-img { width: 100%; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); }

        /* Bento Grid Stats */
        .stats-grid {
            padding: 60px 10%; display: grid;
            grid-template-columns: repeat(4, 1fr); gap: 20px;
        }
        .stat-card { background: var(--section-bg); padding: 30px; border-radius: 12px; text-align: center; }
        .stat-card h2 { color: var(--u-orange); font-size: 2.5rem; margin-bottom: 5px; }
        .stat-card p { font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); }

        /* Feature Detailed Section */
        .content-section { padding: 100px 10%; }
        .section-tag { color: var(--u-orange); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; margin-bottom: 10px; display: block; }
        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-bottom: 100px; }
        .grid-2.reverse { direction: rtl; }
        .grid-2.reverse div { direction: ltr; }
        .grid-2 h2 { font-size: 2.5rem; margin-bottom: 1.5rem; color: var(--u-aubergine); }

        footer { background: var(--u-aubergine); color: #fff; padding: 60px 10% 30px; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 50px; margin-bottom: 50px; }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; font-size: 0.8rem; opacity: 0.6; text-align: center; }

        @media (max-width: 768px) {
            .hero, .grid-2, .stats-grid, .footer-grid { grid-template-columns: 1fr; }
            .hero h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

<nav>
    <div class="logo-text">ubuntu.</div>
    <div class="nav-links">
        <a href="#desktop">Desktop</a>
        <a href="#server">Server</a>
        <a href="#security">Keamanan</a>
        <a href="#download" style="color: var(--u-orange)">Unduh</a>
    </div>
</nav>

<header class="hero">
    <div>
        <span class="section-tag">OS Paling Populer di Dunia</span>
        <h1>Pondasi Inovasi Modern.</h1>
        <p>Dari workstation pengembang hingga infrastruktur cloud terbesar di dunia, Ubuntu adalah platform open source pilihan utama.</p>
        <div class="cta-group">
            <a href="#" class="btn btn-primary">Unduh 24.04 LTS</a>
            <a href="#" class="btn btn-secondary">Dokumentasi</a>
        </div>
    </div>
    <img src="https://ubuntu.com" alt="Ubuntu Desktop" class="hero-img">
</header>

<section class="stats-grid">
    <div class="stat-card"><h2>64-bit</h2><p>Arsitektur Inti</p></div>
    <div class="stat-card"><h2>10+ Th</h2><p>Dukungan LTS</p></div>
    <div class="stat-card"><h2>1M+</h2><p>Paket Software</p></div>
    <div class="stat-card"><h2>Free</h2><p>Lisensi Terbuka</p></div>
</section>

<section class="content-section" id="desktop">
    <div class="grid-2">
        <div>
            <span class="section-tag">Ubuntu Desktop</span>
            <h2>Produktivitas Tanpa Batas.</h2>
            <p>Antarmuka GNOME yang dioptimalkan memberikan pengalaman pengguna yang halus. Dilengkapi dengan snap store untuk kemudahan instalasi aplikasi profesional seperti Slack, VS Code, dan Spotify.</p>
        </div>
        <img src="https://unsplash.com" class="hero-img">
    </div>

    <div class="grid-2 reverse" id="server">
        <div>
            <span class="section-tag">Ubuntu Server</span>
            <h2>Standard Global untuk Cloud.</h2>
            <p>Berjalan di AWS, Azure, dan Google Cloud. Ubuntu Server adalah pilihan #1 untuk containerization, Kubernetes, dan AI/Machine Learning workloads.</p>
        </div>
        <img src="https://unsplash.com" class="hero-img">
    </div>
</section>

<footer>
    <div class="footer-grid">
        <div>
            <h3 style="margin-bottom: 20px;">Ubuntu Project</h3>
            <p style="opacity: 0.7;">Sebuah inisiatif dari Canonical untuk menghadirkan software terbaik secara gratis kepada dunia.</p>
        </div>
        <div>
            <h4>Komunitas</h4>
            <ul style="list-style: none; opacity: 0.7; font-size: 0.9rem; line-height: 2;">
                <li>Forum Diskusi</li>
                <li>Wiki Dokumentasi</li>
                <li>Kontribusi Kode</li>
            </ul>
        </div>
        <div>
            <h4>Perusahaan</h4>
            <ul style="list-style: none; opacity: 0.7; font-size: 0.9rem; line-height: 2;">
                <li>Tentang Canonical</li>
                <li>Kontak Media</li>
                <li>Kemitraan</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; {{ date('Y') }} Project Team Music. Ubuntu is a registered trademark of Canonical Ltd.
    </div>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definition of Done (DoD) - Professional Guide</title>
    <!-- Google Fonts untuk kesan modern -->
    <link href="https://googleapis.com" rel="stylesheet">
    <style>
        :root {
            --primary: #10b981;
            --primary-light: #ecfdf5;
            --text-main: #0f172a;
            --text-sub: #64748b;
            --bg-body: #fdfdfd;
            --card-border: #f1f5f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            line-height: 1.7;
            color: var(--text-main);
            background-color: var(--bg-body);
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Hero Section */
        header {
            padding: 100px 0 60px;
            text-align: center;
        }

        .badge-modul {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--primary-light);
            color: var(--primary);
            padding: 8px 16px;
            border-radius: 100px;
            font-weight: 800;
            font-size: 0.85rem;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .dot {
            height: 8px;
            width: 8px;
            background-color: var(--primary);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(16, 185, 129, 0.4);
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.04em;
            margin-bottom: 24px;
            background: linear-gradient(135deg, #0f172a 0%, #334155 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-desc {
            max-width: 650px;
            margin: 0 auto;
            color: var(--text-sub);
            font-size: 1.15rem;
        }

        /* Sections */
        section {
            padding: 80px 0;
        }

        .section-header {
            margin-bottom: 48px;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: -0.02em;
        }

        .divider {
            width: 60px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        /* Grid & Cards */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
        }

        .card {
            background: #ffffff;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.01);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
            border-color: var(--primary-light);
        }

        .card h3 {
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .card p {
            color: var(--text-sub);
        }

        /* Checklist Custom */
        .checklist {
            list-style: none;
        }

        .checklist li {
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            color: var(--text-sub);
            font-weight: 500;
        }

        .check-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background: var(--primary-light);
            color: var(--primary);
            border-radius: 6px;
            margin-right: 12px;
            font-size: 0.75rem;
            font-weight: bold;
        }

        /* Highlight Box */
        .importance-box {
            background: #0f172a;
            color: #ffffff;
            padding: 60px;
            border-radius: 32px;
            position: relative;
            overflow: hidden;
            margin-top: 40px;
        }

        .importance-box::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: var(--primary);
            filter: blur(120px);
            opacity: 0.2;
        }

        .importance-box h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .importance-box p {
            font-size: 1.2rem;
            opacity: 0.8;
            max-width: 800px;
        }

        /* Footer */
        footer {
            padding: 80px 0 40px;
            text-align: center;
            border-top: 1px solid var(--card-border);
            color: var(--text-sub);
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.8s ease forwards;
        }

        @media (max-width: 768px) {
            header { padding: 60px 0 40px; }
            .importance-box { padding: 40px 24px; }
        }
    </style>
</head>
<body>

    <header class="fade-in">
        <div class="container">
            <div class="badge-modul">
                <span class="dot"></span>
                MODUL 03
            </div>
            <h1>Definition of Done</h1>
            <p class="hero-desc">Membangun standar kualitas tinggi melalui kesepakatan bersama untuk setiap unit kerja yang dihasilkan.</p>
        </div>
    </header>

    <div class="container">
        <!-- Section: Inti -->
        <section class="fade-in" style="animation-delay: 0.2s;">
            <div class="section-header">
                <h2 class="section-title">Filosofi Dasar</h2>
                <div class="divider"></div>
            </div>
            
            <div class="grid">
                <div class="card">
                    <h3>Komitmen Kualitas</h3>
                    <p>DoD bukanlah sekadar tugas administratif, melainkan janji tim untuk tidak memberikan hasil yang cacat kepada pengguna.</p>
                </div>
                <div class="card">
                    <h3>Bahasa Universal</h3>
                    <p>Menghilangkan ambiguitas antara pengembang dan pemangku kepentingan mengenai status "Selesai" sebuah fitur.</p>
                </div>
            </div>
        </section>

        <!-- Section: Checklist -->
        <section class="fade-in" style="animation-delay: 0.4s;">
            <div class="section-header">
                <h2 class="section-title">The Checklist</h2>
                <div class="divider"></div>
            </div>
            
            <div class="grid">
                <div class="card">
                    <h3 style="color: var(--primary)">Teknis</h3>
                    <ul class="checklist">
                        <li><span class="check-icon">L</span> Clean Code & Peer Reviewed</li>
                        <li><span class="check-icon">L</span> 100% Unit Tests Passed</li>
                        <li><span class="check-icon">L</span> Documentation Updated</li>
                    </ul>
                </div>
                <div class="card">
                    <h3 style="color: var(--primary)">Validasi</h3>
                    <ul class="checklist">
                        <li><span class="check-icon">L</span> Acceptance Criteria Met</li>
                        <li><span class="check-icon">L</span> QA Verified in Staging</li>
                        <li><span class="check-icon">L</span> Zero Critical Bugs</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section: Pentingnya -->
        <div class="importance-box fade-in" style="animation-delay: 0.6s;">
            <h2>Mengapa Ini Krusial?</h2>
            <p>Tanpa DoD yang ketat, tim akan terjebak dalam akumulasi Technical Debt yang memperlambat inovasi di masa depan. DoD adalah benteng pertahanan terakhir terhadap kualitas produk Anda.</p>
        </div>

        <footer>
            <p>&copy; 2024 Agile Leadership Guide. Materi Modul 03: Definition of Done.</p>
        </footer>
    </div>

</body>
</html>

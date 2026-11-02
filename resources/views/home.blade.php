<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KursusKu - Laravel MVC</title>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* Palet Warna Biru Soft (Pastel) */
            --primary-color: #60a5fa; /* Biru Soft Utama (Blue 400) */
            --primary-dark: #3b82f6;  /* Biru agak tegas untuk hover (Blue 500) */
            --primary-light: #eff6ff; /* Biru sangat muda untuk background (Blue 50) */
            --bg-color: #f8fafc;      /* Latar belakang putih kebiruan yang bersih */
            --text-main: #0f172a;     /* Warna teks utama (Slate 900) */
            --text-muted: #475569;    /* Warna teks sekunder (Slate 600) */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* HEADER */
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 16px 5%;
            box-shadow: 0 4px 15px rgba(96, 165, 250, 0.2);
            position: relative;
            z-index: 10;
        }

        .header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            background-color: white;
            color: var(--primary-color);
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 22px;
            font-weight: 800;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .logo-text h2 {
            font-size: 22px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .logo-text p {
            font-size: 12px;
            opacity: 0.9;
            margin-top: -2px;
            font-weight: 500;
        }

        .milestone {
            border: 1px solid rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.2);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            backdrop-filter: blur(4px);
        }

        /* NAVBAR */
        nav {
            background-color: white;
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 9;
            box-shadow: 0 2px 10px rgba(96, 165, 250, 0.05);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 14px;
            font-weight: 600;
            padding: 18px 0;
            display: inline-block;
            transition: color 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        nav a:hover {
            color: var(--primary-dark);
            border-bottom: 3px solid var(--primary-color);
        }

        .btn-nav {
            background-color: var(--primary-light);
            color: var(--primary-dark) !important;
            padding: 10px 24px !important;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            border-bottom: none !important;
        }

        .btn-nav:hover {
            background-color: var(--primary-color);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(96, 165, 250, 0.3);
        }

        /* HERO SECTION */
        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 90px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .hero-text {
            flex: 1.1;
            max-width: 600px;
        }

        .subtitle {
            color: var(--primary-dark);
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--primary-light);
            padding: 6px 16px;
            border-radius: 20px;
            width: fit-content;
        }

        .hero-text h1 {
            font-size: 50px;
            line-height: 1.15;
            font-weight: 800;
            margin-bottom: 24px;
            color: var(--text-main);
            letter-spacing: -1.5px;
        }

        .description {
            color: var(--text-muted);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 35px;
            font-weight: 500;
        }

        .buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 15px 32px;
            border-radius: 50px; /* Tombol bulat (Pill) agar lebih soft */
            text-decoration: none;
            font-size: 15px;
            font-weight: 700;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 8px 20px rgba(96, 165, 250, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
        }

        .btn-secondary {
            border: 2px solid var(--primary-light);
            color: var(--primary-dark);
            background-color: white;
        }

        .btn-secondary:hover {
            border-color: var(--primary-color);
            background-color: var(--primary-light);
            transform: translateY(-3px);
        }

        /* ILUSTRASI KANAN */
        .hero-image {
            flex: 0.9;
            position: relative;
        }

        .illustration {
            background: white;
            border-radius: 30px; /* Sudut lebih membulat */
            padding: 40px;
            text-align: center;
            box-shadow: 0 25px 50px -12px rgba(96, 165, 250, 0.15);
            border: 2px solid var(--primary-light);
            transition: transform 0.3s ease;
        }

        .illustration:hover {
            transform: translateY(-5px);
        }

        .illustration h2 {
            color: var(--text-main);
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .illustration p {
            font-size: 14px;
            color: var(--primary-dark);
            font-weight: 600;
            margin-bottom: 30px;
            letter-spacing: 0.5px;
        }

        .illustration img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            display: block;
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 968px) {
            .hero-container {
                flex-direction: column;
                padding: 60px 5%;
                gap: 50px;
                text-align: center;
            }

            .hero-text {
                max-width: 100%;
            }

            .subtitle {
                margin: 0 auto 20px auto;
                justify-content: center;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .buttons {
                justify-content: center;
            }

            .hero-image {
                width: 100%;
                max-width: 500px;
            }
        }

        @media (max-width: 640px) {
            nav {
                flex-direction: column;
                padding: 15px 5%;
                gap: 15px;
            }

            .nav-links {
                width: 100%;
                justify-content: center;
                gap: 20px;
            }

            nav a {
                padding: 10px 0;
            }

            .btn-nav {
                width: 100%;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 34px;
            }

            .header-top {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="header-top">
            <div class="logo">
                <div class="logo-icon">K</div>
                <div class="logo-text">
                    <h2>KursusKu</h2>
                    <p>Laravel MVC</p>
                </div>
            </div>
            <span class="milestone">Milestone 7</span>
        </div>
    </header>

    <nav>
        <div class="nav-links">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="#alur">Alur MVC</a>
            <a href="#kursus">Kursus Pilihan</a>
        </div>
        <a href="#kursus" class="btn-nav">Lihat Program</a>
    </nav>

    <main class="hero-container">
        <section class="hero-text">
            <p class="subtitle">Pertemuan 7 · Framework Laravel</p>
            <h1>Belajar terstruktur dengan Route, Controller, dan Blade.</h1>
            <p class="description">
                Landing page KursusKu dipindahkan dari PHP biasa ke pola framework Laravel. 
                Request masuk melalui route, data disiapkan controller, lalu Blade merender HTML dengan rapi.
            </p>
            <div class="buttons">
                <a href="#kursus" class="btn btn-primary">Program Belajar Unggulan</a>
                <a href="#alur" class="btn btn-secondary">Lihat Alur MVC</a>
            </div>
        </section>

        <section class="hero-image" id="kursus">
            <div class="illustration">
                <h2>KursusKu</h2>
                <p>Belajar • Praktik • Bangun Proyek</p>
                
                <img src="{{ asset('images/hero-kursus.jpg') }}" alt="Hero Kursus">
            </div>
        </section>
    </main>

</body>
</html>
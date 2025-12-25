<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAUM Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand:#1f4e79;
            --text:#203040;
            --muted:#5c6b7a;
            --bg:#f5f7fb;
            --card:#ffffff;
            --shadow:0 10px 30px rgba(0,0,0,0.08);
        }
        * { box-sizing: border-box; margin:0; padding:0; }
        body {
            font-family: 'Poppins', system-ui, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        a { color: inherit; text-decoration: none; }
        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(10px);
            box-shadow: 0 1px 12px rgba(0,0,0,0.05);
        }
        .nav {
            max-width: 1180px;
            margin: 0 auto;
            padding: 18px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 28px;
            font-weight: 700;
            color: var(--brand);
            letter-spacing: 0.5px;
        }
        .brand img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }
        .menu {
            display: flex;
            gap: 22px;
            align-items: center;
        }
        .menu a {
            font-weight: 500;
            color: var(--muted);
            padding-bottom: 4px;
            border-bottom: 2px solid transparent;
            transition: color .2s ease, border-color .2s ease;
        }
        .menu a:hover {
            color: var(--brand);
            border-color: var(--brand);
        }
        .hero {
            position: relative;
            height: 50vh;
            min-height: 400px;
            display: grid;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            overflow: hidden;
            background: linear-gradient(120deg, rgba(24,44,70,0.7), rgba(44,82,130,0.6)), url('https://images.unsplash.com/photo-1522199755839-a2bacb67c546?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
        }
        .hero h1 {
            font-size: clamp(34px, 5vw, 52px);
            margin-bottom: 12px;
            font-weight: 700;
        }
        .hero p {
            font-size: clamp(16px, 2vw, 20px);
            color: #e8eef6;
            max-width: 760px;
            margin: 0 auto 28px;
        }

        /* TAŞMA VE ALT ALTA GELME DÜZELTMELERİ */
        .featured {
            max-width: 1180px;
            margin: 60px auto 40px;
            padding: 0 24px;
            display: grid;
            grid-template-columns: minmax(0, 52%) minmax(0, 48%);
            gap: 32px;
            align-items: start;
        }
        .featured img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 16px 36px rgba(0,0,0,0.1);
        }
        
        .excerpt, h2, h3, p {
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-word;
        }

        .cards-list {
            max-width: 1180px;
            margin: 0 auto 80px;
            padding: 0 24px;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .card {
            background: var(--card);
            padding: 24px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            display: grid;
            grid-template-columns: 240px 1fr;
            gap: 24px;
            align-items: center;
            min-width: 0; 
        }

        .btn-primary {
            display: inline-block;
            padding: 12px 24px;
            background: var(--brand);
            color: #fff;
            border-radius: 8px;
            font-weight: 600;
            transition: transform .2s;
            border: none;
            cursor: pointer;
        }
        .btn-primary:hover { transform: translateY(-2px); }

        .footer {
            background: #0f1c2b;
            color: #d8e3f5;
            padding: 40px 24px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .featured { grid-template-columns: 1fr; }
            .card { grid-template-columns: 1fr; }
            .menu { display: none; }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <a href="/" class="brand">
                <img src="https://birimler.atauni.edu.tr/atabaum/wp-content/uploads/sites/17/2021/07/logo3.png" alt="BAUM">
                <span>BAUM</span>
            </a>
            <div class="menu">
                <a href="/">Ana Sayfa</a>
                <a href="/bilgilendirme-sayfa">Hakkımda</a>
                <a href="/iletisim">İletişim</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div>
                <h1>Merhaba, BAUM Blog'a hoş geldin</h1>
                <p>Okur dostu içerikler ve ilham veren hikayeler.</p>
            </div>
        </section>

        @php($one = $icerikler->first())

        @if($one)
            <section class="featured">
                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1200&q=80" alt="{{ $one->baslik }}">
                <div>
                    <div style="color: var(--brand); font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">Öne Çıkan</div>
                    <h2>{{ $one->baslik }}</h2>
                    <p class="excerpt" style="margin: 15px 0 25px;">
                        {{ \Illuminate\Support\Str::limit($one->icerik, 250) }}
                    </p>
                      <p class="excerpt" style="margin: 15px 0 25px;">
                      Yayınlama Tarihi: {{ \Illuminate\Support\Str::limit($one->created_at, 250) }}
                    </p>
                    <a class="btn-primary" href="/icerik/{{ $one->id }}">Devamını Oku</a>
                </div>
            </section>

            <div class="cards-list">
                @foreach($icerikler->skip(1) as $icerik)
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=500&q=80" 
                             alt="İçerik Görseli"
                             style="width: 100%; height: 150px; object-fit: cover; border-radius: 12px;">
                        
                        <div>
                            <div style="color: var(--brand); font-weight: 600; font-size: 13px;">İÇERİK</div>
                            <h3 style="margin: 5px 0 10px;">{{ $icerik->baslik }}</h3>
                            <p class="excerpt" style="margin-bottom: 15px;">
                                {{ \Illuminate\Support\Str::limit($icerik->icerik, 160) }}
                            </p>
                            <a class="btn-primary" href="/icerik/{{ $icerik->id }}" style="padding: 8px 16px; font-size: 14px;">Oku</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <section style="text-align: center; padding: 60px;">
                <p>Henüz içerik eklenmemiş.</p>
            </section>
        @endif
    </main>

    <footer class="footer">
        <div>© {{ date('Y') }} BAUM Blog · <a href="/bilgilendirme-sayfa" style="color: #aac8ff;">Hakkında</a></div>
    </footer>
</body>
</html>
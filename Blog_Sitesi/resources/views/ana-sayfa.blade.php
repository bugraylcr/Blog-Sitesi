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
        .menu a:hover,
        .menu a:focus {
            color: var(--brand);
            border-color: var(--brand);
        }
        .cta {
            padding: 10px 18px;
            background: var(--brand);
            color: #fff;
            border-radius: 999px;
            font-weight: 600;
            box-shadow: var(--shadow);
        }
        .hero {
            position: relative;
            height: 72vh;
            min-height: 520px;
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
        .hero .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn {
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: 600;
            border: 2px solid transparent;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease, background .2s ease;
        }
        .btn-primary {
            background: #fff;
            color: var(--brand);
            box-shadow: var(--shadow);
        }
        .btn-primary:hover { transform: translateY(-2px); }
        .btn-ghost {
            background: transparent;
            border-color: #eaf1ff;
            color: #eaf1ff;
        }
        .btn-ghost:hover { background: rgba(255,255,255,0.12); }
        .section {
            max-width: 1180px;
            margin: -80px auto 80px;
            padding: 0 24px;
            position: relative;
            z-index: 2;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }
        .card {
            background: var(--card);
            padding: 20px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .card img {
            width: 100%;
            height: 170px;
            object-fit: cover;
            border-radius: 12px;
        }
        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(31,78,121,0.08);
            color: var(--brand);
            font-weight: 600;
            font-size: 13px;
        }
        .card h3 { font-size: 18px; }
        .card p { color: var(--muted); font-size: 14px; }
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
        .featured .category {
            color: var(--brand);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }
        .featured h2 {
            font-size: clamp(28px, 3.5vw, 40px);
            line-height: 1.2;
            margin: 0 0 8px;
        }
        .featured .meta {
            display: flex;
            gap: 16px;
            color: var(--muted);
            margin: 6px 0 16px;
            font-size: 15px;
        }
        .featured .meta .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--muted);
        }
        .featured .excerpt {
            color: var(--text);
            line-height: 1.7;
            margin-bottom: 22px;
        }
        .featured .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 22px;
            border-radius: 8px;
            background: var(--text);
            color: #fff;
            box-shadow: 0 14px 28px rgba(0,0,0,0.12);
            border: none;
        }
        .featured .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 16px 32px rgba(0,0,0,0.16); }
        .footer {
            background: #0f1c2b;
            color: #d8e3f5;
            padding: 36px 24px;
            text-align: center;
            margin-top: 60px;
        }
        .footer a { color: #aac8ff; font-weight: 600; }
        @media (max-width: 768px) {
            .menu { display: none; }
            .hero { height: auto; padding: 120px 24px; }
            .section { margin-top: -40px; }
            .featured {
                grid-template-columns: 1fr;
                margin: 32px auto 24px;
            }
            .featured h2 { font-size: 26px; }
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
                <a href="#hero">Ana Sayfa</a>
                <a href="/bilgilendirme-sayfa">Hakkımda</a>
                <a href="/iletisim">İletişim</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="hero">
            <div>
                <h1>Merhaba, BAUM Blog'a hoş geldin</h1>
                <p>Okur dostu içerikler, ilham veren hikayeler ve toplulukla etkileşime geçebileceğin sade bir blog arayüzü. Tasarım ve yazılımın buluştuğu yerdeyiz.</p>
            </div>
        </section>

        <!-- <section class="featured" id="one-feature">
            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1200&q=80" alt="Amsterdam Gezisi">
            <div>
                <div class="category">Gezi</div>
                <h2>Amsterdam Gezisi! Gezdiğim &amp; Gördüğüm Yerler</h2>
                <div class="meta">
                    <span>26 Aralık 2022</span>
                    <span class="dot"></span>
                    <span>21 yorum</span>
                </div>
                <p class="excerpt">
                    Herkese kucak dolusu selamlar! Umarım keyfiniz yerindedir. Şu an benim gayet yerinde olduğunu söyleyebilirim çünkü bu yazıyı yazmak için oturunca nedense içimin kıpır kıpır olduğunu hissettim. Aslında aklımda böyle bir blog yazısı yoktu. Çünkü seyahatime çıkarken gördüğüm, gezdiğim yerleri blogumda da paylaşırım kafasında değildim. Ancak düşündüm ki neredeyse yaptığım her şeyi telefonuma kaydetmişken ve hazır...
                </p>
                <a class="btn btn-primary" href="/hikaye-detay">Devamını Oku</a>
            </div>
        </section> -->


 @php($one = $icerikler->first())

 @if($one)
    <section class="featured" id="one-feature">
        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1200&q=80"
             alt="{{ $one->baslik }}">

        <div>
            <div class="category">İçerik</div>
            <h2>{{ $one->baslik }}</h2>

            <p class="excerpt">
                {{ \Illuminate\Support\Str::limit($one->icerik, 220) }}
            </p>

            <a class="btn btn-primary" href="/icerik/{{ $one->id }}">Devamını Oku</a>
        </div>
    </section>

    {{-- Diğer içerikler (liste) --}}
    <section class="cards" style="max-width:1180px; margin: 0 auto 40px;">
        @foreach($icerikler->skip(1) as $icerik)
            <div class="card">
                <div class="category">İçerik</div>
                <h3>{{ $icerik->baslik }}</h3>

                <p class="excerpt">
                    {{ \Illuminate\Support\Str::limit($icerik->icerik, 160) }}
                </p>

                <a class="btn btn-primary" href="/icerik/{{ $icerik->id }}">Devamını Oku</a>
            </div>
        @endforeach
    </section>
@else
    <section style="max-width:1180px; margin: 0 auto 40px;">
        <p>Henüz içerik eklenmemiş.</p>
    </section>
@endif


    </main>

    <footer class="footer">
        <div>© {{ date('Y') }} BAUM Blog · <a href="/bilgilendirme-sayfa">Hakkında</a></div>
    </footer>
</body>
</html>
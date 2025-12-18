<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | BAUM Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f8f8f8;
            --card: #fff;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
            --accent: #1f4e79;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
        }
        header {
            padding: 32px 20px 12px;
            text-align: center;
        }
        h1 {
            margin: 0 0 8px;
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            letter-spacing: -0.4px;
        }
        .breadcrumb {
            font-size: 14px;
            color: var(--muted);
        }
        .breadcrumb a {
            color: var(--muted);
            text-decoration: none;
        }
        .breadcrumb a:hover { color: var(--accent); }
        main {
            max-width: 1080px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            box-shadow: 0 14px 40px rgba(0,0,0,0.04);
            padding: 28px;
        }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text);
        }
        label span { font-weight: 400; color: var(--muted); }
        input, textarea {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 14px 16px;
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: rgba(31,78,121,0.3);
            box-shadow: 0 0 0 4px rgba(31,78,121,0.08);
        }
        textarea { min-height: 180px; resize: vertical; }
        .field { margin-bottom: 20px; }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 18px;
            border-radius: 10px;
            border: none;
            background: var(--accent);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.1s ease, box-shadow 0.2s ease;
        }
        .btn:hover { transform: translateY(-1px); box-shadow: 0 10px 22px rgba(31,78,121,0.15); }
        .btn:active { transform: translateY(0); }
        .social {
            text-align: center;
            margin: 40px auto 10px;
        }
        .social h2 {
            margin: 0 0 8px;
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: var(--accent);
        }
        .social p {
            margin: 0 0 16px;
            color: var(--muted);
            font-style: italic;
            font-size: 16px;
        }
        .social-links {
            display: inline-flex;
            gap: 12px;
        }
        .social-links a {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: #1f2033;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.12s ease, box-shadow 0.2s ease, opacity 0.2s;
        }
        .social-links a:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(31,32,51,0.25);
            opacity: 0.9;
        }
        .social-links svg {
            width: 22px;
            height: 22px;
            fill: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>İletişim</h1>
        <div class="breadcrumb"><a href="/">Ana sayfa</a> / İletişim</div>
    </header>

    <main>
        <div class="card">
            <form>
                <div class="field">
                    <label for="name">Adınız <span>(gerekli)</span></label>
                    <input id="name" name="name" type="text" placeholder="Adınızı yazın">
                </div>
                <div class="field">
                    <label for="email">E-posta adresiniz <span>(gerekli)</span></label>
                    <input id="email" name="email" type="email" placeholder="ornek@eposta.com">
                </div>
                <div class="field">
                    <label for="subject">Konu</label>
                    <input id="subject" name="subject" type="text" placeholder="Konu başlığı">
                </div>
                <div class="field">
                    <label for="message">İletiniz</label>
                    <textarea id="message" name="message" placeholder="Mesajınızı buraya yazın"></textarea>
                </div>
                <button class="btn" type="button">Gönder</button>
            </form>
        </div>

        <div class="social">
            <h2>BAUM</h2>
            <p>Bize ulaşmak için sosyal medya hesaplarımızı kullanabilirsiniz.</p>
            <div class="social-links">
                <a href="https://facebook.com/atabaum" aria-label="Facebook">
                    <svg viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06H296V6.26S259.5 0 225.36 0C141.09 0 89.09 54.42 89.09 153.12v74.22H0v92.66h89.09V512h107.78V288z"/></svg>
                </a>
                <a href="https://instagram.com/atabaum" aria-label="Instagram">
                    <svg viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9 114.9-51.3 114.9-114.9S287.7 141 224.1 141zm0 189.6c-41.2 0-74.7-33.4-74.7-74.7s33.4-74.7 74.7-74.7 74.7 33.4 74.7 74.7-33.5 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-.5-35.3-9.8-66.7-35.6-92.6C385.9 45.8 354.5 36.5 319.2 36c-35.4-.5-141.7-.5-177.1 0-35.3.5-66.7 9.8-92.6 35.6C23.7 97.4 14.4 128.8 13.9 164.1c-.5 35.4-.5 141.7 0 177.1.5 35.3 9.8 66.7 35.6 92.6 25.9 25.9 57.3 35.1 92.6 35.6 35.4.5 141.7.5 177.1 0 35.3-.5 66.7-9.8 92.6-35.6 25.9-25.9 35.1-57.3 35.6-92.6.5-35.4.5-141.7 0-177.1zM398.8 388c-7.8 19.5-22.9 34.6-42.4 42.4-29.4 11.7-99.2 9-132.4 9s-103 2.6-132.4-9c-19.5-7.8-34.6-22.9-42.4-42.4-11.7-29.4-9-99.2-9-132.4s-2.6-103 9-132.4c7.8-19.5 22.9-34.6 42.4-42.4 29.4-11.7 99.2-9 132.4-9s103-2.6 132.4 9c19.5 7.8 34.6 22.9 42.4 42.4 11.7 29.4 9 99.2 9 132.4s2.7 103-9 132.4z"/></svg>
                </a>
                <a href="https://www.youtube.com/" aria-label="YouTube">
                    <svg viewBox="0 0 576 512"><path d="M549.65 124.08a68.78 68.78 0 0 0-48.46-48.53C458.8 64 288 64 288 64s-170.8 0-213.19 11.55a68.78 68.78 0 0 0-48.46 48.53C16 166.53 16 256 16 256s0 89.47 10.35 131.92a68.78 68.78 0 0 0 48.46 48.53C117.2 448 288 448 288 448s170.8 0 213.19-11.55a68.78 68.78 0 0 0 48.46-48.53C560 345.47 560 256 560 256s0-89.47-10.35-131.92ZM232 336V176l142 80Z"/></svg>
                </a>
                <a href="https://www.linkedin.com/in/atabaum" aria-label="LinkedIn">
                    <svg viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zm-46.44-341C24.3 107 0 82.7 0 53.64a53.64 53.64 0 0 1 107.28 0C107.28 82.7 83 107 53.84 107zM447.9 448h-92.4V302.4c0-34.7-.7-79.3-48.3-79.3-48.3 0-55.7 37.7-55.7 76.7V448h-92.4V148.9h88.7v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3z"/></svg>
                </a>
            </div>
        </div>
    </main>
</body>
</html>


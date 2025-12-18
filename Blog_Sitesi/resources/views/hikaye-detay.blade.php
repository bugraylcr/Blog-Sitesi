<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hikaye Detay | BAUM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent: #1f4e79;
            --bg: #f7f8fb;
            --text: #1b2533;
            --muted: #6b7280;
            --card: #fff;
            --border: #e6e9f0;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Inter', system-ui, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        a { color: var(--accent); text-decoration: none; }
        .hero {
            padding: 42px 18px 26px;
            text-align: center;
            background: #fff;
            border-bottom: 1px solid var(--border);
        }
        .hero h1 {
            margin: 0 0 10px;
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            letter-spacing: -0.3px;
        }
        .breadcrumb {
            color: var(--muted);
            font-weight: 600;
        }
        .breadcrumb a:hover { text-decoration: underline; }
        .page {
            max-width: 1080px;
            margin: 0 auto;
            padding: 26px 18px 60px;
        }
        .story-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 12px 32px rgba(0,0,0,0.05);
            padding: 24px;
            margin-bottom: 26px;
        }
        .story-meta {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 12px;
        }
        .story-content p { margin: 0 0 14px; }
        .comments {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 10px 26px rgba(0,0,0,0.04);
            padding: 24px;
        }
        .comments h2 {
            margin: 0 0 18px;
            font-size: 22px;
        }
        .comment-item {
            display: grid;
            grid-template-columns: 50px 1fr;
            gap: 12px;
            padding: 14px 0;
            border-top: 1px solid var(--border);
        }
        .comment-item:first-of-type { border-top: none; }
        .comment-item.reply {
            background: #f6f9ff;
            border-left: 3px solid var(--accent);
            border-radius: 10px;
            padding: 14px;
            margin-left: 52px;
            margin-top: 8px;
        }
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #dfe6f2;
            display: grid;
            place-items: center;
            color: var(--accent);
            font-weight: 700;
        }
        .comment-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
        }
        .comment-name { font-weight: 700; }
        .comment-date { color: var(--muted); font-size: 13px; }
        .comment-body { margin: 0; color: #2c3647; }
        .reply { margin-left: 58px; font-size: 14px; color: var(--accent); }
        .comment-form {
            margin-top: 24px;
            border-top: 1px solid var(--border);
            padding-top: 20px;
        }
        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 14px;
        }
        label { font-weight: 600; margin-bottom: 6px; display: block; }
        input, textarea {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px 14px;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            transition: border-color .2s, box-shadow .2s;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: rgba(31,78,121,0.35);
            box-shadow: 0 0 0 3px rgba(31,78,121,0.12);
        }
        textarea { min-height: 140px; resize: vertical; }
        .btn {
            margin-top: 12px;
            padding: 12px 18px;
            border: none;
            border-radius: 10px;
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(31,78,121,0.18);
            transition: transform .15s ease, box-shadow .2s ease;
        }
        .btn:hover { transform: translateY(-1px); box-shadow: 0 12px 24px rgba(31,78,121,0.22); }
        @media (max-width: 640px) {
            .comment-item { grid-template-columns: 40px 1fr; }
            .avatar { width: 40px; height: 40px; font-size: 13px; }
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>Amsterdam Gezisi! Gezdiğim &amp; Gördüğüm Yerler</h1>
        <div class="breadcrumb"><a href="/">Ana sayfa</a> / Hikaye</div>
    </div>

    <div class="page">
        <div class="story-card">
            <div class="story-meta">26 Aralık 2022 • 21 yorum • Gezi</div>
            <div class="story-content">
                <p>Yurtdışına çıkma hayallerimi tanıdığım birinin yaşamasını görmek çok keyifli. Bir gün eşimle birlikte yurt dışına çıktığımı hayal ediyorum artık. Dünya turu misalinde. Kendisiyle ara sıra bu tarz diyaloglarımız oluyor. Henüz nikahlı eşim değil ama ruh eşim ve gelecekteki eşim.</p>
                <p>Bu yazı bana ilk durak konusunda ilham oldu, tabi daha diğerlerini görmedik fikrim her an değişebilir. Ayrı zamanda bir yazar olarak gezi yazılarımı nasıl yazmam gerektiğini kopya çekebileceğim bir yazı oldu. Düşünüp duruyordum ben de. Gönlüne göre gezmeler, devamını heyecanla bekliyorum!</p>
                <p>Bu bölümde hikayenin tam halini görebilir, fotoğraflarınızı ve detayları ileride admin paneli ile ekleyebilirsiniz.</p>
            </div>
        </div>

        <div class="comments">
            <h2>Yorumlar</h2>

            <div class="comment-item">
                <div class="avatar">BG</div>
                <div>
                    <div class="comment-header">
                        <span class="comment-name">Bages</span>
                        <span class="comment-date">27 Aralık 2022, 00:03</span>
                    </div>
                    <p class="comment-body">Yurtdışına çıkma hayallerimi tanıdığım birinin yaşamasını görmek çok keyifli. Bir gün eşimle birlikte yurt dışına çıktığımı hayal ediyorum artık.</p>
                    <a href="#" class="reply">Cevapla</a>
                </div>
            </div>

            <div class="comment-item reply">
                <div class="avatar">AD</div>
                <div>
                    <div class="comment-header">
                        <span class="comment-name">Yazar Yanıtı</span>
                        <span class="comment-date">27 Aralık 2022, 08:45</span>
                    </div>
                    <p class="comment-body">Güzel dileklerin için teşekkür ederim! Yeni durakları paylaştıkça güncelleyeceğim, takipte kalın.</p>
                </div>
            </div>

            <div class="comment-item">
                <div class="avatar">BN</div>
                <div>
                    <div class="comment-header">
                        <span class="comment-name">bernaoduneu</span>
                        <span class="comment-date">28 Aralık 2022, 12:08</span>
                    </div>
                    <p class="comment-body">Ne kadar güzel olur bu! Aynı istek ve hedefte buluşabiliyor olmamız da çok değerli. Beraber yeni yerler keşfettiğiniz, gezdiğiniz yerlerin yazısını bir an önce okumayı iple çekiyorum.</p>
                    <a href="#" class="reply">Cevapla</a>
                </div>
            </div>

            <form class="comment-form">
                <h3>Bir cevap yazın</h3>
                <div class="field" style="margin-bottom:16px;">
                    <label for="comment">Yorum</label>
                    <textarea id="comment" name="comment" placeholder="Yorumunuzu yazın"></textarea>
                </div>
                <div class="form-row">
                    <div>
                        <label for="name">İsim*</label>
                        <input id="name" name="name" type="text" placeholder="İsminiz">
                    </div>
                    <div>
                        <label for="email">E-posta*</label>
                        <input id="email" name="email" type="email" placeholder="ornek@eposta.com">
                    </div>
                </div>
                <button class="btn" type="button">Yorum Gönder</button>
            </form>
        </div>
    </div>
</body>
</html>


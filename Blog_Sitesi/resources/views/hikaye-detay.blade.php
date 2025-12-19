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

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', system-ui, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        a {
            color: var(--accent);
            text-decoration: none;
        }

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
            /* Başlık çok uzunsa taşmasın */
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .breadcrumb {
            color: var(--muted);
            font-weight: 600;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .page {
            max-width: 1080px;
            margin: 0 auto;
            padding: 26px 18px 60px;
        }

        .story-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.05);
            padding: 24px;
            margin-bottom: 26px;
            /* Flexbox kaynaklı taşmaları engeller */
            min-width: 0; 
        }

        .story-meta {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 12px;
        }

        /* 1. HATA ÇÖZÜMÜ: Yazının sağa uzayıp gitmesini engelleyen kısım */
        .story-content {
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-word; /* Çok uzun anlamsız kelimeleri böler */
        }

        .story-content p {
            margin: 0 0 14px;
        }

        .comments {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 10px 26px rgba(0, 0, 0, 0.04);
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
            /* Yorumların içinde de taşma olmasın */
            min-width: 0;
        }

        .comment-item:first-of-type {
            border-top: none;
        }

        /* Yorum metinleri için taşma koruması */
        .comment-body {
            margin: 0;
            color: #2c3647;
            word-wrap: break-word;
            overflow-wrap: break-word;
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
            flex-shrink: 0;
        }

        .comment-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
        }

        .comment-name {
            font-weight: 700;
        }

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

        label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
        }

        input,
        textarea {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px 14px;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            transition: border-color .2s, box-shadow .2s;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: rgba(31, 78, 121, 0.35);
            box-shadow: 0 0 0 3px rgba(31, 78, 121, 0.12);
        }

        textarea {
            min-height: 140px;
            resize: vertical;
        }

        .btn {
            margin-top: 12px;
            padding: 12px 18px;
            border: none;
            border-radius: 10px;
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(31, 78, 121, 0.18);
            transition: transform .15s ease, box-shadow .2s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 24px rgba(31, 78, 121, 0.22);
        }

        @media (max-width: 640px) {
            .comment-item {
                grid-template-columns: 40px 1fr;
            }

            .avatar {
                width: 40px;
                height: 40px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="hero">
        <h1>{{ $icerik->baslik }}</h1>
        <div class="breadcrumb"><a href="/">Ana sayfa</a> / Hikaye</div>
    </div>

    <div class="page">
        <div class="story-card">
            <div class="story-meta">
                {{ $icerik->created_at ? $icerik->created_at->format('d F Y') : 'Tarih belirtilmedi' }} • 
                {{ $yorumlar->count() }} yorum
            </div>
            
            <div class="story-content">
                {!! nl2br(e($icerik->icerik)) !!}
            </div>
        </div>

        <div class="comments">
            <h2>Yorumlar</h2>

            @forelse($yorumlar as $yorum)
                @php
                    $parts = preg_split('/\s+/', trim($yorum->ad));
                    $first = mb_substr($parts[0] ?? 'A', 0, 1);
                    $second = mb_substr($parts[1] ?? (mb_strlen($parts[0] ?? '') > 1 ? mb_substr($parts[0], 1, 1) : 'B'), 0, 1);
                    $initials = mb_strtoupper($first.$second);
                @endphp

                <div class="comment-item">
                    <div class="avatar">{{ $initials }}</div>
                    <div>
                        <div class="comment-header">
                            <span class="comment-name">{{ $yorum->ad }}</span>
                        </div>
                        <p class="comment-body">{{ $yorum->yorum }}</p>
                    </div>
                </div>
            @empty
                <p>Henüz yorum yok.</p>
            @endforelse
        </div>

        <form class="comment-form" method="POST" action="/icerik/{{ $icerik->id }}/yorum">
            @csrf

            @if(session('success'))
                <p style="color:green; margin-bottom:10px;">{{ session('success') }}</p>
            @endif

            <h3>Bir cevap yazın</h3>

            <div class="field" style="margin-bottom:16px;">
                <label for="yorum">Yorum</label>
                <textarea id="yorum" name="yorum" placeholder="Yorumunuzu yazın" required>{{ old('yorum') }}</textarea>
                @error('yorum') <div style="color:red;">{{ $message }}</div> @enderror
            </div>

            <div class="form-row">
                <div>
                    <label for="ad">İsim*</label>
                    <input id="ad" name="ad" type="text" placeholder="İsminiz" value="{{ old('ad') }}" required>
                    @error('ad') <div style="color:red;">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label for="eposta">E-posta*</label>
                    <input id="eposta" name="eposta" type="email" placeholder="ornek@eposta.com" value="{{ old('eposta') }}" required>
                    @error('eposta') <div style="color:red;">{{ $message }}</div> @enderror
                </div>
            </div>

            <button class="btn" type="submit">Yorum Gönder</button>
        </form>
    </div>
</body>
</html>
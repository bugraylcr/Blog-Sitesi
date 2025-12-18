<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda | BAUM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand: #1f4e79;
            --muted: #65748b;
            --bg: #f7f8fb;
            --card: #ffffff;
            --border: #e6e9f0;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Inter', system-ui, sans-serif;
            background: var(--bg);
            color: #1b2533;
        }
        a { color: inherit; text-decoration: none; }
        .hero {
            text-align: center;
            padding: 46px 16px 28px;
            background: #fdfdfd;
            color: #111;
            border-bottom: 1px solid #eef0f4;
        }
        .hero h1 {
            margin: 0 0 10px;
            font-size: 42px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        .breadcrumb {
            color: var(--muted);
            font-weight: 600;
            font-size: 16px;
        }
        .breadcrumb a {
            color: var(--brand);
            text-decoration: none;
        }
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        .page {
            max-width: 1180px;
            margin: 0 auto;
            padding: 32px 24px 56px;
        }
        .corner-logo {
            position: fixed;
            top: 16px;
            left: 16px;
            width: 120px;
            height: auto;
            z-index: 20;
        }
        .table-card {
            margin-top: 8px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            overflow: hidden;
        }
        .table-head {
            padding: 18px 20px;
            border-bottom: 1px solid var(--border);
            background: #f0f4fa;
            font-weight: 700;
            color: #12203a;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .table-row {
            display: grid;
            grid-template-columns: 1fr;
            padding: 14px 20px;
            align-items: center;
            border-top: 1px solid var(--border);
        }
        .table-row:first-of-type { border-top: none; }
        .table-row .label {
            display: none;
        }
        .table-row .value {
            color: #1b2533;
            font-weight: 700;
        }
        @media (max-width: 900px) {
            .brand-block { min-height: 240px; }
        }
    </style>
</head>
<body>
    <img class="corner-logo" src="https://birimler.atauni.edu.tr/atabaum/wp-content/uploads/sites/17/2021/07/logo3.png" alt="BAUM Logo">
    <div class="hero">
        <h1>Hakkımda</h1>
        <div class="breadcrumb"><a href="/">Ana sayfa</a> / Hakkımda</div>
    </div>
    <div class="page">
        <div class="table-card">
            <div class="table-head">Yazılım</div>
            <div class="table-row">
                <div class="value">Muhammed Enes Cengiz</div>
            </div>
            <div class="table-row">
                <div class="value">Buğra Yolaçar</div>
            </div>
            <div class="table-row">
                <div class="value">Efsa Yılmaz</div>
            </div>
            <div class="table-row">
                <div class="value">Merve Uçan</div>
            </div>
        </div>
    </div>
</body>
</html>
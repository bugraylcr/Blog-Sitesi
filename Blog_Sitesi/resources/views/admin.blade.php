<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Admin Panel</title>
  <style>
    body{font-family:Arial;margin:20px;background:#f6f7fb}
    .box{background:#fff;padding:16px;border-radius:10px;margin-bottom:16px}
    table{width:100%;border-collapse:collapse}
    td,th{border-bottom:1px solid #eee;padding:10px;text-align:left}
    button{padding:8px 10px;border:0;border-radius:8px;cursor:pointer}
    .ok{background:#1f4e79;color:#fff}
    .danger{background:#b91c1c;color:#fff}
    .muted{color:#666}
    input,textarea{width:100%;padding:10px;border:1px solid #ddd;border-radius:8px}
    
    /* Başlık ve Çıkış Butonu için Esnek Düzen */
    .header-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="header-area">
    <h1>Admin Panel</h1>
    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="danger">Çıkış Yap</button>
    </form>
</div>

@if(session('success'))
  <p style="color:green">{{ session('success') }}</p>
@endif

<div class="box">
  <h2>İçerik Ekle</h2>
  <form method="POST" action="/admin/icerik-ekle">
    @csrf
    <div style="margin-bottom:10px">
      <label>Başlık</label>
      <input name="baslik" required>
    </div>
    <div style="margin-bottom:10px">
      <label>İçerik</label>
      <textarea name="icerik" rows="6" required></textarea>
    </div>
    <button class="ok" type="submit">Kaydet</button>
  </form>
</div>

<div class="box">
  <h2>İçerikler</h2>
  <table>
    <tr><th>ID</th><th>Başlık</th><th>Durum</th><th>İşlem</th></tr>
    @foreach($icerikler as $i)
      <tr>
        <td>{{ $i->id }}</td>
        <td>{{ $i->baslik }}</td>
        <td class="muted">{{ $i->yayinda ? 'Yayında' : 'Kapalı' }}</td>
        <td>
          @if(!$i->yayinda)
            <form method="POST" action="/admin/icerik/{{ $i->id }}/yayina-al" style="display:inline">
              @csrf
              <button class="ok">Yayına Al</button>
            </form>
          @else
            <form method="POST" action="{{ route('admin.icerik.destroy', $i->id) }}"
                  onsubmit="return confirm('İçeriği yayından kaldırmak (silmek) istiyor musun?')">
                @csrf
                @method('DELETE')
                <button type="submit">Yayından Kaldır</button>
            </form>
          @endif
        </td>
      </tr>
    @endforeach
  </table>
</div>

<div class="box">
  <h2>Yorumlar</h2>
  <table>
    <tr><th>ID</th><th>İçerik</th><th>Ad</th><th>Yorum</th><th>Durum</th><th>İşlem</th></tr>
    @foreach($yorumlar as $y)
      <tr>
        <td>{{ $y->id }}</td>
        <td>{{ $y->icerik_id }}</td>
        <td>{{ $y->ad }}</td>
        <td>{{ $y->yorum }}</td>
        <td class="muted">{{ $y->onayli ? 'Onaylı' : 'Bekliyor' }}</td>
        <td>
          @if(!$y->onayli)
            <form method="POST" action="/admin/yorum/{{ $y->id }}/onayla" style="display:inline">
              @csrf
              <button class="ok">Onayla</button>
            </form>
          @endif
          <form method="POST" action="/admin/yorum/{{ $y->id }}/sil" style="display:inline">
            @csrf
            <button class="danger">Sil</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
</div>

<div class="box">
  <h2>İletişim Mesajları</h2>
  <table>
    <tr><th>ID</th><th>Ad</th><th>E-posta</th><th>Konu</th><th>Mesaj</th></tr>
    @foreach($mesajlar as $m)
      <tr>
        <td>{{ $m->id }}</td>
        <td>{{ $m->ad }}</td>
        <td>{{ $m->eposta }}</td>
        <td>{{ $m->konu }}</td>
        <td>{{ $m->mesaj }}</td> 
      </tr>
    @endforeach
  </table>
</div>

</body>
</html>
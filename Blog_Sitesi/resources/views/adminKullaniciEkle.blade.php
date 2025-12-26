<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin | Kullanıcı Ekle</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, select, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            margin-top: 20px;
            background: #1f4e79;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kullanıcı Ekle</h2>

    <form method="POST" action="{{ route("aaa") }}">
        @csrf

        <label>E-posta</label>
        <input type="email" name="mail" required>

        <label>Şifre</label>
        <input type="password" name="sifre" required>

        <label>Rol</label>
        <select name="rol" required>
            <option value="yazar">Yazar</option>
            <option value="editor">Editör</option>
            <!-- <option value="admin">Admin</option> -->
        </select>

        <button type="submit">Kullanıcı Ekle</button>
    </form>
</div>

</body>
</html>

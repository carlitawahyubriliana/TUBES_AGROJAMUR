<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Masuk - Agro Jamur</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <meta name="description" content="Halaman masuk Agro Jamur">
</head>
<body>
  <div class="page">
    <div class="card">
      <img src="{{ asset('image/logo agro.png') }}" alt="Logo Agro" class="logo">
      <h1>Selamat Datang Kembali!</h1>

      <form method="POST" class="form">
        @csrf
        <label class="label">Username</label>
        <input class="input" type="text" name="username" placeholder="">

        <label class="label">Password</label>
        <input class="input" type="password" name="password" placeholder="">

        <a class="forgot" href="#">Lupa password?</a>

        <button class="btn" type="submit">Masuk</button>

        <p class="helper">belum punya akun? <a href="#">Buat Akun</a></p>
        <p class="helper">atau Masuk menggunakan</p>

        <div class="social-row">
        </div>
      </form>
    </div>
  </div>
</body>
</html>

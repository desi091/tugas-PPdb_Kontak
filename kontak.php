<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - SMPN 2 Greged</title>
  <style>
    /* Reset & font */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f4f7fb;
      color: #333;
    }

    /* Header */
    header {
      background: linear-gradient(135deg, #0066cc, #004a99);
      color: white;
      padding: 40px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.1em;
      opacity: 0.9;
    }

    /* Container utama */
    main {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
    }

    /* Kartu */
    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 25px;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      margin-bottom: 15px;
      font-size: 1.4em;
      color: #0066cc;
    }

    .info {
      margin: 12px 0;
      font-size: 1em;
    }

    /* Map */
    iframe {
      border: none;
      width: 100%;
      height: 300px;
      border-radius: 10px;
    }

    /* Form kontak */
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1em;
      transition: 0.3s;
    }

    input:focus, textarea:focus {
      border-color: #0066cc;
      outline: none;
      box-shadow: 0 0 6px rgba(0,102,204,0.3);
    }

    button {
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #0066cc;
      color: white;
      font-size: 1em;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #004a99;
    }

    /* Footer */
    footer {
      text-align: center;
      background: #004a99;
      color: white;
      padding: 15px;
      margin-top: 40px;
      font-size: 0.9em;
    }

    /* Responsive */
    @media (max-width: 900px) {
      main {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>Kontak SMPN 2 Greged</h1>
    <p>Mari Terhubung dengan Kami</p>
  </header>

  <!-- Konten Utama -->
  <main>
    <!-- Info Sekolah -->
    <div class="card">
      <h2>Informasi Sekolah</h2>
      <div class="info"><b>Alamat:</b> Jl. Raya Greged, Kabupaten Cirebon, Jawa Barat</div>
      <div class="info"><b>Telepon:</b> (0231) 0856-2451-7891</div>
      <div class="info"><b>Email:</b> smpn2greged@example.sch.id</div>
      <div class="info"><b>Website:</b> www.smpn2greged.sch.id</div>
    </div>

    <!-- Map -->
    <div class="card">
      <h2>Lokasi Kami</h2>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6763348569854!2d108.631!3d-6.737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDQnMTMuMiJTIDEwOMKwMzcnNTEuNiJF!5e0!3m2!1sid!2sid!4v00000000000" 
        allowfullscreen="" loading="lazy">
      </iframe>
    </div>

    <!-- Form Kontak -->
    <div class="card" style="grid-column: span 2;">
      <h2>Kirim Pesan</h2>
      <form action="#" method="post">
        <input type="text" name="nama" placeholder="Nama Anda" required>
        <input type="email" name="email" placeholder="Email Anda" required>
        <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    &copy; 2025 SMPN 2 Greged. Semua Hak Dilindungi.
  </footer>

</body>
</html>
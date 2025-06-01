<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pengunjung</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background-color: #f8f9fa;
    }
    .form-container {
      background-color: white;
      padding: 30px;
      max-width: 500px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 8px;
    }
    h2 {
      text-align: center;
      color: #0A3990;
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }
    input, textarea, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background-color: #0A3990;
      color: white;
      padding: 10px 20px;
      border: none;
      margin-top: 20px;
      width: 100%;
      font-weight: bold;
      border-radius: 4px;
    }
    .success {
      background-color: #d4edda;
      padding: 10px;
      border: 1px solid #c3e6cb;
      color: #155724;
      margin-bottom: 20px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Buku Tamu Pengunjung</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = htmlspecialchars($_POST["nama"]);
      $email = htmlspecialchars($_POST["email"]);
      $gender = htmlspecialchars($_POST["gender"]);
      $pesan = htmlspecialchars($_POST["pesan"]);

      echo "<div class='success'><strong>Terima kasih, $nama!</strong><br>Data Anda telah kami terima.</div>";
  }
  ?>

  <form method="post" action="">
    <label for="nama">Nama Lengkap</label>
    <input type="text" name="nama" id="nama" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="gender">Jenis Kelamin</label>
    <select name="gender" id="gender" required>
      <option value="">-- Pilih --</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>

    <label for="pesan">Pesan / Kesan</label>
    <textarea name="pesan" id="pesan" rows="4" required></textarea>

    <button type="submit">Kirim</button>
  </form>
</div>

</body>
</html>

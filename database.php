<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Dosen dan Mahasiswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 40px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: left;
    }
    th {
      background-color: #0A3990;
      color: white;
    }
    h2 {
      color: #0A3990;
    }
  </style>
</head>
<body>

<h2>Data Dosen</h2>
<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIP</th>
    <th>Jurusan</th>
  </tr>
  <?php
  $no = 1;
  $dosen = mysqli_query($conn, "SELECT * FROM dosen");
  while ($row = mysqli_fetch_assoc($dosen)) {
      echo "<tr>
              <td>$no</td>
              <td>{$row['nama']}</td>
              <td>{$row['nip']}</td>
              <td>{$row['jurusan']}</td>
            </tr>";
      $no++;
  }
  ?>
</table>

<h2>Data Mahasiswa</h2>
<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Program Studi</th>
  </tr>
  <?php
  $no = 1;
  $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
  while ($row = mysqli_fetch_assoc($mahasiswa)) {
      echo "<tr>
              <td>$no</td>
              <td>{$row['nama']}</td>
              <td>{$row['nim']}</td>
              <td>{$row['prodi']}</td>
            </tr>";
      $no++;
  }
  ?>
</table>

</body>
</html>
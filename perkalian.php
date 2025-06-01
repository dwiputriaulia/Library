<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tabel Perkalian 10x10</title>
  <style>
    table {
      border-collapse: collapse;
      width: 60%;
      margin: 30px auto;
    }
    th, td {
      border: 1px solid #333;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #0A3990;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    caption {
      margin-bottom: 10px;
      font-size: 1.5rem;
      font-weight: bold;
    }
  </style>
</head>
<body>

<table>
  <caption>Tabel Perkalian 10 x 10</caption>
  <thead>
    <tr>
      <th>&times;</th>
      <?php for ($i = 1; $i <= 10; $i++): ?>
        <th><?= $i ?></th>
      <?php endfor; ?>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 1; $i <= 10; $i++): ?>
      <tr>
        <th><?= $i ?></th>
        <?php for ($j = 1; $j <= 10; $j++): ?>
          <td><?= $i * $j ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </tbody>
</table>

</body>
</html>

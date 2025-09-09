<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Daftar Perangkat Lunak</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Software</th>
            <th>Versi Software</th>
        </tr>

        <?php foreach($data as $d): ?>
            <tr>
                <td><?= $d['id'] ?></td>
                <td><?= $d['nama_software'] ?></td>
                <td><?= $d['versi_software'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Daftar Perangkat Lunak</title>
</head>
<body>
    <?php if($data): ?>
    <ul>
        <li>ID: <?= $data['id'] ?></li>
        <li>Nama Software: <?= $data['nama_software'] ?></li>
        <li>Versi Software: <?= $data['versi_software'] ?></li>
    </ul>
    <?php endif; ?>
</body>
</html>
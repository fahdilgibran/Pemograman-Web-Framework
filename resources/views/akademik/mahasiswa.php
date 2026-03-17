<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="<?= asset('build/css/style.css') ?>">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?= $mhs1 ?></li>
        <li><?= $mhs2 ?></li>
        <li><?= $mhs3 ?></li>
        <li><?= $mhs4 ?></li>
        <li><?= $mhs5 ?></li>
        <li><?= $mhs6 ?></li>
    </ol>
    <div>
        <p>Padang &copy; <?= date('Y') ?> PNP </p>
        <img src="<?= asset('build/image/Logo PNP.png') ?>" alt="Logo PNP" width="100px">
    </div>
</html>
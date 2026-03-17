<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Nilai Mahasiswa</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr><th>Nama</th><th>NIM</th><th>Total Nilai</th></tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $nama }}</td>
                <td>{{ $nim }}</td>
                <td>{{ $total_nilai }}</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>IF Else</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Nilai Mahasiswa</h2>
    
    @if ($total_nilai >= 56)
        <div class="alert alert-success">Selamat, anda lulus</div>
    @else
        <div class="alert alert-danger">Maaf, anda tidak lulus</div>
    @endif

    <table class="table table-bordered">
        <tr><th>Nama</th><th>NIM</th><th>Total Nilai</th></tr>
        <tr>
            <td>{{ $nama }}</td>
            <td>{{ $nim }}</td>
            <td>{{ $total_nilai }}</td>
        </tr>
    </table>
</div>
</body>
</html>
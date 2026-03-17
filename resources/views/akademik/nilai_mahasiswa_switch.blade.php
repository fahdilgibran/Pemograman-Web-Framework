<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Switch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Nilai Mahasiswa</h2>
    
    @switch($total_nilai)
        @case(0)
            <div class="alert alert-danger">Sangat Jelek</div>
            @break
        @case(70)
            <div class="alert alert-primary">Memuaskan</div>
            @break
        @case(100)
            <div class="alert alert-success">Sangat Memuaskan</div>
            @break
        @default
            <div class="alert alert-warning">Nilai tidak valid!</div>
    @endswitch

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
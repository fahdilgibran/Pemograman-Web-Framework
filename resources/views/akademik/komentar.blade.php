<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    {{-- Ini adalah komentar Blade (tidak akan muncul di browser) --}}
    
    <h2>Contoh @php</h2>
    @php
        $hitung = 10 * 5;
        echo "<p>Hasil perhitungan: " . $hitung . "</p>";
    @endphp
</div>
</body>
</html>
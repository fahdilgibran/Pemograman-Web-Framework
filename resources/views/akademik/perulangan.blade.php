<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perulangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Perulangan</h2>
    <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>

    <h5>1. For</h5>
    @for ($i = 0; $i < 5; $i++)
        Looping ke-{{ $i }} <br>
    @endfor

    <h5>2. While</h5>
    <?php $i = 0; ?>
    @while ($i < 5)
        Looping ke-{{ $i }} <br>
        <?php $i++; ?>
    @endwhile

    <h5>3. Foreach</h5>
    Nilai = 
    @foreach ($total_nilai as $nilai)
        <span class="badge bg-info">{{ $nilai }}</span>
    @endforeach

    <h5>4. Forelse (jika array kosong)</h5>
    @forelse ($total_nilai as $nilai)
        <span class="badge bg-success">{{ $nilai }}</span>
    @empty
        <div class="alert alert-warning">Data tidak valid</div>
    @endforelse

    <h5>5. Continue & Break</h5>
    Nilai ≥ 50 saja: 
    @foreach ($total_nilai as $nilai)
        @if ($nilai < 50)
            @continue
        @endif
        <span class="badge bg-danger">{{ $nilai }}</span>
    @endforeach
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Perbayaran bayar-air </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <h1>Perbayaran bayar-air </h1>
        @if (isset($tagihan))
            <div class="alert alert-danger">
                <p>Pemakaian: {{ $pemakaian }} m<sup>3</sup></p>
                <p>Total tagihan: Rp. {{ number_format($tagihan, 0, ',', '.') }}</p>
            </div>
        @endif
        <form action="{{ route('bayar-air.bayar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pemakaian">Pemakaian (m<sup>3</sup>)</label>
                <input type="number" class="form-control" id="pemakaian" name="pemakaian" required>
            </div>
            <button type="submit" class="btn btn-success">Total Harga</button>
        </form>
    </div>
</body>
</html>

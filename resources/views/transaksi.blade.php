<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 fw-bold" style="text-align: center">AYOK BAYAR</h2>
        <form method="post" action="/beli/{{ $transaksi->id}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Nama Penerima</label>
                        <textarea class="form-control" name="nama_penerima" id="alamat" rows="1" placeholder="masukan nama penerima"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="metode_pembayaran" class="form-label">metode pembayaran</label>
                        <select class="form-select" name="metode_pembayaran" id="metode_pembayaran">
                            <option value="cod">COD (Cash on Delivery)</option>
                            <option value="dana">DANA</option>
                            <option value="bri">BRI</option>
                            <option value="indomaret">indomaret</option>
                            <option value="alfamart">alfamart</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan</label>
                        <textarea class="form-control" name="note" id="catatan" rows="3" placeholder="tambah catatan jika perlu"></textarea>
                    </div>
                    <div class="col-mb-6">
                        <div class="card p-3" style="margin: 0px 0px 0px 0px">
                            <h5>Ringkasan belanja</h5>
                            <div>
                                <span>jumlah beli: </span><span style="color: #7A1CAC">1</span>
                            </div>
                            <h5 class="mt-3 mb-4 pb2" style="border-buttom: 1px solid rgb(191, 191, 191)">total tagihan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

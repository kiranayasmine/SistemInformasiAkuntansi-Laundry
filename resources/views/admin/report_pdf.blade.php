<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>

    <header class="text-center">
        <div class="row">
            <div class="col-4">
                <h1>{{config('app.name')}}</h1>
            </div>
            <div class="col-4">
                <h3>Laporan Laba Rugi Bulan {{$monthInput}} Tahun {{$yearInput}}</h3>
            </div>
            <div class="col-4">
            </div>
        </div>
    </header>
    <hr>
    <main>
        <p>Banyak transaksi: {{$transactionsCount}} transaksi</p>
        <table>
        <tr>
            <th>Pendapatan</th>
            <td></td>
        </tr>
        <tr>
            <td>Pendapatan dari layanan laundry</td>
            <td>: Rp {{ number_format($revenue, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Total Pendapatan</td>
            <td>: Rp {{ number_format($revenue, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Beban-Beban Operasional</th>
            <td></td>
        </tr>
        <tr>
            <td>Beban Gaji Karyawan</td>
            <td>[Jumlah beban gaji karyawan]</td>
        </tr>
        <tr>
            <td>Beban Bahan Baku</td>
            <td>[Jumlah beban bahan baku]</td>
        </tr>
        <tr>
            <td>Beban Listrik dan Air</td>
            <td>[Jumlah beban listrik dan air]</td>
        </tr>
        <tr>
            <td>Beban Sewa Tempat</td>
            <td>[Jumlah beban sewa tempat]</td>
        </tr>
        <tr>
            <td>Beban Pemasaran</td>
            <td>[Jumlah beban pemasaran]</td>
        </tr>
        <tr>
            <td>Beban Administrasi dan Umum</td>
            <td>[Jumlah beban administrasi dan umum]</td>
        </tr>
        <tr>
            <td>Total Beban Operasional</td>
            <td>[Jumlah total beban operasional]</td>
        </tr>
        <tr>
            <th>Laba Kotor</th>
            <td></td>
        </tr>
        <tr>
            <td>Pendapatan - Beban Operasional</td>
            <td>[Laba Kotor]</td>
        </tr>
        <tr>
            <th>Beban Non-Operasional</th>
            <td></td>
        </tr>
        <tr>
            <td>Beban Bunga</td>
            <td>[Jumlah beban bunga]</td>
        </tr>
        <tr>
            <td>Beban Lain-lain</td>
            <td>[Jumlah beban lain-lain]</td>
        </tr>
        <tr>
            <td>Total Beban Non-Operasional</td>
            <td>[Jumlah total beban non-operasional]</td>
        </tr>
        <tr>
            <th>Laba Bersih Sebelum Pajak</th>
            <td></td>
        </tr>
        <tr>
            <td>Laba Kotor - Total Beban Non-Operasional</td>
            <td>[Laba Bersih Sebelum Pajak]</td>
        </tr>
        <tr>
            <th>Pajak Penghasilan</th>
            <td></td>
        </tr>
        <tr>
            <td>Beban Pajak Penghasilan</td>
            <td>: Rp 26.000</td>
        </tr>
        <tr>
            <th>Laba Bersih Setelah Pajak</th>
            <td></td>
        </tr>
        <tr>
            <td>Laba Bersih Sebelum Pajak - Beban Pajak Penghasilan</td>
            <td>[Laba Bersih Setelah Pajak]</td>
        </tr>
    </table>

    <p><strong>Catatan Tambahan:</strong> [Tambahkan catatan tambahan atau komentar mengenai laporan laba rugi]</p>
    </main>
    <footer class="text-end">
        <span class="text-muted small text-end">Dicetak pada {{date('d M Y')}}</span>
    </footer>

    <header class="text-center">
        <div class="row">
            <div class="col-4">
                <h1>{{config('app.name')}}</h1>
            </div>
            <div class="col-4">
                <h3>Laporan Harga Pokok Produksi Bulan {{$monthInput}} Tahun {{$yearInput}}</h3>
            </div>
            <div class="col-4">
            </div>
        </div>
    </header>
    <hr>
    <main>
    <title>Laporan Harga Pokok Produksi Lima Laundry</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      padding: 7px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>No.</th>
      <th>Komponen Biaya</th>
      <th>Jumlah (Rp)</th>
    </tr>
    <tr>
      <td>1.</td>
      <td>Biaya Bahan Deterjen</td>
      <td>8,000,000</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Biaya Listrik dan Air</td>
      <td>6,000,000</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Biaya Perawatan dan Perbaikan</td>
      <td>1,500,000</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Biaya Sewa Peralatan</td>
      <td>3,500,000</td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Biaya Tenaga Kerja</td>
      <td>15,000,000</td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Biaya Kemasan dan Perlengkapan</td>
      <td>1,500,000</td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Biaya Administrasi dan Operasional</td>
      <td>3,500,000</td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Biaya Overhead</td>
      <td>13,000,000</td>
    </tr>
    <tr>
      <th colspan="2">Total Harga Pokok Produksi</th>
      <th>51,000,000</th>
    </tr>
  </table>
    <hr>
    <footer class="text-end">
        <span class="text-muted small text-end">Dicetak pada {{date('d M Y')}}</span>
    </footer>

</body>

</html>

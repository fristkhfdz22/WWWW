<h2>Daftar Transaksi</h2>
<table border="1">
    <thead>
        <tr>
            <th>Kode Transaksi</th>
            <th>Kode Barang</th>
            <th>Jumlah Beli</th>
            <th>Total Bayar</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transaksi as $t): ?>
            <tr>
                <td><?= $t['kode_transaksi']; ?></td>
                <td><?= $t['kode_barang']; ?></td>
                <td><?= $t['jumlah_beli']; ?></td>
                <td><?= $t['total_bayar']; ?></td>
                <td><?= $t['tanggal']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

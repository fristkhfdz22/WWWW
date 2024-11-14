<h2>Daftar Barang</h2>
<a href="<?= site_url('barang/tambah'); ?>">Tambah Barang</a>
<table border="1">
    <thead>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($barang as $b): ?>
            <tr>
                <td><?= $b['kode_barang']; ?></td>
                <td><?= $b['nama_barang']; ?></td>
                <td><?= $b['merk']; ?></td>
                <td><?= $b['harga']; ?></td>
                <td><?= $b['stok']; ?></td>
                <td>
                    <a href="<?= site_url('barang/edit/'.$b['id']); ?>">Edit</a> |
                    <a href="<?= site_url('barang/hapus/'.$b['id']); ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

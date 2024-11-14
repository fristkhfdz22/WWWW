<h2>Edit Barang</h2>
<form action="<?= site_url('barang/edit/'.$barang['id']); ?>" method="post">
    <label for="kode_barang">Kode Barang:</label>
    <input type="text" name="kode_barang" value="<?= $barang['kode_barang']; ?>"><br>

    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" value="<?= $barang['nama_barang']; ?>"><br>

    <label for="merk">Merk:</label>
    <input type="text" name="merk" value="<?= $barang['merk']; ?>"><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" value="<?= $barang['harga']; ?>"><br>

    <label for="stok">Stok:</label>
    <input type="number" name="stok" value="<?= $barang['stok']; ?>"><br>

    <button type="submit">Update</button>
</form>

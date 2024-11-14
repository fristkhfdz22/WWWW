<h2>Tambah Barang</h2>
<form action="<?= site_url('barang/tambah'); ?>" method="post">
    <label for="kode_barang">Kode Barang:</label>
    <input type="text" name="kode_barang" id="kode_barang"><br>

    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" id="nama_barang"><br>

    <label for="merk">Merk:</label>
    <input type="text" name="merk" id="merk"><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga"><br>

    <label for="stok">Stok:</label>
    <input type="number" name="stok" id="stok"><br>

    <button type="submit">Tambah</button>
</form>

<h2>Detail Pembelian</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan
                ON pembelian.id_pelanggan=pelanggan.id_pelanggan
                WHERE pembelian.id_pembelian='$_GET[id]'");

                $detail=$ambil->fetch_assoc();
?>
<pre><?php print_r($detail) ?></pre>
<strong>Nama: <?php echo $detail['nama_pelanggan']; ?></strong>
<p>
    No Telepon: <?php echo $detail['telepon_pelanggan']; ?> <br>
    Email: <?php echo $detail['email_pelanggan']; ?>
</p>
<p>
    Tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
    Total: <?php echo $detail['total_pembelian']; ?>
</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th>no</th>
            <th>nama produk</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON
        pembelian_produk.id_produk=produk.id_produk
        WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
        <?php while($pecah=$ambil->fetch_assoc()) {?>
        <tr>
            <td><?php echo $nomor ?></td>
            <td><?php echo $pecah['nama_produk']; ?></td>
            <td><?php echo $pecah['harga_produk']; ?></td>
            <td><?php echo $pecah['jumlah_produk']; ?></td>
            <td>
                <?php echo $pecah['harga_produk']*$pecah['jumlah_produk']; ?>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php }?>
    </tbody>
</table>
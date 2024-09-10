<?php
include "header.php";

// Memastikan session cart ada
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>

<div class="container">
    <h2 class="my-4">Daftar Barang Pinjaman</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
                <tr>
                    <td><?= ($key_produk + 1) ?></td>
                    <td><?= $val_produk['nama_buku'] ?></td>
                    <td><?= $val_produk['qty'] ?></td>
                    <td>
                        <a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="checkout.php" class="btn btn-primary">Check Out</a>
</div>

<?php
include "footer.php";
?>
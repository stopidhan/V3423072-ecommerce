<?php
include 'ecommerce.php';

// Pesanan 1
$pengguna1 = new Pengguna();
$pengguna1->isiDataPengguna("hahahan", "hanjayidzez@gmail.com", "Salakarta");

$produk1 = new Produk();
$produk1->isiDataProduk("sle.id", "Laptop MSI Gaming", 15000000, 10);

$pesanan1 = new Pesanan();
$pesanan1->isiDataPesanan($pengguna1, $produk1, 2);

// Pesanan 2
$pengguna2 = new Pengguna();
$produk2 = new Produk();
$pesanan2 = new Pesanan();
$pesanan2->isiDataPesanan($pengguna2, $produk2, 0);

// Cetak Pesanan
$pesanan1->cetakDataPesanan();
$pesanan2->cetakDataPesanan();
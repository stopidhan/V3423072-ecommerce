<?php
class Pengguna
{
    var $nama;
    var $email;
    var $alamat;

    function __construct()
    {
        $this->nama = "Anonimus";
        $this->email = "Amonisus";
        $this->alamat = "Amoninus";
    }

    function isiDataPengguna($nama, $email, $alamat)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->alamat = $alamat;
    }

    function cetakDataPengguna()
    {
        echo "Nama Pengguna: " . $this->nama . "<br/>";
        echo "Email Pengguna: " . $this->email . "<br/>";
        echo "Alamat Pengguna: " . $this->alamat . "<br/>";
        echo "------------------------------------------------<br/>";
    }
}

class Produk
{
    var $toko;
    var $nama;
    var $harga;
    var $stok;

    function __construct()
    {
        $this->toko = "Toko Alomanus";
        $this->nama = "Produk Aninomus";
        $this->harga = 0;
        $this->stok = 0;
    }

    function isiDataProduk($toko, $nama, $harga, $stok)
    {
        $this->toko = $toko;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    function cetakDataProduk()
    {
        echo "Nama Toko: " . $this->toko . "<br/>";
        echo "Nama Produk: " . $this->nama . "<br/>";
        echo "Harga Produk: " . $this->formatRupiah($this->harga) . "<br/>";
        echo "Stok Produk: " . $this->stok . "<br/>";
        echo "------------------------------------------------<br/>";
    }
    function formatRupiah($angka)
    {
        return "Rp" . number_format($angka, 0, ',', '.');
    }
}

class Pesanan
{
    var $produk;
    var $pengguna;
    var $jumlah;

    function __construct()
    {
        $this->produk = null;
        $this->pengguna = null;
        $this->jumlah = 0;
    }

    function isiDataPesanan($pengguna, $produk, $jumlah)
    {
        $this->pengguna = $pengguna;
        $this->produk = $produk;
        $this->jumlah = $jumlah;
    }

    function cetakDataPesanan()
    {
        echo "Detail Pesanan <br/><br/>";
        $this->pengguna->cetakDataPengguna();
        $this->produk->cetakDataProduk();
        echo "Jumlah Pesanan: " . $this->jumlah . "<br/>";
        echo "Total Harga: " . $this->produk->formatRupiah($this->jumlah * $this->produk->harga) . "<br/>";
        echo "------------------------------------------------<br/><br/>";
    }
}

<?php 

class Produk {
    public $judul, 
        $penulis, 
        $penerbit, 
        $harga;
    

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
        //echo "Hello";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }


    public function getLabel() {
        return "$this->judul, $this->penulis";
        //return $this->judul .','. $this-.penulis;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "$produk->judul | $produk->penulis, | $produk->penerbit (Rp.$produk->harga)";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Nishimoto", "Erlangga", 10000);
$produk2 = new Produk("Uncharted", "Noll", "Pusaka Ilmu", 50000);
$produk3 = new Produk("Doraemon", "Faisal", "Iri Suaka", 50000);
$produk4 = new Produk();

//var_dump ($produk1);
//var_dump ($produk2);

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();
echo "<br>";

$infoproduk = new CetakInfoProduk();
echo $infoproduk->cetak($produk1);
//echo"Naruto | Masashi Nishimoto, Erlangga (Rp.30000)";
?>


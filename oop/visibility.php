<?php 

class Produk {
    private $judul, 
        $penulis, 
        $penerbit, 
        $harga;

    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }
    
    public function __construct ($judul = 'judul', $penulis = 'penulis',
    $penerbit= 'penerbit', $harga = '0'){

        //echo "Hello";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    
    public function getLabel (){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

    public function getInfoProduk () {
        return "$this->judul, $this->penulis";
        //return $this->judul. ',' . $this->penulis;
    }
}


class Komik extends Produk{
public $jmlhalaman;

public function __construct ($judul = 'judul', $penulis = 'penulis',
$penerbit = 'penerbit', $harga = 0, $jmlhalaman = 150) {
        //$this->judul = $judul;
        //$this->penulis = $penulis;
        //$this->penerbit = $penerbit;
        //$this->harga = $harga;
        //$this->jmlHalaman = $jmlhalaman;

        parent::__construct ($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman=$jmlhalaman;

}
    public function getInfoProduk(){
        $str ="Komik: " . parent::getInfoProduk() . " - $this->jmlhalaman Halaman";
        return $str;
    }

}


class Game extends Produk{
    public $waktumain;
    
    public function __construct ($judul = 'judul', $penulis = 'penulis',
    $penerbit = 'penerbit', $harga = 0, $waktumain = 5) {
            //$this->judul = $judul;
            //$this->penulis = $penulis;
            //$this->penerbit = $penerbit;
            //$this->harga = $harga;
            //$this->jmlHalaman = $jmlHalaman;
    
            parent::__construct ($judul, $penulis, $penerbit, $harga);
            $this->waktumain=$waktumain;
    
    }
        public function getInfoProduk(){
            $str ="Game: " . parent::getInfoProduk() . " - $this->waktumain Jam";
            return $str;
        }
    
    }
   

    Class CetakInfoProduk {
        public function cetak (Produk $produk){
            $str = "$produk->judul | $produk->penulis, $produk->penerbit (Rp.$produk->harga) - $produk->waktumain Jam";
            return $str;
        }
    }

    $produk1 = new Komik("Naruto", "Masashi Nishimoto", "Erlangga", 10000, 150);
    $produk2 = new Game("Uncharted", "Noll", "Pustaka Ilmu", 50000, 50);
    $produk3 = new Produk("Doraemon", "Zahid", "Iri Suaka", 60000);
    $produk4 = new Produk();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";


$produk1->setJudul("Dragon Ball");
$produk1->judul = "Shincan";

echo $produk1->getJudul();

//$infoproduk = new CetakInfoProduk();
//echo $infoproduk->cetak($produk1);

//echo "One Piece | Paman Jamal, Erlangga, (20000)";
?>
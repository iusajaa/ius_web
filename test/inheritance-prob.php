<?php

 class product{
    //prop
    public $judul,
           $penerbit,
           $penulis,
           $harga,
           $waktumain,
           $jmlhalaman,
           $tipe;
    //construct
    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $waktumain = 0, $jmlhalaman = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->waktumain = $waktumain;
        $this->jmlhalaman = $jmlhalaman;
        $this->tipe = $tipe;
    }
    //method
    public function  getdata(){
        return "$this->penerbit, $this->penulis";
    }
    public function getinfolengkap(){
        $data = "{$this->tipe} : {$this->judul} | {$this->getdata()} (Rp. {$this  ->harga})";
        if($this->tipe == "Komik")
        {
            $data .= "- {$this->jmlhalaman} Halaman";
        }elseif($this->tipe == "Game")
        {
            $data .= "- {$this->waktumain} Jam";
        }
        return $data;

    }
        
    }
class infoproduct{
    //method untuk mencetak info produk
    public function cetak(product $product){
        $data = "{$product->judul} | {$product->getdata()} | (Rp. {$product   ->harga})";
        return $data;
    }
}
$product1 = new product("One piece","Echiro oda","Shounen jump", 100000, 0, 80, "Komik");
$product2 = new product("AAA","RDR2","GTAV",85000, 20, 0, "Game");
//$product3 = new product("One pis");

//Game : ML | Moonton, AAA (Rp. 85000) - 20 jam
//Komik : One piece | Echiro oda , shou jump (Rp. 95000) - 100 chapter

echo "Music : ". $product1->getdata();
echo "<br>";
echo "Game :  ". $product2->getdata();
echo "<br>";
echo "<br>";

echo $product1->getinfolengkap($product2);
echo "<br>";
echo $product2->getinfolengkap($product1);
echo "<br>";


?>
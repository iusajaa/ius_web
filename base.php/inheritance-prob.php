<?php

 class product{
    //prop
    public $judul,
           $penerbit,
           $penulis,
           $harga;
    //construct
    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0 )
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }
    //method
    public function  getdata(){
        return "$this->penerbit, $this->penulis";
    }
        
    }
class infoproduct{
    //method untuk mencetak info produk
    public function cetak(product $product){
        $data = "{$product->judul} | {$product->getdata()} | (Rp. {$product   ->harga})";
        return $data;
    }
}
$product1 = new product("RAPSODI","JKT48","AKB48", 100000);
$product2 = new product("AAA","RDR2","GTAV",85000);


echo "Music : ". $product1->getdata();
echo "<br>";
echo "Game :  ". $product2->getdata();
echo "<br>";
echo "<br>";

$cetak = new infoproduct();

echo $cetak->cetak($product2);
echo "<br>";
echo $cetak->cetak($product1);


?>
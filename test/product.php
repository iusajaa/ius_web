<?php

 class product{
    //prop
    public $judul
           $penerbit
           $penulis
           $harga
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
        return "$this->penerbit, $this->penulis"
    }
        
    }
$product1 = new product("RAPSODI","JKT48","AKB48",)
$product2 = new product("GTAV","RDR2","MINECRAFT",)

echo "music : ". $product1->getdata();
echo "<br>";
echo "game :  ". $product2->getdata();


?>
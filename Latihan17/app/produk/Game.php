<?php class Game extends Produk implements InfoProduk{
    public $waktuMain;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain=$waktuMain;                
    }

    public function AmbilInfo(){
        $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->AmbilHarga()}) ";
        return $str;
    }
    public function AmbilInfoProduk(){
        $str="Game : ". $this->AmbilInfo() ."~ {$this->waktuMain} Jam.";
        return $str;
    }
}
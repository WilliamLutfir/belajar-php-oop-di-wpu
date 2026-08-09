<?php class Komik extends Produk implements InfoProduk{
    public $jmlhHlmn;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhHlmn=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlhHlmn=$jmlhHlmn;
    }

    public function AmbilInfo(){
        $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->AmbilHarga()}) ";
        return $str;
    }
    public function AmbilInfoProduk(){
                        // Mengacu ke method parent
        $str="Komik : ". $this->AmbilInfo() ."- {$this->jmlhHlmn} Halaman.";
        return $str;
    }
}
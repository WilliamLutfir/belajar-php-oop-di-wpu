<?php class CetakInfoProduk{
    public $daftarProduk=[];
    public function TambahProduk(Produk $produk){
        $this->daftarProduk[]=$produk;
    }
    public function cetak(){
        $str="DAFTAR PRODUK : <br>";
        foreach($this->daftarProduk as $p){
            $str.="- {$p->AmbilInfoProduk()} <br>";
        }
        return $str;
    }
}
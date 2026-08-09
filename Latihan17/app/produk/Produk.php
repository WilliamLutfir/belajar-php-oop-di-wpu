<?php abstract class Produk{
    protected $judul,
                $penulis,
                $penerbit,
                $harga,
                $diskon=0;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }
    abstract public function AmbilInfo();            

    public function AmbilLabel(){
        return "$this->penulis, $this->penerbit";
    } 
    public function AmbilHarga(){
        return $this->harga - ($this->harga * ($this->diskon / 100));
    }
    public function AturHarga($h){
        if(!is_int($h)){
            throw new Exception("Harga harus angka.");
        }else{$this->harga=$h;}
    }
    public function AmbilJudul(){
        return $this->judul;
    }
    public function AturJudul($j){
        if(!is_string($j)){
            throw new Exception("Judul harus string.");
        }else{$this->judul=$j;}
    }
    public function AmbilPenulis(){
        return $this->penulis;
    }
    public function AturPenulis($penulis){
        if(!is_string($penulis)){
            throw new Exception("Penulis harus string.");
        }else{$this->penulis=$penulis;}
    }
    public function AmbilPenerbit(){
        return $this->penerbit;
    }
    public function AturPenerbit($penerbit){
        if(!is_string($penerbit)){
            throw new Exception("Penerbit harus string.");
        }else{$this->penerbit=$penerbit;}
    }
    public function AturDiskon($diskon){
        if(!is_int($diskon)){
            throw new Exception("Diskon harus angka.");
        }else{$this->diskon=$diskon;}
    }
    public function AmbilDiskon(){
        return $this->diskon;
    }
}
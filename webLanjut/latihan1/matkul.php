<?php
class matkul{
    private $kode;
    private $nama;

    public function setData($kode,$nama){
        $this->kode  = $kode;
        $this->nama  = $nama;
    }
    public function getData(){
        return[$this->kode, $this->nama];
    }
}
?>
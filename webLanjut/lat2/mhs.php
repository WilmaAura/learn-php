<?php
class mhs{
    private $nim, $matkul;
    public $nama;
    public function setData($nim, $nama, $matkul){
        $this->nim = $nim;  
        $this->nama = $nama;  
        $this->matkul = $matkul;  
    }

    public function getData(){
        return [
            $this->nim,
            $this->nama,
            $this->matkul,
        ];
    }
}
?>
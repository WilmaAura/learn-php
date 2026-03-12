<?php
class mhs{
    # contructor
    private $nim, $matkul, $nama, $tgl_lahir, $status;
    private $umur;

    public function __construct(){
        $this->status = "Aktif";
    }

    public function setData($nim, $nama, $matkul, $tgl_lahir){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->tgl_lahir = $tgl_lahir;
        $this->setUmur();
    }

    public function setUmur(){
        $this->umur = date("Y") - substr($this->tgl_lahir, 0, 4);
    }

    public function getData(){
        return [
            "nim" =>$this->nim,
            "nama" =>$this->nama,
            "matkul" =>$this->matkul,
            "tgl_lahir" =>$this->tgl_lahir,
            "umur" =>$this->umur,
            "status" => $this->status,
        ];
    }
}
?>
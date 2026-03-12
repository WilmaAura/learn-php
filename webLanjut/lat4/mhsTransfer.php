<?php
class mhsTransfer extends mhs{
    private $daftar_nilai, $ipk = 0, $ttl_sks = 0, $ttl_bobot= 0;
    private $bobot = ['A' => 4, 'B' => 3, 'C' =>2];

    public function __construct($daftar_nilai){
        $this->daftar_nilai = $daftar_nilai;
        $this->getIPK();
        $this->status = "TIdak Aktif";
    }

    public function getIPK(){
        if(!empty($this->daftar_nilai)){
            foreach ($this->daftar_nilai as $data){
                $this->ttl_sks += $data['sks'];
                $this->ttl_bobot += $data['sks'] * $this->bobot[$data['nilai']];
            }
            $this->ipk = $this->ttl_bobot / $this->ttl_sks;
        }
        return $this->ipk;
    }
    public function getData(){
        return array_merge(parent::getData(),[
            "daftar_nilai" => $this->daftar_nilai,
            "ipk" => $this->ipk,
        ]); # array_merge digunakan untk menggabungkan dau atau lebih array
    }
}
?>
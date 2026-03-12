<?php
class Calculator{
    private $data = [];
    #overloading property (set)
    public function __set($name, $value){
        echo "Mengisi property <em>$name</em> dengan nilai <strong>$value</strong> <br>";
        $this->data[$name] = $value;
    }
    #overloading property (get)
    public function __get($nama){
        echo "Mengambil data property <em>$nama</em>";
        return "<strong>" . $this->data[$nama] . "</strong>";
    }

    #overloading method
    public function __call($name, $arguments){
        if($name == "tambah"){
            $jumlah = count($arguments);
            if($jumlah == 2){
                echo "Penjumlahan 2 angka: " . ($arguments[0] + $arguments[1]);
            }
            elseif($jumlah == 3){
                echo "Penjumlahan 3 angka: " . ($arguments[0] + $arguments[1] + $arguments[2]);
            }
            else{
                echo "Jumlah parameter tidak didukung";
            }
        }       
    }
}
$hitung = new Calculator();
echo "<h3> Overloading property</h3>";
$hitung->nama= "Kalkulator Sederhana";
$hitung->merk= "Seiko";
echo $hitung->nama;
echo "<br>";
echo $hitung->merk;
echo "<hr>";

echo "<h3> Overloading method";
$hitung->tambah(5,3);
echo "<br>";
$hitung->tambah(5,3,2);
?>
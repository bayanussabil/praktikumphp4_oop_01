<?php

$luas = new PersegiPanjang();
$keliling = new PersegiPanjang();

echo "Luas dan Keliling Persegi Panjang";
echo "<br/>Panjang : 18";
echo "<br/>Lebar : 12";

echo "<br/><br/>";
echo "Luas dari Persegi Panjang : ".$luas->hitungLuas();
echo "<br/>";
echo "Keliling dari Persegi Panjang : ".$keliling->hitungKeliling();

class PersegiPanjang {
    public $panjang, $lebar;

    public function __construct($panjang = 18, $lebar = 12) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}



?>
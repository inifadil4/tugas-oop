<?php 

class Buku {
   
public $judul;
public $penulis;
public $tahunTerbit;

public function __construct($judul, $penulis, $tahunTerbit)
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->tahunTerbit = $tahunTerbit;
}

public function tampilkanInformasi()
{
    echo "Judul       :" . $this->judul . "<br>";
    echo "Penulis     :" . $this->penulis . "<br>";
    echo "TahunTerbit :" . $this->tahunTerbit . "<br><br>";
}
}

$buku1 = new Buku("Si Kancil", "Bukan Saya", 2004);
$buku2 = new Buku("Aku Adalah CEO", "Michael", 1933);

$buku1->tampilkanInformasi();
$buku2->tampilkanInformasi();



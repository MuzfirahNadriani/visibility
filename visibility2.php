<?php
class produk{
	public $namaBarang,
	   $merk;
	   protected $diskon;
	   private $harga;

	public function getCetak(){
		return "$this->merk, (Rp $this->harga)";
	}
	public function __construct($namaBarang="nama barang",$merk="merk",$harga=0){
	$this->namaBarang =$namaBarang;
	$this->merk=$merk;
	$this->harga=$harga;
 	}

	public function cetakInfo(){
		$str="{$this->namaBarang}, {$this->getCetak()}";
		return $str;
	}
	public function setDiskon($diskon){
		$this->diskon=$diskon;
	}
	public function getHarga(){
		return $this->harga = ($this->harga*$this->diskon/100);
	}
}
	class pakaian extends produk{
		public $ukuranPakaian;
		public function __construct($namaBarang="nama barang",$merk="merk",$harga=0, $ukuranPakaian="ukuran pakaian"){
			parent::__construct($namaBarang, $merk, $harga);
    		$this->ukuranPakaian = $ukuranPakaian;
    	}

		public function cetakInfo(){
			$str="Pakaian: " .parent::getCetak()." | Ukuran pakaian: {$this->ukuranPakaian}";
			return $str;
		}
	}
	class novel extends produk{
		public $penulis;
		public function __construct($namaBarang="nama barang",$merk="merk",$harga=0, $penulis="penulis"){
			parent::__construct($namaBarang, $merk, $harga);
    		$this->penulis = $penulis;
    	}

		public function cetakInfo(){
			$str="Buku: ".parent::getCetak()." | Penulis: {$this->penulis}";
			return $str;
		}
	}
$produk1 = new pakaian("Kemaja", "Gucci", 8000000, "S");
$produk2 = new novel("Geez&Ann", "Loveable", 100000, "Renita Nozaria");

echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";
echo "<hr>";
$produk2->setDiskon(60);
echo $produk2->getHarga();
?>
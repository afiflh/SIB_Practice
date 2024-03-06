<?php

class Kuliah{
    public $kampus, $dosen;

    public function __construct($kampus, $dosen){
        $this->kampus = $kampus;
        $this->dosen = $dosen;
    }

    public function getProperty(){
        return "$this->dosen mengurus KRS di $this->kampus";
    }
}

class Mahasiswa extends Kuliah{
    private $namaMhs;

    public function __construct($namaMhs, $kampus, $dosen){
        $this->namaMhs = $namaMhs;
        parent::__construct($kampus, $dosen);
    }

    // public function getProperty()
    public function getProperty(){
        return "$this->namaMhs sedang berkonsultasi dengan $this->dosen mengurus KRS di $this->kampus";
    }

    public function setNameMhs($namaMhs){
        $this->namaMhs = $namaMhs;
    }

    public function getNameMhs(){
        return $this->namaMhs;
    }
}

$mhs = new Mahasiswa("Afif", "Politeknik Negeri Malang", "Pak Satrio");

?>

<html>
<body>
    <h2><?php echo $mhs->getProperty()?></h2>  
</body>
</html>
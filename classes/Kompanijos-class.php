<?php 

include "utilities/FileManger.php";
include "utilities/Filter.php";

class Kompanijos {

    use FileManager, Filter;

    protected $kompanijos = [];

    public function __construct() {
       
        $this->file = "kompanijos.json";
        $this->readFile();
        $this->kompanijos = $this->data;
        $this->kompanijos = $this->filter($this->kompanijos, "tipas" );
    }

    public function getCompanies() {
        return $this->kompanijos;
    }

}
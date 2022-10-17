<?php

include "utilities/FileManger.php";
include "utilities/Sortable.php";
include "utilities/Filter.php";

class Klientai {

    use FileManager, Sortable, Filter;

    // public $file;
    // public $data;

    // public function readFile() {
    //     $this->data = json_decode(file_get_contents($this->file), true);
    // }

    // public function writeFile($data) {
    //     file_put_contents($this->file, json_encode($data));
    // }




    protected $klientai = [];
    protected $collumns = array(
        "vardas" => "Vardas",
        "pavarde" => "Pavarde",
        "amzius" => "Amzius",
        "miestas" => "Miestas"
    );

    //konstruktorius - pagal nutylejima yra statinis metodas
    public function __construct() {
        //nurodau koki faila nuskaitau
        $this->file = "klientai.json";
        //nauskaitau faila - $data;
        $this->readFile();
        $this->klientai = $this->data;
        //rikiuojam
        $this->klientai = $this->sort($this->klientai);
        //filtruojam
        $this->klientai = $this->filter($this->klientai, "miestas" );
    }

    public function getClients() {
        return $this->klientai;
    }


    //jei $collumns butu statinis
    //getCollumns() mes galime padaryti statiniu?

    //jei norime isvesti statini parametra, musu metodas gali buti statinis
    public function getCollumns() {
        return $this->collumns;
    }





    // public function showClients() {
    //     foreach($this->klientai as $key => $klientas) {
    //         echo "<tr>";
    //         echo "<td>" . $key . "</td>";
    //         echo "<td>" . $klientas["vardas"] . "</td>";
    //         echo "<td>" . $klientas["pavarde"] . "</td>";
    //         echo "<td>" . $klientas["amzius"] . "</td>";
    //         echo "<td>" . $klientas["miestas"] . "</td>";
    //         echo "</tr>";
    //     }
    // }

    //nuskaitymo ir irasymo i faila

}

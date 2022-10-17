<?php

include "Seeders.php";
include "../utilities/FileManger.php";

class KompanijosSeeder implements Seeder {

    use FileManager;

    protected $tipas = ["UAB", "MB", "AB"];
    protected $miestas = ["Vilnius", "Kaunas", "Klaipėda"];

    public function seed($count = 100) {
            $data = array();
            for ($i = 0; $i<$count; $i++) {
                $kompanija = array(
                    "pavadinimas" => "Imone" . $i,
                    "tipas" => $this->tipas[rand(0,2)],
                    "aprasymas" => "Aprasymas" . $i,
                    "miestas" => $this->miestas[rand(0,2)]
                );
                $data[$i] = $kompanija;
            }
            $this->file = "../kompanijos.json";
            $this->writeFile($data);
    }
}

$kompanijosSeeder = new KompanijosSeeder();
$kompanijosSeeder->uzpildyt(200);
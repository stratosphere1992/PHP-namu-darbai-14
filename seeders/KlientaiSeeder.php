<?php

include "Seeders.php";
include "../utilities/FileManger.php";

class KlientaiSeeder implements Seeder {

    use FileManager;

    protected $miestas = ["Vilnius", "Kaunas", "Klaipėda"];

    public function seed($count = 100) {
            $data = array();
            for ($i = 0; $i<$count; $i++) {
                $kompanija = array(
                    "vardas" => "vardas" . $i,
                    "pavarde" => "pavarde" . $i,
                    "amzius" => rand(1,121),
                    "miestas" => $this->miestas[rand(0,2)]
                );
                $data[$i] = $kompanija;
            }
            $this->file = "../klientai.json";
            $this->writeFile($data);
    }
}

$klientaiSeeder = new KlientaiSeeder();
$klientaiSeeder->seed(111);
<?php 

trait Filter {
    protected $filterData = []; 

    public function filter($data, $filter ) {

        //stulpelio pavadinimas pagal kuri filtruojam

        $filterCollumn = "visi";
    
        if(isset($_GET["filterCollumn"])) {
            $filterCollumn = $_GET["filterCollumn"];
        }
    
        $data=array_filter($data,function($oneData) use($filterCollumn, $filter) {
            if($filterCollumn == "visi") {
                return true;
            } else if ($oneData[$filter] == $filterCollumn) {
                return true;
            } else {
                return false;
            }
        });
        //filtruojame duomenis pagal miesta
        return $data;
    }

    public function getFilterCollumnData($collumn) {
        $this->readFile();
        $filterElements = $this->data;
        foreach ($filterElements as $filterElement) {
            $this->filterData[] = $filterElement[$collumn];
        }
        
        $this->filterData=array_unique($this->filterData);
        return $this->filterData;
    
    }
}
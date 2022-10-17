

<?php 

$filterData = [];

if(isset($_GET["page"])) {
    $page = $_GET["page"];
    if($page == "klientai") {
        $filterData = $klientai->getFilterCollumnData("miestas");
    } else if($page == "kompanijos") {
        $filterData = $kompanijos->getFilterCollumnData("tipas");
    }
}  else {
    $filterData = $klientai->getFilterCollumnData("miestas");
}


?>
<form method="get" action="index.php">
            <input type="hidden" name="page" value = "<?php echo (isset($_GET["page"]) ? $_GET["page"]: "klientai"); ?>">
            <input type="hidden" name="sortOrder" value="<?php echo (isset($_GET["sortOrder"]) ? $_GET["sortOrder"]: "DESC"); ?>">
            <input type="hidden" name="sortCollumn" value="<?php echo (isset($_GET["sortCollumn"]) ? $_GET["sortCollumn"]: "id"); ?>">                  
                    <div class="form-group">
                        <label for="pavarde">Filtras</label>
                        <select class="form-select" name="filterCollumn">
                            <option value="visi">Visi</option>
                            <?php 
                                foreach($filterData as $key=>$filterOption) {
                                    if(isset($_GET["filterCollumn"]) && $filterOption == $_GET["filterCollumn"]) {
                                        echo "<option value='$filterOption' selected>$filterOption</option>";
                                    } else {
                                        echo "<option value='$filterOption'>$filterOption</option>";
                                    }
                                }
                            ?>
                        </select>   
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="filter">Filtruoti</button>
</form>
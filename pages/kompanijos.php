<?php include "classes/Kompanijos-class.php"; ?>
<?php $kompanijos = new Kompanijos(); ?>
<div class="row">
    <div class="col-lg-8">
        <h1>Kompanijos</h1>
    </div>    
</div>

<div class="row">
    <div class="col-lg-4">
        <?php include "components/filterForm.php"; ?>
    </div>    
</div>
<div class="row">
    <div class="col-lg-8">
          <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Pavadinimas</th>
                    <th>Tipas</th>
                    <th>Aprašymas</th>
                    <th>Miestas</th>
                </tr>
                <?php foreach($kompanijos->getCompanies() as $key => $kompanija) { ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $kompanija["pavadinimas"]; ?></td>
                        <td><?php echo $kompanija["tipas"]; ?></td>
                        <td><?php echo $kompanija["aprasymas"]; ?></td>
                        <td><?php echo $kompanija["miestas"]; ?></td>
                    </tr>
                <?php } ?>    
            </table>
    </div> 
</div>         


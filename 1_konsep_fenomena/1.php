<?php 
    $loc = "../";
    include("../sidebar.php"); 
    $n=0;
?>
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Konsep fenomena fisik dan manusia pada bumi</h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row tulisan">
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Bentangan permukaan bumi dengan seluruh fenomenanya, yang mencakup: bentuk lahan, tanah, vegetasi,
                    dan atribut-atribut lain, yang dipengaruhi oleh aktivitas manusia

                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">Bentang lahan</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">Bentuk lahan</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">Bentang alam</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
            </div>
        </div>
    </section>
    <?php include("../footer.php") ?>
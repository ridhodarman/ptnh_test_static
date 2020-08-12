<?php 
    $loc = "../";
    include("../sidebar.php"); 
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
                    1. Bentangan permukaan bumi dengan seluruh fenomenanya, yang mencakup: bentuk lahan, tanah, vegetasi,
                    dan atribut-atribut lain, yang dipengaruhi oleh aktivitas manusia

                    <div>
                        <input id="optionsRadios1a" type="radio" name="1" onchange="check(1, true)">
                        <label for="optionsRadios1a">Bentang lahan</label>
                    </div>
                    <div>
                        <input id="optionsRadios1b" type="radio" name="1" onchange="check(1, false)">
                        <label for="optionsRadios1b">Bentuk lahan</label>
                    </div>
                    <div>
                        <input id="optionsRadios1c" type="radio" name="1" onchange="check(1, false)">
                        <label for="optionsRadios1c">Bentang alam</label>
                    </div>
                    <div id="1"></div>
                </div>
            </div>
        </div>
    </section>
    <?php include("../footer.php") ?>
<?php 
    $loc = "../";
    include("../sidebar.php"); 
    $n=0;
?>
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dasar tentang prosedur penyusunan, subtansi dan pemanfaatan dasar pertanahan</h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row tulisan">

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Penginderaan jauh merupakan keilmuan khusus untuk mengenai kenampakan yang ada di permukaan bumi tanpa melakukan kontak langsung dengan obyek yang dikaji 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">
                            Benar
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            Salah
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Secara umum penginderaan jauh diklasifikasikan menjadi citra foto hitam putih dan foto berwarna 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Benar
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            Salah
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Penginderaan jauh akan sulit dilakukan untuk mengenali obyek-obyek yang ada dipermukaan bumi terutama yang sulit untuk dijangkau 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Benar
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            Salah
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Penginderaan jauh dapat dimanfaatkan untuk mengetahui perubahan penggunaan lahan karena citra penginderaan jauh memiliki resolusi temporal 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">
                            Benar
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            Salah
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Bahwa setiap bentang alam yang sama dan memiliki bentang budaya yang sama memiliki permasalahan yang sama pula
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Benar
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            Salah
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
    </section>
    <?php include("../footer.php") ?>
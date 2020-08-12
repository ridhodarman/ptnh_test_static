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
                    Pemanfaatan atau fungsi dari perwujudan suatu bentuk penutup lahan disebut sebagai
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            penutup lahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            penggunaan tanah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            pemanfaatan tanah
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Pola ruang terdiri dari
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Kawasan lindung dan kawasan pemukiman
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            Kawasan lindung dan kawasan budidaya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            Kawasan perkotaan dan kawasan pedesaan
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Peraturan yang mengatur Tata Ruang adalah
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                        UU Nomor 27 Tahun 2006
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                        UU Nomor 26 Tahun 2006
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                        UU Nomor 26 tahun 2007
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                    Perencanaan tata ruang merupakan suatu proses untuk menentukan
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                        struktur ruang dan fungsi ruang yang meliputi penyusunan dan penetapan rencana tata ruang
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                        struktur ruang dan optimalisasi pemanfaatan ruang yang meliputi penyusunan dan penetapan rencana tata ruang
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                        struktur ruang dan pola ruang yang meliputi penyusunan dan penetapan rencana tata ruang
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Permasalahan penggunaan tanah terjadi dikarenakan
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                        Ketersediaan tanah di Indonesia sangat luas dan peraturannya jelas
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                        Ketersedian tanah terbatas sementara pembangunan terus meningkat
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                        Pembangunan dengan menerapkan aspek keberlanjutan lingkungan
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
    </section>
    <?php include("../footer.php") ?>
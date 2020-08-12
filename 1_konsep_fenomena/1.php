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

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Unit geomorfologis yang dikategorikan berdasarkan karakteristik alam yakni: elevasi, kelandaian, orientasi, stratifikasi, paparan batuan dan jenis tanah

                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Bentang lahan</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">Bentuk lahan</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">Bentang alam</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Bagian dari permukaan bumi yang memiliki bentuk topografis khas, akibat pengaruh kuat dari proses alam dan struktur geologis pada material batuan, dalam skala ruang dan waktu kronologis tertentu

                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Bentang lahan</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">Bentuk lahan</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">Bentang alam</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Faktor-faktor penentu bentuk lahan kecuali:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            topografi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            proses manusia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                        struktur geologi
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Proses terbentuknya bentang lahan baik bentang alam maupun bentang budaya terdiri dari 3 komponen, kecuali
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            komponen lingkungan alam (abiotic maupun biotik)
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            lingkungan sosial (culture)
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                            supranatural
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Kenampakan view bentangan yang ada di permukaan bumi dan belum terlalu dipengaruhi oleh aktivitas manusia disebut
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Bentang lahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            Bentuk lahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                            Bentang alam
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Tenaga yang berpengaruh terhadap bentuk lahan berupa tenaga vulkanik dan aktivitas truktural disebut sebagai
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Tenaga eksogen
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            Tenaga endogen
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            Tenaga alami
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Bentuk lahan berupa pegunungan karst, dolin dan gua bawah tanah terjadi karena adanya proses bentuk lahan
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Fluvial
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            Denudasional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                            Solusional
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Pegunungan lipatan, pegunungan patahan, perbukitan, dan kubah merupakan beberapa bentuklahan karena proses
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">
                            Denudasional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            Struktural
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            Solusional
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 
                        Pegunungan lipatan, pegunungan patahan, perbukitan, dan kubah merupakan beberapa bentuklahan karena proses
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">
                            Denudasional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            Struktural
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>" 
                        onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            Solusional
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
    </section>
    <?php include("../footer.php") ?>
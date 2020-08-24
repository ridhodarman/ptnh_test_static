<?php 
    $loc = "../";
    include("../sidebar.php"); 
    $n=0;
?>
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Konsep teoritis bidang ilmu manajemen secara umum, manajemen publik,
                organisasi, SDM, dan keuangan: Manajemen SDM dan Keuangan
            </h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row tulisan">


                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Yang bukan termasuk dalam jenis persediaan …
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Bahan baku
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> Bahan primer
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Barang setengah jadi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Barang jadi
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pengendalian biaya, penentuan harga, dan pengukuran biayamodal Termasuk dalam
                    golongan fungsi pengendalian …
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Pengendalian likuiditas
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Fungsi manajemen
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Pengendalian laba
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Fungsi kas
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. ….. Manajemen keuangan berkepentingan dengan bagai mana cara menciptakan dan
                    menjaga nilai ekonomis atau kesejahteraan
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Keputusan manajemen keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Peranan manajemen keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Rancangan manajemen keuangan untuk mencapai tujuan perusahaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Tanggung jawab manajer dalam perusahaan
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. …. Agar perusahaan leluasa dalam peluasan kembali atau memiliki tingkat keamanan
                    (margin of safety)
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Kebijakan konservatif (risiko rendah)
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Kebijakan agresif (imbalan hasil tinggi, risiko tinggi)
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Kebijakan manajemen
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Kebijakan atau moderat (menyeimbangkan hasil tinggi, risiko)
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Seperti perputaran kas, perputaran piutang dan perputaran persediaan adalah metode
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Metode persediaan laba
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Metode penghitungan modal
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Metode keterikatan dana
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Metode perputaran modal kerja
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Tahap yang terkait dengan besarnya kas yang dibutuhkan perusahaan apabila
                    perusahaan menjual barang dagangannya secara kredit …
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Tahap biaya pendanaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Tahap periode penagihan rata-rata piutang usaha (average
                            collection periode
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Tahap lamanya persediaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Jawaban a, b, dan c benar
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Dalam pencatatan alokasi kas perolehan aktiva tidak berwujud ,,,, menggunakan
                    metode
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Metode garis lurus
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Metode unit produksi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Metode garis lurus dan metode saldo menurun
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Jawaban a, b, dan c benar
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Yang tidak termasuk dalam bentuk hokum dari lingkungan bisnis
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Sole proprietorship
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Partnership
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Corporation
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> information
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pajak penghasilan, Depresiasi, dan Amortisasi & Deplesi adalah sebuah lingkungan
                    dari …
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Lingkungan bisnis
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> Lingkungan perpajakan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Lingkungan kerja
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Lingkungan keuangan
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Adanya keingisan melakukan investasi lain atau memperluas investasi yang ada
                    dikarenaka adanya ,,,
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Pajak daerah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> Penyusutan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pajak penghasilan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pajak perusahaan
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Apa saja yang termasuk dalam metode penyusutan …
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Jumlah angka tahun
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Saldo menurun
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Unit produksi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Jawaban a, b, dam c benar
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Aspek-aspek lingkungan yang penting dipahami manajer keuangan ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Pasar keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Lembaga keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Instrument keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Jawaban a, b, dan c benar


                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Proses penghitungan nilai sekarang yaitu ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Compounding
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> Discounting
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Processing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Accounting
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Proses penghitungan nilai mendatang ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Compounding
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Discounting
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Processing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Accounting
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Tanggung jawab seorang manajer ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Interaksi dengan pasar modal
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Pengkoordinasikan dan pengendalian
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Keputusan besar dalam investasi dan pembiayaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Jawaban a, b, dan c benar
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Apakah tugas-tugas staf keuangan, kecuali…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Memperoleh dana untuk perusahaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Menggunakan dana tersebut untuk memaksimalkan nilai perusahaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Menghimpun dana perusahaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Jawaban a, b, dan c benar
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Tanggung jawab dalam keuangan perusahaan ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Treasure
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Controller
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Perusahaan kecil
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Jawaban a, b, dan c benar
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Bertanggung jawab terhadap keputusan dan pengalokasian sumber-sumber ekonomi agar
                    meningkatkan pertumbuhan ekonomi adalah penjelasan dari ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Peranan manajemen keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Tanggung jawab manajer keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Tanggung jawab keuangan perusahaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Manajeman terhadap keuangan perusahaan



                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Hal apa saja yang dibutuhkan dalam JIT (Just In Time) ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Kordinasi yang baik antara perusahaan, pemasok, perusahaan
                            pengapalan, agar persediaan datang tepat waktu
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Pengecekan perusahaan terhadap perusahaan pemasok
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pengambilan barang pada waktu yang tidak menentu
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penyetokan barang agar penjualan dapat lebih maksimal
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Yang bukan termasuk dalam jenis instrument keuangan ….
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Saham
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Hutang
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Tabungan

                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Uang</label>
                            </div>
                            <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Memadukan pengetahuan konseptual dan teoritis dalam proses pendidikan jangka panjang
                            secara umum ialah pemahaman dari definisi...
                            <div>
                                <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                    onclick="check(<?php echo $n ?>, false)">
                                <label for="<?php echo $n ?>A">Pelatihan
                                </label>
                            </div>
                            <div>
                                <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                    onclick="check(<?php echo $n ?>, true)">
                                <label for="<?php echo $n ?>B">Pengembangan
                                </label>
                            </div>
                            <div>
                                <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                    onclick="check(<?php echo $n ?>, false)">
                                <label for="<?php echo $n ?>C">Analisis kebutuhan
                                </label>
                            </div>
                            <div>
                                <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                    onclick="check(<?php echo $n ?>, false)">
                                <label for="<?php echo $n ?>D">Analisis tugas</label>
                            </div>
                            <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Penentuan kebutuhan training perlu dilakukan melalui beberapa analisis
                        kebutuhan, diantaranya ialah sebagai berikut, kecuali...
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">Analisis ruang kerja
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Analisis jabatan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Analisis orang
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Analisis tugas</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Berikut ini merupakan perbedaan antara training dan pengembangan, kecuali…
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Materi
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Jangka waktu
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Tujuan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>D">Sasaran</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Proses pendidikan jangka panjang yang secara umum mempelajari pengetahuan
                        konseptual dan teoritis ialah pemahaman dari definisi...
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">Pengembangan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Pelatihan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Analisis kebutuhan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Analisis pekerjaan</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Alasan utama mengapa training perlu segera dilakukan adalah...
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Meningkatnya tuntutan serikat buruh
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Meningkatnya kebutuhan pasar
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>C">Meningkatnya ketidakhadiran dan pergantian karyawan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Meningkatnya tuntutan pemegang saham</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Aplikasi pengembangan organisasi didasarkan pada pencapaian karyawan dalam
                        mengumpulkan data yang diharapkan dan membuat serta mengimplementasikan solusi, aplikasi
                        tersebut ialah sebagai berikut, kecuali…
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Human process application
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Intervensi secara teknostruktur
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>C">Team building
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Aplikasi administrasi sumber daya manusia</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Keselamatan dan kesehatan kerja merupakan perjuangan khususnya yang bersifat…
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">Pencegahan terjadinya kecelakaan kerja
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Pengobatan terhadap penyakit
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Rehabilitasi korban kecelakaan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Pemberantasan penyakit menular</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Kepemimpinan merupakan inti administrasi alasannya kepemimpinan ialah motor
                        pencetus bagi sumber daya insan dan sumber daya alam lainnya, definisi kepemimpinan ini
                        dikemukakan oleh …
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">George R.Terry
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Gibson
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Robert Dubin
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>D">Siagian</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Wibawa kepemimpinan salah satunya dibuat oleh faktor .....
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Pendidikan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Kekayaan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>C">Ketegasan Sikap
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Pengalaman</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Dalam praktek, orang yang melaksanakan produktivitas disebut "orang produktif"
                        yang mempunyai salah satu ciri-ciri sebagai berikut …
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Sportif
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>B">Memegang amanah
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Agamis
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Cerdas</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Ketentuan pemerintah yang mewajibkan perusahaan melaporkan lowongan pekerjaan
                        akan melindungi calon tenaga kerja terhadap….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Informasi yang simpang siur
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>B">Diskriminasi peluang kerja
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Percaloan tenaga kerja
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Penerimaan tenaga kerja dengan cara nepotisme</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Pengangguran pada umumnya diberikan kepada karyawan yang tidak sanggup bekerja
                        sebagai dampak dari ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">Kesalahan pihak lain
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Adanya jadwal jaminan sosial nasional
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Belum adanya lowongan pekerjaan baru
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Makin banyaknya perusahaan asuransi</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Penilaian kinerja yang mengharuskan karyawan dan atasannya tetapkan tujuan
                        organisasi dan melaksanakannya disebut pendekatan ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">Management by Objectives
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Management by subjectives
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Behavioral Observation Scales/BOS
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Paired Comparison</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Sistem penghargaan yang secara pribadi dikontrol dan disampaikan oleh
                        organisasi (pihak ketiga) dan bersifat lebih kasat mata disebut ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">Sistem penghargaan ekstrinsik
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Sistem penghargaan intrinsik
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Sistem penghargaan subjektif
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Sistem penghargaan objektif</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Fungsi dari perencanaan dan pengembangan karier bagi karyawan ialah ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Menimbulkan persaingan sehat diantara karyawan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Meningkatnya kinerja organisasi
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>C">Memberikan informasi perihal jalur karier yang tersedia
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Memberikan kenaikan upah dan santunan berkala</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Urutan-urutan jabatan secara vertikal maupun serangkaian peluang secara
                        horizontal yang disusun organisasi disebut jalur karier ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Rangkap
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Tradisional
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>C">Jaringan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Lateral</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Pada hakekatnya deskripsi jabatan merupakan ...
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Tugas manajer personalia
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>B">Suatu statement yang teratur, dari aneka macam kiprah dan
                                kewajiban suatu jabatan tertentu
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Catatan tertulis harus dilaksanakan untuk suatu jabatan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Proses sosialisasi kiprah pada jabatan tersebut</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Dengan mempunyai karyawan yang bersedia melaksanakan kerja lembur, maka
                        perusahaan sanggup menghindari ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Teguran dari Dinas Tenaga Kerja
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>B">Biaya perekrutan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Berhentinya proses produksi
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Pengangguran mesin produksi</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Manajer sumber daya insan mempunyai kiprah dalam perekrutan karyawan, terutama
                        dalam hal ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Pengumuman lowongan pekerjaan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>B">Mengambil keputusan perihal sumber karyawan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Menetapkan syarat-syarat calon karyawan baru
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Rekrutmen karyawan antar kota antar daerah</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Dalam sistem patronage proses pemilihan dan pengangkatan karyawan lebih
                        dipengaruhi oleh faktor ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>A">Hubungan baik dengan manajer
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Etika karyawan selama di perusahaan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>C">Pengabdian kepada pejabat organisasi
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Hubungan yang luas karyawan dengan sesamanya</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Uang penghargaan masa kerja bagi karyawan yang mempunyai masa kerja 3 tahun
                        tapi kurang dari 6 tahun adalah…
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">2 bulan Upah
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">6 bulan upah
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">7 bulan upah
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">1 tahun upah</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>

                    <div class="col-sm-12 card">
                        <?php $n= $n + 1; ?>
                        <?php echo $n ?>. Salah satu jenis uang penggantian hak yang seharusnya diterima pekerja/buruh
                        yang di PHK perusahaan ialah ….
                        <div>
                            <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, true)">
                            <label for="<?php echo $n ?>A">Penggantian perumahan
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>B">Pemberian hak membeli kendaraan dinas yang dipakainya
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>C">Uang tolak
                            </label>
                        </div>
                        <div>
                            <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                                onclick="check(<?php echo $n ?>, false)">
                            <label for="<?php echo $n ?>D">Biaya hidup selama mencari pekerjaan baru</label>
                        </div>
                        <div id="<?php echo $n ?>"></div>
                    </div>



                </div>
            </div>
            <button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
    </section>
    <?php include("../footer.php") ?>
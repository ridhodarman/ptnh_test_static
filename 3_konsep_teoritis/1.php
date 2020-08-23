<?php 
    $loc = "../";
    include("../sidebar.php"); 
    $n=0;
?>
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Konsep teoritis bidang ilmu manajemen secara umum, manajemen publik, organisasi, SDM, dan keuangan
            </h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row tulisan">


                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.    Kata manajemen berasal dari “manage” dari bahasa ... yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">Italia, Maneggio
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Latin, Maneggio
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Inggris, Management
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Italia, Maneggiare
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Sanskerta, Maneggio </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Manajemen adalah .....
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Ilmu perencanaan, pengaturan dan pelaksanaan hubungan antar manusia dengan organisasi.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Ilmu dan seni tentang penggunaan sumber daya yang terbatas untuk pemenuhan kebutuhan manusia yang tak terbatas.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Ilmu untuk mendapatkan hasil kerja yang maksimal dalam rangka pemenuhan kabutuhan organisasi untuk mencapai tujuan misi dan visi perusahaan.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Ilmu dan seni dalam memimpin orang atau sumber daya manusia.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	IImu dan seni tentang upaya untuk memanfaatkan semua sumber daya yang dimiliki untuk mencapai tujuan secara efektif dan efisien. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Fungsi manajemen menurut Henry Fayol adalah  ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Planning, Staffing, Reporting, Budgeting, Coordinating, Organizing, Directing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Planning, Actuating, Organizing, Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Planning, Organizing, Conditioning, Motivating, Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Planning, Organizing, Coordinating, Comanding, dan Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Planning, Staffing, Directing,  Organizing, Controlling </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Salah satu tugas Manajemen puncak yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Bertanggung jawab pada lower management.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Menetapkan kebijakan operasional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Melakukan semua pekerjaan tingkat operasional.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Mengawasi pada pekerja.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Bertanggung jawab pada Middle Management. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Aliran manajemen yang pemikirannya fokus pada usaha untuk mencapai kepuasan pelanggan adalah aliran ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">analisis system
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	klasik
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	perilaku
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Manajemen mutu
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	manajemen ilmiah </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Jenis keterampilan yang harus dimiliki oleh seorang manajer yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">perencanaan, organisasi, dan evaluasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	formal, informal, dan teksnis
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	formal, konseptual, dan teknis
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	teknis, formal, dan manajerial
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	kemanusian, konseptual, dan teknis </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Studi ilmu manajemen sangat perlukan semua organisasi karena berbagai alasan berikut, kecuali ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Memperlancar tugas sehari-hari
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Mencapai tujuan organisasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Mencapai efisiensi organisasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Menghilangkan potensi konflik dalam organisasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Mencapai efektifitas organisasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Ibu Ayuningtyas mempunyai keahlian dalam merencananakan bentuk kemasan semua produk. Hal tersebut menyebabkan tampilan produk sangat menarik sehingga meningkatkan penjualan produk. Beliau adalah orang yang tepat melakukan aktivitas manajemen di bidang ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Perkantoran</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">  Produksi atau Operasional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Personalia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Pemasaran </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Berikut ini yang tidak termasuk fungsi manajemen menurut G.R. Terry yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Planning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Organizing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Directing</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.   Salah satu kegiatan yang dilakukan oleh pimpinan organisasi untuk memotivasi karyawan supaya bekerja keras sesuai dengan tujuan yang telah ditetapkan dan memberikan suasana kerja yang nyaman termasuk dalam fungsi manajemen ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Planning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Organizing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Directing </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Salah satu kelebihan sistem organisasi garis yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Koordinasi hanya perlu pada pimpinan eselon bawahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Terdapat spesialisasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Proses menduduki jabatan kecil
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Adanya kesatuan komando
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Maju mundurnya perusahaan tergantung satu orang </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Yang termasuk satu fungsi organisasi yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Adanya tanggung jawab yang sinergi antara masing-masing bagian dalam perusahaan.</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Membagi pekerjaan, menetapkan tugas dan tanggung jawab
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Membentuk susunan jabatan dan peranan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Adanya pelimpahan wewenang dari manajemen atas kepada manajemen pelaksana.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Adanya pembagian wewenang pada tiap departemen. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Fungsi manajemen yang pertama kali harus dilakukan untuk menjalankan organisasi secara efektif dan effisien yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Pengendalian
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Pengorganisasian
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Perencanaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Pengawasan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Pengarahan </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Di bawah ini yang bukan merupakan kelebihan organisasi fungsional adalah ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Koordinasi terus menerus pada hanya di jenjang atas.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Tugas karyawan dapat dibagi secara tegas
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Koordinasi bagi karyawan pada fungsi yang sama mudah karena terdapat persamaan tugas
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Produktivitas tinggi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Koordinasi secara menyeluruh sulit dilakukan </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Fungsi manajemen untuk menggerakkan orang agar bekerja sesuai dengan tujuan yang telah ditetapkan yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Directing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Planning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Organizasing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Controlling </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Dalam perusahanaan, jabatan direktur utama termasuk dalam tingkatan ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Semua level manajemen
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dewan komisaris
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Manajemen menengah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Manajemen puncak
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Manajemen tingkat bawah </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Pak Agus berrkedudukan sebagai manajer personalia dan merencanakan perekrutan pegawai baru. Dalam rangka merealisasikan rencananya, beliau melakukan kegiatan-kegiatan mulai dari menetukan panitia, menetapkan tugas, dan tanggung jawab masing-masing individu, serta pelimpahan wewenang kepada bawahan. Aktivitas  yang dilakukan oleh Pak Agus sesuai dengan fungsi manajemen, yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Forcasting
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Planning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Organizing </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Pengendalian mutu  merupakan salah satu bagian dari manajemen
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Keuangan</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Produksi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Sumber daya manusia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Perkantoran
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Pemasaran </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Dalam sistem persediaan pada manajemen produksi penanganan yang terbaik adalah dengan penghitungan jumlah persediaan yang disebut dengan ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">QualityControl
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Lay out produksi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Segmenting
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Economic Order Quantity
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Pengendalian mutu </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Proses indentifikasi sekelompok konsumen yang sifatnya homogen dan akan dilayani organisasi atau perusahaan yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Targeting
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Positioning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Segmenting
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Planning </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Yang  dimaksud  dengan Marketing Mix adalah ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Konsumsi, produksi, distribusi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Sales, Discount, Promosi dan Harga
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Periklanan, Publisitas, Direct sales, Distribution
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Planning, Pricing, Promotion, Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Product, Place, Price , Promotion </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Perhatikan pernyataan berikut ini : <br/>
1)     Kualitas produk atau barang <br/>
2)     Bentuk fisik barang <br/>
3)     Mudah dalam mencari dan mendapatkan barang <br/>
4)     Adanya pelayanan purna jual <br/>
5)     Tidak ada barang substitusi <br/>
Dalam kepuasan jangka panjang, yang perlu diperhatikan yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">2,4 dan 5
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	1,2 dan 3
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	3,4 dan 5
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	2,3 dan 4
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	1,3 dan 4 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Ada beberapa akibat dari penilaian karyawan diperusahaan, kecuali ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Promosi</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Dipindah ke perusahaan lain
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Dipindahkan ke pekerjaan yang lebih sempit
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Pertimbangan untuk memberhantikan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Dipindah ke jabatan lain </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Menurut pendapat Henry Fayol, jika bawahan mendapat berbagai tugas yang berbeda dari banyak atasan, maka karyawan tersebut akan bingung dan kesulitan dalam memutuskan apa yang harus dilaksanakan. Dalam hal ini, prinsip umum yang seharusnya diterapkan dalam organisasi yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Kesatuan pengarahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Tata tertib
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Kesatuan komando
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Otoritas dan tanggung jawab
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Sentralisasi dan desentralisasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Berikut yang bukan merupakan prinsip manajemen  menurut Hanry Fayol adalah ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Otoritas atau wewenang</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Penonjolan diri
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Kesatuan perintah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Pembagian kerja
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Remunerasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Teori manajemen yang memusatkan studinya pada aspek manusia dan perlunya memahami manusia merupakan aliran aliran yang memakai disiplin ilmu sosiologi dan psikologi dalam menerapkan teori-teorinya. Teori tersebut merupakan teori ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">Aliran perilaku
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Aliran klasik
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Aliran analisis sistem
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Aliran manajemen ilmiah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Aliran manajemen mutu </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Pemimpin yang mengambil keputusan tanpa melibatkan bawahan disebut ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Adil</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Otoriter
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Bebas
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Demokratis
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Personal </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Aliran manajemen berdasarkan hasil diperkenalkan pertama-tama oleh ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">William Newman
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Henry Fayol
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Ernest Dale
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Geroge Terry
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Peter Drucker </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Prinsip the right man on the right place digunakan dalam memutuskan seseorang ketika akan menduduki suatu jabatan dalam perusahaan atau organisasi. Hal tersebut merupakan aktivitas dari fungsi ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">Organizing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Motivating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Planning </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Perhatkan uraian di bawah ini! <br/>
1)     sumber dana <br/>
2)     penerimaan pegawai <br/>
3)     penggunaan dana <br/>
4)     pengawasan penggunaan dana <br/>
5)     mutasi dan promosi  <br/>
Berdasarkan uraian di atas, yang termasuk ruang lingkup manajemen keuangan yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">2, 3, 4
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	1, 2, 3
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	3, 4, 5
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	1, 2, 4
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	1, 3, 4 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Perhatikan tujuan dari fungsi-fungsi manajemen berikut! <br/>
1)     Mengetahui jalannya program <br/>
2)     Mengetahui hasil pekerjaan <br/>
3)     Memberikan motivasi kerja <br/>
4)     Membagi pekerjaan <br/>
5)     Mengembangkan kemampuan dan ketrampilan pegawai <br/>
6)     Memperbaiki kesalahan yang dilakukan pegawai <br/>
Berdasarkan uraian di atas, yang termasuk tujuan dari fungsi manajemen controlling ditunjukan nomor ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">1, 2, 6
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	1, 2, 3
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	2, 3, 4
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	1, 2, 4
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	4, 5, 6 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Kemampuan yang harus dimiliki oleh manajemen tingkat menengah adalah ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Kemampuan personalia, teknis dan konseptual dibawah lower management
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Kemampuan teknis melebihi lower management
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Teknis melebihi lower management dan top management dan tidak ada ketrampilan manusiawi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Konseptual melebihi lower management dan menekankan pada ketrampilan manusiawi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Konseptual melebihi top management </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Ada 4 unsur penting yang perlu diperhatikan oleh suatu perusahaan ketika memasarkan produknya. Keempat unsur tersebut yang biasanya disebut 4P yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">promotion, person, place, product
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	person, price, product, promotion
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	power, place, person, promotion
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	product, power, place, price
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	product, price, promotion, place </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Kepuasan jangka panjang dapat terpenuhi dengan memperhatikan hal-hal berikut, kecuali ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">Diskon dan keuntungan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Diskon dan pelayanan purna jual
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Pelayanan purna jual dan keuntungan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Kualitas produk dan kemudahan mendapatkan produk
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Mudah mendapatkan produk dan kualitas produk </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Berikut urutan proses pemilihan pasar yang benar adalah ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Positioning, Targeting, Segmentasi</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Segmentasi, Targeting, Positioning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Targeting, Segmentasi, Positioning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Segmentasi, Positioning, Targeting
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Targeting, Positioning, Segmentasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Ketika merancang sistem produksi, manajemen harus mempertimbangkan, kecuali ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Lokasi dan tata letak
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Rancangan produk
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Penilaian pegawai
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Proses produksi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Rancangan jasa </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Perencanaan, pengarahan, pengorganisasian, dan pengendalian atas pengadaan tenaga kerja, pengembangan, kompensasi, pemeliharaan, integrasi, dan PHK (pemutusan hubungan kerja) dengan SDN untuk mencapai sasaran perusahaan merupakan aspek ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Manajemen Administrasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Manajemen Produk
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Manajemen Keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Manajemen Pemasaran
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Manajemen Personalia </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Tindakan memantau kinerja atau membandingkan hasil-hasil dengan tujuan, serta tindakan mengadakan perbaikan, serta penafsiran umpan balik kinerja sebagai dasar tindakan konstruktif dan perbaikan jika dipandang perlu, adalah pengertian dari fungsi manajemen ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Organizing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Coordinating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Planning </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Menentukan sumber dana yang dibutuhkan, penyusunan anggaran pengeluaran, serta melakukan pengawasan terhadap penggunaan keuangan, merupakan proses yang dijalani oleh manajemen ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Personalia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Produksi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Keuangan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Pemasaran
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Administrasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Keahlian untuk berkomunikasi, bekerjasama dan memotivasi orang lain disebut ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Konseptual
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Simpati
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Teknis
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Interpersonal
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Comunication </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Perhatikan profesi di bawah ini!
a)     Mandor
b)     Direktur utama
c)     Kepala bagian
d)     Pengawas lapangan
e)     Dewan direksi
f)      Supervisor
Yang merupakan bagian dari lower manajemen yaitu ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">B, D, F
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	A, B, C
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	A, D, F
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	B, C, D
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	C, E, F </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Tingkat manajemen yang bertugas memimpin dan mengawasi tenaga-tenaga operasional adalah ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Organizing</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Lower management
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Top management
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Middle management
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Personalia </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Planning, Organizing, Motivating, Controlling, Evaluating merupakan fungsi manajemen menurut ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">Sondang P. Siagian
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Henry Fayol
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	M. Gullick
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Harlod Koontz
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	George R. Terry </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Kegiatan pengkoordinasian perlu memperhatikan hal-hal berikut, kecuali ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Simplifikasi</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    Evaluasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Integrasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Koordinasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Sinkronisasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Penentuan tujuan yang jelas, pembagian kerja, pelimpahan wewenang, kesatuan komando, rentangan kekuasaan merupakan prinsip-prinsip dari ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Directing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Planning
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Organizing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Controlling </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Perkembangan terakhir yang relatif baru dalam manajemen adalah konsep 7S dari ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Henry Fayol</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">    McKinsey
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	George R. Terry
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	William H. Newman
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Prof. Eiji Ogawa </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.     Dapat menjalani hubungan baik antar anggota organisasi, struktur anggota dapat mengetahui tugas, kewajiban dan tanggung jawabnya, spesialisasi dalam melakukan tugas. Merupakan manfaat ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">Organizing
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Planning        
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Actuating
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Controlling
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Coordinating </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>


    

        </div>
    </div>
<button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
</section>
<?php include("../footer.php") ?>
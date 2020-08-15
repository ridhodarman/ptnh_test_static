<?php 
    $loc = "../";
    include("../sidebar.php"); 
    $n=0;
?>
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Campuran 1
            </h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row tulisan">


                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Tanah pertanian yang dimiliki oleh perorangan atau keluarga yang bedomisili di luar disebut ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Tanah eigendom 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Tanah Swapraja 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Tanah Absentee 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	verponding 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	erfpacht </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Tanah bekas milik kerajaan dinamakan dengan istilah ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Tanah Absentee 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Tanah Swapraja 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Tanah eigendom 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Tanah negara 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Tanah warisan budaya </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Istilah untuk surat nomor tagihan pajak atas tanah/bangunan yang dimaksudkan, yang sekarang dikenal dengan Surat Pajak Hasil Bumi dan Bangunan (SPPT PBB) adalah ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	verponding 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	erfpacht 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	egindom 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Swapercht </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Yang dimaksud dengna 'pendaftaran tanah' adalah .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Sistem pendataan tanah yang dilakukan oleh pemerintah terhadap tanah masyarakat                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Tanah masyarakat yang didaftarkan ke kantor pertanahan setempat untuk disahkan menjadi hak milik 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	rangkaian kegiatan yang dilakukan oleh Pemerintah secara terus menerus, berkesinambungan dan teratur, meliputi pengumpulan, pengolahan, pembukuan, dan lain- lain 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Kegiatan yang dilakukan oleh warga masyarakat dan pihak kecamatan dalam rangka mendaftarkan hak milik tanah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Pengumpulan data kepemilikan hak atas tanah di suatu wilayah tertentu </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Data yuridis tanah yaitu ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	keterangan mengenai status hukum bidang tanah dan satuan rumah susun yang didaftar, pemegang haknya dan hak pihak lain serta beban-beban lain yang membebaninya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	keterangan mengenai letak, batas dan luas bidang tanah dan satuan rumah susun yang didaftar, termasuk keterangan mengenai adanya bangunan atau bagian bangunan di Atasnya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	keterangan mengenai tanah yang tidak dipunyai dengan sesuatu hak atas tanah. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	dokumen yang memuat data fisik suatu bidang tanah dalam bentuk peta dan uraian. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	dokumen dalam bentuk daftar yang memuat identitas bidang tanah dengan suatu sistim penomoran. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Yang dimaksud dengan pendaftaran tanah secara sporadik yaitu ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	kegiatan pendaftaran tanah untuk menyesuaikan data fisik dan data yuridis dalam peta pendaftaran 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	kegiatan yang dilaksanakan dalam rangka proses pendaftaran tanah untuk pertama kali                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> kegiatan pendaftaran tanah yang dilakukan terhadap obyek pendaftaran tanah yang belum didaftar berdasarkan Peraturan Pemerintah Nomor 10 Tahun 1961 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	kegiatan pendaftaran tanah untuk pertama kali yang dilakukan secara serentak yang meliputi semua obyek pendaftaran tanah yang belum didaftar dalam wilayah atau bagian wilayah suatu desa/kelurahan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	kegiatan pendaftaran tanah untuk pertama kali mengenai satu atau beberapa obyek pendaftaran tanah dalam wilayah atau bagian wilayah suatu desa/kelurahan secara individual atau massal. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Surat ukur yaitu .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	dokumen dalam bentuk daftar yang memuat identitas bidang tanah dengan suatu sistim penomoran. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	dokumen yang memuat data fisik suatu bidang tanah dalam bentuk peta dan uraian. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	dokumen dalam bentuk daftar yang memuat keterangan mengenai penguasaan tanah                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> dokumen dalam bentuk daftar yang memuat data yuridis dan data fisik suatu obyek pendaftaran tanah yang sudah ada haknya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E"> surat tanda bukti untuk hak atas tanah, hak pengelolaan, tanah wakaf </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Pejabat umum yang diberi kewenangan untuk membuat akta-akta tanah tertentu adalah .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Badan Pertanahan Nasional 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Kantor Pertanahan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Pejabat Pembuat Akta Tanah (PPAT) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Menteri 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Notaris </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Kegiatan yang dilaksanakan dalam rangka proses pendaftaran tanah untuk pertama kali, meliputi pengumpulan dan penetapan kebenaran data fisik dan data yuridis mengenai satu atau beberapa obyek pendaftaran tanah untuk keperluan pendaftarannya disebut ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Pendaftaran tanah secara sistematik                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Pendaftaran tanah untuk pertama kali 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Pendaftaran tanah secara sporadik 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	yuridis 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Ajudikasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Dokumen dalam bentuk daftar yang memuat data yuridis dan data fisik suatu obyek pendaftaran tanah yang sudah ada haknya disebut ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Daftar tanah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Daftar nama 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Sertipikat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Buku tanah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Surat ukur </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Tanah yang tidak dipunyai dengan sesuatu hak atas tanah disebut .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Tanah Negara atau tanah yang dikuasai langsung oleh Negara 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Tanah pemerintah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Tanah sertifikasi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Tanah warisan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Tanah hasil sita </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Persoalan Hukum Tanah di Indonesia diatur dalam ...... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Undang-Undang No. 5 Tahun 1960 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Peraturan Pemerintah Nomor 13 Tahun 2010 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Peraturan Pemerintah Nomor 24 Tahun 1997 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Peraturan Presiden Nomor 10 Tahun 2006 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	UU No. 14 Tahun 1960 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Badan Pertanahan Nasional (BPN) diatur melalui ....... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Peraturan Pemerintah Nomor 40 Tahun 1996 dan Peraturan Pemerintah Nomor 13 
    Tahun 2010 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Peraturan Presiden Nomor 10 Tahun 2006 dan Peraturan Presiden Nomor 85 Tahun 
    2012 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Peraturan Pemerintah Nomor 13 Tahun 2010 dan Peraturan Presiden Nomor 85 Tahun 
    2012 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Peraturan Pemerintah Nomor 24 Tahun 1997 dan Peraturan Presiden Nomor 10 Tahun 
    2006 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Peraturan Presiden Nomor 10 Tahun 2006 dan Peraturan Pemerintah Nomor 13 Tahun 2010 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Pelimpahan Kewenangan Pemberian dan Pembatalan Keputusan Pemberian Hak Atas Tanah Negara diatur dalam ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional No. 3 tahun 
    1999 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional No. 3 tahun 
    1997 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional No. 9 tahun 
    1999 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Peraturan Kepala Badan Pertanahan Nasional Republik Indonesia Nomor 3 Tahun 
    2006 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Peraturan Kepala Badan Pertanahan Nasional Republik Indonesia Nomor 4 Tahun 
    2006 
    </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Peraturan Pemerintah Nomor 24 Tahun 1997 membahas tentang ...... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Peraturan Dasar Pokok-Pokok Agraria 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Badan Pertanahan Nasional 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Hak Guna Usaha, Hak Guna Bangunan dan Hak Pakai atas Tanah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Pendaftaran Tanah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Tarif Atas Jenis Penerimaan Negara Bukan Pajak Yang Berlaku Pada Badan Pertanahan Nasional. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Peraturan Kepala Badan Pertanahan Nasional Republik Indonesia Nomor 3 Tahun 2006 mencakup peraturan mengenai ....... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Tarif Atas Jenis Penerimaan Negara Bukan Pajak Yang Berlaku Pada Badan 
    Pertanahan Nasional 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Ketentuan Pelaksanaan Peraturan Pemerintah Nomor 24 tahun 1997 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Tata Cara Pemberian dan Pembatalan Hak Atas Tanah Negara dan Hak Pengelolaan                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Organisasi dan Tata Kerja Kantor Wilayah Badan Pertanahan Nasional Provinsi dan Kantor Pertanahan Kabupaten/Kota 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E"> Organisasi dan Tata Kerja Badan Pertanahan Nasional Republik Indonesia </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Organisasi dan Tata Kerja Kantor Wilayah Badan Pertanahan Nasional Provinsi dan Kantor Pertanahan Kabupaten/Kota ditetapkan dalam ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Peraturan Kepala Badan Pertanahan Nasional Republik Indonesia Nomor 3 Tahun 
    2006 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Peraturan Kepala Badan Pertanahan Nasional Republik Indonesia Nomor 4 Tahun 
    2006 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional No. 9 tahun 
    1999 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional No. 3 tahun 
    1999 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Peraturan Presiden Nomor 10 Tahun 2006 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Peraturan yang membahas tentang Pencabutan Hak-Hak Atas Tanah Dan Benda- Benda Yang Ada Di Atasnya adalah ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Undang-Undang Republik Indonesia Nomor 1 Tahun 1964 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Undang Undang Republik Indonesia Nomor 17 Tahun 1985 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Undang Undang Republik Indonesia Nomor 20 Tahun 1964                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Undang-Undang Republik Indonesia Nomor 20 Tahun 1961 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E"> Undang Undang Republik Indonesia Nomor 5 Tahun 1992 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Undang-undang yang mengatur mengenai Hak Tanggungan Atas Tanah Beserta Benda-Benda Yang Berkaitan Dengan Tanah yaitu .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Undang-Undang Republik Indonesia Nomor 4 Tahun 1996 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Undang-Undang Republik Indonesia Nomor 7 Tahun 2004 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Undang-Undang Republik Indonesia Nomor 25 Tahun 1999 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Undang-Undang Republik Indonesia Nomor 23 Tahun 1997 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Undang Undang Republik Indonesia Nomor 1 Tahun 1995 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Perubahan Atas Undang-Undang Nomor 21 Tahun 1997 Tentang Bea Perolehan Hak Atas Tanah Dan Bangunan telah ditetapkan dalam ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Undang-Undang Republik Indonesia Nomor 1 Tahun 2004 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Undang-Undang Republik Indonesia Nomor 16 Tahun 2001 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Undang-Undang Republik Indonesia Nomor 20 Tahun 2000 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Undang-Undang Republik Indonesia Nomor 25 Tahun 1999 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Undang-Undang Republik Indonesia Nomor 17 Tahun 2003 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Undang-Undang Republik Indonesia Nomor 28 Tahun 1956 membahas mengenai ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Nasionalisasi Perusahaan-Perusahaan Milik Belanda 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Penggunaan Dan Penetapan Luas Tanah Untuk Tanaman-Tanaman Tertentu 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Perumahan Dan Pemukiman 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Pengawasan Terhadap Pemindahan Hak Atas Tanah-Tanah Perkebunan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Pernyataan Perlunya Beberapa Tanah Partikelir Dikembalikan Menjadi Tanah Negeri </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Undang-undang yang mengatur tentang tanah wakaf yaitu ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Undang-Undang Republik Indonesia Nomor 41 Tahun 2004 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Undang-Undang Republik Indonesia Nomor 32 Tahun 2004 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Undang-Undang Republik Indonesia Nomor 30 Tahun 2004 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Undang-Undang Republik Indonesia Nomor 12 Tahun 2006 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Undang-Undang Republik Indonesia Nomor 17 Tahun 2007 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Pengadaan Tanah Bagi Pembangunan Untuk Kepentingan Umum diegaskan dalam ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Undang-Undang Republik Indonesia Nomor 4 Tahun 2009 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Undang-Undang Republik Indonesia Nomor 11 Tahun 2011                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Undang-Undang Republik Indonesia Nomor 25 Tahun 2009 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Undang-Undang Republik Indonesia Nomor 25 Tahun 2009 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Undang-Undang Republik Indonesia Nomor 2 Tahun 2012 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Peraturan Pemerintah Republik Indonesia Nomor 28 Tahun 1977 mengatur tentang ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pemilikan Tanah Petanian Secara Guntai (Absentee) Bagi Para Pensiunan Pegawai 
    Negeri 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Perwakafan Tanah Milik 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Pelaksanaan Pembagian Tanah Dan Pemberian Ganti Kerugian 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Hubungan Sewa-Menyewa Perumahan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Penggunaan Tanah-Tanah Untuk Lintas Lintas Kereta Api </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Penyediaan Dan Penggunaan Tanah Untuk Keperluan Tempat Pemakaman ditetapkakn dalam ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Peraturan Pemerintah Republik Indonesia Nomor 28 Tahun 1977 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Peraturan Pemerintah Republik Indonesia Nomor 4 Tahun 1988 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Peraturan Pemerintah Republik Indonesia Nomor 9 Tahun 1987 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Peraturan Pemerintah Republik Indonesia Nomor 4 Tahun 1977 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Peraturan Pemerintah Republik Indonesia Nomor 35 Tahun 1991 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Rancangan Undang-Undang tentang Pertanahan disusun berdasarkan falsafah UUPA yang bersumber pada ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pasal 33 ayat (1) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Pasal 33 ayat (2) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Pasal 33 ayat (3) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pasal 34 ayat (2) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E"> Pasal 34 ayat (3) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Pemanfaatan Tanah Hak Guna Usaha Dan Hak Guna Bangunan Untuk Usaha Patungan Dalam Rangka Penanaman Modal Asing terdapat dalam ...... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Keputusan Presiden Republik Indonesia Nomor 23 Tahun 1980                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Keputusan Presiden No. 131 Tahun 1961 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Keputusan Presiden Republik Indonesia Nomor 54 Tahun 1980 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Peraturan Presiden Republik Indonesia Nomor 71 Tahun 2012 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Keputusan Presiden Republik Indonesia Nomor 55 Tahun 1980 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Lembaga pemerintah nonkementerian di Indonesia yang mempunyai tugas melaksanakan tugas pemerintahan di bidang pertanahan secara nasional, regional dan sektoral adalah ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Lembaga Partanahan Indonesia 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Deputi Bidang Pengendalian Pertanahan dan Pemberdayaan Masyarakat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Badan Pertanahan dan Pemberdayaan Masyarakat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Badan Pertanahan Nasional (BPN) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Badan Pertanahan Negara </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Badan Pertanahan terdiri dari beberapa bidang berikut kecuali .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Sekretariat Utama 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Deputi Bidang Survei, Pengukuran, dan Pemetaan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Deputi Bidang Hak Tanah dan Pendaftaran Tanah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Inspektorat Utama 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Inspektorat Jendral </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Dalam melaksanakan fungsinya, BPN menjalankan beberapa program pertanahan, antara lain sebagai berikut kecuali .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Prona 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Perpajakan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Redistribusi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	IP4T 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	UKM </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Yang tidak termasuk dalam agenda kebijakan Badan Pertanahan Nasional adalah .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Membangun kepercayaan masyarakat pada Badan Pertanahan Nasional 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Melakukan penelitian dan pengembangan di bidang pertanahan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Menangani dan menyelesaikan perkara, masalah, sengketa, dan konflik pertanahan di seluruh Indonesia secara sistematis 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Membangun Sistem Informasi Pertanahan Nasional (SIMTANAS), dan sistem pengamanan dokumen pertanahan di seluruh Indonesia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Mengembangkan dan memperbarui politik, hukum dan kebijakan Pertanahan </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Yang tidak termasuk fungsi BPN yaitu .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Perumusan kebijakan nasional di bidang pertanahan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Perumusan kebijakan teknis di bidang pertanahan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Koordinasi kebijakan, perencanaan dan program di bidang pertanahan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Pembinaan dan pelayanan administrasi umum di bidang pertanahan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Pembinaan pengelolaan pertanahan harus mampu berkonstribusi pada harmoni sosial. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Diawali dari tahun 2005, pertanahan nasional dibangun dan dikembangkan atas dasar empat (4) prinsip pengelolaan sebagai berikut kecuali ...... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Pengelolaan pertanahan harus mampu berkonstribusi pada kesejahteraan masyarakat,                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> Pengelolaan pelayanan dan pelaksanaan pendaftaran, serta sertifikasi tanah secara menyeluruh di seluruh Indonesia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Pengelolaan pertanahan harus mampu berkonstribusi pada keadilan penguasaan dan pemilikan tanah, 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Pengelolaan pertanahan harus mampu berkonstribusi pada keberlanjutan sistem kemasyarakatan dan Kebangsaan Indonesia, 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Pengelolaan pertanahan harus mampu berkonstribusi pada harmoni sosial. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Dalam logo Badan Pertanahan Nasional terdapat gambar 4 (empat) butir padi yang melambangkan .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	kebijaksanaan, kedewasaan serta keseimbangan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	sumber penghidupan manusia 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Kemakmuran dan kesejahteraan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	poros keseimbangan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	agenda pertanahan yang akan dan telah dilakukan BPN RI </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Gambar lingkaran bumi dalam logo Badan Pertanahan Nasional melambangkan .....                 <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> poros keseimbangan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	sumber penghidupan manusia 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Kemakmuran dan kesejahteraan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	bumi, alam raya dan cerminan dapat dipercaya dan teguh 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	kehangatan, pencerahan, intelektual dan kemakmuran </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  wadah atau area untuk berkarya bagi BPN RI yang berhubungan langsung dengan unsur-unsur yang ada didalam bumi yang meliputi tanah, air dan udara digambarkan dengan .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Gambar 4 (empat) butir padi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Gambar sumbu 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Gambar 11(sebelas) bidang grafis bumi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Gambar garis tegak lurus 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Gambar lingkaran bumi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Warna Kuning Emas yang terdapat dalam logo Badan Pertanahan Nasional mengandung maksud sebagai ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	bumi, alam raya dan cerminan dapat dipercaya dan teguh 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	kehangatan, pencerahan, intelektual dan kemakmuran 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	kebijaksanaan, kedewasaan serta keseimbangan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	bidang bumi yang berada diluar jangkauan wilayah kerja BPN RI 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	kemakmuran, keadilan, kesejahteraan sosial dan keberlanjutan </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Sebuah asosiasi nasional yang bergerak dalam pengembangan perumahan dan permukiman di Indonesia yaitu .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Asosiasi Pengembang Permukiman dan Perumahan Indonesia 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Organisasi Pembangunan dan Pengembangan Perumahan Permukiman Indonesia 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Asosiasi Pembangunan Perumahan dan Permukiman Seluruh Indonesia 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Asosiasi Pengembang Perumahan dan Permukiman Seluruh Indonesia 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Organisasi Pengembang Perumahan dan Permukiman Seluruh Indonesia </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Alternatif penyelesaian perselisihan, sengketa dan perkara melalui mediasi untuk diajarkan kepada peserta PPRA/PPSA Lemhannas RI disahkan oleh Gubernur Lembaga Ketahanan Nasional RI melalui ...... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Surat Perintah Nomor Sprin/1235/IX/2009 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Surat Perintah Nomor Sprin/2345/IX/2009 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Surat Perintah Nomor Sprin/4521/X/2009                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Surat Perintah Nomor Sprin/2345/XI/2009 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E"> Surat Perintah Nomor Sprin/4521/IX/2009 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Layanan pertanahan bergerak (mobile land service) yang bersifat pro aktif atau "jemput bola" ke tengah-tengah masyarakat yang diresmikanoleh BPN adalah .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Larasita 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	AMINDO 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	APERSSI 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	APHI 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	AKI </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Sebuah organisasi yang tergabung dalam himpunan rumah susun di Indonesia disebut .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Organisasi Perhimpunan Rumah Susun Indonesia (OPRSI) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Asosiasi penghuni Rumah Susun Indonesia (APRSI) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Asosiasi Perhimpunan penghuni Rumah Susun Indonesia (APERSSI) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Asosiasi Mediator Indonesia (AMINDO) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	LARASITA 
    </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Beberapa penyebab munculnya kasus-kasus pertanahan sangat bervariasi, antara lain sebagai berikut kecuali .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Harga tanah yang meningkat dengan cepat. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Kondisi masyarakat yang semakin sadar dan peduli akan kepentingan/haknya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Iklim keterbukaan yang digariskan pemerintah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Perebutan hak milik berdasarkan warisan turun temurun tanpa bukti jelas 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	pengadaan tanah untuk pembangunan: pengurusan, peralihan, serta pembebanan hak atas tanah </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Pemerintah  Indonesia  tahun  2013  ini  akan  mendorong  realisasi  pembangunan infrastruktur bidang pertanahan melalui program ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Masterplan Percepatan dan Perluasan Pembangunan Ekonomi Indonesia (MP3EI) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Sistem Informasi Manajemen Kepegawaian (SIMPEG) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Pembentukan Satuan Tugas Agen  Perubahan  (Agent  Of  Changes)  di  lingkungan 
    Kantor Wilayah (Kanwil) BPN Provinsi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Reformasi Birokrasi Pertanahan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Program Larasita </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Berdasarkan Peraturan Kepala BPN RI Nomor 3 Tahun 2011 tentang Pengelolaan Pengkajian dan Penanganan Kasus Pertanahan, kasus pertanahan meliputi .....                 <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Sengketa mengenai harga tanah yang meningkat secara cepat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Perebutan wilayah kekuasaan tanah/hak milik 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	sengketa, konflik dan perkara pertanahan yang disampaikan kepada Badan Pertanahan 
    Nasional Republik Indonesia (BPN) 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Sengketa tanah, bangunan pemerintah yang menempati wilayah tanah rakyat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Segala bentuk yang berhubungan dengan tanah yang diadukan oleh masyarakat ke BPN </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Sengketa tanah dapat berupa sebagai berikut kecuali .....                 <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> sengketa administratif 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	sengketa perdata 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	sengketa pidana 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Sengketa mengenai pemilikan, transaksi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Sengketa konsumsif </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Tipologi kasus pertanahan yaitu ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	perselisihan pertanahan yang penyelesaiannya dilaksanakan oleh lembaga peradilan atau putusan lembaga peradilan yang masih dimintakan penanganan perselisihannya di BPN RI. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	jenis sengketa, konflik dan atau perkara pertanahan yang disampaikan atau diadukan dan ditangani oleh Badan Pertanahan Nasional 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	perselisihan pertanahan antara orang perseorangan, kelompok, golongan, organisasi, badan hukum atau lembaga yang mempunyai kecenderungan atau sudah berdampak luas secara sosio-politis. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	perselisihan pertanahan antara orang perseorangan, badan hukum atau lembaga yang tidak berdampak luas secara sosio-politis. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	sengketa, konflik dan perkara pertanahan yang disampaikan kepada Badan Pertanahan Nasional Republik Indonesia untuk mendapatkan penanganan, penyelesaian sesuai peraturan perundang-undangan dan/atau kebijakan pertanahan nasional. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Secara garis besar Tipologi kasus pertanahan dikelompokkan menjadi beberapa hal berikut kecuali ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Penguasaan tanah tanpa hak 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Sengketa batas 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Sertipikat ganda 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">	Jual satu kali dalam setahun 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Akta Jual Beli Palsu </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Jenis sengketa mengenai perbedaan pendapat, nilai kepentingan mengenai letak, batas dan  luas  bidang  tanah  yang  diakui  satu  pihak  yang  telah  ditetapkan  oleh  Badan Pertanahan Nasional Republik Indonesia maupun yang masih dalam proses penetapan batas disebut ..... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Sengketa batas 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Kekeliruan penunjukan batas 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Penguasaan tanah tanpa hak 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Sengketa waris 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Tumpang tindih </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Penanganan suatu kasus pertanahan yang disampaikan atau diadukan dan ditangani oleh Badan Pertanahan Nasional RI dilakukan dengan tahapan sebagai berikut kecuali ....                 <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Pengolahan data pengaduan, penelitian lapangan/koordinasi/investigasi. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Penyelenggaraan gelar kasus/penyiapan berita acara
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">	Menyusun suatu rekomendasi penyelesaian kasus. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Analisis/Penyusunan Risalah Pengolahan Data/surat keputusan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>E">	Monitoring dan evaluasi terhadap hasil penanganan kasus. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    
                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Terdapat lima kriteria yang dilakukan oleh BPN RI dalam upaya penyelesaian kasus pertanahan. Adapun yang dimaksud dalam kriteria 4 (K4) yaitu .... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	penerbitan surat pemberitahuan penyelesaian kasus pertanahan dan pemberitahuan kepada semua pihak yang bersengketa
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	penerbitan Surat Keputusan tentang pemberian hak atas tanah, pembatalan sertipikat hak atas tanah, pencatatan dalam buku tanah atau perbuatan hukum lainnya sesuai Surat Pemberitahuan Penyelesaian Kasus Pertanahan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">	Pemberitahuan Penyelesaian Kasus Pertanahan yang ditindaklanjuti mediasi oleh BPN sampai pada kesepakatan berdamai atau kesepakatan yang lain disetujui oleh pihak yang bersengketa
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">	Pemberitahuan Penyelesaian Kasus Pertanahan yang menyatakan bahwa penyelesaian kasus   pertanahan   yang   telah   ditangani   bukan   termasuk   kewenangan   BPN   dan dipersilakan untuk diselesaikan melalui instansi lain. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>E" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>E">	Pemberitahuan  Penyelesaian  Kasus  Pertanahan  yang  intinya  menyatakan  bahwa penyelesaian kasus pertanahan akan melalui proses perkara di pengadilan. </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>
    


        </div>
</div>
<button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
</section>
<?php include("../footer.php") ?>
<?php 
    $loc = "../";
    include("../sidebar.php"); 
    $n=0;
?>
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Kebijakan pertanahan, penguasaan, dan penggunaan serta usaha pengadaan tanah
            </h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row tulisan">

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Secara substansial, kewenangan Pemerintah untuk mengatur lalu lintas hubungan hukum di bidang pertanahan, didasarkan pada UUPA yaitu:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> pasal 1 ayat 2
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                             pasal 2 ayat 2 huruf a
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                             pasal 2 ayat 1
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">
                             pasal 2 ayat 2 huruf b dan c</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.Untuk memberikan jaminan kepastian hukum dan perlindungan hukum pada masyarakat di bidang pertanahan, dilakukan pendaftaran tanah yang disebut:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> fisikkadaster
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                             fiskal kadaster
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                             rechts kadaster
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             rechts geldig</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pendaftaran hak atas tanah yang bertujuan untuk menjamin kepastian hukum meliputi kegiatan antara lain, kecuali:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> bidang fisikyaitu pemastian letak, batas dan luas bidang tanah.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            bidang yuridis yaitu pengumpulan keterangan status hukum tanah, pemegang hak serta beban-beban lain atas tanah.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                             bidang fiskal yaitu penetapan pajak atas bidang tanah. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             bidang administrasi berupa pencatatannya dalam suatu daftar.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Penerbitan sertipikat hak atas tanah merupakan kewenangan negara/Pemerintah dalam hal ini, yaitu:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Menteri Agraria dan Tata Ruang/Kepala Badan Pertanahan Nasional.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                             Kepala Kantor Pertanahan. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                             Pejabat Pembuat Akta Tanah.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             semua jawaban a, b, dan c di atas benar.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Guna mencapai jaminan kepastian hukum dan kepastian hak yang diamanatkan Pasal 19 UUPA, maka beberapa asas yang wajib dinyatakan dalam peraturan-perundangan dan dikonkritkan dalam pelaksanaannya antara lain, kecuali:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Asasaman, sehingga penyelenggaraannyatelitidancermat.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                             data yuridis dan data fisik bidang tanah terdaftar tidak dapat setiap saat diberikan kepada pihak-pihak yang berkepentingan.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                             jawaban a dan b di atas benar.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             jawaban a, dan b di atas salah.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pendaftaran tanah pada hakekatnya merupakan suatutugas kepada Pemerintah untuk menetapkan identifikasi tiap-tiap persil tanah yang ada di wilayah Indonesiaserta membukukannya terhadap:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">setiap perolehan haknya                  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            pemindahan hak. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            hak-hak kebendaan yang membebaninya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">
                            Semua jawaban a, b, dan cbenar.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pada hakekatnya semua obyek pendaftaran tanah, didaftarkan dalam daftar-daftar umum pendaftaran tanah, namun dalam praktek saat ini hanya mencatat dan mendaftarkan, kecuali:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">seluruh bidang tanah didaftar pada daftar tanah.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                            hak sewa atas tanah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            bidang-bidang tanah yang telah ada haknya didaftar pada buku tanah.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                            hak jaminan yang dibebankan pada hak atas tanah.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.Subyek hukum yang dapat merupakan pemegang hak atas tanah meliputi:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">tiap-tiap orang yang menguasai tanah hak milik di Indonesia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            kumpulan orang yang diberi status/dipersamakan dengan "orang" oleh hukum.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            kelompok orang yang mempunyai pemilikan bersama atas tanah hak milik.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">
                            semua jawaban a, b, dan c benar.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pilih pernyataan di bawah ini yang paling tepat.
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Pendaftaran tanah merupakan bagian dari kegiatan administrasi pertanahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                             Administrasi pertanahan merupakan bagian dari kegiatan pendaftaran tanah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                             Kegiatan pendaftaran tanah sama dengan kegiatan administrasi pertanahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             Kegiatan pendaftaran tanah tidak terkait dengan administrasi pertanahan</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Daftar-daftar umum dalam penyelenggaraan pendaftaran tanah terdiri atas: 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">peta pendaftaran, surat ukur, buku tanah, gambar ukur, dan daftar nama</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            peta pendaftaran, peta bidang tanah, buku tanah, daftar nama dan daftar tanah.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                            peta pendaftaran, surat ukur, buku tanah, daftar nama, dan daftar tanah.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                            peta pendaftaran, gambar ukur, buku tanah, daftar nama dan daftar tanah.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pendaftaran tanah pertama kali antara lain: 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">pendaftaran surat keputusan pemberian hak atas tanah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            pendaftaran ganti sertipikat hak atas tanah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            pendaftaran jual beli
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                            pendaftaran hapusnya hak atas tanah</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Bidang tanah yang terdaftar menurut Pasal 29 PP No. 24 Tahun 1997 berarti:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">bersertipikat
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            tercatat dalam daftar umum
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                             mempunyai akta
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             mempunyai NIB</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Bidang tanah yang sudah bersertipikat berarti sudah ada kepastian tentang:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> nama pemilik
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                             letak tanah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                             hubungan hukum 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">
                             semua jawaban a, b dan c benar</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Alat pembuktian yang telah digunakan sebagai dasar pendaftaran disebut:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> warkah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                             alas hak
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                             girik, letter C
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                            dokumen</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Untuk pendaftaran tanah pertama kali:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> harus ada letter C
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                             harus ada akta PPAT
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                             tidak harus ada bukti tertulis
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             tidak harus ada bukti lisan dan tertulis</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Setelah dibuatkan berita acara pengesahan data fisik dan data yuridis yang telah diumumkan, Ketua Panitia Ajudikasi atas nama kepala kantor melakukan:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> penetapan penegasan hak atau pengakuan hak atas bidang-bidang tanah yang merupakan tanah milik adat
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">
                             nenetapkan pemberian hak atas tanah (dengan membuat surat keputusan pemberian hak) jika merupakan tanah negara
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            dapat mendaftarkan jual beli atau waris (jika ada) pada buku tanah dan sertipikatnya berdasarkan Akta PPAT yang ada</label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                             semua jawaban a, b dan c di atas benar</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Dengan terbitnya Peraturan Menteri Agraria dan Tata Ruang/Kepala Badan Pertanahan Nasional Nomor 6 Tahun 2018 tentang PTSL berarti:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">pengganti Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional Nomor 3 Tahun 1997.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            amanat langsung dalam Peraturan Pemerintah No. 24 Tahun 1997.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                            menyatakan tidak berlakunya Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional Nomor 35 Tahun 2016.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                            Semua pernyataan a, b dan c di atas benar.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pihak-pihak yang dapat menandatangani daftar isian 201 adalah, kecuali: 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Pemilik tanah dan pemilik tanah yang bersebelahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            Petugas pengumpul data yurudis
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">
                            Panitia Ajudikasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D">
                            Kepala kantor pertanahan setempat.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Dalam rangka memperoleh kepastian tentang subyek dan hak atas tanah yang akan didaftarkan dilakukan kegiatan penyelidikan riwayat tanah, guna memberikan jaminan kepastian hukum suatu hak atas tanah dengan ketentuan, kecuali: 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">Setiap hak atas tanah yang ditetapkan/didaftarkan oleh Kementerian ATR/BPN telah memberikan legitimasi kepemilikan tanah yang sejati. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            Data dalam administrasi pertanahan merupakan data yang benar, secara formil dijamin, dalam batas-batas tertentu dapat diakaui sebagai demikian oleh pemerintah. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                            Apabila data dalam administrasi pertanahan terbukti tidak benar maka pada saat itu gugurlah jaminan yang diberikan tersebut.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                            Hal tersebut terkait dengan sistim pendaftaran tanah yang dianut di Indonesia adalah sistem negatif yang bertendensi positif.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.Adapun ciri utama pelaksanaan pendaftaran tanah sistematik lengkap adalah, kecuali:
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">mendaftar atau membukukan bidang-bidang tanah yang telah ditetapkanatau ditegaskan atau diakui haknya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">
                            dilakukan pembuatan kerangka dasar pemetaan dan peta dasar pendaftaran. 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">
                            pengukuran bidang-bidang tanah pada sebagian lokasi yang telah ditetapkan oleh Ketua Panitia Ajudikasi.
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">
                            pengumuman data fisik dan data yuridis selama 14 hari kalender.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
    </section>
    <?php include("../footer.php") ?>
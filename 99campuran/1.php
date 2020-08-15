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
                    <?php echo $n ?>. Menurut Undang-undang No.22 Tahun 1999, salah satu kewenangan Pemerintah
                    Pusat dalam bidang pertanahan adalah…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> pengendalian pertanahan dan pemberdayaan masyarakat
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> penyelesaian dan penetapan hak ulayat yang meliputi 2 (dua)
                            kabupaten/kota atau lebih
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> pengaturan tanah reklamasi dan tanah timbul
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> penetapan harga dasar tanah </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. “Lahan adalah istilah tanah dalam ukuran luas (berdimensi dua) seperti Ha, m2,
                    tumbak dan bahu” merupakan pengertian lahan menurut ...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Kamus Besar Bahasa Indonesia Edisi 2
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> Made Sandy
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Kamus Tata Ruang, 1997
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Yohara, 1999 </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Menurut UURI No. 24 Tahun 1992 Pasal 1 ayat 1, yang dimaksud ruang adalah...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> wadah yang meliputi ruang daratan, ruang lautan, dan ruang udara
                            sebagai satu kesatuan wilayah, tempat manusia dan makhluk hidup lainnya melakukan kegiatan
                            serta memelihara kelangsungan hidupnya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> kesatuan geografis beserta segenap unsur terkait padanya yang
                            batas dan sistemnya ditentukan berdasarkan aspek administrasi dan atau aspek fungsional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> wilayah yang batas dan sistemnya dibatasi oleh aspek fungsional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> seluruh permukaan bumi yang merupakan lapisan biosfer, tempat
                            hidup tumbuhtumbuhan, hewan, dan manusia </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Fungsi lahan sama dengan tanah yang dipandang sebagai muka bumi (biosfer) tempat
                    kehidupan merupakan pandangan lahan sebagai…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Sarana produksi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> benda ekonomi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> fungsi lingkungan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> fungsi sosial </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Bentuk lahan yang dihasilkan oleh proses aktivitas sungai disebut bentuk lahan
                    asal...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> struktural
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> denudasional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> aeolian
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> fluvial </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Salah satu contoh penggunaan lahan yang disajikan dalam peta skala 1 : 12500
                    adalah…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> kolam air tawar
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> perkampungan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> persawahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> hutan </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pola pemanfaatan ruang wilayah nasional menggambarkan secara indikatif…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> sebaran kegiatan pelestarian alam, cagar budaya, kegiatan
                            produksi, dan
                            permukiman
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> pola kawasan lindung
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> pola pengembangan kawasan budidaya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> pola pengembangan sistem permukiman </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Pengelolaan kawasan suaka alam dan kawasan pelestarian alam antara lain meliputi
                    kawasan…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> sempadan pantai
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> sempadan sungai
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> taman nasional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> konservasi ekologis </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Sekolah, rumah sakit, kantor pos, peribadatan, dan pusat pemerintahan adalah area…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> taman/rekreasi/konservasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> komersial
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> publik/institusional
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> perkantoran </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Dasar hukum yang mengatur tentang penertiban dan pendayagunaan tanah terlantar
                    adalah …
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Undang-undang No. 5 Tahun 1960
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Keputusan Presiden RI No. 41 Tahun 1996
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Peraturan Pemerintah RI No. 36 Tahun 1998
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Keputusan Presiden </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. “Proses manajemen lahan yang diterapkan pada lahan perkotaan yang pemanfaatan
                    ruangnya tidak sesuai dengan penataan ruang, sehingga perlu dilakukan pengalihan hak, pembebasan
                    atau dengan cara lain agar pemilik lahan tidak perlu dipindahkan” termasuk proses…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> penyesuaian dan pencegahan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> pengalihan dan pembebasan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> perubahan dan pengadaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> pendaftaran </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Untuk mengendalikan rencana penataan ruang yang menyangkut lokasi dan peruntukan
                    pemanfaatan ruang, melalui pemberian izin lokasi dimaksudkan agar...
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> memudahkan pelaksanaan transaksi baik untuk dialihkan haknya
                            maupun untuk dijadikan jaminan dalam hak tanggungan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> pemanfaatan tanah tidak menimbulkan dampak yang negatif terhadap
                            lingkungan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> meningkatkan nilai ekonomi tanah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> mempermudah pemilik tanah memberikan keterangan mengenai data
                            tanah </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Menurut Keputusan Presiden RI No. 32 Tahun 1990, yang dimaksudkan dengan taman
                    nasional adalah kawasan…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> pelestarian yang terutama dimanfaatkan untuk tujuan koleksi
                            tumbuhan dan/atau satwa, alami atau buatan, jenis asli dan/atau bukan asli, pengembangan
                            ilmu pengetahuan, pendidikan dan latihan, budaya pariwisata dan rekreasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> dengan ciri khas tertentu baik di darat maupun di perairan yang
                            mempunyai fungsi pokok sebagai kawasan pengawetan keragaman jenis tumbuhan dan satwa beserta
                            ekosistemnya
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> pelestarian alam yang dikelola dengan sistem zonasi yang
                            dimanfaatkan untuk tujuan pengembangan ilmu pengetahuan, pendidikan, pariwisata, dan
                            rekreasi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> pelestarian alam di darat maupun di laut yang terutama
                            dimanfaatkan untuk pariwisata dan rekreasi alam </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Menurut Keputusan Presiden RI No.32 Tahun 1990, kawasan yang memberikan
                    perlindungan kawasan bawahannya meliputi kawasan…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> sekitar waduk
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> suaka alam
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> pantai berhutan bakau
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> bergambut </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Menurut Keputusan Presiden RI No.32 Tahun 1990, kriteria suatu kawasan dapat
                    ditetapkan sebagai cagar alam adalah apabila kawasan tersebut…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> mempunyai kondisi alam, baik biota maupun fisiknya yang masih
                            asli dan tidak atau belum diganggu manusia
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> memiliki keanekaragaman dan populasi satwa yang tinggi
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> mencakup satu atau lebih ekosistem, keindahan geologi dan
                            keindahan bentang alam
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> merupakan tempat dan kehidupan bagi jenis satwa migran tertentu
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Asas pengelolaan hutan lindung adalah…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> terselenggaranya pengelolaan hutan lindung secara terarah dan
                            terus menerus
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> mewujudkan sistem penyangga kehidupan yang berkualitas
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> pelestarian fungsi hidrologis, kesuburan tanah, flora dan fauna,
                            ekosistemnya, dan geofisik serta kemampuan pemanfaatan fungsinya secara serasi dan seimbang
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> menterpadukan semua unsur yang terkait dalam pengelolaan hutan
                            lindung </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Menurut Miller, tujuan normatif pengelolaan taman nasional adalah…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> memperluas ruang terbuka hijau
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> mengkonservasi sumberdaya alam secara ex-situ
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> menyediakan fasilitas rekreasi dan turisme
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> meningkatkan pendapatan penduduk setempat </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Faktor penting yang pada umumnya menjadi pendorong terjadinya alih fungsi lahan di
                    pedesaan adalah…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> peningkatan nilai tukar petani khususnya petani padi sawah
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> peningkatan pertumbuhan industri
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> penurunan pendapatan di wilayah perkotaan
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> penurunan laju urbanisasi </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Topografi atau kemiringan lereng pada suatu lahan yang paling baik untuk
                    dikembangkan sebagai lahan pertanian adalah…
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> 0 – 3 %
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> 3 – 8 %
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> 8 – 15 %
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> > 15 % </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Menurut Schmidt dan Ferguson, nilai koefisien 0,143 < Q < 0,333 termasuk tipe
                        curah hujan… <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> tipe A: sangat basah
                        </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>B"> tipe B: basah
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> tipe C: agak basah
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> tipe D: sedang </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. “Lahan yang mempunyai faktor pembatas sangat berat, tetapi masih memungkinkan untuk
                diatasi, hanya tidak dapat diperbaiki dengan tingkat pengetahuan sekarang ini dengan biaya yang
                rasional”, dalam kesesuaian lahan termasuk ke dalam kelas…
                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>A"> N1 (tidak sesuai pada saat ini)
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>B"> N2 (tidak sesuai permanen)
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> S1 (sangat sesuai)
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> S2 (cukup sesuai) </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Fungsi utama pengolahan tanah dalam menunjang pertumbuhan tanaman adalah...
                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>A"> menurunkan porositas tanah
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>B"> memperbaiki struktur tanah
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> meningkatkan pH tanah
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> meningkatkan jumlah unsur hara dalam tanah </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Harga lahan di perkotaan menjadi semakin tinggi disebabkan oleh...
                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>A"> persediaan lahan yang tidak terbatas
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>B"> kebutuhan ruang yang semakin menurun
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>C"> adanya investasi untuk pembangunan sarana dan prasarana
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> adanya pengendalian harga oleh pemerintah </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Tujuan pengadaan lahan melalui sistem pengembangan lahan terarah (guide land
                development/GLD) adalah...
                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>A"> menghindari spekulan lahan
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>B"> menghindari pelaksanaan proyek secara kontinyu
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> menghindari subsidi silang
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> melaksanakan proyek kurang dari 1 tahun </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Perundang-undangan mengenai peralihan status hak atas tanah negara mengikuti peraturan
                sebagai berikut…
                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>A"> Peraturan Menteri Dalam Negeri Nomor 6/1972 tentang Pelimpahan
                        Wewenang
                        Pemberian Hak Atas Tanah
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>B"> Peraturan Pemerintah No.10/1961 tentang Pendaftaran Tanah, berikut
                        penjelasannya
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> Peraturan Menteri Agraria No.10/1961 tentang Pejabat Pembuat Akta
                        Tanah
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> Peraturan Menteri Dalam Negeri Nomor 7/1977 tentang Uang Pengganti
                        Biaya Cetak Lembar Isian di Bidang Pengurusan Hak Atas Tanah dan Pendaftaran Tanah </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Struktur tata ruang wilayah nasional menggambarkan rencana pengembangan jaringan
                yang mendukung sistem permukiman dan kawasan-kawasan andalan di darat dan di
                laut, serta kawasan yang bekerja sama dengan negara tetangga, meliputi…
                1. transportasi
                2. lokasi wisata
                3. kelistrikan

                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>A"> Jika (1) dan (2) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>B"> Jika (1) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> Jika (2) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> Jika semua benar </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Faktor-faktor yang menyebabkan peningkatan luas lahan kritis di pedesaan adalah…
                1. perladangan berpindah
                2. penurunan laju pertumbuhan penduduk di sekitar lahan kritis
                3. praktek sistem pertanian yang tidak memperhatikan prinsip konservasi

                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>A"> Jika (1) dan (2) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>B"> Jika (1) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> Jika (2) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> Jika semua benar </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Manakah di bawah ini yang termasuk unsur iklim ?
                1. kelembaban
                2. presipitasi
                3. topografi

                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>A"> Jika (1) dan (2) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>B"> Jika (1) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> Jika (2) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> Jika semua benar </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Salah satu kegiatan ekonomi yang memanfaatkan lahan perkotaan adalah industri ringan
                yang meliputi industri...
                1. tekstil
                2. rumah tangga
                3. alat angkutan

                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>A"> Jika (1) dan (2) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>B"> Jika (1) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> Jika (2) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> Jika semua benar </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>

            <div class="col-sm-12 card">
                <?php $n= $n + 1; ?>
                <?php echo $n ?>. Indikasi perubahan intensitas penggunaan lahan di kota Jakarta terlihat pada…
                1. meluasnya areal terbangun
                2. menurunnya kepadatan pusat kota
                3. munculnya permukiman baru di pinggiran kota

                <div>
                    <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>A"> Jika (1) dan (2) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, true)">
                    <label for="<?php echo $n ?>B"> Jika (1) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>C"> Jika (2) dan (3) yang benar
                    </label>
                </div>
                <div>
                    <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                        onclick="check(<?php echo $n ?>, false)">
                    <label for="<?php echo $n ?>D"> Jika semua benar
                    </label>
                </div>
                <div id="<?php echo $n ?>"></div>
            </div>


        </div>
</div>
<button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
</section>
<?php include("../footer.php") ?>
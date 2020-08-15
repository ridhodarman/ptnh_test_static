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
                    <?php echo $n ?>.	Panitia Pembebasan Tanah dalam PMDN No. 15 Tahun 1975 adalah suatu Panitia yang bertugas melakukan kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	pemeriksaan/penelitian                                                 </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Memberikan ganti kerugian 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	penetapan ganti rugi                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penafsiran harga tanah 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pembentukan panitia di dalam PMDN No. 15 Tahun 1975 ditetapkan oleh? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Gubernur                                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Menteri dalam negeri 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Bupati / walikota                                                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Gubernur dengan Mendagri 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Di dalam PMDN No. 15 Tahun 1975 Jenis hat yang dibebaskan dengan mendapatkan ganti rugi dapat berupa :? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Semua jenis hat                                                       </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> semua tanah yang sudah terdaftar  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Semua tanah yang sudah di kuasai                              </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Tanah dari masy hukum   adat 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Di dalam PMDN No. 15 Tahun 1975, bagaimana Jika terdapat perbedaan taksiran ganti rugi di antara para anggota Panitia ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Harga yang tertinggi                                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Harga terendah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	yang digunakan adalah harga rata-rata dari taksiran anggota                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Harga kesepakatan panitia dgn masy.</label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Bagaimana sikap panitia pembebasan tanah Di dalam PMDN No. 15 Tahun 1975, bila ada penolakan dari masyarakat yang terkena kegaiatan pengadaan tanah ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Tetap pada putusan semula                     
                        Atau meneruskan kepada Gubernur                       </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Mengadakan penafsiran ulang   
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Musyawarah kembali pd masyarakat                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Menyerahkan kepautusan pd Bupati 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Di dalam PMDN No. 15 Tahun 1975, kapan pelepasan hak atas tanah dilakukan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pada saat terjadi kesepakatan                                        
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Setelah tidak ada yang keberatan  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Setelah pembayaran gati kerugian                                  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Bersamaan pembayaran ganti rugi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Di dalam PMDN No. 15 Tahun 1975, ditujukan kepada siapa permohonan hak atas tanah dari instansi yang memerlukan tanah ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	KMNA/BPN                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Kepala Sub Direktorat Agraria Kabupaten/Kotamadya 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	BPN RI                                         </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penafsiran harga tanah 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pernyataan ini yang tidak benar di dalam PMDN No. 15 Tahun 1975, tentang uang honorium Para anggota dan Sekretaris Panitia Pembebasan Tanah adalah ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	¼ % dari jumlah harga taksiran ganti rugi                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Maksimum 1 % 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Untuk seluruh anggota maksimum sebesar 1 ½ %                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">   Rp 1.000.000 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apabila pembebasan tanah oleh yang berkepentingan meliputi areal yang luas, dan mengakibatkan perpindahan penduduk di dalam PMDN No. 15 Tahun 1975, kewajiban apa yang harus  disediakan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Ganti rugi yang layak                                                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Biaya relokasi  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Tempat penampungan pemukiman baru                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Uang kompensasi  
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apabila dalam hal pengadaan tanah diperlukan peninjauan lokasi, biaya transport/operasional dan biaya-biaya lainnya menjadi beban siapa menurut PMDN No. 15 Tahun 1975 ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Instansi yan memerlukan tanah                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Panitia pembebasan tanah  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Pemerintah daerah                                                         </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Pemimpin Proyek 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Panitia Pembebasan Tanah di dalam PMDN No. 15 Tahun 1975 adalah suatu Panitia yang bertugas melakukan kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	pemeriksaan/penelitian                                                 </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Memberikan ganti kerugian 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	penetapan ganti rugi                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penafsiran harga tanah 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apa yang dimaksudkan dengan harga tanah harus memadai dalam PMDN Nomor 2 Tahun 1985 ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Harga pasar                                                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Harga yang berlaku di masyarakat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Harga transaksi                                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Paling mengutungkan bagi negara 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam menentukan besarnya ganti rugi, Pemimpin proyek wajib memperhatikan ketentuan harga dasar yang ditetapkan oleh Kepala Daerah dalam hal ini dia atur dalam ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	PMDN No. 2/1985                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> SE Mendagri No, 2/384/2/75 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	PMDN No. 15 Tahun 1975                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Undang-undang Nomor 20 Tahun 
1961 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Dalam PMDN Nomor 2 Tahun 1985, apabila dalam menentukan besarnya ganti rugi antara Pemimpin Proyek dan yang berhak atas tanah tidak terdapat kesepakatan, langkah apa yang akan diambil ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pemimpin Proyek segera mencari lokasi lain                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Melakukan pencabutan                                                                                 hak 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Menyerahkan keputusan kepada Bupati                                   </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Musyawarah kembali 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Arti  pengadaan tanah menurut Kepres 55 tahun 1993 adalah ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Setiap kegiatan untuk mendapatkan tanah                              </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">  GR Kepada pihak                                                                                  terdampak 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dengan cara memberikan ganti kerugian                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D">  GR yang berhak atas tanah 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam kepres 55 tahun 1993 dasar pemeberian Gari kerugian pembebasan tanah adalah, berdasarkan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Penilaian Aprisial                                                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Musyawarah  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Harga Pasar                                                                   </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> NJOP yang berlaku 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam Kepres 55 tahun 1993 bagaimana penggantian terhadap bidang tanah yang dikuasai dengan hak ulayat diberikan dalam bentuk pembangunan fasilitas umum atau bentuk lain yang bermanfaat bagi masyarakat setempat. 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Agar lebih efektif                                                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Menghemat waktu  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Kesepakatan mudah tercapai                                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Menghemat biaya 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apabila dalam musyawarah telah dicapai kesepakatan antara pemegang hak atas tanah dan instansi Pemerintah yang memerlukan tanah dalam Kepres 55 tahun 1993, siapa yang mengeluarkan keputusan mengenai bentuk dan besarnya ganti kerugian sesuai dengan kesepakatan tersebut  ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pelaksana pengadaan tanah                                         </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Gubernur  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Penilai independen                                                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Panitia pengadaan tanah 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Sesuai Kepres 55 tahun 1993 Siapa yang dapat mengeluarkan keputusan yang mengukuhkan atau mengubah bentuk dan/atau besarnya ganti kerugian yang akan diberikan.  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pelaksana pengadaan tanah                                         </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Gubernur  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Penilai independen                                                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Panitia pengadaan tanah 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apabila keputusan itu tidak bisa di terima pihak yang berhak maka berdasarkan Kepres 55/93 agar kegiatan pengadaan tanah dapat terus berjalan maka dilakukan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pencabutan HAT                                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Penilaan ulang 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Musyawarah lanjutan                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Konsinasi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam Kepres 55 tahun 1993 untuk keadaan seperti apa penerapan Undang-undang Nomor 51 Prp Tahun 1960 dilakukan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Bagi hasil tanah pertanian                                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Penguasaan tanah negara 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Sewa tanah pertanian                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Pengarapan tanpa ijin 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pengadaan tanah menurut peraturan  ini adalah setiap kegiatan untuk mendapatkan tanah dengan cara memberikan ganti rugi kepada yang melepaskan atau menyerahkan tanah, bangunan, tanaman, dan bendabenda yang berkaitan dengan tanah atau ......... 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Dengan Mendapatkan HAT                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Dengan Pemindahtanganan HAT 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dengan Pengambilalihan HAT                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Dengan pencabutan hak atas tanah. 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apa yang membedakan pengertian pengadaan tanah dalam Perpres 36 Tahun 2005 dan Perpres 65 Tahun 2006 dengan di hilangkannya ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Dengan Mendapatkan HAT                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Dengan Pemindahtanganan HAT 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dengan Pengambilalihan HAT                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Dengan pencabutan hak atas tanah. 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam Perpres 65 Tahun 2006 musyawarah adalah usaha untuk mendapatkan kesepakatan tentang ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Dengan Mendapatkan HAT                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Dengan Pemindahtanganan HAT 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dengan Pengambilalihan HAT                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Dengan pencabutan hak atas tanah. 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Berapa lama waktu yang di alokasikan paling lam dalam proses musyawarah, sesuai dengan Perpres 65 tahun 2006 ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	120 hari                                                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> 110 hari 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	100 hari                                                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> 130 hari. 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Menurut Perpres 65 tahun 2006 apa yang dilakukan Panitia Pengadaan Tanah bila terjadi masalah dengan kegiatan musyawarah ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Menambah waktu musyawarah                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> 110 hari 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B"> Menetapkan bentuk dan besarnya ganti                                 </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> 130 hari. 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Sesuai kewenangan menurut Perpres 65 tahun 2006 siapa yang dapat mengeluarkan keputusan mengukuhkan atau mengubah keputusan Panitia Pengadaan Tanah mengenai bentuk dan/atau besarnya ganti rugi yang akan diberikan, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Bupati/Walikota                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Menteri Dalam Negeri 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Gubernur                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Gubernur dengan persetujuan DPRD 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Menurut Perpres 65 tahun 2006 permintaan untuk melakukan pencabutan tanah tersebut disampaikan kepada Presiden oleh siapa ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Bupati/Walikota                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Menteri Dalam Negeri 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Gubernur                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Kepala BPN 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Menurut Perpres 65 tahun 2006 permintaan untuk melakukan pencabutan tanah ditandatangani siapa ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Bupati/Walikota dan Ketua DPRD                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Menteri Dalam Negeri 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Menteri dari instansi yang memerlukan    tanah, dan MENKUMHAM                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Gubernur dan Ketua DPRD                                       
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Konsultasi publik dalam UU 2/2012 adalah proses ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pendekatan persuasif                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Komunikasi dialogis 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Sosialisasi kegiatan                                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penyuluhan kepada masyarakat 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Tujuan konsultasi publik dalam UU 2/2012 adalah untuk mencapai   ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Kesepahaman dan kesepakatan                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Persetujuan masyarakat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dukungan masyarakat                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Meminimalkan dampak sosial 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Kesepakatan dan kesepahaman apa yang akan dicapai dalam konsultsi publik menurut undang-undang no 2 tahun 2012 ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Persiapan PTUP                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pelaksanaan PTUP 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Perencanaan PTUP                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Kegiatan PTUP 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Ada berapa prinsip-prinsip Undang-Undang No. 2 Tahun 2012 tentang Pengadaan Tanah Bagi Pembangunan Untuk Kepentingan Umum. Undang undang ini secara garis besar ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	4 Prinsip                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> 5 Prinsip 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	3 Prinsip                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> 6 Prinsip 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Melakukan analisa waktu yang diperlukan termasuk tahapan pengadaan tanah yang meliputi: persiapan pelaksanaan pengadaan tanah; pelaksanaan pengadaan tanah; penyerahan hasil pengadaan tanah; dan pelaksanaan pembangunan; hal ini di atur dalam ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Permenkeu 10/02.PMK/2015                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Permendagri No. 72 Tahun 2012 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Peraturan Kepala BPN No. 5 Tahun 2012                              </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> UU 2 Tahun 2012 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Kebijakan pengadaan tanah di dalam masa transisisi adalah kegiatan sebelum UU 2/12 di berlakukan, sedangkan kegiatan pengadaan tanah sudah berjalan tetapi belum selesai, apa yang di lakukan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Di berhentikan dan di diulang                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Diadakan Penyesuaian   
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Di lanjutkan dgn uu yang baru                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Tahapan yang sudah di lakukan tetap                                                                              di pakai dan di lanjutkan dengan                                                          UU yang baru 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Asas kemanusiaan dalam proses pengadaan tanah adalah perlindungan  serta penghormatan terhadap hak asasi manusia, harkat dan martabat setiap warga negara dan penduduk Indonesia secara proporsional artinya ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Perlakuan secara manuasiawi dalam PTUP                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pengantian UGR yang                                                                               layak  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> penetapan ganti rugi                                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Musyawarah yang adil 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas keadilan adalah  jaminan yang layak dalam pemberian penggantian kepada pihak yang berhak dalam proses Pengadaan Tanah sehingga mendapatkan kesempatan untuk dapat  ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Memperoleh UGR Yang layak                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Memperoleh  hak yang adil 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> manfaat PTUP                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Melangsungkan kehidupan yang 
                                                         lebih  baik                                                                  
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas kemamfaatan adalah hasil pengadaan tanah mampu memberikan manfaat secara luas bagi kepentingan masyarakat bangsa dan negara. 
                    Kemanfaatan dalam arti luas bahwa kegiatan pengadaan tanah harus memberikan dampak yang baik bagi kehidupan ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Masyarkat yang berhak                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Mayarakat yang berhak dan mayarakat                                                  terdampak 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Mayarakat terdampak                                 </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Masyarakat yang berhak dan masyarakat  
                                                               sekitar 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. Yang dimaksud dengan asas kepastian adalah memberikan kepastian hukum  kepada siapa ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pemerintah dan pihak yang berhak                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Yang memerlukan tanah dan                                                                 masyarakat 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Pemerintah dan masyarakat                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pemerintah, yang memerlukan                                                                 tanah dan pihak yang berhak 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas keterbukaan adalah bahwa Pengadaan Tanah untuk pembangunan dilaksanakan dengan memberikan akses kepada masyarakat untuk memdapatkan informasi yang berkaitan dengan pengadaan tanah, apa kelemahan asas ini ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Membuka peluang spekulan                              </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Memperbesar biaya operasional 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Susah mencapai kesepakatan                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Merepotkan pelaksana 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas kesepakatan bahwa proses pengadaan tanah dilakukan dengan musyawarah para pihak tanpa unsur paksaan untuk mendapatkan kesepakatan bersama.
                        Cara memperoleh tanah yang sudah dihakki seseorang harus dilakukan melalui kata sepakat antara pihak yang bersangkutan. Asas ini menekankan bahwa prinsipnya dalam pengadaan tanah tidak diperbolehkan adanya paksaan secara sepihak agar empunya meyerahkan tanah miliknya, asas ini kontradiksi dengan dengan kegiatan pengadaan tanah pada saat ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Penetapan bentuk ganti rugi                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Konsyinasi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penetapan lokasi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimasksud dengan asas keikutsertaan adalah dukungan dalam penyelenggaraan Pengadaan Tanah melalui partisipasi masyarakat, baik secara langsung maupun tidak langsung sejak perencanaan sampai kegiatan pembangunan. Keikutsertaaan dalam pengadaan tanah akan terjadi apabila masyarakat, kegiatan ini di lakukan pada saat, kecuali ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A"> Konsyinasi                                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Konsultasi publik 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Sosialisasi                                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pengumuman daftar nominatif 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas kesejahteraan adalah bahwa Pengadaan Tanah untuk pembangunan dapat memberikan ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	memberikan UGR Yang banyak                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Kesejahteraan yang tinggi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Nilai tambah                                                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Kehidupan yang lebih baik 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang diamaksud dengan asas keberlanjutan adalah kegiatan pembangunan harus dapat, kecuali  ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Teratur dan terukur                                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> berkesinambungan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	untuk mencapai tujuan yang diharapkan                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> berlangsung secara terus- 
                                                                               menerus 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud denga asas keselarasan adalah bahwa Pengadaan Tanah untuk pembangunan dapat . kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Dengan kepentingan masyarakat                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Dengan kepentingan instansi                                                                 yang memerlukan tanah     
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dengan kepentingan negara                                      </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Seimbang dan sejalan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pada tahapan perencanaan pelaksana pengadaan tanah dilakukan oleh ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Instansi yang memerlkan tanah                                   </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pelaksana pengadaan tanah  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Konsultan                                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pemerintah daerah 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam dokumen perencanaan terdapat perkiraan jangka waktu pelaksanaan pengadaan tanah, menguraikan waktu yang diperlukan untuk masing masing tahapan pelaksanaan pengadaan tanah, tahapan apa saja itu, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Perencanaan                                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pelaksanaan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Persiapan                                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penyerahan hasil 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam kegiatan apa  penerapan asas keterbukaan dalam tahapan perencanaan pengadaan tanah ?. 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Survai sosial ekonomi                                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Perkiraan nilai tanah 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Kelayakan lokasi                                                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Analisis biaya dan mafaat 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Adapun tugas Tim Persiapan pengadaan tanah ini antara lain, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Melaksanakan Konsultasi Publik                              </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> menyiapkan Penetapan Lokasi  
                                                              Pembangunan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Melaksanakan pendataan awal                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Melaksanakan Musyawarag GR 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pihak mana saja yang diundang dalam pemberitahuan awal ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Masyarakat yang berhak                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Masyarakat terdampak  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Tokoh masyarakat                                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Masyarakat yang berhak dan terdampak 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pemberitahuan awal pembanguanan di sampai dengan cara ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pengumuman di lokasi                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Memuat di media cetak  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Membuat selebaran                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> langsung dan tidak langsung 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Hasil pendataan awal lokasi rencana pembangunan dituangkan dalam bentuk daftar sementara lokasi rencana pembangunan yang ditandatangani oleh tim persiapan. Data sementara ini digunakan sebagai bahan untuk pelaksanaan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Sosialisasi                                                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Musyawarah ganti kerugian  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pemberitahuan awal 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Tim persiapan harus dapat memberikan penjelasan yang meyakinkan bahwa pembangunan tersebut benar-benar untuk kepentingan umum disamping itu memberikan manfaat baik secara ekonomi maupun sosial kepada masyarakat yang terdampak maupun masnyarakat secara keseluruhan, apa yang ingin di capai dalam kegiatan ini ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Kesepakatan dan kesepahaman                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Maksud dan tujuan tersampaikan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Memberi kesempatan perisipasi                                 </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Persetujuan masyarakat 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Konsultasi publik merupakan titik kritis dalam kegiatan pengadaan tanah, mengapa ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Tidak bisa diulang                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> keberhasilan meringankan pekerjaan selanjutnya 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Dasar untuk Konsyinasi                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> 80 % lebih harus sepakat baru bisa                                                    dilanjutkan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam konsultasi publik,  siapa yang menyampaikan maksud dan tujuan rencana pembangunan ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pemerintah daerah                                                   </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Gubernur atau yang mewakili 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Instansi yg memerlukan tanah                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Mendagri atau yang mewakili 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam konsultasi publik siapa yang menyampaikan, Tahapan dan waktu proses penyelenggaraan pengadaan tanah ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pemerintah daerah   Propinsi                                   </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Gubernur atau yang mewakili 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Instansi yg memerlukan tanah                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Mendagri atau yang mewakili 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang di sampaikan BPN dalam konsultasi publik adalah sebagai berikut, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Peran penilai                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> obyek yg dinilai ganti kerugian dan bentuk ganti                                        rugi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Hak dan kewajiban pemilik tanah                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> insentif perpajakan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Hasil pendataan awal lokasi rencana pembangunan dituangkan dalam bentuk daftar sementara lokasi rencana pembangunan yang ditandatangani oleh tim persiapan, Data sementara ini digunakan sebagai bahan untuk pelaksanaan konsultasi publik, dalam daftar itu terkait dengan data awal pihak yang berhak dan objek pengadaan tanah, kalau bahan itu  yang dipakai dalam konsultasi publik, bagaimana dengan pihak terdampak ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Di wakili tokoh” masyarakat                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Terwakili tapi tidak menyeluruh 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Tidak diundang                                              </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Kurang terwakili yang seharusnya semua  
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Siapa yang memberi rekomendasi kepada gubernur dan dapat menjadi dasar bagi gubernur untuk menerbitkan atau tidak menerbitkan Surat Keputusan yang berisi penetapan lokasi pembangunan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Badan Pengawasan Daerah                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">  Staf ahli Gubernur  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Team konsultasi Publik                                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Tim Kajian Keberatan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam melakukan kewenangan pengadaan tanah akan membuat team untuk membantunya, berapa team yang di buat Gubernur  ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	1 team                                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> 2 team 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	3 team                                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> 4 team 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Berdasarkan pada laporan tim persiapan terkait keberatan masyarakat, Tim pengkajian keberatan melakukan tugasnya sebagai berikut, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Melaporkan hasil kajian                                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C">  Melakukan pertemun dan klarifikasi  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Inventarisasi masalah                                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Membuat rekomendasi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam tatapan persiapan, pada kegiatan apa partisipasi masyarakat dapat dilakukan, Kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pendataan awal                                                 </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pengajuan keberatan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Pemberian rekomendasi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Penerapan asas keterbukaan dalam kegiatan persiapan pengadaan tnah dilakukn dalam kegiatan-kegiatan berikut ini, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pemberian rekomendasi                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pengajuan keberatan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pendataan awal                          
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pada kegiatan apa penerapan  asas kesepakatan dalam  proses persiapan pengadaan tanah dilakukan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pemberitahuan awal                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pengajuan keberatan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pendataan awal                          
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Gubernur menerbitkan SK tentang Penetapan Lokasi dengan berdasarkan berapa di alasan ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	1 alasan                                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> 2 alasan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	3 alasan                                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> 4 alasan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apa yang menjadikan dasar bagi penilai pertanahan untuk melaksanakan penilaian dalam kegiatan pengadaan tanah ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Peta bidang tanah                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Peta bidang tanah dan daftar nominatif 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Daftar nominatif                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> BA pengesahan peta bidang dan daftar nominatif 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam kegiatan pengdaan tanah berdasarkan UU 2/2012 baiya perkara di tanggung oleh siapa ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pelaksana PTUP                                                   </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Instansi yang memerlukan tanah, di                                                             usulkan oleh pelaksana PTUP 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Instansi yang memerlukan tanah                         </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Gubernur 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Penitipan Uang ganti kerugian ke Pengadilan (konsyinasi) dilakukan dalam keadaan seperti apa, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Tidak terjadi kesepakatan GR                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C">  Permintaan Tanah pengganti belum                                                          terealisasi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Pemilik tidak di ketahui                                      </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Tanah masih dalam sengketa 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Penerapan asas keterbukaan dalam kegiatan pelaksanaan  pengadaan tnah dilakukan dalam kegiatan-kegiatan berikut ini, kecuali ? .   
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Inventarisiasi dan Identifikasi    &  Pemberitahuan Besarnya Ganti    
                                                       Kerugian 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Validasi                                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Musyawarah Bentuk Ganti Kerugian 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam kegiatan apa penerapan asas keikutsertaan dalam Pelaksanaan Pengadaan Tanah, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Inventarisiasi dan Identifikasi                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pemberitahuan Besarnya Ganti  
                                                     Kerugian 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Pengumuman                                                   </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Musyawarah Bentuk Ganti Kerugian 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>.  Pelepasan hak atas tanah dalam pengadaan tanah berdasarkan UU 2/2012, di lakukan di hadapan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Kepala kantor pertanahan                                       </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Bupati/Wali kota 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Instnasi yang memerlukan tanah                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Ketua pelaksana pengadaan tanah                                                                 atau pejabat yang di tunjuk 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Tahapan penyerahan hasil adalah tahapan yang dilakukan oleh pelaksana pengadaan tanah bila kegiatan pengadaan tanah telah selesai dengan memberikan dokumen-dokumen dalam kegiatan pengadaan tanah, adapun dokumen yang diserahkan antara lain dokumen hasil inventarisasi dan identifikasi yang memuat ?:  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Peta bidang tanah                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> pengumuman dan hasil verifikasi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Daftar nominatif                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> BA pengesahan peta bidang dan daftar nominatif 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Tahapan penyerahan hasil adalah tahapan yang dilakukan oleh pelaksana pengadaan tanah bila kegiatan pengadaan tanah telah selesai dengan memberikan dokumen-dokumen dalam kegiatan pengadaan tanah, adapun dokumen yang diserahkan antara lain dokumen musyawarah ganti kerugian  yang memuat ?:  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	BA Kesepakatan dan Validasi                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> BA pelepasan & kwitasi pembayaran 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Daftar hadir dan kwitasi pembayaran                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Validasi & kwitasi pembayaran 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Tahapan penyerahan hasil adalah tahapan yang dilakukan oleh pelaksana pengadaan tanah bila kegiatan pengadaan tanah telah selesai dengan memberikan dokumen-dokumen dalam kegiatan pengadaan tanah, adapun dokumen yang diserahkan antara lain dokumen pembayaran ganti  kerugian yang memuat ?:  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Daftar penerima UGR                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> BA kesepakatan GR dan Kwitansi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	BA Kesepakatan dan BA pelepasan hak                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> BA pelepasan hak dan  
                                                                         Kwitansi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Siapa yang memberikan penjelasan tentang asas kemamfaatan adalah hasil pengadaan tanah ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Intansi yang memerlukn tanah                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Kanwil Kemenkumham dan instansi  
                                                           yang memerlukan tanah                                                                 </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Pemda propinsi                                                      </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> BPN 
 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Untuk penyediaan tanah skala kecil, instansi pemerintah tidak memerlukan SK Penetapan Lokasi. Maka cara perolehan tanahnya dilakukan melalui, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Jual beli                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Tukar menukkar 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Warisan                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Bentuk lain yang disepakati 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apa kelemahan memperoleh tanah secara langsung dengan para pemegang hak atas tanah ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Biaya mahal                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Kesepakatan sulit terjadi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Waktu yang lama                                       </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Tidak bisa dengan upaya Konsyinasi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Mengapa dalam penagdaan tanah secara langsung tidak di mungkinkan upaya konsyinasi atau penitipan uang ganti kerugian ke pengadilan ?                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Tidak ada konsultasi publik                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Tidak memakai penetapan lokasi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Tanpa penilai independen                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Tanpa proses peradilan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Permohonan hak atas tanah diajukan ke Kantor Pertanahan, untuk dapat   diterbitkan sertipikat tanah sesuai dengan hak yang dapat di peroleh, hal itu bisa di lakukan setelah proses ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Perolehan tanah                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Tidak ada penetapan lokasi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Perolehan dan pelepasan HAT                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Tanpa proses peradilan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam pengadaan tanah langsung ada keuntungan atau kelonggaran dalam melakukan musyawarah, hal ini di sebabkan  karena instansi yang memerlukan tanah dalam mendapatkan hak atas tanah tidak ....                     <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Tidak ada konsultasi publik                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Tanpa proses peradilan  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Tanpa penilai independen                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Tidak dibatasi waktu 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Bagaimana kegiatan pelaksanaan pembngunan dalam pengadaan tanah dalam keadaan mendesak bila ada pihak yang mengajukan keberatan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Kegiatan pembangunan jalan terus                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Berhenti dan bermusyawarah lagi  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Berhenti  menunggu putusan PN                              </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Di tunda sementara 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam kegaiatan pengadaan tanah untuk bagi pembangunan untuk kepentingan umum, apa yang di ganti rugi bila suatau tanah belum mempunyai alas hak atau masih di kategoerikan tanah negara 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Tanam tumbuh                                                     </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Kehilangan hak memanfaatkan tanah  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Bagunan                                                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Tanam tumbuh besarta bangunan  
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam  asas keterbukaan dalam Pengadaan Tanah skala kecil dilakukan bila tanpa penetapan lokasi ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pada saat musyawarah Pengambil alihan HAT                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Penilaian GR 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Pada saat konsultasi Publik                                                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Saat sosialisai 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Dalam  asas keterbukaan dalam Pengadaan Tanah dalam keadaan mendesak dilakukan? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pada saat musyawarah Pengambil alihan HAT                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Penilaian GR 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Pada saat konsultasi Publik                                                          </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>D"> Saat sosialisasi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Apa perbedaan akibat penetapan lokasi pada pengadaan tanah dalam keadaan mendesak dengan penetapan lokasi pada pengadaan tanah lainnya ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pekerjaan langsung berjalan                                       </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> tanpa dokumen perencanaan  
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Menunggu hasil gugatan kalau ada                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Konsultasi publik lebih baik  
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas kesepakatan bahwa proses pengadaan tanah dilakukan dengan musyawarah para pihak tanpa unsur paksaan untuk mendapatkan kesepakatan bersama.
                        Cara memperoleh tanah yang sudah dihakki seseorang harus dilakukan melalui kata sepakat antara pihak yang bersangkutan. Asas ini menekankan bahwa prinsipnya dalam pengadaan tanah tidak diperbolehkan adanya paksaan secara sepihak agar empunya meyerahkan tanah miliknya, asas ini kontradiksi dengan dengan kegiatan pengadaan tanah pada saat ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Penetapan bentuk ganti rugi                               </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Konsyinasi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                  </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Penetapan lokasi 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimasksud dengan asas keikutsertaan adalah dukungan dalam penyelenggaraan Pengadaan Tanah melalui partisipasi masyarakat, baik secara langsung maupun tidak langsung sejak perencanaan sampai kegiatan pembangunan. Keikutsertaaan dalam pengadaan tanah akan terjadi apabila masyarakat, kegiatan ini di lakukan pada saat, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Konsyinasi                                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Konsultasi publik 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Sosialisasi                                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pengumuman daftar nominatif 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas kesejahteraan adalah bahwa Pengadaan Tanah untuk pembangunan dapat memberikan ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	memberikan UGR Yang banyak                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Kesejahteraan yang tinggi 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Nilai tambah                                                            </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Kehidupan yang lebih baik 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang diamaksud dengan asas keberlanjutan adalah kegiatan pembangunan harus dapat, kecuali  ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Teratur dan terukur                                                         </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> berkesinambungan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	untuk mencapai tujuan yang diharapkan                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> berlangsung secara terusmenerus 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Yang dimaksud dengan asas keselarasan adalah bahwa Pengadaan Tanah untuk pembangunan dapat . kecuali ? 
.                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A"> Dengan kepentingan masyarakat                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> Dengan kepentingan instansi  
                                                                    yang memerlukan tanah                             </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B"> Dengan kepentingan negara                                      </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Seimbang dan sejalan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Penerapan asas keterbukaan dalam kegiatan persiapan pengadaan tnah dilakukn dalam kegiatan-kegiatan berikut ini, kecuali ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>A">	Pemberian rekomendasi                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pengajuan keberatan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pendataan awal                          
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Pada kegiatan apa penerapan  asas kesepakatan dalam  proses persiapan pengadaan tanah dilakukan ? 
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	Pemberitahuan awal                                           </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>C"> Pengajuan keberatan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>B">	Konsultasi publik                                                </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> Pendataan awal                          
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

                <div class="col-sm-12 card">
                    <?php $n= $n + 1; ?>
                    <?php echo $n ?>. 	Gubernur menerbitkan SK tentang Penetapan Lokasi dengan berdasarkan berapa di alasan ?  
                    <div>
                        <input id="<?php echo $n ?>A" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>A">	1 alasan                                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>C" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, true)">
                        <label for="<?php echo $n ?>C"> 2 alasan 
                        </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>B" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>B">	3 alasan                                                                    </label>
                    </div>
                    <div>
                        <input id="<?php echo $n ?>D" type="radio" name="<?php echo $n ?>"
                            onclick="check(<?php echo $n ?>, false)">
                        <label for="<?php echo $n ?>D"> 4 alasan 
                        </label>
                    </div>
                    <div id="<?php echo $n ?>"></div>
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" onclick="nilai()">Check nilai </button>
    </section>
    <?php include("../footer.php") ?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo $loc; ?>aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo $loc; ?>aset/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo $loc; ?>css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $loc; ?>css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $loc; ?>css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo $loc; ?>img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style type="text/css">
        .tulisan {
          color: white;
        }
    </style>
    <script src="<?php echo $loc; ?>js/sweetalert.min.js"></script>
    <script src="<?php echo $loc; ?>script.js"></script>
    <!-- <script src="<?php echo $loc; ?>jquery-3.5.1.min.js"></script> -->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="<?php echo $loc; ?>index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="<?php echo $loc; ?>#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="<?php echo $loc; ?>#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo $loc; ?>img/user.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   <strong class="d-block">User</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="<?php echo $loc; ?>#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo $loc; ?>img/user.jpg" alt="..." class="img-fluid">
                    <div class="status away"></div>
                  </div>
                  <div class="content">   <strong class="d-block">User</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="<?php echo $loc; ?>#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo $loc; ?>img/user.jpg" alt="..." class="img-fluid">
                    <div class="status busy"></div>
                  </div>
                  <div class="content">   <strong class="d-block">User</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="<?php echo $loc; ?>#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo $loc; ?>img/user.jpg" alt="..." class="img-fluid">
                    <div class="status offline"></div>
                  </div>
                  <div class="content">   <strong class="d-block">User</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="<?php echo $loc; ?>#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
            </div>
            <!-- Tasks-->
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="<?php echo $loc; ?>#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="<?php echo $loc; ?>#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a><a href="<?php echo $loc; ?>#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                  </div></a><a href="<?php echo $loc; ?>#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                  </div></a><a href="<?php echo $loc; ?>#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="<?php echo $loc; ?>#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
              </div>
            </div>
            <!-- Tasks end-->
            <!-- Megamenu-->
            <div class="list-inline-item dropdown menu-large"><a href="<?php echo $loc; ?>#" data-toggle="dropdown" class="nav-link">Menu <i class="fa fa-ellipsis-v"></i></a>
              <div class="dropdown-menu megamenu">
                <div class="row">
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="<?php echo $loc; ?>#">Lorem ipsum dolor</a></li>
                      <li><a href="<?php echo $loc; ?>#">Sed ut perspiciatis</a></li>
                      <li><a href="<?php echo $loc; ?>#">Voluptatum deleniti</a></li>
                      <li><a href="<?php echo $loc; ?>#">At vero eos</a></li>
                      <li><a href="<?php echo $loc; ?>#">Consectetur adipiscing</a></li>
                      <li><a href="<?php echo $loc; ?>#">Duis aute irure</a></li>
                      <li><a href="<?php echo $loc; ?>#">Necessitatibus saepe</a></li>
                      <li><a href="<?php echo $loc; ?>#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="<?php echo $loc; ?>#">Lorem ipsum dolor</a></li>
                      <li><a href="<?php echo $loc; ?>#">Sed ut perspiciatis</a></li>
                      <li><a href="<?php echo $loc; ?>#">Voluptatum deleniti</a></li>
                      <li><a href="<?php echo $loc; ?>#">At vero eos</a></li>
                      <li><a href="<?php echo $loc; ?>#">Consectetur adipiscing</a></li>
                      <li><a href="<?php echo $loc; ?>#">Duis aute irure</a></li>
                      <li><a href="<?php echo $loc; ?>#">Necessitatibus saepe</a></li>
                      <li><a href="<?php echo $loc; ?>#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="<?php echo $loc; ?>#">Lorem ipsum dolor</a></li>
                      <li><a href="<?php echo $loc; ?>#">Sed ut perspiciatis</a></li>
                      <li><a href="<?php echo $loc; ?>#">Voluptatum deleniti</a></li>
                      <li><a href="<?php echo $loc; ?>#">At vero eos</a></li>
                      <li><a href="<?php echo $loc; ?>#">Consectetur adipiscing</a></li>
                      <li><a href="<?php echo $loc; ?>#">Duis aute irure</a></li>
                      <li><a href="<?php echo $loc; ?>#">Necessitatibus saepe</a></li>
                      <li><a href="<?php echo $loc; ?>#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="<?php echo $loc; ?>#">Lorem ipsum dolor</a></li>
                      <li><a href="<?php echo $loc; ?>#">Sed ut perspiciatis</a></li>
                      <li><a href="<?php echo $loc; ?>#">Voluptatum deleniti</a></li>
                      <li><a href="<?php echo $loc; ?>#">At vero eos</a></li>
                      <li><a href="<?php echo $loc; ?>#">Consectetur adipiscing</a></li>
                      <li><a href="<?php echo $loc; ?>#">Duis aute irure</a></li>
                      <li><a href="<?php echo $loc; ?>#">Necessitatibus saepe</a></li>
                      <li><a href="<?php echo $loc; ?>#">Maiores alias</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row megamenu-buttons text-center">
                  <div class="col-lg-2 col-md-4"><a href="<?php echo $loc; ?>#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="<?php echo $loc; ?>#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="<?php echo $loc; ?>#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="<?php echo $loc; ?>#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="<?php echo $loc; ?>#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="<?php echo $loc; ?>#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
                </div>
              </div>
            </div>
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
            <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="<?php echo $loc; ?>#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?php echo $loc; ?>img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
              <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="<?php echo $loc; ?>#" class="dropdown-item"> <img src="<?php echo $loc; ?>img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a><a rel="nofollow" href="<?php echo $loc; ?>#" class="dropdown-item"> <img src="<?php echo $loc; ?>img/flags/16/FR.png" alt="English" class="mr-2"><span>French  </span></a></div>
            </div>
            <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="<?php echo $loc; ?>login.html" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?php echo $loc; ?>img/user.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">User</h1>
            <p>Web</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="<?php echo $loc; ?>index.html"> <i class="icon-home"></i>Home </a></li>
                <li class="tulisan"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Konsep fenomena fisik dan manusia pada bumi </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>1_konsep_fenomena/1.php">1</a></li>
                    <li><a href="<?php echo $loc; ?>#">Page</a></li>
                    <li><a href="<?php echo $loc; ?>#">Page</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown2" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Dasar tentang prosedur penyusunan, subtansi dan pemanfaatan dasar pertanahan
                  </a>
                  <ul id="dropdown2" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>
                
                <li class="tulisan"><a href="#dropdown3" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Konsep teoritis bidang ilmu manajemen secara umum, manajemen publik, organisasi, SDM, dan keuangan
                  </a>
                  <ul id="dropdown3" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown4" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Konsep pemeliharaan lingkungan berdasarkan aturan yang berlaku demi kelangsungan hidup manusia
                  </a>
                  <ul id="dropdown4" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown5" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Konsep ilmu ukur tanah dan ilmu ukur bidang tanah dalam rangka pendaftaran hak tanah
                  </a>
                  <ul id="dropdown5" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>5_konsep_ilmu_ukur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown6" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Metode penggunaan, pengolahan dan pengumpulan data geografi
                  </a>
                  <ul id="dropdown6" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>6_metode_penggunaan/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown7" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Cara kerja sistem komputar secara umum, meliputi pengamanan sistem komputer, pengolahan citra, sejarah perkembangan komputer, dll
                  </a>
                  <ul id="dropdown7" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown8" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Konsep sebuah wilayah beserta unsur yang terkandung di dalamnya
                  </a>
                  <ul id="dropdown8" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown9" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Konsep rencana tata ruang dan wilayah NKRI
                  </a>
                  <ul id="dropdown9" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown10" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Konsep perencanaan suatu wilayah serta sarana prasarananya
                  </a>
                  <ul id="dropdown10" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown11" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Kebijakan pertanahan, penguasaan, dan penggunaan serta usaha pengadaan tanah
                  </a>
                  <ul id="dropdown11" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>11_kebijakan_pertanahan/1.php">1</a></li>
                    <li><a href="<?php echo $loc; ?>11_kebijakan_pertanahan/2.php">2</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown12" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Landreform: Tindakan dalam rangka reforma agraria indonesia
                  </a>
                  <ul id="dropdown12" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown13" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Penatagunaan tanah: peruntukan, penggunaan dan persediaan tanah secara berencana dan teratur
                  </a>
                  <ul id="dropdown13" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown14" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Pendaftaran tanah: peruntukan, penggunaan dan persediaan tanah secara berencana dan teratur
                  </a>
                  <ul id="dropdown14" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown15" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Pendaftaran tanah: pengumpulan, pengolahan, pembukuan, dan penyajian serta pemeliharaan data fisik dan data yuridis
                  </a>
                  <ul id="dropdown15" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown16" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Proses pengaturan pertanahan
                  </a>
                  <ul id="dropdown16" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li class="tulisan"><a href="#dropdown17" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>
                    Penguasaan, pemilikan, penggunaan dan pemanfaatan tanah
                  </a>
                  <ul id="dropdown17" class="collapse list-unstyled ">
                    <li><a href="<?php echo $loc; ?>2_dasar_prosedur/1.php">1</a></li>
                  </ul>
                </li>

                <li><a href="<?php echo $loc; ?>login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="<?php echo $loc; ?>#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="<?php echo $loc; ?>#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="<?php echo $loc; ?>#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      
        
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" align="center">
                    <span>
                        <img alt="image" class="img-circle" src="../img/profil.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['nama_pemilik']; ?></strong>
                         </span> <span class="text-muted text-xs block">Active<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="../a_profil/index.php">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="../keluar.php">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="../index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="../a_laporanpenjualan/index.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Laporan Penjualan</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-laptop"></i> <span class="nav-label">My Class</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="../a_jadwalpelatihan/index.php">Jadwal Pelatihan</a></li>
                    <li><a href="../a_videoedukasi/index.php">Video Edukasi</a></li>
                    <li><a href="../a_ujipengetahuan/index.php">Quiz</a></li>
                    <li><a href="../a_requestclass/index.php">Request Class</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-diamond"></i> <span class="nav-label">My Performance</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="../a_levelpartisipasi/index.php">Level Partisipasi</a></li>
                    <li><a href="../a_levelperkembangan/index.php">Level Perkembangan</a></li>
                    <li><a href="../a_summary/index.php">Summary</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-files-o"></i> <span class="nav-label">My Legal</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="../a_sertifikat/index.php">Sertifikat</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Informasi</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="../a_pinjamanbank/index.php">Pinjaman Bank</a></li>
                    <li><a href="../a_statusmitra/index.php">Status Mitra</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-picture-o"></i> <span class="nav-label">Foto Kegiatan</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="../a_fotounggulan/index.php">Foto Produk Unggulan</a></li>
                    <li><a href="index.php">Foto Main Event</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
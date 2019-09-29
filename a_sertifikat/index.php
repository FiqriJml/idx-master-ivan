<?php include "head.php" ?>
<body>
    <div id="wrapper">
    <?php include "nav.php"; ?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="">
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="../keluar.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Sertifikat</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>File</a>
                        </li>
                        <li class="active">
                            <strong>Sertifikat</strong>
                        </li>
                    </ol>
                </div><!-- 
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="search.php" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Cari Nama Anda </a>
                    </div>
                </div> -->
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content" id="ibox-content">
            <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
                <div class="vertical-timeline-block">
                    <div class="vertical-timeline-icon navy-bg">
                        <i class="fa fa-file-text"></i>
                    </div>

                    <div class="vertical-timeline-content">
                        <h2>Sudah Memiliki Sertifikat?</h2>
                        <p>
                            Silahkan upload sertifikat anda, sebagai eviden dan dasar penilaian untuk bermitra, jika nanti Anda butuh pinjaman/ atau kami ingin memberikan pinjaman kami bisa menggunakan Sertifikat Anda sebagai dasar memberikan pinjaman tersebut.
                        </p>
                        <a href="upload.php" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-upload"></i> Upload Sertifikat</a><br><hr>
                        <p><b><i>Abaikan Jika Sudah Upload File Sertifikat</i></b></p>
                        
                    </div>
                </div>
                <div class="vertical-timeline-block">
                    <div class="vertical-timeline-icon blue-bg">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <div class="vertical-timeline-content">
                        <h2>Belum Memiliki Sertifikat?</h2>
                        <p>
                            Jika Anda belum memiliki Sertifikat, Silahkan daftarkan diri untuk mendapatkan sertifikat.<br> Klik tombol Daftar dibawah.
                        </p>
                        <a href="#" class="btn btn-sm btn-success"> Daftar <i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
            
            <?php include "footer.php" ?>

        </div>
        </div>

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
    <script src="../js/plugins/iCheck/icheck.min.js"></script>
    <script src="../js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
</body>
</html>

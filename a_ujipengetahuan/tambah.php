<?php include "../koneksi.php" ?>
<?php include "head.php" ?>
<body>
    <div id="wrapper">
    <?php include "nav.php" ?>
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
                    <h2>Upload Data</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Data</a>
                        </li>
                        <li class="active">
                            <strong>Upload Data</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-triangle-left"></i> Kembali </a>
                    </div>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="col-lg-5">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">

                </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Upload Data</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="tambah_proses.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal" class="form-control" >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Subject</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="subject" class="form-control" >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">File (.PDF)</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="file" class="form-control" >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" name="simpan" type="submit"><i class="glyphicon glyphicon-save"></i> Simpan</button>
                                        <input type="hidden" name="id_ujian" value="<?php echo $cek['id_ujian'] ?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <?php include "footer.php" ?>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
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

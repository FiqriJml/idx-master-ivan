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
                    <h2>Profile</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Data</a>
                        </li>
                        <li class="active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
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
                            <h5>Data Profile</h5>
                        </div>
                        <div class="ibox-content">
                            <?php
                                include "../koneksi.php";
                                
                                $sesi = $_SESSION['id_register'];
                                $sql_profil = mysqli_query($con, "SELECT * FROM register WHERE id_register = '$sesi' ") or die(mysqli_error());
                                while($d = mysqli_fetch_array($sql_profil)){
                            ?>
                            <form action="proses.php" method="post" class="form-horizontal">
                                <input type="hidden" name="id_register" value="<?php echo $sesi; ?>">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Usaha</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_usaha" class="form-control" value="<?php echo $d['nama_usaha']; ?>" required >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Pemilik</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $d['nama_pemilik']; ?>" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nomer KTP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_ktp" class="form-control" value="<?php echo $d['no_ktp']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kategori Usaha</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="kategori_usaha" class="form-control" value="<?php echo $d['kategori_usaha']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" value="<?php echo $d['email']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nomer HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_hp" class="form-control" value="<?php echo $d['no_hp']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Desa</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="desa" class="form-control" value="<?php echo $d['desa']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kecamatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="kecamatan" class="form-control" value="<?php echo $d['kecamatan']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Provinsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="provinsi" class="form-control" value="<?php echo $d['provinsi']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" class="form-control" value="<?php echo $d['password']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" name="save" type="submit"><i class="glyphicon glyphicon-saved"></i> Update</button>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
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

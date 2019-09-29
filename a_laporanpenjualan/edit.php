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
                    <h2>Edit Laporan Bulanan</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Laporan Bulanan</a>
                        </li>
                        <li class="active">
                            <strong>Edit Laporan Bulanan</strong>
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
                            <h5>Edit Laporan Bulanan</h5>
                        </div>
                        <div class="ibox-content">
                        	
                        	<?php
                                include '../koneksi.php';
                                
                                $id_laporan = $_GET['id_laporan'];
                                $data = mysqli_query($con, "select * from laporan_bulanan where id_laporan='$id_laporan'");
                                while(@$d = mysqli_fetch_array($data)){
                            ?>

                            <form action="edit_proses.php" method="post" class="form-horizontal">
                            	<input type="hidden" name="id_laporan" value="<?php echo $id_laporan; ?>">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="nama">
                                                <option><?php echo $d['nama']; ?></option>
                                                <?php
                                                  $query = "SELECT * FROM register order by id_register desc";
                                                  $result = mysqli_query($con, $query);
                                                          
                                                  while($data = mysqli_fetch_assoc($result))
                                                  {
                                                  ?>
                                                  <option value="<?php echo $data['nama_pemilik']; ?>"><?php echo $data['nama_pemilik']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal" class="form-control" value="<?php echo $d['tanggal']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Produk</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="jenis_produk">
                                                <option><?php echo $d['jenis_produk']; ?></option>
                                                <?php
                                                  $query = "SELECT * FROM jenis_produk order by id_produk desc";
                                                  $result = mysqli_query($con, $query);
                                                          
                                                  while($data = mysqli_fetch_assoc($result))
                                                  {
                                                  ?>
                                                  <option value="<?php echo $data['jenis_produk']; ?>"><?php echo $data['jenis_produk']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Produk</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_produk" class="form-control" value="<?php echo $d['nama_produk']; ?>" >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Unit Penjualan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="unit_penjualan" class="form-control" value="<?php echo $d['unit_penjualan']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Satuan Per Unit</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="satuan" class="form-control" value="<?php echo $d['satuan']; ?>" >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Harga Per Unit</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="harga" class="form-control" value="<?php echo $d['harga']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Total Penjualan Per Produk</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="total" class="form-control" value="<?php echo $d['total']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" name="save" type="submit"><i class="glyphicon glyphicon-saved"></i> Update</button>
                                    </div>
                                </div>
                            </form>
                            <?php 
                            }
                            ?>
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

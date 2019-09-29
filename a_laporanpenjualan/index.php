<?php include "head.php" ?>
<?php include "../koneksi.php" ?>
<?php include "../notifikasi.php" ?>
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
                    <h2>Laporan Penjualan Bulanan</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Laporan</a>
                        </li>
                        <li class="active">
                            <strong>Laporan Penjualan Bulanan</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Laporan Penjualan Bulanan</h5>
                    </div>
                    <div class="ibox-title">
                        <a href="tambah.php" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Add Report</a>
                    </div>
                        
                    <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tangal</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Unit Penjualan</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('../koneksi.php');
                                
                            $query = "SELECT * FROM laporan_bulanan ORDER BY id_laporan DESC ";
                            $result = mysqli_query($con, $query);
                            if(mysqli_num_rows($result) == 0){    
                                echo '<tr><td colspan="12">Data Kosong!</td></tr>';
                            }else{ 
                                
                                $no = 1;   
                                while($data = mysqli_fetch_assoc($result))
                                {
                                
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    echo '<td>'.$data['nama'].'</td>';      
                                    echo '<td>'.$data['tanggal'].'</td>';      
                                    echo '<td>'.$data['nama_produk'].'</td>';
                                    echo '<td>'.$data['jenis_produk'].'</td>';
                                    echo '<td>'.$data['unit_penjualan'].'</td>';
                                    echo '<td>'.$data['satuan'].'</td>';
                                    echo '<td>'.$data['harga'].'</td>';
                                    echo '<td>'.$data['total'].'</td>';
                                    echo '<td>

                                    <a href="edit.php?id_laporan='.$data['id_laporan'].'" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>

                                    <a href="hapus.php?id_laporan='.$data['id_laporan'].'" onclick="return confirm(\'Apakah Yakin Ingin Menghapus Data?\')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i> </a>
                                    </td>'; 
                                    
                                    echo '</tr>';
                                    $no++;
                                }
                            }
                            ?>
                    </tbody>
                    </table>
                        </div>

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

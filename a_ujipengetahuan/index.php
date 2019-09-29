<?php include "head.php" ?>
<?php include "../koneksi.php" ?>
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
                    <h2>Uji Pengetahuan</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Ujian</a>
                        </li>
                        <li class="active">
                            <strong>Uji Pengetahuan</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Download File Pengetahuan</h5>
                    </div>
                    <div class="ibox-title">
                        <a href="tambah.php" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Upload Data</a>
                    </div>
                        
                    <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tangal</th>
                        <th>Keterangan</th>
                        <th>File</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('../koneksi.php');
                            
                            $query = "SELECT * FROM ujian ORDER BY id_ujian desc ";
                            $result = mysqli_query($con, $query);
                            if(mysqli_num_rows($result) == 0){    
                                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                            }else{ 
                                
                                $no = 1;
                                while($data = mysqli_fetch_array($result))
                                {
                                
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';    
                                    echo '<td>'.$data['tanggal'].'</td>';      
                                    echo '<td>'.$data['keterangan'].'</td>';
                                    echo '<td>'.$data['nama_file'].'</td>';
                                    echo '<td>

                                    <a href="../img/ujian/'.$data['nama_file'].'" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Download</a>
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

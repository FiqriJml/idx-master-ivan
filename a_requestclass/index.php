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
                    <h2>Reques Class</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Class</a>
                        </li>
                        <li class="active">
                            <strong>Reques Class</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Reques Class</h5>
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
                        <th>Tanggal</th>
                        <th>Kelas</th>
                        <th>Lainya</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('../koneksi.php');

                            $sesi = $_SESSION['id_register'];
                            $query = "SELECT * FROM rekues_kelas WHERE id_rekues = '$sesi' ";
                            $result = mysqli_query($con, $query);
                            if(mysqli_num_rows($result) == 0){    
                                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                            }else{ 
                                
                                $no = 1;   
                                while($data = mysqli_fetch_assoc($result))
                                {
                                
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    echo '<td>'.$data['nama'].'</td>';
                                    echo '<td>'.$data['tanggal'].'</td>';
                                    echo '<td>'.$data['kelas'].'</td>';
                                    echo '<td>'.$data['lainya'].'</td>';
                                    
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

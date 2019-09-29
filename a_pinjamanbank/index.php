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
                    <h2>Informasi Pinjaman Dana</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Informasi</a>
                        </li>
                        <li class="active">
                            <strong>Informasi Pinjaman Dana</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="wrapper wrapper-content">
            <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="mail-box-header">
                    <h2>
                        Informasi Pinjaman Dana
                    </h2>
                </div>
                <div class="mail-box">
                
                <div class="ibox-content">
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Informasi</th>
                        <th>Link</th>
                    </tr>
                    </thead>
                    <?php
                        include "../koneksi.php";
                        $query = mysqli_query($con, "SELECT * FROM info_pinjaman ORDER BY id_pinjaman DESC");
                        
                        if(mysqli_num_rows($query) > 0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                    <tbody>

                        <td><?php echo $no ?></td>
                        <td><?php echo $data["judul"];?></td>
                        <td><?php echo substr($data["judul"],0,200) ;?>...</td>
                        <td><a href="<?php echo $data["link"];?>" target="_blank"><span class="btn btn-primary">Read More</span> </a></td>
                    
                    </tbody>
                    <?php $no++; } ?> <?php } ?>
                </table>
                </div>
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

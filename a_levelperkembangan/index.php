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
                    <h2>Level Perkembangan</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Level</a>
                        </li>
                        <li class="active">
                            <strong>Level Perkembangan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="search.php" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Cari Nama Anda </a>
                    </div>
                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <?php
                include "../koneksi.php";
                $query = mysqli_query($con, "SELECT * FROM level_perkembangan ORDER BY id_level ASC");
                
                if(mysqli_num_rows($query) > 0){ 
                $no = 1;
                while($data = mysqli_fetch_array($query)){
                ?>
                <div class="col-lg-3">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h5><?php echo $data["nama"];?></h5>
                            <h1 class="no-margins"><?php echo $data["level_perkembangan"];?></h1><hr>
                            <div class="stat-percent font-bold text-navy"><?php echo $no ?></div>
                            <small>Nilai Berdasarkan Quiz</small>
                        </div>
                    </div>
                </div>
                <?php $no++; } ?> <?php } ?>
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

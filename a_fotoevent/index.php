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
                    <h2>Foto Event</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Foto</a>
                        </li>
                        <li class="active">
                            <strong>Foto Event</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <?php 
                    include "data-event.php"; 
                    foreach ($data_event as $event) :
                ?>
                <div class="col-md-3">
                  <div class="thumbnail">
                    <a href="#" target="_blank">
                      <img src="../img/foto/<?php echo $event['foto'];?>" alt="Lights" style="width:100%">
                    </a>
                  </div>
                </div>
                <?php endforeach; ?>
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
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
    <script src="../js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
</body>
</html>

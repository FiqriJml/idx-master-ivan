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
                <div class="col-lg-10">
                    <h2>Edit User</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>User</a>
                        </li>
                        <li class="active">
                            <strong>Edit User</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

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
                            <h5>Edit User</h5>
                        </div>
                        <div class="ibox-content">
                        	
                        	<?php
                                include '../koneksi.php';
                                
                                $id = $_GET['id'];
                                $data = mysqli_query($con, "select * from user where id='$id'");
                                while($d = mysqli_fetch_array($data)){
                            ?>

                            <form action="edit_proses.php" method="post" class="form-horizontal">
                            	<input type="hidden" name="id" value="<?php echo $id; ?>">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>" >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="password" class="form-control" value="<?php echo $d['password']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" name="save" type="submit"><i class="glyphicon glyphicon-saved"></i> Update</button>
                                        <a href="index.php" type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Cencel</a>
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

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>
</html>

<?php
    include "koneksi.php";
    // include "notifikasi.php";
?>
<?php include "head.php" ?>
<body>
    <div id="wrapper">
        
        <?php include "nav.php" ?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="">

            </form>
        </div>
          <ul class="nav navbar-top-links navbar-right">
              <li>
                  <a href="keluar.php">
                      <i class="fa fa-sign-out"></i> Log out
                  </a>
              </li>
          </ul>

        </nav>
        </div>
        <div class="row  border-bottom white-bg dashboard-header">
            <div class="col-md-12">
                <h2>Selamat Datang <b><?php echo $_SESSION['nama_pemilik']; ?></b></h2>
                <h4><i>Rumah Kreatif BUMN</i></h4>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                              <span class="label label-primary pull-right">Sukses</span>
                              <h5>Kredit Perorangan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">10.000</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total Kredit Perorangan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                              <span class="label label-success pull-right">Sukses</span>
                              <h5>Kredit Perusahaan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">10.000</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total Kredit Perusahaan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                              <span class="label label-warning pull-right">Sukses</span>
                              <h5>Cash Perorangan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">10.000</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total Cash Perorangan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                              <span class="label label-danger pull-right">Sukses</span>
                              <h5>Cash Perusahaan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">10.000</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total Cash Perusahaan</small>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    
                                </div>
                            </div>
                        </div>


                        </div>
                </div>
                <?php include "footer.php" ?>
            </div>
        </div>

        </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/demo/sparkline-demo.js"></script>
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4625583-2', 'webapplayers.com');
        ga('send', 'pageview');

    </script>

    <script>
        $(document).ready(function(){
         
         function load_unseen_notification(view = '')
         {
          $.ajax({
           url:"fetch.php",
           method:"POST",
           data:{view:view},
           dataType:"json",
           success:function(data)
           {
            $('.dropdown-menu').html(data.notification);
            if(data.unseen_notification > 0)
            {
             $('.count').html(data.unseen_notification);
            }
           }
          });
         }
         
         load_unseen_notification();
         
         $('#notifikasi').on('submit', function(event){
          event.preventDefault();
          if($('#nama').val() != '' && $('#jenis_mobil').val() != '')
          {
           var form_data = $(this).serialize();
           $.ajax({
            url:"insert.php",
            method:"POST",
            data:form_data,
            success:function(data)
            {
             $('#notifikasi')[0].reset();
             load_unseen_notification();
            }
           });
          }
          else
          {
           alert("Both Fields are Required");
          }
         });
         
         $(document).on('click', '.dropdown-toggle', function(){
          $('.count').html('');
          load_unseen_notification('yes');
         });
         
         setInterval(function(){ 
          load_unseen_notification();; 
         }, 5000);
         
        });
    </script>
</body>
</html>

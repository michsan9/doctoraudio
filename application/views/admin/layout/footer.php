<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>





  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>asset/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>asset/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>asset/js/demo/chart-area-demo.js"></script>
  
  <script src="<?php echo base_url() ?>asset/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>asset/js/demo/datatables-demo.js"></script>
  <script type="text/javascript">
    
  </script>

  <script>
  initSample();
</script> 
<script type="text/javascript">


  Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Stok Produk'
    },
    subtitle: {
        text: 'Source: Doctor Audio'
    },
    
    xAxis: {
      <?php 
$cart = $this->produk_model->listing(); ?>
<?php foreach ($cart as $cart) {
$satu[]= $cart->nama_produk; ?>
        categories: <?php echo json_encode($satu) ?>,
         <?php } ?>
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
 
    yAxis: {
        title: {
            text: 'Billions'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: ' '
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
 
    series: [{
        name: 'Produk',
        <?php 
$carte = $this->produk_model->listing(); ?>
<?php foreach ($carte as $carte) {
$satua[]= intval($carte->stok); ?>
        
         
        data: <?php echo json_encode($satua) ?>,
        <?php } ?>
    }]
});

</script>

</body>

</html>
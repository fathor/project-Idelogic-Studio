
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h3 class="panel-title">Halaman Utama [<?php echo $this->session->userdata('nama')  ?>]</h3>
              <p class="panel-subtitle">Tanggal : <?php echo date('Y-m-d'); ?></p>
            </div>
            <div class="panel-body">
              <div class="row">
              </div>
            </div>
          </div>
          <!-- END OVERVIEW -->
        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; <?php echo date('Y'); ?> ~ Fathor Rohman</p>
      </div>
    </footer>
  </div>
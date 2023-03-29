     <div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $this->session->userdata('nama') ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>login/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <?php if ($this->session->userdata('kategori') == 'admin'): ?>
              <li><a href="<?php echo base_url(); ?>home"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
              <li><a href="<?php echo base_url(); ?>soal2/index"><i class="lnr lnr-list"></i> <span>Soal 2</span></a></li>
              <li><a href="<?php echo base_url(); ?>soal3/index"><i class="lnr lnr-list"></i> <span>Soal 3</span></a></li>
              <li><a href="<?php echo base_url(); ?>rest_api/test"><i class="lnr lnr-list"></i> <span>Rest Api</span></a></li>
              <li><a href="<?php echo base_url(); ?>pwa/index"><i class="lnr lnr-list"></i> <span>PWA</span></a></li>
            <?php endif ?>            
            <?php if ($this->session->userdata('kategori') == 'user'): ?>
              <li><a href="<?php echo base_url(); ?>home"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <?php endif ?>
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
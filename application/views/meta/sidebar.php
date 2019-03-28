<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="dashboard.html">
          <h1 align="center" style="color: #E4725E">PT. Ficomindo</h1>
        </a>
        <div class="ml-auto">
          
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'home' ? 'active' : '' ?>" href="<?= site_url('/')?>">
                <i class="ni ni-shop text-primary"></i>
                Company
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'home' ? 'active' : '' ?>" href="<?= site_url('welcome/list_data')?>">
                <i class="ni ni-ungroup text-orange"></i>
                Data
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'home' ? 'active' : '' ?>" href="<?= site_url('welcome/report')?>">
                <i class="ni ni-single-copy-04 text-pink"></i>
                Report
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
        </div>
      </div>
    </div>
  </nav>
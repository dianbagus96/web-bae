<!DOCTYPE html>
<html>
{header}

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  {sidebar}
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          
          <!-- Navbar links -->
          
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <?php if($this->uri->segment(1) == 'schedule'){ ?>
    <!-- Header -->
    <div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6">
              <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Full calendar</h6>
              <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
              <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                <i class="fas fa-angle-left"></i>
              </a>
              <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                <i class="fas fa-angle-right"></i>
              </a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Month</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Week</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Day</a>
            </div>
          </div>
          {content}
        </div>
        
      </div>
      
    </div>
    
    <?php }else{ ?>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">BAE</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
              </nav>
            </div>
            <!--
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
  -->
          </div>
          <!-- Card stats -->
          {content}
      </div>
    <?php } ?>
      <!-- Footer -->
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url() ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
  <?php if($this->uri->segment(1) != 'home'){ ?>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="<?= base_url()?>/assets/vendor/select2/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/select2/dist/css/select2.min.css">
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <?php if($this->uri->segment(1) == 'schedule'){ ?>
      <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/fullcalendar/dist/fullcalendar.min.css">
      <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
      <script src="<?= base_url()?>/assets/vendor/moment/min/moment.min.js"></script>
      <script src="<?= base_url()?>/assets/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
      <script src="<?= base_url()?>/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <?php } ?>
  <?php }else{ ?>
    <!-- Optional JS -->
    <script src="<?= base_url() ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <?php } ?>
  <!-- Argon JS -->
  <script src="<?= base_url() ?>/assets/js/argon.mine209.js?v=<?= date('YmdHis')?>"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url() ?>/assets/js/demo.min.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jan 2019 07:47:38 GMT -->
</html>
<?php 
error_reporting(0);
?>

<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Rapat Umum Pemegang Saham</h3>
              
            </div>
            
            <div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Form Company</h3>
    </div>
    
      
    <form method="post" action="<?= site_url('welcome/upload') ?>" enctype='multipart/form-data'>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <label class="form-control-label" for="example3cols1Input">Perusahaan</label>
                <div class="col-md-6">
                    <div class="form-group">
                      <select name="id">
                        <?php 
                        foreach($list as $row){
                          echo "<option value='".$row['id']."'>".$row['nama']."</option>";
                        }
                        ?>
                      </select> &nbsp;
                      <a href="<?= site_url('welcome/perusahaan') ?>">tambah perusahaan</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="form-control-label" for="example3cols1Input">Input File (.xls)</label>
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <button id="submit" class="btn btn-primary" type="submit">
                Upload Data
            </button>
        </div>
    </form>
</div>
          </div>    
        </div>
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
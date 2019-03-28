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
              <h3 class="mb-0">Data Company</h3>
              
            </div>
            
            <div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Form Input Company</h3>
    </div>
    
      
    <form method="post" action="<?= site_url('welcome/action/addPerusahaan');?>">
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <label class="form-control-label" for="example3cols1Input">Perusahaan</label>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="FORM[nama]"/>
                    </div>
                </div>
            </div>
            <button id="submit" class="btn btn-primary" type="submit">
                Save Data
            </button>
        </div>
    </form>
    
</div>
<div style="margin-left: 50px; padding-bottom: 20px;">
<h2>List Perusahaan</h2>
<table>
    <tr>
        <th>No</th>
        <th style="padding-left: 20px;">Nama</th>
        <!--<th>Action</th>-->
    </tr>
    <?php 
        $i = 1;
        foreach($list as $row){
    ?>
    <tr>
        <td><?= $i ?></td>
        <td style="padding-left: 20px;"><?= $row['nama'] ?></td>
        <!--<td><a href="#">edit</a> | <a href="#">delete</a></td>-->
    </tr>
    <?php 
        $i++;
        }
    ?>
</table>
</div>
          </div>    
        </div>
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



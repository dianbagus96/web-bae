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
              <h3 class="mb-0">List Investor</h3>
              
            </div>
            
            <div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Data Investor</h3>
    </div>
    
      
    <form method="post" action="<?= site_url('welcome/list_data')?> ">
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
                      
                    </div>
                </div>
            </div>
            <button id="submit" class="btn btn-primary" type="submit">
                Show Data
            </button>
        </div>
    </form>
    
</div>
<?php 
if($_POST){
    
?>
<form method="post" action="<?= site_url('welcome/selected/'.$id) ?>" style="margin-left: 50px">
<h2>List Investor</h2>
<button>Selected Absen <?= date('d/m/Y')?></button>
<button name="all" value="<?= $id ?>">Absen All <?= date('d/m/Y')?></button>
<br/>
<br/>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Absen</th>
        <th>Action</th>
    </tr>
    <?php 
        $i = 1;
        foreach($investor as $row){
    ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row['nama'] ?></td>
        <td><input name="absen[]" value="<?= $row['id'] ?>" type="checkbox" <?= $row['absen'] != date('d/m/Y') ? '' : 'checked' ?>  /></td>
        <td><a href="<?= site_url('welcome/investor/'.$row['id']); ?>">view</a> | <a href="<?= site_url('welcome/delInvestor/'.$row['id']); ?>">delete</a></td>
    </tr>
    <?php 
        $i++;
        }
    ?>
</table>
</form>
<?php
}
?>
          </div>    
        </div>
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
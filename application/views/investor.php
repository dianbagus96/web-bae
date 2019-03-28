
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
              <h3 class="mb-0">Investor Detail</h3>
              
            </div>
            
            <div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Form Investor</h3>
    </div>
    
      
    <form method="post" action="<?= site_url('welcome/updateData') ?>">
        <!-- Card body -->
        <div class="card-body">
        <input type="hidden" name="FORM[id]" value="<?= $person->id ?>">
    <table>
        
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="FORM[nama]" value="<?= $person->nama ?>"></td>
        </tr>
        <tr>
            <td>Alamat 1</td>
            <td>:</td>
            <td>
                <textarea name="FORM[alamat_1]">
                    <?= $person->alamat_1 ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Alamat 2</td>
            <td>:</td>
            <td>
                <textarea name="FORM[alamat_2]">
                    <?= $person->alamat_2 ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="FORM[kota]"></td>
        </tr>
        <tr>
            <td>L/A</td>
            <td>:</td>
            <td>
                <select name="FORM[la]">
                    <option value="L">L</option>
                    <option value="A">A</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type="text" value="<?= $person->status ?>" name="FORM[status]"></td>
        </tr>
        <tr>
            <td>Jumlah Saham</td>
            <td>:</td>
            <td><input type="text" value="<?= $person->jml_saham ?>" name="FORM[jml_saham]"></td>
        </tr>
        <tr>
            <td>Persen</td>
            <td>:</td>
            <td><input type="text" value="<?= $person->persen ?>" name="FORM[persen]"></td>
        </tr>
        <tr>
            <td>Code</td>
            <td>:</td>
            <td><input type="text" value="<?= $person->kode ?>" name="FORM[kode]"></td>
        </tr>
       
    </table>

            <button style="margin-top:40px;" id="submit" class="btn btn-primary" type="submit">
                Upload Data
            </button>
        </div>
    </form>
</div>
          </div>    
        </div>
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


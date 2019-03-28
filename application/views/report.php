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
              <h3 class="mb-0">Report Investor</h3>
              
            </div>
            
            <div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Generate Report PDF</h3>
    </div>
    
      
    <form method="post" action="<?= site_url('welcome/report_list')?> ">
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
                Generate PDF
            </button>
        </div>
    </form>
    
</div>
          </div>    
        </div>
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php 
    if($_POST){
        
?>
<table style="margin-top: 50px">
    <tr>
        <td>Ficomindo Buana Registar</td>
    </tr>
    <tr>
        <td>Jl. Jend Sudirman Kav. 28 LT.10/2B</td>
    </tr>
    <tr>
        <td>Jakarta</td>
    </tr>
</table>
<table width="1080px" border="1" >
    <tr align="center">
        <td colspan="4"><?= strtoupper($perusahaan) ?></td>
    </tr>
    <tr align="center">
        <td colspan="4">SHARED HOLDERS MASTER LIST</td>
    </tr>
    <tr >
        <td style="">PAID UP CAPITAL : <?= $paid ?></td>
        <td></td>
        <td></td>
        <td  align="right">AS DATE: <?= date("d/m/Y") ?></td>
    </tr>
    <tr>
        <td  align="right"><b>No</b></td>
        <td><b>Nama Address</b></td>
        <td><b>Jumlah Saham</b></td>
        <td><b>Percent<hr/></b></td>
    </tr>
    <table><tr><td style ="border-bottom:2px solid black; width:100%;"> </td></tr></table>
    <?php 
    $i = 1;
    foreach($investor as $row){
    ?>
    <tr>
        <td align="right"><?= $i ?> &nbsp;</td>
        <td>
            <?= $row['nama'] ?>
            <br/>
            <?= $row['alamat_1'] ?>
            <br/>
            <?= $row['alamat_2'] ?>
        </td>
        <td>
        <?= $row['jml_saham'] ?>
        </td>
        <td>
        <?= $row['persen'] ?>
        </td>
    </tr>
    <?php 
    $i++;
    }
    ?>
    <tr>
        <td>Total Member </td>
        <td>: <?= $i-1?></td>
    </tr>
    <tr>
        <td>Total Amount </td>
        <td>: <?= $paid ?></td>
    </tr>
    <tr>
        <td>Percentase </td>
        <td>: <?= substr($persen, 0, 6) ?> %</td>
    </tr>
    <tr>
    <td  align="center">
        FICOMINDO (BAE)
        <br/>
        <br/>
        <br/>
        <br/>
        ( &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; )
    </td>
    <td></td>
    <td></td>
    <td align="center">
        NOTARIS
        <br/>
        <br/>
        <br/>
        <br/>
        ( &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; )
    </td>
    </tr>
</table>
<?php 
}
?>


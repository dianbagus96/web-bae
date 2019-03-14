<div>
    <a href="<?= site_url('/')?>">home</a> | <a href="<?= site_url('welcome/list_data'); ?>">list data</a> | <a href="<?= site_url('welcome/report') ?>"><b>report</b></a>
  </div>
<form method="post" action="<?= site_url('welcome/report_list')?> ">
    <table>
        <tr>
            <td colspan="4"> 
                <h1>Report Investor</h1>
            </td>
        </tr>
        
        <tr>
            <td>nama perusahaan</td>
            <td>:</td>
            <td>
                <select name="id">
                    <?php 
                        foreach($list as $row){
                            echo "<option value='".$row['id']."'>".$row['nama']."</option>";
                        }
                    ?>
                </select>
            </td>
            <td></td>
            <td></td>
            <td>
                <input type="submit" value="Show">
            </td>
        </tr>
    </table>
</form>
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
<table width="1080px" border="0">
    <tr align="center">
        <td colspan="4"><?= strtoupper($perusahaan) ?></td>
    </tr>
    <tr align="center">
        <td colspan="4">SHARED HOLDERS MASTER LIST</td>
    </tr>
    <tr>
        <td >PAID UP CAPITAL : <?= $paid ?></td>
        <td></td>
        <td></td>
        <td  align="right">AS DATE: <?= date("d/m/Y") ?></td>
    </tr>
    <tr>
        <td  align="right"><b>No</b></td>
        <td><b>Nama Address</b></td>
        <td><b>Jumlah Saham</b></td>
        <td><b>Percent</b></td>
    </tr>
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
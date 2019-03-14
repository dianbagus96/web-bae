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
<table width="100%" border="0">
    <tr align="center">
        <td  >
            <th align="center">
                <?= strtoupper($perusahaan) ?>
            </th>
        </td>
    </tr>
    <tr align="center">
        <td >
            <th align="center">
            SHARED HOLDERS MASTER LIST
            </th>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2" >PAID UP CAPITAL : <?= $paid ?></td>
        
        <td colspan="2" >AS DATE: <?= date("d/m/Y") ?></td>
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
        <td>&nbsp;</td>
    </tr>
    
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
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
    <td style="margin-top:50px"  align="center">
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
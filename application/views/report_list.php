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
<table width="100%" cellspacing="0">
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
        <td style="border-bottom: 2px solid black" colspan="2" >PAID UP CAPITAL : <?= number_format($paid, 0); ?></td>
        
        <td style="border-bottom: 2px solid black" colspan="2" >AS DATE: <?= date("d/m/Y") ?></td>
    </tr>
    <tr>
        <td style="border-bottom: 2px solid black"  align="right"><b>No</b></td>
        <td style="border-bottom: 2px solid black"><b>Nama Address</b></td>
        <td style="border-bottom: 2px solid black"><b>Jumlah Saham</b></td>
        <td style="border-bottom: 2px solid black"><b>Percent</b></td>
    </tr>
    <?php 
    $i = 1;
    $persentage=0;
    $paids=0;
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
    $persentage = $persentage+ $row['persen'];
    $paids=$paids+$row['jml_saham'];
    $i++;
    }
    ?>

    <tr>
        <td  style="border-bottom: 2px solid black">&nbsp;</td>
        <td style="border-bottom: 2px solid black"></td>
        <td style="border-bottom: 2px solid black"></td>
        <td style="border-bottom: 2px solid black"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    
    <tr>
        <td>Total Member </td>
        <td>: <?= $i-1?></td>
    </tr>
    <tr>
        <td>Total Amount </td>
        <td>: <?= number_format($paids, 0) ?></td>
    </tr>
    <tr>
        <td>Percentase </td>
        <td>: <?= substr($persentage, 0, 6) ?> %</td>
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
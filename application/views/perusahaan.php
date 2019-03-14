<a href="<?= site_url('/') ?>">home</a> | Input Perusahaan</a>
<form method="post" action="<?= site_url('welcome/action/addPerusahaan');?>">
    <table>
        <tr>
            <td colspan="4"> 
                <h1>Form Input perusahaan</h1>
            </td>
        </tr>
        <tr>
            <td>nama perusahaan</td>
            <td>:</td>
            <td><input type="text" name="FORM[nama]"/></td>
        </tr> 
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit"/></td>
        </tr>
    </table>
</form>
<h2>List Perusahaan</h2>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <!--<th>Action</th>-->
    </tr>
    <?php 
        $i = 1;
        foreach($list as $row){
    ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row['nama'] ?></td>
        <!--<td><a href="#">edit</a> | <a href="#">delete</a></td>-->
    </tr>
    <?php 
        $i++;
        }
    ?>
</table>

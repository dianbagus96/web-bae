<div>
    <a href="<?= site_url('/')?>">home</a> | <a href="<?= site_url('welcome/list_data'); ?>"><b>list data</b></a> | <a href="<?= site_url('welcome/report') ?>">report</a>
  </div>
<form method="post" action="<?= site_url('welcome/list_data')?> ">
    <table>
        <tr>
            <td colspan="4"> 
                <h1>List Investor</h1>
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
<form method="post" action="<?= site_url('welcome/selected') ?>">
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
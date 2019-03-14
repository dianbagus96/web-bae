<a href="<?= site_url('welcome')?>">home</a> | <a href="<?= site_url('welcome/list_data'); ?>">list data</a> | <a >detail investor</a>
<form method="post" action="<?= site_url('welcome/updateData') ?>">
    <input type="hidden" name="FORM[id]" value="<?= $person->id ?>">
    <table>
        <tr>
        <td colspan="4"> 
        <h2>Form Investor</h2>
        </td>
        </tr>
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
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
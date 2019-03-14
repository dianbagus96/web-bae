<html>

<body>
  <div>
    <a href="<?= site_url('/')?>"><b>home</b></a> | <a href="<?= site_url('welcome/list_data'); ?>">list data</a> | <a href="<?= site_url('welcome/report') ?>">report</a>
  </div>
  <form method="post" action="<?= site_url('welcome/upload') ?>" enctype='multipart/form-data'>
  <table>
    <tr>
      <td colspan="4"> 
      <h1>Rapat Umum Pemegang Saham</h1>
      </td>
    </tr>
    <tr>
      <td>Perusahaan</td>
      <td>:</td>
      <td>
        <select name="id">
          <?php 
          foreach($list as $row){
            echo "<option value='".$row['id']."'>".$row['nama']."</option>";
          }
          ?>
        </select> &nbsp;
        <a href="<?= site_url('welcome/perusahaan') ?>">tambah perusahaan</a>
      </td>
    </tr>
    <tr>
      <td>Input File (.xls)</td>
      <td>:</td>
      <td>
        <input type="file" name="file" />
      </td>
    </tr>
    <tr>
          <td></td>
          <td></td>
          <td><input type="submit"></td>
    </tr>
  </table>
  </form>
</body>
</html>
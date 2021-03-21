<?php
require_once 'header.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

<form method="GET" action="nilai_siswa.php">
<legend>Form Nilai Siswa</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama :</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM :</label>  
  <div class="col-md-2">
  <input id="nim" name="nim" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matkul">Mata Kuliah :</label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
      <option value="DDP">Dasar-Dasar Pemrograman</option>
      <option value="BD1">Basis Data 1</option>
      <option value="WEB1">Pemrograman Web 1</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS :</label>  
  <div class="col-md-2">
  <input id="nilai_uts" name="nilai_uts" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS :</label>  
  <div class="col-md-2">
  <input id="nilai_uas" name="nilai_uas" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas/Praktikum :</label>  
  <div class="col-md-2">
  <input id="nilai_tugas" name="nilai_tugas" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-4">
    <button id="proses" name="proses" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>

</form>
</html>
<?php
require_once 'footer.php';
?>
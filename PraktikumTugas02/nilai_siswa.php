<?php
require_once 'libfungsi.php';
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$nim = $_GET['nim'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
$nilai_akhir = ($nilai_tugas * 35 / 100) + ($nilai_uas * 35 / 100) + ($nilai_uts * 30 / 100);

$kelulusan = Kelulusan($nilai_akhir);
$grade = Grade($nilai_akhir);
$predikat = Predikat($grade);

?>

<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
    <?php
    echo $nama_siswa;
    echo '<tr><td>'.'NIM'.'</td>';
    echo '<td>'.$nim.'</td></tr>';
    echo '<tr><td>'.'Matkul'.'</td>';
    echo '<td>'.$mata_kuliah.'</td></tr>';
    echo '<tr><td>'.'UTS'.'</td>';
    echo '<td>'.$nilai_uts.'</td></tr>';
    echo '<tr><td>'.'UAS'.'</td>';
    echo '<td>'.$nilai_uas.'</td></tr>';
    echo '<tr><td>'.'Tugas'.'</td>';
    echo '<td>'.$nilai_tugas.'</td></tr>';
    echo '<tr><td>'.'Kelulusan'.'</td>';
    echo '<td>'.$kelulusan.'</td></tr>';
    echo '<tr><td>'.'Grade'.'</td>';
    echo '<td>'.$grade.'</td></tr>';
    echo '<tr><td>'.'Predikat'.'</td>';
    echo '<td>'.$predikat.'</td></tr>';
    ?>
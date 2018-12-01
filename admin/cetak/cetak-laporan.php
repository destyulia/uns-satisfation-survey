<?php
session_start();
include '../view/ceksession.php';
$role = $_SESSION['role'] ;
include '../koneksi.php';

header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 



                if($role== 'adminpusat'){
                  $admin  =   mysql_query("SELECT * FROM user1");
                 }else if ($role == 'adminfak'){
                  $kode = $_SESSION['kode'];
                  $admin  =   mysql_query("SELECT * FROM user1 where penyelenggara = '$kode'");
                 }

    header("content-disposition: attachment;filename=cetak_survey.xls");




echo '';
$no = 1;

echo '<table align="center" border="1">
<tbody>
  <tr>
   <td style="background: #EEE; font-weight: bold;">No.</td>
   <td style="background: #EEE; font-weight: bold;">Nama Kegiatan</td>
   <td style="background: #EEE; font-weight: bold;">Penyelenggara</td>
   <td style="background: #EEE; font-weight: bold;">Tempat Kegiatan</td>
   <td style="background: #EEE; font-weight: bold;">hari/tanggal</td>
   
   <td style="background: #EEE; font-weight: bold;">Asal Mahasiswa</td>
   <td style="background: #EEE; font-weight: bold;">Saran</td>
   ';
  $admin1  =   mysql_query("SELECT * FROM pertanyaan");
                    $i = 1;                                    
                    while ($row1=mysql_fetch_array($admin1)) {
  echo'
 <td style="background: #EEE; font-weight: bold;">'.$row1['pertanyaan'].'</td>
 ';
                    }

   echo'
 </tr>
 ';
 while($data=mysql_fetch_array($admin)){

$id_user = $data['id'];
  echo'<tr>
  <td>' . $no++ . '.</td>
  <td>' . $data['nama_kegiatan'] . '</td>
  <td>' . $data['penyelenggara'] . '</td>
  <td>' . $data['tempat_kegiatan'] . '</td>
  <td>' . $data['hari/tanggal'] . '</td>
  <td>' . $data['kota_asal'] . '</td>
  
  <td>' . $data['saran'] . '</td>';
 $admin1  =   mysql_query("SELECT * FROM detail_kuisioner a join jawaban b on a.jawaban = b.id_jawaban where a.id_user = '$id_user' ");
                    $i = 1;                                    
                    while ($row1=mysql_fetch_array($admin1)) {
  echo'
 <td style="background: #EEE; font-weight: bold;">'.$row1['kode'].'</td>
 ';
                    }
echo '</tr>';
}

echo' </tbody></table>
';
?>

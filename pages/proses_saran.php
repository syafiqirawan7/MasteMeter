<?php 
require "../config/koneksi.php"; 
  
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan= $_POST['pesan'];
$komunikasi=$_POST['komunikasi'];
$keramahan=$_POST['keramahan'];
$ketelitian=$_POST['ketelitian'];

$query = "insert into saran(id_saran, nama, email, pesan, komunikasi, keramahan, ketelitian) values(NULL,'$nama', '$email', '$pesan', '$komunikasi', '$keramahan', '$ketelitian')" ;
$hasil = mysql_query($query);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Terimakasih Atas Kritik dan Saran Anda Yang Telah Anda Berikan');
document.location='../index.php'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Kritik dan Saran Gagal Dikirim');
document.location='../index.php'</script><?php }
?>
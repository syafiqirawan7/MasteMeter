<?php
include "config/koneksi.php";
?>
<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Master Meter - Direktorat Metrologi</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Selamat datang di Master Meter - Direktorat Metrologi</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 081223445667</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 08.00 - 17:00 (Senin-Jumat)</span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    
                    <!-- lOGO TEXT HERE -->
                    
                    <a href="index.html" class="navbar-brand">
                         <img src="images/logo1.png"  style="float:left" width="40" height="40">Direktorat Metrologi Bandung</a>
                    
                    </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Tentang Kami</a></li>
                         <li><a href="#appointment" class="smoothScroll">Pendaftaran</a></li>
                         <li><a href="#saran" class="smoothScroll">Kritik dan Saran</a></li>
                         <li class="appointment-btn"><a href="login.php">Login Admin</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Percayakan Noda Kendaraan Bersama Kami</h3>
                                             <h1>Hugo - Car Wash</h1>
                                             <a href="#about" class="section-btn btn btn-default smoothScroll">Tentang Kami</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Direktorat Metrologi Bandung</h3>
                                             <h1>Master Meter</h1>
                                             <a href="#appointment" class="section-btn btn btn-default btn-gray smoothScroll">Daftar Sekarang</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Dan Berikan Masukan Kepada Kami</h3>
                                             <h1>Kepuasan Anda Adalah Semangat Kami</h1>
                                             <a href="#saran" class="section-btn btn btn-default btn-blue smoothScroll">Kirim Saran</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Tentang Kami</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Deskripsi perusahaan/kegiatan</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Bersih</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Kilat</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Wangi</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Puas</h3>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>

<?php
date_default_timezone_set('Asia/Jakarta');
$tgl_pendaftaran = date("Y-m-d");
$queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$tgl_pendaftaran'");
$htg = mysql_num_rows($queryy);

$next = $htg + 1;

$no_antrian = $tgl_pendaftaran . '/' . $next;

$hitung = mysql_query("SELECT max(id_customer) as id_terakhir from customer");
$cari = mysql_fetch_array($hitung);
$id_lanjut = $cari['id_terakhir'] + 1;

?>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">



                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="pages/proses_pendaftaran.php">
                              <input type="hidden" class="form-control" id="nama" name="id_customer" value="<?=$id_lanjut;?>">
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Pendaftaran</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Perusahaan Pemiik</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perusahaan" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Merk</label>
                                        <input type="text" class="form-control" id="email" name="nomor_plat" placeholder="Merk" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Serial Number</label>
                                        <input type="text" class="form-control" id="email" name="serialnumber" placeholder="Serial Number" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Jumlah Kapasitas(lpm)</label>
                                        <input type="number" class="form-control" id="email" name="kapasitas" placeholder="Jumlah Kapasitas" required="">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Penanggungjawab</label>
                                        <input type="text" class="form-control" id="email" name="serialnumber" placeholder="Nama Penanggungjawab" required="">
                                   </div>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">No. Antrian</label>
                                        <input type="text" class="form-control-rounded form-control" value="<?php echo $next; ?>" required="" readonly name="next">
                                            <input type="hidden" name="no_antrian" class="form-control-rounded form-control" value="<?php echo $no_antrian; ?>" required="" readonly>
                                   </div>


                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Tanggal Pendaftaran</label>
                                        <input type="date" class="form-control" id="email" name="tgl_pendaftaran" value="<?=$tgl_pendaftaran;?>" readonly>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Tanggal Rencana Pengujian</label>
                                        <input type="date" class="form-control" id="email" name="tgl_pendaftaran" value="<?=$tgl_pendaftaran;?>" required="">
                                   </div>
                                   

                                   <input type="hidden" name="total_biaya" id="txt2" class="form-control" readonly="" onkeyup="sum();" />
                                   <script type="text/javascript">
                                   <?php echo $jsArray; ?>
                                   </script>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Daftar Sekarang</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>



      <!-- ABOUT -->
     <section id="saran">
          <div class="container">
               <div class="row">



                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="saran-form" role="form" method="post" action="pages/proses_saran.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Kritik dan Saran</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Pesan</label>
                                        <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Isi Pesan Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Kebersihan</label>
                                        <input type="number" class="form-control" id="email" name="kebersihan" placeholder="Nilai Point Kebersihan" maxlength="3" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Keramahan</label>
                                        <input type="number" class="form-control" id="email" name="keramahan" placeholder="Nilai Point Keramahan" maxlength="3" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Ketelitian</label>
                                        <input type="number" class="form-control" id="email" name="ketelitian" placeholder="Nilai Point Ketelitian" maxlength="3" required="">
                                   </div>

                                   <br><br><br><br><br>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Kirim Saran</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>



     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informasi Lanjut</h4>
                              <p>Untuk mengetahui informasi lebih lanjut, silahkan kunjungi kami atau hubungi kontak berikut.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 081223445667</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                                   <p><i class="fa fa-map-marker"></i> Jl. Pasteur No.27, RT.02, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         &nbsp;
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Waktu Operasional</h4>
                                   <p>Senin - Jumat <span>08:00 - 17:00</span></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-6 col-sm-6">
                              <div class="copyright-text">
                                   Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>. All rights reserved.
                              </div>
                         </div>

                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
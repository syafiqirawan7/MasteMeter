<?php
  include("../config/koneksi.php");  
  ?>
  <?php
$id_pendaftaran = $_GET['id_pendaftaran']; //get the no which will updated

$queryy = mysql_query("SELECT * FROM pendaftaran join customer using(id_customer) WHERE id_pendaftaran = '$id_pendaftaran'"); //get the data that will be updated
$dt=mysql_fetch_array($queryy);

$id_user = $_SESSION['id_user']; 
?>

<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pembayaran</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pembayaran</a></li>
                                    <li class="active"><a href="#">Data Pembayaran</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Pembayaran</strong>
                            </div>
                            <div class="card-body">
         
<form action="index.php?p=proses_pembayaran" method="post" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" id="text-input" name="id_pendaftaran" class="form-control" value="<?= $dt['id_pendaftaran'];?>">
    <input type="hidden" id="text-input" name="id_user" class="form-control" value="<?= $id_user;?>">
    <input type="hidden" id="text-input" name="status" class="form-control" value="Lunas">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. Antrian</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="no_antrian" placeholder="Text" class="form-control" value="<?= $dt['no_antrian'];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Customer</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nama" placeholder="Text" class="form-control" value="<?= $dt['nama'];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Serial Number</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="serialnumber" placeholder="Text" class="form-control" value="<?= $dt['serialnumber'];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Merk/Type</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="merk" placeholder="Text" class="form-control" value="<?= $dt['merk'];?>" readonly>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">No. Nota</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php

                                            $sql = mysql_query("SELECT no_nota FROM transaksi");
                                                echo '<input type="text" class="form-control" id="no_nota" value="';

                                            $no_nota = "C001";
                                            if(mysql_num_rows($sql) == 0){
                                                echo $no_nota;
                                            }

                                            $result = mysql_num_rows($sql);
                                            $counter = 0;
                                            while(list($no_nota) = mysql_fetch_array($sql)){
                                                if (++$counter == $result) {
                                                    $no_nota++;
                                                    echo $no_nota;
                                                }
                                            }
                                                echo '"name="no_nota" placeholder="No. Nota" readonly>';

                                        ?>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tanggal Pengujian Selesai</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="email-input" name="tanggal" value="<?= date("Y-m-d");?>" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Penanggungjawab</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="penanggungjawab" class="form-control"required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Konfirmasi Selesai</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="konfirmasi" class="form-control" placeholder="Ketik SELESAI" required="">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>
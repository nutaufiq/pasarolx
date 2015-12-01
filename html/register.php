<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sahabat OLX</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,100' rel='stylesheet' type='text/css'>    
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="col-xs-12 col-md-4 col-md-offset-4 register">
          <div class="register-logo"><center>PASAR <img src="images/logoolx.png"></center></div>
          <div class="register-text"><center>Mohon isi formulir di bawah ini untuk bergabung</center></div>

          <form>
              <div class="form-group id="form-pilih-area">
                  <div class="label-area">Pilih area pasar:</div>
                  <select class="form-control" id="pilih-area">
                    <option selected="selected">Pilih Area</option>
                    <option>DKI Jakarta</option>
                    <option>Surabaya</option>
                    <option>Wonosobo</option>
                  </select>
              </div>

              <div class="form-group" id="form-pilih-kategori">
                  <div class="label-form">Pilih kategori barang yang Anda jual</div>
                  <label class="radio-inline">
                    <input type="radio" name="kategori" id="inlineCheckbox1" value="option1"> Mobil
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="kategori" id="inlineCheckbox2" value="option2"> Motor
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="kategori" id="inlineCheckbox3" value="option3"> Lainnya
                  </label>
              </div>

              <div class="form-group" id="form-pilih-tanggal">
                  <div class="label-form">Pilih tanggal kehadiran</div>
                  <label class="checkbox-inline">
                    <input type="checkbox" id="tanggal1" value="option1"> 12 Desember
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" id="tanggal2" value="option2"> 13 Desember
                  </label>
              </div>

              <div class="form-data" id="form-data">
                  <div class="label-form">Silahkan isi data dibawah</div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Plat Nomor (Bila menggunakan mobil)</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group has-feedback input-iklan" id="link-iklan">
                    <label>Link iklan di OLX</label>
                    <div><input type="text" class="form-control" placeholder="http://"></div>
<!--                     <div><input type="text" class="form-control" placeholder="http://"></div>
                    <div class="glyphicon glyphicon-remove form-control-feedback removeinput" aria-hidden="true"></div>
 -->                  </div>
                  <div class="addinput"><a id="addinput"><span class="glyphicon glyphicon-plus-sign"></span> tambah link</a></div>

                  <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Dengan pertimbangan kebersihan dan higienitas, kami hanya memperbolehkan Anda menjual pakaian baru
                      </label>
                  </div>
                  <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Saya menyetujui <a data-toggle="modal" data-target=".terms">syarat dan ketentuan</a> yang berlaku di Pasar OLX
                      </label>
                  </div>

                  <div class="register-button"><a href="register.php">KIRIM</a></div>
              </div>



          </form>

    </div>

    <div class="modal fade terms" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="termss">
                    <div class="terms-logo"><center>PASAR <img src="images/logoolx.png"></center></div>
                    <div class="terms-text">
                    Mohon dibaca terlebih dahulu
                    <ol>
                      <li>Barang yang dijual pada acara ini adalah barang yang masih layak untuk diperjualbelikan, sudah diiklankan di OLX dan harus sesuai dengan syarat dan ketentuan berjualan OLX. </li>
                      <li>Kami berhak menolak atau mengeluarkan peserta yang tidak mengikuti syarat dan ketentuan berjualan di OLX dan atau mengganggu kelangsungan acara. </li>
                      <li>Dengan melakukan pendaftaran, Anda sepakat untuk meluangkan waktu untuk hadir di hari yang Anda pilih pada saat pendaftaran, mulai jam 12 siang hingga 8 malam.</li>
                      <li>OLX hanya menyediakan slot parkir mobil untuk Anda berjualan, silakan mempersiapkan perlengkapan lain yang Anda butuhkan. </li>
                      <li>Silakan menjaga keamanan barang yang Anda jual, OLX tidak bertanggung jawab atas kehilangan atau kerugian yang Anda alami selama acara. </li>
                    </ol>              
                  </div>
            </div>
        </div>
      </div>
    </div>    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
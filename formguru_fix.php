<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/filterlist.css">
    <link rel="stylesheet" type="text/css" href="css/slideshow.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/top.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /* The Modal (background) */
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
          position: relative;
          background-color: #fefefe;
          margin: auto;
          padding: 0;
          border: 1px solid #888;
          width: 80%;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
          -webkit-animation-name: animatetop;
          -webkit-animation-duration: 0.4s;
          animation-name: animatetop;
          animation-duration: 0.4s
      }

      /* Add Animation */
      @-webkit-keyframes animatetop {
          from {top:-300px; opacity:0} 
          to {top:0; opacity:1}
      }

      @keyframes animatetop {
          from {top:-300px; opacity:0}
          to {top:0; opacity:1}
      }

      /* The Close Button */
      .close {
          color: white;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }

      .modal-header {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
      }

      .modal-body {padding: 2px 16px;}

      .modal-footer {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
      }
      </style>
      <?php include("connection.php");?>
  </head>

  <div id="main">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()"> &nbsp; <img src="pic/log.png" style="width: auto; height: 40px;"></span>
    <a href="../csas clean melody/login1.html"><button style="width:auto; float: right; ">Logout</button></a>
  </div>

  <div id="content2">
    <br />
    <br />
    <br />

      <form action="" method="post">
        <h1>Form Guru</h1>

        <fieldset id="UserDataFields">
            <legend>Data Guru (wajib diisikan seluruhnya)</legend>

          <div class="control-group">
                <label for="nama_guru">Nama Lengkap</label>
                <input type="text"
                       name="nama_siswa"
                       id="nama_siswa" required autofocus>
          </div>

           <div class="control-group">
                <label for="nip">NIP</label>
                <input type="number"
                       name="nisn"
                       id="nisn" required>
            </div>

            <div class="control-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </div>

            <div class="control-group">
                <label for="TTL">Tempat/Tanggal Lahir</label>
                <input type="datetime-local"
                       name="TTL"
                       id="TTL">
            </div>

            <div class="control-group">
                <label for="agama">Agama</label>
                <select id="agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="hindu">hindu</option>
                    <option value="kristen">kristen</option>
                    <option value="katolik">katolik</option>
                    <option value="budha">budha</option>
                </select>
            </div>

            <div class="control-group">
                <label for="alamat">alamat</label>
                <input type="Text"
                       name="alamat"
                       id="alamat" required>
            </div>

             <div class="control-group">
                <label for="no_telp">No telp</label>
                <input type="number"
                       name="no_telp"
                       id="no_telp" required>
            </div>

            <div class="control-group">
                <label for="matpel">mata Pelajaran</label>
                <select id="matpel" name="matpel">
                    <option value=""></option>
                </select>
            </div>

            <div class="control-group">
                <label for="pass">Password</label>
                <input type="password"
                       name="pass"
                       id="pass" required>
            </div>

            <div class="control-group">
                <label for="Konfirmasi">
                    Konfirmasi Password
                </label>
                <input type="password"
                       name="Konfirmasi"
                       id="Konfirmasi" required>
            </div>
        </fieldset>

        <fieldset id="FormAction">
            <legend>Selesai mengisikan form?</legend>

            <input type="reset" value="Hapus Form" class=".cancelbtn">
            <input type="reset" value="Submit" name="submit" class=".cancelbtn">
            <?php
            include "connection.php";
              if(isset($_POST["submit"])){
                $nama_guru=$_POST["nama_guru"];
                $NISN=$_POST["NIP"];
                $jk=$_POST["jenis_kelamin"];
                $TTL=$_POST["TTL"];
                $agama=$_POST["agama"];
                $alamat=$_POST["alamat"];
                $no_telp=$_POST["no_telp"];
                $matpel=$_POST["matpel"];
                $pass=$_POST["pass"];
                $query=$conn->query("INSERT INTO siswa VALUES('$NIP','$nama_siswa','$jenis_kelamin','$TTL','$agama','alamat','no_telp','$matpel','$pass')");
                if($query== true){
                  echo"berhasil";
                }else{
                  echo"gagal";
                }
              }
            ?>
            <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <span class="close"></span>
                <h2>Selamat Registrasi Anda Telah Berhasil Dilakukan</h2>
              </div>
                <h2>Terimakasih telah bergabung dengan kami</h2>
                <h2>Semoga dapat bermanfaat</h2>
              </div>
            </div>
          </div>
        </fieldset>
    </form>
    </div>

  <div class="footer">
    <div class="gbr">
        <img src="pic/log.png">
        <div class="media">
          <img src="icon/go+.png" style="width: 50px; height: auto;">
          <img src="icon/linr.png" style="width: 50px; height: auto;">
          <img src="icon/youfix.png" style="width: 50px; height: auto;">
        </div>
    </div>
  </div>

       <script type="text/javascript" src="js/nav.js"></script>

       <script>
          // Get the modal
          var modal = document.getElementById('myModal');

          // Get the button that opens the modal
          var btn = document.getElementById("myBtn");

          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];

          // When the user clicks the button, open the modal 
          btn.onclick = function() {
              modal.style.display = "block";
          }

          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
              modal.style.display = "none";
          }

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
        </script>
  </body>
</html>
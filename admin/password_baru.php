    <?php 
          include 'header.php';
     ?>
    <style type="text/css">
    .kotak{ 
        margin-top: 150px;
    }

    .kotak .input-group{
        margin-bottom: 20px;
    }
    </style>
</head>
<body>
<?php
        $auth = isset($_GET['auth']) ? ($_GET['auth']): '';
        $out = '';
        switch ($auth) {
            case '123131adajjadl131jakdl12':
                $out = '
                  <center>
                  <p style="color:green;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-ok"></i>&nbsp; <b>SUCCESS :</b> Password berhasil di ubah.
                  </p>
                  </center>
                ';
              break;
              case 'e2eu8932dh73q3eh822e2qdq':
                $out = '
                  <center>
                  <p style="color:green;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-eror"></i>&nbsp; <b>SUCCESS :</b> Password tidak berhasil di ubah.
                  </p>
                  </center>
                ';
              break;
        }
     ?>  
    <div class="container" >
        <?php 
        error_reporting(E_ALL^(E_NOTICE | E_WARNING));
        $d=$_GET['email'] ; 
        ?>
        <div class="panel panel-default" >
            <form action="psbaru_act.php" method="post">
                <div class="col-md-5 col-md-offset-2 kotak">
                    <h2>Password Baru</h2>
                    <br>
                    <?php echo $out; ?>
                   
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="hidden" value="<?php echo $d; ?>" name="member_email">
                        <input type="password" class="form-control" name="password_baru" placeholder="********" aria-describedby="sizing-addon2" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <hr>
                    <h5><a href="login.php"> LOGIN</a></h5>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
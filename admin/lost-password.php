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
          case '2131kjadlaljaipqwepoad1131':
              $out = '
                <center>
                <p style="color:#a00;padding:5px;border-radius:3px;">
                  <i class="glyphicon glyphicon-remove"></i>&nbsp; <b>ERROR :</b> email tidak terdaftar.
                </p>
                </center>
              ';
            break;
            case 'dadawd2131e1313eqe13edqde':
              $out = '
                <center>
                <p style="color:#a00;padding:5px;border-radius:3px;">
                  <i class="glyphicon glyphicon-remove"></i>&nbsp; <b>ERROR :</b> email tidak terkirim.
                </p>
                </center>
              ';
            break;
            case '123131adajjadl131jakdl12':
                $out = '
                  <center>
                  <p style="color:green;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-ok"></i>&nbsp; <b>SUCCESS :</b> Password terkirim ke email anda. cek email anda sekarang.
                  </p>
                  </center>
                ';
              break;
          default:
            $out ='
            <div class="back-notif">
            <p>Tolong masukkan email Anda untuk mereset password, setelah itu Anda akan menerima password baru melalui email Anda.
            </p>
            </div>';
            break;
        }
     ?>

    <div class="container" >
        <div class="panel panel-default" >
            <form action="lost_act.php" method="post">
                <div class="col-md-5 col-md-offset-2 kotak">
                    <h2>Lupa Password</h2>
                    <br>

                      <?php echo $out; ?>
                   
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" name="member_email" aria-describedby="sizing-addon2" required>
                    </div>
                    <div class="input-group input-group-lg">
                        <button type="submit" class="btn btn-primary">SEND</button>
                    </div>
                    <hr>
                    <h5><a href="login.php"> Login</a></h5>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
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
    <div class="container" >
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
            }
        }
        ?>
        <div class="panel panel-default"" >
            <form action="login_act.php" method="post">
                <div class="col-md-5 col-md-offset-2 kotak">
                    <h2>Login ..</h2>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Masukkan Email Anda" name="member_email" aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="member_password" aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group input-group-lg">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
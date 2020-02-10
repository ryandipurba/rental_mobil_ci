<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Rental Mobil Berbasi Web</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>

</head>

<body>

    <div class="col-md-4 col-md-offset-4" style="margin-top:50px">
        <center>
            <h2>APLIKASI RENTAL MOBIL</h2>
            <h3>LOGIN</h3>
        </center>
        <br>
        <?php
        if (isset($_GET['pesan'])) {
            if (isset($_GET['pesan']) == "gagal") {
                echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
            } else if (isset($_GET['pesan']) == "logout") {
                echo "<div class='alert alert-danger'>Anda telah logout.</div>";
            } else if ($_GET['pesan'] == "belumlogin") {
                echo "<div class='alert alert-danger'>Silahkan Login dulu</div>";
            }
        }
        ?>
        <br>
        <div class="panel panel-default">
            <div class="panel-body">
                <br><br>
                <form method="post" action="<?php echo base_url() . 'welcome/login' ?>">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="username" class="form-control">
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="password" class="form-control">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
                <br><br>
            </div>
        </div>
</body>

</html>
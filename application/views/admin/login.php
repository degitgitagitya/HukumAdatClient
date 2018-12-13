<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url(); ?>/public/img/Notext.png">
    <title>Admin</title>


</head>

<body>


<br>
<br>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-6 text-center p-5" style="background: deepskyblue;">

            <h3 style="color: white;">Login</h3>

            <form action="<?php echo base_url(); ?>index.php/auth" method="post">

                <div class="row justify-content-center">

                    <div class="col-10 m-2 text-center">
                        <input class="p-1" type="text" name="username" placeholder="Username">
                    </div>

                    <div class="col-10 m-2 text-center">
                        <input class="p-1" type="password" name="password" placeholder="Password">
                    </div>

                    <div class="col-10 m-2 text-center">

                        <?php

                        if (isset($err)){

                            echo $err;

                        }

                        ?>


                    </div>

                    <div class="col-10 m-2 text-center">
                        <input type="submit" class="btn btn-success">
                    </div>

                </div>




            </form>

        </div>


    </div>
</div>






<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
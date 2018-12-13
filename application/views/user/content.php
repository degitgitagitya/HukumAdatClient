<div class="container">


    <div class="row justify-content-center mt-5">
        <div class="col-10 col-md-6 text-center">
            <h3><?php echo $content[0]->judul ?></h3>
        </div>
    </div>

    <div class="row justify-content-center mt-3">

        <div class="col-6">

            <?php

            if ($content[0]->gambar != "none"){

                ?>

                <img src="<?php echo base_url(); ?>public/content/<?php echo $content[0]->gambar ?>" alt="<?php echo $content[0]->gambar ?>" class="img-fluid" style="max-width: 100%; height: auto;">

                <?php

            }

            ?>



        </div>

    </div>


    <div class="row">

        <div class="col-8">

            <hr>
            <p><?php echo $content[0]->isi ?></p>

        </div>

        <div class="col-4">
            <hr>
        </div>

    </div>

</div>
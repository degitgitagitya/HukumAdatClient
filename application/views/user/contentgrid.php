<div class="container">


    <div class="row justify-content-center mt-3">

        <?php

        $abjad=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

        $i = 0;

        while (!empty($abjad[$i])){

            ?>

            <a class="p-1" href="<?php echo base_url(); ?>index.php/dic/getcontentbyfirst/<?php echo ($abjad[$i]); ?>"><h3><?php echo ($abjad[$i++]);?></h3></a>

            <?php

        }

        ?>

    </div>

    <hr>

    <div class="row">
        <div class="col-3">

            <?php
                    foreach ($content as $key) {
                        ?>

                        <p><a href="<?php echo base_url(); ?>index.php/cont/getcontentbyid/<?php echo $key->id;?>"><?php echo $key->judul; ?></a></p>

                        <?php
                    }
            ?>

        </div>
        <div class="col-3">

        </div>
        <div class="col-3">

        </div>
        <div class="col-3">

        </div>
    </div>


</div>
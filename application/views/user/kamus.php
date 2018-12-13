<div class="container">


    <div class="row justify-content-center mt-5">
        <div class="col-10 col-md-6 text-center">
            <h1>Kamus</h1>
        </div>
    </div>

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

</div>
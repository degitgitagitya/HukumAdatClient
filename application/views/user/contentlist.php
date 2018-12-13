
<div class="container">

    <form action="<?php echo base_url(); ?>index.php/home/getcontentbyname" method="get" class="row mt-4">

        <input placeholder="Pencarian.." type="text" name="search" class="p-2 col-6 col-md-5 text-left " style="border-radius: 15px; border-style: groove;">


        <button type="submit" class="btn btn-primary p-2 col-2 col-md-1 ml-2" style="border-radius: 15px; border-style: groove;">
            <i class="fas fa-search"></i>
        </button>

    </form>

    <br>

    <h4>Hasil pencarian dari "<?php echo $search; ?>"</h4>

    <hr>

    <?php foreach ($content as $key){ ?>

        <div class="row">
            <div class="col-5">
                <h5><a href="<?php echo base_url(); ?>index.php/cont/getcontentbyid/<?php echo $key->id;?>"><?php echo $key->judul;?></h5></a>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <p>
                    <?php echo $key->isi;?>
                </p>
            </div>
        </div>

        <br>

    <?php }?>


</div>





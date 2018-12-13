<div class="container">


    <div class="row justify-content-center mt-5">
        <div class="col-10 col-md-6 text-center">
            <h1>Ensiklopedia</h1>
            <h2>Hukum Adat Elektronik</h2>
        </div>
    </div>

    <div class="row justify-content-center mt-3">

        <div class="col-3">
            <img src="<?php echo base_url(); ?>public/img/Notext.png" alt="logo" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>

    </div>

    <form action="<?php echo base_url(); ?>index.php/home/getcontentbyname" method="get" class="row justify-content-center mt-4">

        <input placeholder="Pencarian.." type="text" name="search" class="p-2 col-6 col-md-5 text-left " style="border-radius: 15px; border-style: groove;">


        <button type="submit" class="btn btn-primary p-2 col-2 col-md-1 ml-2" style="border-radius: 15px; border-style: groove;">
            <i class="fas fa-search"></i>
        </button>

    </form>

</div>
<div class="container-fluid">

    <hr>

    <div class="row">
        <div class="col-12 p-3" style="box-shadow: 2px 2px 4px 2px gainsboro;">


            <h3>Post List</h3>

            <hr>

            <a href="<?php echo base_url(); ?>index.php/adminpost/createpost" class="btn btn-success">Create Post</a>

            <!--<hr>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->

            <hr>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Diupdate</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Opsi</th>
                </tr>
                </thead>


                <?php

                $num = 1;

                foreach ($content as $key){




                ?>
                <tbody>
                    <th scope="row"><?php echo $num++?></th>
                    <td><?php echo $key->judul?></td>
                    <td>
                        <?php

                        $y=substr($key->isi,0,100) . '...';
                        echo $y;

                        ?>
                    </td>
                    <td><?php echo $key->dibuat?></td>
                    <td><?php echo $key->diupdate?></td>
                    <td>

                        <?php

                        if ($key->gambar != "none"){

                            ?>

                        <img src="<?php echo base_url(); ?>public/content/<?php echo $key->gambar ?>" alt="<?php echo $key->gambar ?>" style="max-width: 100px; height: auto;">
                            <?php

                        }

                        ?>


                    </td>
                    <td>

                        <a href="<?php echo base_url(); ?>index.php/upload/delete/<?php echo $key->id; ?>" class="btn btn-danger">Delete</a>
                        <!--<a href="<?php /*echo base_url(); */?>index.php/adminpost/edit/<?php /*echo $key->id; */?>" class="btn btn-warning">Edit</a>-->

                    </td>
                </tbody>


                <?php

                }

                ?>

            </table>

        </div>
    </div>



</div>
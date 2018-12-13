<div class="container-fluid">

    <hr>

    <h3>Create Post</h3>

    <hr>

    <?php echo form_open_multipart('upload/do_upload');?>

    <h4>Judul</h4>

    <input type="text" name="judul">

    <h4>Isi</h4>

    <textarea name="isi" id="" cols="30" rows="10"></textarea>

    <h4>Gambar</h4>

    <?php

    if (isset($error)){

        echo $error;

    }

    ?>

    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" value="Post" class="btn btn-dark"/>

    </form>




</div>
<div class="container-fluid">

    <hr>

    <h3>Create Post</h3>

    <hr>

    <?php echo form_open_multipart('upload/do_uploads');?>

        <h4>Judul</h4>

        <input type="text" name="judul">
        
        <h4>Isi</h4>

        <textarea name="isi" id="" cols="30" rows="10"></textarea>

        <h4>Menggunakan Gambar?</h4>

        <div class="radio">
            <label><input type="radio" name="optradio" value="1">Ya</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="optradio" value="0" checked>Tidak</label>
        </div>

        <br /><br />

        <input type="submit" value="Submit" class="btn btn-dark"/>

    </form>
    

    
    
</div>
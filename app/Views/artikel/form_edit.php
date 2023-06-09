<h2><?php echo $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"><?php echo $data['isi']; ?></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>
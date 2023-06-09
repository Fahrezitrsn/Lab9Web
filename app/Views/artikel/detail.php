<?php echo $this->include('template/header'); ?>
<article class="entry">
    <h2><?php echo $artikel['judul']; ?></h2>
    <img src="<?php echo base_url('/gambar/'.$artikel['gambar']); ?>" alt="<?php echo $artikel['judul']; ?>">
    <p><?php echo $artikel['isi']; ?></p>
</article>
<?php echo $this->include('template/footer'); ?>
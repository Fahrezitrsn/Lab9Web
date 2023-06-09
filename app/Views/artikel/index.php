<?php echo $this->include('template/header'); ?>
<?php if ($artikel) {
    foreach ($artikel as $row) { ?>
<article class="entry">
    <h2><a href="<?php echo base_url('/artikel/'.$row['slug']); ?>"
            style="text-decoration: none;"><?php echo $row['judul']; ?></a></h2>
    <img src="<?php echo base_url('/gambar/'.$row['gambar']); ?>" alt="<?php echo $row['judul']; ?>">
    <p><?php echo substr($row['isi'], 0, 200); ?></p>
</article>
<hr class="divider" />
<?php }
} else { ?>
<article class="entry">
    <h2>Belum ada data.</h2>
</article>
<?php } ?>
<?php echo $this->include('template/footer'); ?>
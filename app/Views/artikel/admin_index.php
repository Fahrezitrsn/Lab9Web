<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel) {
            foreach ($artikel as $row) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td>
                <b><?php echo $row['judul']; ?></b>
                <p><small><?php echo substr($row['isi'], 0, 50); ?></small></p>
            </td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <a class="btn" href="<?php echo base_url('/admin/artikel/edit/'.$row['id']); ?>">Ubah</a>
                <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"
                    href="<?php echo base_url('/admin/artikel/delete/'.$row['id']); ?>">Hapus</a>
            </td>
        </tr>
        <?php }
            } else { ?>
        <tr>
            <td colspan="4">Belum ada data.</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
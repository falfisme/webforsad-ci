<p>
    <a href="<?= base_url('berita/tulis_berita') ?>" class="btn btn-success btn-lg">
        <i class="fa fa-plus"></i> Tulis Berita
    </a>
</p>

<?php 
// Notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<div>';
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
?>

<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>    
            <th>Judul Berita</th>
            <th>Penulis</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($berita as $berita) { ?>
        <tr>
            <td><?= $no ; $no = $no+1;?></td>
            <td><?= $berita->tanggal ?></td>
            <td><?= $berita->judul ?></td>
            <td><?= $berita->penulis  ?><br><?= $berita->departemen  ?></td>
            <td><?= $berita->keterangan  ?></td>
            <td>
                <a href="<?= base_url('berita/edit/'.$berita->id_berita) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

                <a href="<?= base_url('berita/delete/'.$berita->id_berita) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
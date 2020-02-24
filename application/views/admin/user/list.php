<p>
    <a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-success btn-lg">
        <i class="fa fa-plus"></i> Tambah Baru
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
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($user as $user) { ?>
        <tr>
            <td><?= $no ; $no = $no+1;?></td>
            <td><?= $user->nama ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->username  ?></td>
            <td><?= $user->akses_level  ?></td>
            <td>
                <a href="<?= base_url('admin/user/edit/'.$user->id_user) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

                <a href="<?= base_url('admin/user/delete/'.$user->id_user) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
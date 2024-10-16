<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADMIN PAGE</h1>

    <table border="1" class="admin">
        <tr>
            <th>Id</th>
            <th>Id Lomba</th>
            <th>Nama Pendaftar</th>
            <th>Kelas</th>
            <th>No Hp</th>
            <th>Tanggal Daftar</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach ($pendaftar as $pdf) :?>
            <tr>
                <td><?= $pdf['id']; ?></td>
                <td><?= $pdf['id_lomba']; ?></td>
                <td><?= $pdf['nama_pendaftar']; ?></td>
                <td><?= $pdf['kelas']; ?></td>
                <td><?= $pdf['no_hp']; ?></td>
                <td><?= format_indo (date($pdf['tgl_daftar'])); ?></td>

                <!-- <td><a href="<?= base_url(); ?>admin/edit/ <?=$pdf['id']?>">Edit</a></td> -->

                <td><a class="edit" href="<?= base_url('');?>admin/edit/<?= $pdf['id']?>">Edit</a></td>
                <td><a class="delete" onclick="return confirm('Are You Sure Deleting This?')"href="<?= base_url('');?>admin/hapus/<?= $pdf['id']?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
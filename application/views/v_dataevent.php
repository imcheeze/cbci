<table>
    <tr>
        <th>NO</th>
        <th>NAMA EVENT</th>
        <th>PENYELENGGARA</th>
        <th  colspan="2">AKSI</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($tb_jnslomba as $jl) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $jl['nama_lomba'] ?></td>
            <td><?= $jl['penyelenggara']?></td>
            <td><a class="edit" href="<?=base_url(); ?>data_event/edit/<?= $jl['id']?>">EDIT</a></td>
            <td><a class="delet" onclick="return confirm('Are You Sure Deletong This?')" href="<?=base_url(); ?>data_event/delete/<?= $jl['id']?>">DELETE</a></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</table>
<a class="daftar" href="<?=base_url();?>tmbhlom">Tambah Data</a>
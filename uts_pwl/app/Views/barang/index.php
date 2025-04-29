<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h2>Data Barang</h2>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Keterangan</th>
            <?php if (session()->get('role') === 'admin'): ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($barang as $b): ?>
        <tr>
            <td><?= esc($b['nama']) ?></td>
            <td>
                <?php if (session()->get('role') === 'admin'): ?>
                    <form action="/barang/updateJumlah/<?= $b['id'] ?>" method="post" style="display:inline;">
                        <input type="number" name="stok" value="<?= esc($b['stok']) ?>" style="width:60px;" required>
                        <button type="submit">Update</button>
                    </form>
                <?php else: ?>
                    <?= esc($b['stok']) ?>
                <?php endif; ?>
            </td>
            <td><?= esc($b['keterangan']) ?></td>
            <?php if (session()->get('role') === 'admin'): ?>
                <td>
                    <a href="/barang/hapus/<?= $b['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">Hapus</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php if (session()->get('role') === 'admin'): ?>
    <h3>Tambah Barang Baru</h3>
    <form action="/barang/tambah" method="post" enctype="multipart/form-data" class="form-barang">
        <input type="text" name="nama" placeholder="Nama Barang" required><br>
        <input type="number" name="stok" placeholder="Stok" required><br>
        <textarea name="keterangan" placeholder="Keterangan" required></textarea><br>
        <button type="submit">Tambah Barang</button>
    </form>
<?php endif; ?>

<?= $this->endSection() ?>

<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h2>Data User</h2>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
<thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['role'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->endSection() ?>

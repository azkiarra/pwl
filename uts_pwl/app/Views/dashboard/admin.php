<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Dashboard Section -->
        <div class="admin-dashboard" style="background-color: #f4f4f4; padding: 20px; border-radius: 8px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Admin Dashboard</h3>
            <p style="font-size: 16px; color: #333;">Selamat datang di Dashboard Admin. Anda dapat mengelola semua data barang dan melihat inventaris dengan mudah.</p>
        </div>

        <!-- Data Barang Section -->
        <div class="data-barang" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; margin-top: 30px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Data Barang</h3>
            <p style="font-size: 16px; color: #333;">Kelola inventaris barang di sini, termasuk menambah, mengedit, dan menghapus barang.</p>
            <a href="/barang" style="display: inline-block; padding: 12px 20px; background-color: #fa991c; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; margin-top: 20px;">Lihat Data Barang</a>
        </div>

        <!-- Data User Section -->
        <div class="data-user" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; margin-top: 30px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Data User</h3>
            <p style="font-size: 16px; color: #333;">Kelola data user di sini.</p>
            <a href="/user/list" style="display: inline-block; padding: 12px 20px; background-color: #fa991c; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; margin-top: 20px;">Lihat Data User</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- User Dashboard Section -->
        <div class="user-dashboard" style="background-color: #f4f4f4; padding: 20px; border-radius: 8px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">User Dashboard</h3>
            <p style="font-size: 16px; color: #333;">Selamat datang di Dashboard Pengguna. Anda dapat melihat data barang yang ada, termasuk informasi terkait stok dan keterangan barang.</p>
        </div>

        <!-- Data Barang Section -->
        <div class="data-barang" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; margin-top: 30px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Data Barang</h3>
            <p style="font-size: 16px; color: #333;">Di sini Anda dapat mengakses data barang yang tersedia untuk keperluan Anda.</p>
            <a href="/barang" style="display: inline-block; padding: 12px 20px; background-color: #fa991c; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; margin-top: 20px;">Lihat Data Barang</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

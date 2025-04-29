<aside class="sidebar">
<button class="toggle-btn" id="toggle-btn">☰</button> <!-- Tombol untuk toggle sidebar -->
    <ul>
        <li>
            <a href="<?= esc(session()->get('role') === 'admin' ? '/admin' : '/user') ?>">🏠 Dashboard</a>
        </li>
        <li>
            <a href="/barang">📦 Data Barang</a>
        </li>
            <a href="/logout" >❌ Logout</a>
        </li> 
    </ul>
</aside>

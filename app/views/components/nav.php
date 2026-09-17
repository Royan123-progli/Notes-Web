<nav class="navbar">
    <div class="nav-container">
        <a href="index.php?act=dashboard" class="nav-logo">My<span>Notes</span></a>
        
        <ul class="nav-menu">
            <li>
                <a href="index.php?act=dashboard" class="<?= ($action == 'dashboard') ? 'active' : '' ?>">Dashboard</a>
            </li>
            <li>
                <a href="index.php?act=catatan" class="<?= (strpos($action, 'catatan') !== false) ? 'active' : '' ?>">Daftar Catatan</a>
            </li>
            <li>
                <a href="index.php?act=kategori" class="<?= (strpos($action, 'kategori') !== false) ? 'active' : '' ?>">Kelola Kategori</a>
            </li>
            <li>
                <a href="index.php?act=logout" class="btn-logout" onclick="return confirm('Keluar dari aplikasi?')">Logout</a>
            </li>
        </ul>
    </div>
</nav>
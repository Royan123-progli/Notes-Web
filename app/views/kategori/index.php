<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="public/css/style1.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%) !important;
            font-family: 'Inter', -apple-system, sans-serif;
            min-height: 100vh;
            color: #2d3436;
            display: block !important;
        }

        .navbar {
            background: #ffffff !important;
            height: 75px;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .navbar-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: 800;
            color: #2d3436;
            text-decoration: none;
            letter-spacing: -1px;
        }

        .navbar-brand span {
            color: #6c5ce7;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-item {
            text-decoration: none;
            color: #636e72;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .nav-item:hover, .nav-item.active {
            color: #6c5ce7;
        }

        .btn-logout {
            background: #ff7675;
            color: white !important;
            padding: 10px 22px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 118, 117, 0.3);
        }

        .btn-logout:hover {
            background: #fb6665;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 118, 117, 0.4);
        }

        .container {
            max-width: 1200px;
            margin: 100px auto 20px auto;
            padding: 20px;
        }

        .card {
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        h2 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            font-weight: 800;
            color: #2d3436;
        }

        table {
            display: block !important;
            width: 100%;
        }

        thead {
            display: none !important;
        }

        tbody {
            display: grid !important;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            width: 100% !important;
        }

        tr {
            display: flex !important;
            flex-direction: column !important;
            background: white !important;
            padding: 25px !important;
            border-radius: 20px !important;
            border: 1px solid rgba(0,0,0,0.05) !important;
            min-height: 220px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        tr:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        td {
            display: block !important;
            padding: 0 !important;
            border: none !important;
            text-align: left !important;
            width: 100% !important;
        }

        td:nth-child(1) {
            display: none !important;
        }

        td:nth-child(2) {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2d3436;
            margin-bottom: 15px;
            padding-bottom: 10px !important;
            border-bottom: 2px solid #f0eeff !important;
        }

        td:nth-child(3) {
            font-size: 0.85rem;
            background: #f8f9fa !important;
            padding: 12px !important;
            border-radius: 12px;
            margin-bottom: 20px;
            color: #636e72;
        }

        td:nth-child(3)::before {
            content: "Dibuat oleh: ";
            font-weight: 600;
            color: #6c5ce7;
        }

        td:nth-child(4) {
            margin-top: auto;
            display: flex !important;
            gap: 10px;
            width: 100% !important;
        }

        .btn-primary {
            display: inline-block;
            background: #6c5ce7;
            color: white;
            padding: 12px 25px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .btn-orange {
            background: #ffeaa7 !important;
            color: #d35400 !important;
            flex: 1;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
        }

        .btn-red {
            background: #ff7675 !important;
            color: white !important;
            flex: 1;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
        }

        .success-message {
            background: #55efc4 !important;
            color: #006266 !important;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 25px;
            font-weight: 600;
            border-left: 5px solid #00b894;
            grid-column: 1 / -1;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a class="navbar-brand" href="index.php?act=dashboard">MyNotes <span>App</span></a>
            <div class="nav-links">
                <a href="index.php?act=catatan" class="nav-item">Catatan</a>
                <a class="navbar-brand" href="index.php?act=dashboard">Dashboard</a>
                <a href="index.php?act=logout" class="btn-logout" onclick="return confirm('Yakin ingin logout?')">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <h2>Daftar Kategori</h2>
            <a href="index.php?act=kategori-tambah" class="btn btn-primary">Add New Category</a>
            <table>
                <tbody>
                    <?php if (isset($_SESSION['success_msg'])): ?>
                        <div class="success-message">
                            <?= $_SESSION['success_msg']; ?>
                        </div>
                        <?php unset($_SESSION['success_msg']); ?>
                    <?php endif; ?>

                    <?php
                    $no = 1;
                    if (!empty($data_kategori) && count($data_kategori) > 0):
                        foreach($data_kategori as $row) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= htmlspecialchars($row['nama_kategori']) ?></td>
                            <td><?= htmlspecialchars($row['nama_admin']) ?></td>
                            <td>
                                <a href="index.php?act=kategori-edit&id=<?= $row['id'] ?>" class="btn-orange">Edit</a>
                                <a href="index.php?act=kategori-hapus&id=<?= $row['id'] ?>" class="btn-red"
                                   onclick="return confirm('Yakin ingin menghapus ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach; 
                    else: ?>
                        <div class="success-message" style="background: #fab1a0 !important; color: #d63031 !important; border-color: #d63031; grid-column: 1/-1; text-align: center;">
                            Belum ada kategorinya.
                        </div>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
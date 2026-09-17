<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MyNotes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, sans-serif;
            min-height: 100vh;
            padding-top: 100px;
        }

        .navbar {
            background: white;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: #6c5ce7;
            text-decoration: none;
        }

        .btn-danger {
            background: #ff7675;
            color: white;
            padding: 8px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }

        .container-dashboard {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        .dashboard-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .btn-menu {
            background: white;
            padding: 35px 25px;
            border-radius: 20px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.03);
            color: #2d3436;
            font-size: 1.3rem;
            font-weight: 700;
        }

        .btn-menu span {
            font-size: 0.9rem;
            font-weight: 400;
            color: #636e72;
            margin-top: 10px;
        }

        .btn-kategori:hover {
            border-left: 8px solid #6c5ce7;
            transform: translateY(-10px);
        }

        .btn-catatan:hover {
            border-left: 8px solid #fab005;
            transform: translateY(-10px);
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="index.php?act=dashboard">MyNotes App</a>
        <a href="index.php?act=logout" class="btn btn-danger" onclick="return confirm('Yakin ingin logout?')">Logout</a>
    </nav>

    <div class="container-dashboard">
        <div class="card">
            <h3>Selamat datang, <?= htmlspecialchars($_SESSION['username']); ?>! 👋</h3>
            <p>Silakan pilih menu di bawah untuk mengelola data Anda.</p>
        </div>

        <div class="dashboard-actions">
            <a href="index.php?act=kategori" class="btn-menu btn-kategori">
                📁 Kelola Kategori
                <span>Atur label dan klasifikasi catatan kamu</span>
            </a>

            <a href="index.php?act=catatan" class="btn-menu btn-catatan">
                📝 Kelola Catatan
                <span>Lihat, buat, dan edit catatan harian kamu</span>
            </a>
        </div>
    </div>
</body>
</html>
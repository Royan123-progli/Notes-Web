<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Admin</title>
    <link rel="stylesheet" href="public/css/style3.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Register Admin Baru</div>

     <?php if (isset($_SESSION['error_msg'])): ?>
        <script>
        alert("<?php echo $_SESSION['error_msg']; ?>");
        </script>
     <?php 
        unset($_SESSION['error_msg']); 
     ?>
     <?php endif; ?>

            <form action="index.php?act=register-process" method="POST">
                    <div class="form group">
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn" style="background-color: #28a745;">daftar</button>
            </form>
            <hr>
            <a href="index.php?act=login" class="text-center">Sudah punya akun? Login di sini</a>
        </div>
    </div>
</body>
</html>



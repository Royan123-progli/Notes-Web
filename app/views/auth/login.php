<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="public/css/style3.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Login Admin</div>

            <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            <?php if(isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>

            <form action="index.php?act=login-process" method="POST">
                    <div class="form group">
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn" style="background-color: #007bff;">Login</button>
            </form>
            <hr>
            <a href="index.php?act=register" class="text-center">Belum punya akun? Daftar di sini</a>
        </div>
    </div>
</body>
</html>
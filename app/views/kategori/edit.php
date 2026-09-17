<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/for.css">
    <title>edit</title>
</head>
<body>
    <div class="container" style="margin-top: 80px;">
        <div class="card">
            <h2>Edit Kategori</h2>
            <a href="index.php?act=kategori" class="btn btn-primary">Kembali</a>

            <?php if (isset($_SESSION['error_msg'])): ?>
                <div class="error-message">
                    <div class="alert alert-danger">
                        <?= $_SESSION['error_msg']; ?>
                    </div>
                </div>
                <?php 
                unset($_SESSION['error_msg']); 
                ?>
            <?php endif; ?>

            <form action="index.php?act=kategori-edit-proses" method="POST" style="margin-top: 20px;">
                <input type="hidden" name="id" value="<?= $kategori['id']; ?>">

                <div class="form-group">
                    <label>Nama Kategori:</label> <br>
                    <input type="text" name="nama_kategori" value="<?= $kategori['nama_kategori']; ?>" 
                           required style="width: 300px; padding: 5px;">
                </div>

                <button type="submit" class="btn" style="padding: 5px 20px; background-color: #007bff; color: white; border: none; cursor: pointer; margin-top: 10px;">
                    Update
                </button>
            </form>
        </div>
    </div>
</body>
</html>
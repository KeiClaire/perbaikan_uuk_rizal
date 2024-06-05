<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aplikasi Pengaduan Masyarakat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h4 class="text-center">Login Masyarakat</h4>
            <div class="card">
                <div class="card-body">
                    <form action="proses-login-masyarakat.php" method="post">
                        <div class="form-group mb-2">
                            <label>No KTP</label>
                            <input type="text" name="no_ktp" class="form-control" placeholder="Masukan NO KTP Anda..." required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda..." required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                        <a href="index2.php">Login Sebagai Admin / Petugas</a>
                </div>
            </div>
        </div>
    </div>
</div>    
<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>
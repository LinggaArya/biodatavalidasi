<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('asset/css/bootstrap.css') ?>>
    <title>Tampil Biodata</title>
</head>
<body>
<nav class="navbar bg-white navbar-expand-lg" data-bs-theme="white">
  <div class="container">
    <a class="navbar-brand" href="#">Lingga</a>
    <div> 
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url("biodata/index")?>">Input Biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url("biodata/save")?>">Biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<div class="container mt-5">
    <h2 class="mb-4">Form Tampil Biodata</h2>
    <table class="table">
        <tbody>
            <tr>
            <th>Nama</th>
            <th>:</th>
            <td> <?= $nama; ?> </td>
            </tr>
            <tr>
            <th>Email</th>
            <th>:</th>
            <td> <?= $email; ?> </td>
            </tr>
            <tr>
            <th>Alamat</th>
            <th>:</th>
            <td> <?= $alamat; ?> </td>
            </tr>
            <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <td> <?= $tanggal_lahir; ?> </td>
            </tr>
            <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <td> <?= $jenis_kelamin; ?> </td>
            </tr>
            <tr>
            <th>Pekerjaan</th>
            <th>:</th>
            <td> <?= $pekerjaan; ?> </td>
            </tr>
            <button type="reset"><a href="<?= base_url('index'); ?>">kembali</a> </button>
        </tbody>
        </table>
</div>
</body>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
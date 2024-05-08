<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('asset/css/bootstrap.css') ?>>
    <title>Data Diri</title>
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
  <h2 class="mb-4">Form Data Diri</h2>
  <form action="<?= base_url('save'); ?>" method="post">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <textarea class="form-control" id="alamat"  name="alamat" rows="3" placeholder="Masukkan alamat"></textarea>
    </div>
    <div class="form-group">
      <label for="tanggal_lahir">Tanggal Lahir:</label>
      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
    </div>
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin:</label>
      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="pekerjaan">Pekerjaan:</label>
      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan pekerjaan">
    </div>
    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
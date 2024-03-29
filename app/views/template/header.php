<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?>
    </title>
    <!-- script -->
    <script src="<?= BASEURL; ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
    <script src="<?= BASEURL; ?>/js/script.js"></script>

    <link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.css">
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=BASEURL;?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../public/home">Home</a>
          <a class="nav-link" href="<?= BASEURL; ?>/about ">About</a>
          <a class="nav-link" href="<?= BASEURL; ?>/about/page
          ">Biodata</a>
          <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
        </div>
      </div>
    </div>
</nav>
</div>
    
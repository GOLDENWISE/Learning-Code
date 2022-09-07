<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid ms-5">
        <a class="navbar-brand">CodeIgniter3</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
            <a class="nav-link" href="<?= base_url(); ?>Mahasiswa/index">Students</a>
            <a class="nav-link" href="<?= base_url(); ?>People/index">Peoples</a>
            <a class="nav-link" href="#">About</a>
          </div>
        </div>
      </div>
</nav>
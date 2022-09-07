<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"]; ?></title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light mb-3">
    <div class="container-fluid ms-5">
        <a class="navbar-brand" href="#">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://localhost/phpmvc/public">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://localhost/phpmvc/public/Mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/phpmvc/public/About">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
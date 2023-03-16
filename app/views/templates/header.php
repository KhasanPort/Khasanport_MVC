<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/header.css">
    <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
</head>

<body style="padding-top: 100px; box-sizing: border-box;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a href="" class="navbar-brand">Khasanport</a>
      <input type="checkbox" class="check" id="check"> <label for="check" class="text-white">Dark Mode</label>
      <button class="navbar-toogle yoi">
        <span class="navbar-toggler-icon bg-black "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="<?= BASEURL; ?>/home" class="nav-link active" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">About</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link active" aria-current="page">Project</a>
          </li>
          <li class="nav-item">
              <a href="<?= BASEURL; ?>about#contact" class="nav-link active" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="alert alert-danger text-center fixed hidden" role="alert">
        <marquee behavior="" direction="">
          <strong class="text-danger"> OH Yeah! </strong>, the navbar is not work. sorry i dont care.🤣
        </marquee>
      </div>
  <!-- Akhir Navbar -->

  <script>
    
    const html = document.querySelector('body');
    const a = document.querySelector('.fixed');
    const yoi = document.querySelector('.yoi');
    const dark = document.querySelector('.check');

    if(window.innerWidth >= 1025) {
      yoi.classList.add('hidden');
    }
    
    dark.addEventListener('click', function(e) {
      html.classList.toggle('dark');
    })
    
    yoi.addEventListener('click', function(e) {
      e.preventDefault();
      a.classList.remove('hidden');
    })

  </script>
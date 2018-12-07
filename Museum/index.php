<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Museum of History</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<style>
body
{
    background-color: #d1cfcc;
    font-family: 'Noto Sans SC', sans-serif;
}
#mainNavbar
{
    font-size: 1.5rem;
    font-weight: 100;
}

#mainNavbar .nav-link
{
    color: white;
}

#mainNavbar .nav-link:hover
{
    color: gray;
}

#mainNavbar .navbar-brand
{
    color: black;
    font-size: 1.5rem;
    font-weight: 100;
}

</style>

</head>


<body>

<nav id = "mainNavbar" class="navbar navbar-expand-lg navbar-light bg-primary py-0 fixed-top">
  <a class="navbar-brand" href="#">Museum of History</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active navbar-right">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tickets</a>
      </li>
    </ul>
  </div>
</nav>


<section id = "info">

<div class = "container-fluid">

<div class = "row mt-5 mb-5">

<div class = "col-12 col-md-6 mt-5">
<h1 class = "display-4 d-block d-md-none">About The Museum</h1>
<img class ="img-fluid" src = "plane.jpg" alt = "Fighter planes">
</div>
<div class = "col-12 col-md-6 mt-5">
<h1 class = "display-4 d-none d-md-block">About The Museum</h1>
<p>Lorem Ipsum</p>
</div>

</div>

<hr style = "color: white;">

<div class = "row mt-5 mb-5">

<div class = "col-12 col-md-6">
<h1 class = "display-4">Exhibits</h1>
<p class = "d-none d-md-block">Lorem Ipsum</p>
</div>

<div class = "col-12 col-md-6">
<img class ="img-fluid" src = "plane.jpg" alt = "Fighter planes">
<p class = "d-block d-md-none">Lorem Ipsum</p>

</div>



</div>

</div>

</section>


</body>
</html>
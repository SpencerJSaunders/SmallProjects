<!DOCTYPE html>
<html lang="en">
<head>

    <title>Bootstrap Nav Bars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type = "text/css">
    .pink
    {
       background: pink;
       border: 1px solid purple; 
      

    }
    .fix
    {
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>

</head>
<body>



<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class = "container-fluid">
      <div class = "navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a href = "#" class = "navbar-brand">Spencer Saunders</a>
    </div>

    <div class = "collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class = "nav navbar-nav">
            <li><a href = "#">About</a></li>
            <li><a href = "#">Contact</a></li>
        </ul>

        <ul class = "nav navbar-nav navbar-right">
            <li><a href = "#">Sign Up</a></li>
            <li><a href = "#">Login</a></li>
        </ul>
</div>
</div>
</nav>

        <div class ="jumbotron">
            <p>test</p>
        </div>

        <div class = "container">

        <div class = "row">
        <div class = "col-md-3 col-sm-6 pink fix">

        <div class = "row">
            <div class = "col-lg-6 pink">First</div>
            <div class = "col-lg-6 pink">Other Half</div>
        </div>
        </div>

        <div class = "col-md-3 col-sm-6 pink fix">Tour Date!</div>
        <div class = "col-md-3 col-sm-6 pink fix">Tour Date!</div>
        <div class = "col-md-3 col-sm-6 pink fix">Tour Date!</div>

        </div>
        </div>


</body>
</html>
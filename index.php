<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Front-end</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilo.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

<div id="banner" class="jumbotron jumbotron-fluid">
  <!-- header -->
  <nav id="navegador" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img class="logo" src="assets/imgs/logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input id="email-topo" class="form-control mr-sm-2" type="search" placeholder="Your Email"
          aria-label="Your Email">
          <button id="btn-topo" class="btn btn-outline" type="submit">Subscribe</button>
      </form>
    </div>
  </nav>
  <!-- baner -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid tela" src="assets/imgs/tela.png" alt="Tela">
      </div>
      <div class="offset-md-1 col-md-5">
        <h1 class="display-4 titulo-banner">We focus on ergonomics</h1>
        <p class="minetext">Most calendars are designed for teams. <br>
          Slate is designed for freelancers</p><br>
          <button type="button" class="btn btn-primary btn-try-bg">Try For Free</button>
      </div>
    </div>
  </div>
</div>

<!-- home -->
<section id="features">
  <img class="img-fluid onda" src="assets/imgs/onda_banner.png" alt="">
  <div id="bg" class="container-fluid text-center">
    <span class="minetext">At your fingertipes</span>
    <h1 class="minetext title-larg ">Features</h1>
    <p class="minetext">Most calendars are designed for teams. <br>
      Slate is designed for freelancers</p><br>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4 class="minetext title-medio"><img class="padding-right" src="assets/imgs/check.png" alt="">The best products
            start with Sketch</h4>
          <p class="minetext">Slate helps you see how many
            more days you need to work to
            reach your financial goal.</p>
        </div>
        <div class="col-md-4">
          <h4 class="minetext title-medio"><img class="padding-right" src="assets/imgs/plus.png" alt="">Fastest way to
            organize</h4>
          <p class="minetext">Slate helps you see how many
            more days you need to work to
            reach your financial goal.</p>
        </div>
        <div class="col-md-4">
          <h4 class="minetext title-medio"><img class="padding-right" src="assets/imgs/isc.png" alt="">Work better
            together</h4>
          <p class="minetext">Slate helps you see how many
            more days you need to work to
            reach your financial goal.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sessoes">
  <div id="bg" class="container-fluid text-center">
    <h1 class="minetext title-larg ">Lightning fast prototyping </h1>
    <p class="minetext">Most calendars are designed for teams. <br>
      Slate is designed for freelancers</p><br>
    
    <button type="button" class="btn btn-primary btn-try">Try For Free</button>

    <div id="img-proto" class="container">
      <img class="img-fluid" src="assets/imgs/proto.png" alt="">
    </div>
  </div>
</section>

<section id="sessoes">
  <div id="bg" class="container-fluid text-center">
    <p class="minetext">At your fingertips</p><br>
    <h1 class="minetext title-larg ">Lightning fast prototyping </h1>

    <p class="minetext">Subscribe to our Newsletter</p>
    <span class="minetext">Available exclusivery on Figmaland</span>


    <div class="container" id="form">
      <form action="">
        <div class="form-group">
          <input type="search" placeholder="Your Email" aria-label="Your Email" class="form-control input-email">
        </div>
        <button type="submit" class="btn btn-primary btn-submeter">Subscrever</button>
      </form>
    </div>
  </div>
</section>

<section id="sessoes">
  <div id="bg" class="container-fluid text-center">
    <h1 class="minetext title-larg ">Partners</h1>
    <p class="minetext">Most calendars are designed for teams. 
      Slate is designed for freelancers</p><br>
    
    <div id="img-proto" class="container">

    </div>
  </div>
</section>
    
</body>
</html>
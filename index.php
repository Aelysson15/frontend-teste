<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Front-end</title>
    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

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
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img id="fade" class="img-fluid tela" src="assets/imgs/tela.png" alt="Tela">
      </div>
      <div class="offset-md-1 col-md-5">
        <h2 class="display-4 titulo-banner">We focus on ergonomics</h2>
        <p class="minetext">Most calendars are designed for teams. <br>
          Slate is designed for freelancers</p><br>
          <button type="button" class="btn btn-primary btn-try-bg zoom">Try For Free</button>
      </div>
    </div>
  </div>
</div>

<!-- home -->
<section id="features">
  <img class="img-fluid onda" src="assets/imgs/onda_banner.png" alt="">
  <div id="bg" class="container-fluid text-center">
    <span class="minetext">At your fingertipes</span>
    <h2 class="minetext title-larg ">Features</h2>
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
    <h2 class="minetext title-larg ">Lightning fast prototyping </h2>
    <p class="minetext">Most calendars are designed for teams. <br>
      Slate is designed for freelancers</p><br>
    
    <button type="button" class="btn btn-primary btn-try zoom">Try For Free</button>

    <div id="img-proto" class="container">
      <img class="img-fluid" src="assets/imgs/proto.png" alt="">
    </div>
  </div>
</section>

<section id="sessoes">
  <div id="bg" class="container-fluid text-center">
    <p class="minetext">At your fingertips</p><br>
    <h2 class="minetext title-larg ">Lightning fast prototyping </h2>

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

<section id="partners">
  <div id="bg" class="container-fluid text-center">
    <h2 class="minetext title-larg ">Partners</h2>
    <p class="minetext">Most calendars are designed for teams. 
      Slate is designed for freelancers</p><br>
    
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="name">Client Name</p>
            <img class="img-fluid icone zoom" src="assets/imgs/cube.png" alt="icon1">
            <p class="minetext">Slate helps you see how many
              more days you need to work to
              reach your financial goal.</p>
          </div>
          <div class="col-md-4">
            <p class="name">Client Name</p>
            <img class="img-fluid icone zoom" src="assets/imgs/android.png" alt="icon2">
            <p class="minetext">Slate helps you see how many
              more days you need to work to
              reach your financial goal.</p>
          </div>
          <div class="col-md-4">
            <p class="name">Client Name</p>
            <img class="img-fluid icone zoom" src="assets/imgs/basecamp.png" alt="icon3">
            <p class="minetext">Slate helps you see how many
              more days you need to work to
              reach your financial goal.</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <p class="name">Client Name</p>
            <img class="img-fluid icone zoom" src="assets/imgs/basecamp.png" alt="icon1">
            <p class="minetext">Slate helps you see how many
              more days you need to work to
              reach your financial goal.</p>
          </div>
          <div class="col-md-4">
            <p class="name">Client Name</p>
            <img class="img-fluid icone zoom" src="assets/imgs/air-bnb.png" alt="icon2">
            <p class="minetext">Slate helps you see how many
              more days you need to work to
              reach your financial goal.</p>
          </div>
          <div class="col-md-4">
            <p class="name">Client Name</p>
            <img class="img-fluid icone zoom" src="assets/imgs/app-store.png" alt="icon3">
            <p class="minetext">Slate helps you see how many
              more days you need to work to
              reach your financial goal.</p>
          </div>
        </div>
      </div>
  </div>
</section>

<section id="testimonials">
  <div id="bg" class="container-fluid text-center">
    <h2 class="minetext title-larg ">Testimonials</h2>
    <p class="minetext">Most calendars are designed for teams. 
      Slate is designed for freelancers</p><br>

    <img class="img-fluid" style="max-width:200px;margin-bottom:20px;" src="assets/imgs/dropbox.png" alt="dropbox"><br>
    <span class="minetext">Most calendars are designed for teams. Slate is designed for <br>freelancers who want a simple 
      way to plan their schedule.</span>
    <div class="container" style="margin-top:25px;">
      <p class="minetext title-medio">
        <img class="padding-right" src="assets/imgs/user.png" alt="">
        <span style="font-weight: 500;">Organize across</span><br>
        Ui designer</p>
      <button type="button" class="btn btn-primary btn-try">More Testimonials</button>
    </div>
  </div>
</section>

<section id="pricing">
  <div id="bg" class="container-fluid text-center">
    <h2 class="minetext title-larg ">Pricing</h2>
    <p class="minetext">Most calendars are designed for teams. <br>
      Slate is designed for freelancers</p><br>

    <div class="row">
      <div class="col-md-4">
        <div class="card zoom" style="width: 18rem; margin: auto;">
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
            <button type="button" class="btn btn-primary btn-try">Order Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card zoom" style="width: 18rem; margin: auto;">
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
            <button type="button" class="btn btn-primary btn-try">Order Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card zoom" style="width: 18rem;margin: auto;background: linear-gradient(39.97deg, #EF2779 0.79%, #7834BE 79.29%);
        color: #fff;">
          <div class="card-body">
            <h3 class="card-title text-left">BUSINESS</h3>
            <p class="card-subtitle mb-2 text-left text-muted sub-branco">Organize across all apps by hand</p>
            <div class="row">
              <div class="col-4">
                <h1 class="card-text text-right">99</h1>
              </div>
              <div class="col-8">
                <h3 class="text-left">$</h3>
                <p class="sub-branco text-left">Per Month</p>
              </div>
            </div>
            <button type="button" class="btn btn-primary btn-try-bg2" style="color: #eb277b">Order Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contato">
  <div class="container">
    <h2 class="minetext text-black title-larg text-center" style=>Contact Us</h2>
    <p class="minetext text-black text-center">Most calendars are designed for teams. <br>
    Slate is designed for freelancers<br>
  
  
    <div class="row">
      <div class="col-md-6">
        <div id="card-contato" class="card">
          <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <form class="my-2 my-lg-0">
                <div class="form-group">
                  <input id="input-contato" class="form-control mr-sm-2" type="search" placeholder="Your Name"
                    aria-label="Your Email">
                </div>
                <div class="form-group">
                  <input id="input-contato" class="form-control mr-sm-2" type="search" placeholder="Your Email"
                  aria-label="Your Email">
                </div>
                <div class="form-group">
                  <textarea id="area-contato" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-send">Send</button>
              </form>
            </div>
          </div>
        </div>
      <div class="col-md-6">
        <ul id="contatos" class="list-group list-group-flush">
          <li class="list-group-item"><img src="assets/imgs/map.png" alt="map"> <span>6386 Spring St undefined Anchorage, <br>
            Georgia 12473 United States</span></li>
          <li class="list-group-item"><img src="assets/imgs/phone.png" alt="map"> <span>(843) 555-0130</li>
          <li class="list-group-item"><img src="assets/imgs/mail.png" alt="map"> <span>my.mail@example.com</li>
        </ul>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="assets/imgs/tw.png" alt="tw"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="assets/imgs/fb.png" alt="fb"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="assets/imgs/in.png" alt="in"></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="footer">
  <div class="container-fluid">
  
    <div class="row">
      <div class="col-md-3">
        <ul id="contatos" class="list-group list-group-flush">
          <li class="list-group-item"><h2 class="minetext" style=>Pages</h2></li>
          <li class="list-group-item"><span>Eleanor Edwards</span></li>
          <li class="list-group-item"><span>Ted Robertson</span></li>
          <li class="list-group-item"><span>Annette Russell</span></li>
          <li class="list-group-item"><span>Jennie Mckinney</span></li>
          <li class="list-group-item"><span>Gloria Richards</span></li>
        </ul>
      </div>

      <div class="col-md-5">
        <div class="mapouter">
          <iframe width="472" height="247" class="responsive-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Av.%20Almirante%20Barroso,%20284%20Campina%20Grande+(Teste)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-generator.com/pt'>Maps-Generator</a> <script type='text/javascript' src='https://maps-generator.com/google-maps-authorization/script.js?id=dd1e3f4086ef86dcd2612133caee9b7d74153e8b'></script>
        </div>
      </div>

      <div class="col-md-4">
        <ul id="contatos" class="list-group list-group-flush">
          <li class="list-group-item"><img src="assets/imgs/map.png" alt="map"> <span>6386 Spring St undefined Anchorage, <br>
            Georgia 12473 United States</span></li>
          <li class="list-group-item"><img src="assets/imgs/phone.png" alt="map"> <span>(843) 555-0130</li>
          <li class="list-group-item"><img src="assets/imgs/mail.png" alt="map"> <span>my.mail@example.com</li>
        </ul>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="assets/imgs/tw.png" alt="tw"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="assets/imgs/fb.png" alt="fb"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="assets/imgs/in.png" alt="in"></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>
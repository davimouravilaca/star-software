<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="https://icons.iconarchive.com/icons/pictogrammers/material/128/death-star-variant-icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php include "includes/navbar.html" ?>
        <h1 class="display-1 mt-3">Star Software</h1>
        <p class="lead">brighty development, shine hosting</p>
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/coding.jpg" class="d-block w-100" alt="coding">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem ipsum dolor</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/cafe.jpg" class="d-block w-100" alt="cafe">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem ipsum dolor</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-sm text-start">
    <h2 class="display-4">Sobre nós</h2>
    <p class="lead">
        Somos uma desenvolvedora independente que utiliza das melhores tecnologias do mercado com o objetivo de atender da maneira mais efetivas os nossos clientes mais únicos com suas necessidades exclusivas.
        Seja uma empresa inovadora necessitando de um software robusto e eficaz ou uma pequena loja em busca de uma hospedagem acessível e confiável, a <strong>Star Software</strong> 
        <img src="https://icons.iconarchive.com/icons/pictogrammers/material/128/death-star-variant-icon.png" alt="logo" width="20" height="20"> é a escolha ideal para você.

        <figure>
  <blockquote class="blockquote">
    <p>"If people do not believe that mathematics is simple, it is only because they do not realize how complicated life is."</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  John von Neumann in <cite title="Source Title">Association for Computing Machinery, 1947</cite>
  </figcaption>
</figure>   
    </p>
    </div>

    <div class="container-sm text-start">
    <h2 class="display-4 b-2">Nossos Projetos</h2>
    <p class="lead">Divirta-se com algumas de nossas aplicações enquanto experimenta todo o poder de nossos servidores <strong>Vulture™</strong>:</p>
    </div>
    <div class="row" style="width: 36rem;">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
    <img src="img/horrorcraft.png" class="card-img-top" alt="Horrorcraft">
      <div class="card-body">
        <h5 class="card-title">Horrocraft</h5>
        <p class="card-text">Uma rede social para os amantes dos causos e creepypastas.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <a target="_blank" href="http://localhost/site-de-contos/main" class="btn btn-primary">Visitar a página</a>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <img src="img/trucobet.png" class="card-img-top" alt="Trucobet">
      <div class="card-body">
        <h5 class="card-title">Truco.bet</h5>
        <p class="card-text">Jogue o classico truco mineiro, sozinho ou com amigos em um ambiente simulado.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <a href="#" class="btn btn-primary disabled">Visitar a página</a>
      </div>
    </div>
  </div>
</div>

    </div>
    <footer>
    <p style="text-align:center">© <?=date('Y')?>. Star Software. Todos os direitos reservados.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>

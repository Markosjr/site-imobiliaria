<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Imobiliária</title>

    <link rel="stylesheet" href="_cdn/css/bootstrap_person.css">
    <link rel="stylesheet" href="_cdn/css/app.css">
</head>
<body>

<header class="main_header">

    <div class="header_bar bg-front">
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-location-arrow"></i>
                    <p class="my-auto ml-3">Avenida Guilherme de Paula Xavier, 1723 Campo Mourão/Pr</p>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-clock-o"></i>
                    <p class="my-auto ml-3">Seg/Sex: 09:00h - 18:00 </br> Sáb: 09:00 - 13:00 </p>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-envelope"></i>
                    <p class="my-auto ml-3">contato@imobsantamaria.com.br </br>+55 (44) 9999-1234</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light my-3">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.php">
                    <h1 class="visually-hidden">Imobiliária</h1>
                    <img src="assets/images/logo.png" alt="" class="d-inline-block" width="180">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-front" aria-current="page" href="#">Destaque</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Alugar</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Comprar</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<?php

$getApp = filter_input(INPUT_GET, 'app', FILTER_DEFAULT);

if(empty($getApp)){
    require 'widget/home.php';
}elseif (!empty($getApp) && file_exists('widget/'.$getApp .'.php')){
    require 'widget/'.$getApp .'.php';
}else{
    echo "Erro 404, Página não encontrada!";
}
?>

<article class="main_optin bg-black text-white py-5">
    <div class="container">
        <div class="row mx-auto"  style="max-width: 600px">
            <h1>Quer ficar por dentro de todas as novidades?</h1>
            <p>Deixe seu nome e seu melhor e-mail nos campos abaixo e nós vamos lhe informar sobre os melhores negócios</p>

            <form action="">
                <input type="text" class="form-control" placeholder="Digite seu nome" size="50">
                <input type="email" class="form-control" placeholder="Digite seu melhor e-mail" size="50">
                <button type="submit" class="btn btn-front"> Me avise!</button>
            </form>
        </div>
    </div>
</article>


<section class="main_footer bg-light" style="background: url(assets/images/footer.png) repeat-x bottom center; background-size:10% ">
    <div class="container pt-5" style="padding-bottom: 125px">
        <div class="row justify-content-around text-muted">
            <div class="col-3">
                <h1 class="pb-2"> Navegue <span class="text-front"> Aqui! </span></h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="" class="text-front">Destaque</a></li>
                    <li><a href="">Alugar</a></li>
                    <li><a href="">Comprar</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>

            <div class="col-6">
                <h1 class="pb-2"> Nos <span class="text-front"> Conheça! </span></h1>
                <p> Nossa maior satisfação é lhe ajudar a encontrar o seu imóvel dos sonhos!</p>

                <h1 class="pb-2"> Quer <span class="text-front"> Investir? </span></h1>
                <p> Entre em contato para que possa ficar sempre informado sobre os melhores negócios!</p>
            </div>

            <div class="col-3">
                <button class="btn btn-front icon-whatsapp icon-notext"></button>
                <button class="btn btn-front icon-facebook icon-notext"></button>
                <button class="btn btn-front icon-instagram icon-notext"></button>
            </div>
        </div>
    </div>
</section>

<div class="main_copyright py-3 bg-front text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="mb-0"> Imobiliária | CRECI 1234 | Avenida Guilherme de Paula Xavier, 1723 Campo Mourão/Pr </p>
                <p class="mb-0"> Todos os direitos reservados - Desenvolvido por Marcos Junior®</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/i18n/defaults-pt_BR.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
    });
</script>

</body>
</html>

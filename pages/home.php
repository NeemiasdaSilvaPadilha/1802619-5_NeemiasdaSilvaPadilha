<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>FRUTO - Doces Online | Início</title>
</head>
<?php
    include 'data/produtos.php';
?>
<main>
    <div class="container marketing">
        <div class="row pb-5">
            <h2 class="featurette-heading fs-1">Escolha o seu potinho agora mesmo!</h2>
            <p class="lead mb-5">São frutas fresquinhas, que além de ter bom gosto, bom preparo, vai cuidar da sua saúde! </p>
            <hr class="featurette-divider mb-5">
    <div></div>
            
<!-- Pote 1-->
    <div class="col-lg-4">
        <img src="<?php echo $arr['1']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['1']['name'] ?>">
        <h2 class="mt-3"><?php echo $arr['1']['name'] ?></h2>
        <p><?php echo $arr['1']['description'] ?></p>
        <p><a class="btn btn-outline-danger" href="?i=produto1">Encomendar Agora</a></p>
    </div>

<!-- Pote 2-->
    <div class="col-lg-4">
        <img src="<?php echo $arr['2']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['2']['name'] ?>">
        <h2 class="mt-3"><?php echo $arr['2']['name'] ?></h2>
        <p><?php echo $arr['2']['description'] ?></p>
        <p><a class="btn btn-outline-danger" href="?i=produto2">Encomendar Agora</a></p>
    </div>
            
<!-- Pote 3-->
    <div class="col-lg-4">
        <img src="<?php echo $arr['3']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['3']['name'] ?>">
        <h2 class="mt-3"><?php echo $arr['3']['name'] ?></h2>
        <p><?php echo $arr['3']['description'] ?></p>
        <p><a class="btn btn-outline-danger" href="?i=produto3">Encomendar Agora</a></p>
    </div>

<!-- Pote 4 -->
    <div class="col-lg-4 mt-5">
        <img src="<?php echo $arr['4']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['4']['name'] ?>">
        <h2 class="mt-3"><?php echo $arr['4']['name'] ?></h2>
        <p><?php echo $arr['4']['description'] ?></p>
        <p><a class="btn btn-outline-danger" href="?i=produto4">Encomendar Agora</a></p>
    </div>

<!-- Pote 5 -->
    <div class="col-lg-4 mt-5">
        <img src="<?php echo $arr['5']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['5']['name'] ?>">
        <h2 class="mt-3"><?php echo $arr['5']['name'] ?></h2>
        <p><?php echo $arr['5']['description'] ?></p>
        <p><a class="btn btn-outline-danger" href="?i=produto5">Encomendar Agora</a></p>
    </div>

<!-- Pote 6 -->
    <div class="col-lg-4 mt-5">
        <img src="<?php echo $arr['6']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['6']['name'] ?>">
        <h2 class="mt-3"><?php echo $arr['6']['name'] ?></h2>
        <p><?php echo $arr['6']['description'] ?></p>
        <p><a class="btn btn-outline-danger" href="?i=contato">Encomendar Agora</a></p>
    </div>
</div>
</div> 
</div>
        
<div class="container my-5">
        <h2 class="featurette-heading"><center>Após fazer seu pedido, aguarde onde você estiver, que chegaremos até você!<span class="text-muted">Entrega super rápida</span></h2>
        <p class="lead">Você pede e nós fabricamos seu potinho com as suas frutas preferidas e mais, elas são fresquinhas, APROVEITE!</p>
      </div>  
</main>
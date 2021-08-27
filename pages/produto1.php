<?php
    include 'data/produtos.php'
?>
<head>
    <title>FRUTO - Doces Online| Potinho 01</title>
</head>
<main>  
    <div class="container">  
        <div class="container-fluid d-flex justify-content-between px-5 py-5">            
            <div>                
                <div>
                    <h1 class="display-5 fw-bold"><?php echo $arr['1']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['1']['about'] ?></p>
                    <p>__________________________________________________________________________________________</p><br>
                </div>              
                <div class="mt-5">                    
                    <p class="mb-0">Compre agora:</p>
                    <p class="display-1">R$ <?php echo $arr['1']['price'] ?><span class="fs-6">/UN</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Encomendar Agora</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Solicitar uma Prova</button>                
                </div>            
            </div>                        
            <img src="./img/potinho01.png" width="400px" height="400px">            
         </div>                     
    </div>
    <div class="container pt-0 mb-4 bg-light rounded-3">      
    </div>
</main>
<div class="container">            
            <h1>FRUTAS EM POTINHOS</h1> <br>                
            Fazer salada de frutas é algo muito fácil.
            <br>Basicamente o primeiro passo consiste em picar vários tipos de frutas, como mamão, banana, maçã, laranja, morango, pêssego, 
            <br>manga e outros tipos de frutas que desejar.<br>
            <br>Uma dica é retirar aquelas partes brancas da laranja na hora que estiver descascando e picar todas as frutas em tamanhos bem pequenos.
            <br>Algumas pessoas preparam a salada de frutas apenas com as frutas, porém uma dica para ter um produto mais saboroso é colocar 
            <br>também o suco de uma fruta, como a laranja, por exemplo. Isso fará com que sua salada fique melhor para consumir e com maior sabor.
            <br>Após isso é só levar para a geladeira e quando estiver na temperatura ideal, basta ir colocando nos potinhos de plástico com tampa 
            <br>para sair vendendo. Oferecer algum tipo de acompanhante para seu produto é interessante, então poderá oferecer alguma cobertura, 
            <br>leite condensado e farinha láctea que são produtos que tem uma boa aceitação com a salada de frutas.

        </div> 
<!-- opções de entrega -->
        <div class="container">
            <h1>Formas de Entrega:</h1> <br>
            <p class="">Quer receber bem rápido? Deixa com a gente: <br></p>
            <img src="./img/ifood.png" width="250px" alt="ifood" class="mt-3 me-5">
            <img src="./img/uber-eats.png" width="250px" alt="uber-eats" class="mt-3 me-5">
            <img src="./img/rappi.png" width="250px" alt="uber-eats" class="mt-3">
        </div>
    </body>
</html>
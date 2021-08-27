<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">    
    <title>FRUTO - Doces Online | Contato</title>
</head>

<main>
    <div class="container">
        <div class="container-fluid px-5 py-5 pb-4">
            <h1 class="display-5 fw-bold">FRUTO - Doces Online | Contato</h1>
            <p>Aqui temos várias formas de você entrar em contato com a gente!</p>
            <br>
        </div>
    </div>
<div class="container">
        <h2 class="px-5">Fale logo com a Gente, estamos ansiosos...</h2>
        <br>
        <div class="px-5 d-flex align-items-start flex-row">            

            <address class="me-3">
                <strong>Quer enviar um Email?</strong><br>
                <a class="bg-light" href="mailto:frutodocesonline@frutoonline.com">frutodocesonline@frutoonline.com</a>
            </address>
            <address class="me-3">
                <strong>Ligue pra gente:</strong><br>
                (46) 98877-6655
            </address>
            <address class="me-3">
                <strong>Chama no WhatApp</strong><br>
                (46) 98877-6655
            </address>
        </div>
    </div>
<!-- formulario -->
    <div class="content">
        <h2 class="pt-3">Quer falar com a gente?</h2>
        <p>Aceitamos sugestões de melhorias, faça sua reclamação, envie-nos uma mensagem!</p>
        
        <form>
        <div class="form-row">
            <div class="form-group col-md-6 pb-2">
                <label>Nome:</label>
                <input type="input" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group col-md-6 pb-2">
                <label for="inputEmail4">Email:</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Digite seu Email">
            </div>
        </div>
        <div class="form-group pb-2">
            <label for="inputAddress">Endereço:</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Digite seu endereço">
        </div>
            <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade:</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Digite sua cidade">
                    </div>
                    <div class="form-group col-md-4 pb-2">
                        <label for="inputEstado">Selecione UF:</label>
                        <select id="inputEstado" class="form-control">
                            <option selected></option>
                            <option>PR</option>
                            <option>SC</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 pb-2">
                        <label for="inputCEP">CEP:</label>
                        <input type="text" class="form-control" id="inputCEP" placeholder="xx.xxx-xxx">
                    </div>  
                    <div class="form-group">
                        <label for="inputexto">SUA MENSAGEM:</label>
                        <textarea class="form-control" id="inputtexto" rows="3" placeholder="Digite sua memsagem..."></textarea>
                    </div>                  
            </div>
            <br>
        <button type="text" class="btn btn-danger">Enviar</button>
        </form>
        <br>
    </div>
</main>
<!-- HTML -->
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
<body>

<?php 
$pages = 'home';  

if(isset($_GET['i'])){
     $pages = addslashes($_GET['i']); 
}
    //header
    include 'pages/header.php';
    //mains
    switch ($pages) {
        case 'sobre_nos':
            include 'pages/sobre_nos.php';
            break;
        case 'contato':
            include 'pages/contato.php';
            break;
        case 'localizacao':
            include 'pages/localizacao.php';
            break;
        case 'produto1':
            include 'pages/produto1.php';
            break;
        case 'produto2':
            include 'pages/produto2.php';
            break;
        case 'produto3':
            include 'pages/produto3.php';
            break;
        case 'produto4':
            include 'pages/produto4.php';
            break;
        case 'produto5':
            include 'pages/produto5.php';
            break;            
        default:
        include 'pages/home.php';
        break;
        }
    //footer
    include 'pages/footer.php';
?>  
</body>
</html>
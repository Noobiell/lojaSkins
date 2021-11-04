<!doctype html>
<html lang="pt-br">
  <head>

    <script>
        var b = false;
        function btnPesquisa(classe){
            if(b == true){
                $('.'+classe).show();
            }
            if(b == false){
                $('.'+classe).hide();
            }
            b = !b;
        }
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custon.css">

    <!-- Icones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- ICON PÁGINA -->
    <link rel="icon" href="">

    <title>BlastSkins - CS:GO</title>
  </head>
  <body>
  
    <header id="cabecalho">
        <nav class="navbar navbar-expand-lg barranav fixed-top">
            <div class="container-fluid container-cabecalho">
                <a class="navbar-brand" href="index.php">BlastSkins</a>
                <ul class="navbar-nav navbar-pesquisa">
                    <li class="nav-item">
                        <div class="container-search">
                            <input class="search" type="search" placeholder="Pesquisa" id="pesquisa">
                            <span class="fa fa-search"></span>
                        </div>
                    </li>
                </ul><!--Fim lista (Jogos e procura)-->

                <div class="ml-auto container-carrinho-compra">
                    <a class="btn btn-carrinho d-sm-none" onclick="btnPesquisa('navbar-pesquisa')"><span class="fa fa-search"></span></a>
                    <a class="btn btn-carrinho" href="carrinho.php"><i class="fas fa-shopping-cart"></i><span class="d-none d-sm-inline"> Carrinho</span></a>
                    <a class="btn btn-steam" href="modals.php"><i class="fab fa-steam"></i> <span class="d-none d-sm-inline">Entrar</span></a>
                </div><!--Fim lista (botão steam e dinheiro)-->
            </div><!--Fim container fluid-->
        </nav><!--Fim nnavbar-->
    </header><!--Fim cabeçalho-->
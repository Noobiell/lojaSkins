<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custon.css">

    <!--ICONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Modals</title>
  </head>
  <body>
    <button class="btn" type="button" data-toggle="modal" data-target="#processando">Processando</button>

    <button class="btn" type="button" data-toggle="modal" data-target="#erro">Erro desconhecido</button>

    <button class="btn" type="button" data-toggle="modal" data-target="#troca">Troca</button>

    <button class="btn" type="button" data-toggle="modal" data-target="#cancelamento">Cancelamento</button>


    <!----------------------------------- MODAL PROCESSANDO ---------------------->

    <div class="modal fade" id="processando">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button class="close" type="button" data-dismiss="modal"><span class="fa fa-close"></span></button>
                </div><!--Fim header-->
                <div class="modal-body">
                    <div class="spinner-border text-light" role="status" style="margin-bottom: 25px;">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <h6>Começando o processo</h6>
                    <p>Por favor, aguarde...</p>

                    <div class="suporte-tec">
                        <img class="img-fluid" src="img/suporte-icon.png" width="19%">
                        <div class="suporte-txt">
                            <span style="color: #fff; font-weight: 500; font-size: 15px;">Suporte técnico</span>
                            <span style="color: rgb(167, 167, 167); font-weight: 500; font-size: 13px;">Precisa de ajuda?</span>
                        </div><!--Fim suporte txt-->
                    </div><!--Fim suporte tec-->
                </div><!--Fim body-->
            </div><!--Fim content-->
        </div><!--Fim dialog-->
    </div><!--Fim modal processando-->


    <!----------------------------------- MODAL ERRO ---------------------->

    <div class="modal fade" id="erro">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal"><span class="fa fa-close"></span></button>
                </div><!--Fim header-->
                <div class="modal-body">
                    <i class="	fa fa-exclamation-circle" style="font-size: 55px; color: rgb(122, 122, 122); margin-bottom: 20px;"></i>
                    <h6>Erro desconhecido</h6>
                    <p>Error Code: <span id="error-code"></span></p>
                    <span class="tentar-nov">TENTAR NOVAMENTE</span>

                    <div class="suporte-tec">
                        <img class="img-fluid" src="img/suporte-icon.png" width="19%">
                        <div class="suporte-txt">
                            <span style="color: #fff; font-weight: 500; font-size: 15px;">Suporte técnico</span>
                            <span style="color: rgb(167, 167, 167); font-weight: 500; font-size: 13px;">Precisa de ajuda?</span>
                        </div><!--Fim suporte txt-->
                    </div><!--Fim suporte tec-->
                </div><!--Fim body-->
            </div><!--Fim content-->
        </div><!--Fim dialog-->
    </div><!--Fim modal erro-->


    <!----------------------------------- MODAL TROCA ---------------------->

    <div class="modal fade" id="troca">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal"><span class="fa fa-close"></span></button>
                </div><!--Fim header-->
                <div class="modal-body">
                    <div class="container-fluid" style="background: #001334; box-shadow: 0 0 10px rgba(34, 34, 34, 0.2); padding: 20px 10px 20px 10px;">
                        <div class="row">
                            <div class="col-12 col-lg-3 user">
                                <i class="fa fa-clock-o" style="color:#fff; background: rgba(167, 167, 167, 0.425); padding: 7px; border-radius: 5px; margin-right: 5px;"></i>
                                <div class="user-txt">
                                    <span><b>Bot#482</b></span>
                                    <span class="text-muted">Cadastro 21.06.2016</span>
                                </div>
                            </div><!--Fim coluna usuario-->
                            <div class="col-12 col-lg-4" style="padding-right: 0px; padding-left: 0px;">
                                <div class="lista-armas">
                                    <ul class="armas-modal">
                                        <li><img src="img/armas/knives/blue_steel.png" class="img-arma-modal"></li>
                                        <li><img src="img/armas/knives/blue_steel.png" class="img-arma-modal"></li>
                                        <li><img src="img/armas/knives/blue_steel.png" class="img-arma-modal"></li>
                                        <li class="text-arma"><span>+10</span></li>
                                    </ul>
                                </div><!--Fim lista armas-->
                            </div><!--Fim coluna armas-->
                            <div class="col-12 col-lg-5">
                                <div class="aceitar">
                                    <i class="fa fa-long-arrow-right" style="margin-right: 20px; font-size: 25px; color: rgb(151, 151, 151);"></i>
                                    <span>Aceitar:</span>
                                    <a href="#">Steam</a>
                                    <a href="#">Navegador</a>
                                </div>
                            </div>
                        </div><!--Fim row-->
                    </div><!--Fim container-->

                    <div class="suporte-tec">
                        <img class="img-fluid" src="img/suporte-icon.png" width="19%">
                        <div class="suporte-txt">
                            <span style="color: #fff; font-weight: 500; font-size: 15px;">Suporte técnico</span>
                            <span style="color: rgb(167, 167, 167); font-weight: 500; font-size: 13px;">Precisa de ajuda?</span>
                        </div><!--Fim suporte txt-->
                    </div><!--Fim suporte tec-->
                </div><!--Fim body-->
            </div><!--Fim content-->
        </div><!--Fim dialog-->
    </div><!--Fim modal troca-->


    <!----------------------------------- MODAL CANCELAMENTO ---------------------->
    <div class="modal fade" id="cancelamento">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal"><span class="fa fa-close"></span></button>
                </div><!--Fim header-->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="cancelamento">
                            <img src="img/cancelamento.png" width="55%">
                            <h4>Sua troca foi cancelada!</h4>
                            <p>Se você não cancelou a troca, seus itens correm risco de roubo. Por favor, siga os passos abaixo:</p>
                                <p>1. Mude sua senha na <a href="#">CONFIGURAÇÃO DE CONTAS DA STEAM</a></p>
                                <p>2. <a href="#">REVOGUE</a> a chave da API. Você não precisa de uma nova chave de API</p>
                                <p>3. Criar uma nova <a href="#">URL DE TROCA</a></p>
                        </div><!--Fim cancelamento-->
                    </div><!--Fim container-->

                    <div class="suporte-tec">
                        <img class="img-fluid" src="img/suporte-icon.png" width="19%">
                        <div class="suporte-txt">
                            <span style="color: #fff; font-weight: 500; font-size: 15px;">Suporte técnico</span>
                            <span style="color: rgb(167, 167, 167); font-weight: 500; font-size: 13px;">Precisa de ajuda?</span>
                        </div><!--Fim suporte txt-->
                    </div><!--Fim suporte tec-->
                </div><!--Fim body-->
            </div><!--Fim content-->
        </div><!--Fim dialog-->
    </div><!--Fim modal cancelamento-->

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
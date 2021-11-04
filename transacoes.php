<?php include("header.php");?>

<!---------------------------------------------------- TRANSAÇÕES ------------------------------------------------>

<section id="transacoes">
        <div class="container" style="border: 1px solid rgba(54, 54, 54, 0.315); border-radius: 25px; padding-top: 10px;">
        <h1>Transações</h1>
        <div class="row">
                <div class="col-sm-12">
                    <div class="container-search-transacao">
                          <input class="search-transacao" type="search" placeholder="Pesquisar pelo nome da skin ou ID da operação">
                          <span class="fa fa-search" style="float: right; margin-top: 5px;"></span>
                      </div>
                </div><!--Fim col-12 -->
            </div><!--Fim row-->

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">ID da operação</th>
                            <th scope="col">Status</th>
                            <th scope="col">Detalhes</th>
                            <th scope="col">Data</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          for ($x = 0; $x <= 3; $x++) {
                          ?>
                          <tr>
                            <td scope="row"><span id="status" class="text-tabela">Troca</span></td>
                            <td><span id="id" class="text-tabela">169775845</span></td>
                            <td>
                                <span id="status" class="tran-cancelada d-block"><i class="fas fa-times"></i> Cancelado</span>
                                <span id="status" class="tran-aceita d-none"><i class="fas fa-check"></i> Aceito</span>
                            </td>
                            <td>
                                <ul class="armas-modal">
                                    <li><img src="img/armas/knives/blue_steel.png" class="img-arma-modal"></li>
                                    <li><img src="img/armas/knives/blue_steel.png" class="img-arma-modal"></li>
                                    <li><img src="img/armas/knives/blue_steel.png" class="img-arma-modal"></li>
                                    <li class="text-arma-transacao"><span>+10</span></li>
                                    <li><i class="fas fa-long-arrow-alt-right align-middle" style="font-size: 25px; padding: 11px;"></i></li>
                                </ul>
                            </td>
                            <td>
                                <div class="aceitar">
                                    <span class="text-tabela">11.05.2021</span>
                                    <span class="text-tabela">12:20</span>
                                    <a href="#">Mostrar mais</a>
                                </div>
                            </td>
                          </tr><!--Fim linha-->
                          <?php
                          }
                          ?>
                        </tbody>
                      </table><!--Fim tabela-->
                </div><!--Fim col-12 -->
            </div><!--Fim row-->

            <div class="row">
              <div class="col-12">
                  <nav class="">
                      <ul class="pagination" style="justify-content: center;">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Anterior">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Próximo">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                  </nav>
              </div><!--Fim col-12-->
            </div><!--Fim row-->
        </div><!--Fim container-->
    </section>


    <?php include("footer.php");?>
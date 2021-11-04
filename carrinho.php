<?php include("header.php");?>

<!---------------------------------------------------- CARRINHO ---------------------------------------------------->

<section id="carrinho">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-8">
                    <div class="container-fluid armas-carrinho">
                        <div class="row" style="margin-bottom: 10px; border-bottom: 1px solid rgb(155, 155, 155);">
                            <div class="col-7 col-md-8">
                                <h6>Item</h6>
                            </div><!--Fim col-->
                            <div class="col-5 col-md-4">
                                <h6>Preço</h6>
                            </div><!--Fim col-->
                        </div><!--Fim row-->

                        <?php
                        for ($x = 0; $x <= 12; $x++) {
                        ?>
                            <div class="row separador-carrinho">
                            <div class="col-7 col-md-8">
                                <div class="container-item-carrinho">
                                    <img src="img/armas/knives/doppler_phase1.png">
                                    <div class="container-texto-carrinho">
                                        <h4>Doppler Phase 1</h4>
                                    </div><!--Fim continer texto carrinho-->
                                </div><!--Fim container item carrinho-->
                            </div><!--Fim col 4-->

                            <div class="col-5 col-md-3">
                                <div class="container-item-carrinho">
                                    <div class="container-texto-carrinho">
                                        <span style="font-size: 19px;">R$120,00</span>
                                        <span style="color: rgb(85, 85, 85);"><s>R$180,00</s></span>
                                    </div>
                                    <button type="button" class="btn btn-close-carrinho"><i class="fas fa-times"></i></button>
                                </div>
                            </div>

                        </div><!--Fim row-->
                        <?php
                        }
                        ?>
                    </div><!--Fim container fluid-->
                </div><!--Fim col itens carrinhos-->

                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="container-fluid resumo-carrinho">
                        <div class="row separador-carrinho">
                            <div class="col-12">
                                <h1>Resumo do pedido</h1>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-6">
                                <span>Subtotal</span>
                            </div>
                            <div class="col-6">
                                <span>R$120,00</span>
                            </div>
                        </div>
    
                        <div class="row separador-carrinho">
                            <div class="col-6">
                                <span>Você tem:</span>
                            </div>
                            <div class="col-6">
                                <span>R$80,00</span>
                            </div>
                        </div>
    
                        <div class="row separador-carrinho">
                            <div class="col-6">
                                <span>Total:</span>
                            </div>
                            <div class="col-6">
                                <span>R$200,00</span>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="opcao-filtro">
                                <input class="check-filtro" type="checkbox" id="terms"><label for="terms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar a magna nec aliquet. Vivamus at enim elit.</label>
                            </div>
    
                            <div class="opcao-filtro">
                                <input class="check-filtro" type="checkbox" id="terms2"><label for="terms2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                        </div><!--Row-->
                        <br>
                        <div class="row">
                            <button type="button" class="btn btn-vender">Comprar agora</button>
                        </div>
                    </div><!--Fim container fluid-->
                </div><!--Fim col subtotal-->

            </div><!--Fim row-->
        </div><!--Fim row-->
    </section>

    <?php include("footer.php");?>
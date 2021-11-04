<?php include("header.php");?>

    <!---------------------------------------------------- BANNER E MENU DE NAVEGAÇÃO DAS ARMAS ---------------------------------------------------->
    <section id="banner-e-nav">
        <div class="container-fluid" style="position: relative;">
            <div class="container-banner-1">
                <div class="container-banner-2">
                    <h1>CS:GO</h1>
                        <ul class="nav nav-tabs" id="armas" role="tablist" style="display: flex;">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Todas</a>
                            </li>
    
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="knives-tab" data-toggle="tab" href="#knives" role="tab" aria-controls="knives" aria-selected="false">Knives</a>
                            </li>
    
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pistols-tab" data-toggle="tab" href="#pistols" role="tab" aria-controls="pistols" aria-selected="false">Pistolas</a>
                            </li>
    
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="rifles-tab" data-toggle="tab" href="#rifles" role="tab" aria-controls="rifles" aria-selected="false">Rifles</a>
                            </li>
    
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="smgs-tab" data-toggle="tab" href="#smgs" role="tab" aria-controls="smgs" aria-selected="false">SMGs</a>
                            </li>
    
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="heavy-tab" data-toggle="tab" href="#heavy" role="tab" aria-controls="heavy" aria-selected="false">Heavy</a>
                            </li>
    
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="gloves-tab" data-toggle="tab" href="#gloves" role="tab" aria-controls="gloves" aria-selected="false">Gloves</a>
                            </li> 
                        
                        </ul><!--Fim nav das armas-->
                </div><!--Fim banner 2-->
            </div><!--Backgound1-->
        </div><!--Fim Container fluid-->
    </section>

    <!---------------------------------------------------- ARMAS ---------------------------------------------------->

    <section id="armas-index">
        <div class="tab-content" id="armas-content">
            <!------- TODAS AS ARMAR ------->
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="container-fluid">
                    <div class="row">
                        <a href="produto.php" class="anuncio">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                <div class="container-armas">
                                    <span class="title-adesivo">Adesivo | Ninjas in Pyjamas | CRM 2020</span>
                                    <h4>Doppler</h4>
                                    <img src="img/armas/knives/doppler_phase2.png" class="img-arma">
                                    <div>
                                        <a href="#"><img src="img/armas/adesivos/furia.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/astralis.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/faze_clan.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/fnatic.png" width="45px"></a>
                                    </div>
                                    <div class="plataformas2">
                                        <a href="#"><i class="fab fa-steam"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-road"></i></a>
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                    <span id="preco">R$11.50</span>
                                    <button class="btn btn-addcarrinho" type="button">Adicionar ao carrinho <span class="fa fa-shopping-cart"></span></button>
                                    <span id="time"><span class="fa fa-clock-o"></span> 4 dias, 6 horas e 34 minutos</span>

                                    <div class="float_bar" style="height: 0.3rem; margin-top: 15px; width: 90%;">
                                        <div class="float wear-progress">
                                        <span class="wear-position" style="left:calc(35.45735180378% - 0.3rem); color: #fff;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg_float fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                        </span>
                                        <div class="bar fn"></div>
                                        <div class="bar mw"></div>
                                        <div class="bar ft"></div>
                                        <div class="bar ww"></div>
                                        <div class="bar bs"></div>
                                        </div>
                                        <div class="skin-float-value text-center" style="color: rgb(187, 187, 187);">0.3545735180378</div>
                                        </div>
                                </div><!--Fim container amras-->
                            </div><!--Fim col-->
                        </a>
                    </div><!--Fim row-->
                </div><!--Fim container-->
            </div><!--Fim tabcontent PISTOLS-->
    
            <!------- KNIVES ------->
            <div class="tab-pane fade" id="knives" role="tabpanel" aria-labelledby="knives-tab">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#" class="anuncio">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                <div class="container-armas">
                                    <span class="title-adesivo">Adesivo | Ninjas in Pyjamas | CRM 2020</span>
                                    <h4>Doppler</h4>
                                    <img src="img/armas/knives/doppler_phase2.png" class="img-arma">
                                    <div>
                                        <a href="#"><img src="img/armas/adesivos/furia.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/astralis.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/faze_clan.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/fnatic.png" width="45px"></a>
                                    </div>
                                    <div class="plataformas2">
                                        <a href="#"><span class="fa fa-steam"></span></a>
                                        <a href="#"><span class="fa fa-eye"></span></a>
                                        <a href="#"><span class="fa fa-road"></span></a>
                                        <a href="#"><span class="fa fa-chain"></span></a>
                                    </div>
                                    <span id="preco">R$11.50</span>
                                    <button class="btn btn-addcarrinho" type="button">Adicionar ao carrinho <span class="fa fa-shopping-cart"></span></button>
                                    <span id="time"><span class="fa fa-clock-o"></span> 4 dias, 6 horas e 34 minutos</span>

                                    <div class="float_bar" style="height: 0.3rem; margin-top: 15px; width: 90%;">
                                        <div class="float wear-progress">
                                        <span class="wear-position" style="left:calc(35.45735180378% - 0.3rem); color: #fff;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg_float fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                        </span>
                                        <div class="bar fn"></div>
                                        <div class="bar mw"></div>
                                        <div class="bar ft"></div>
                                        <div class="bar ww"></div>
                                        <div class="bar bs"></div>
                                        </div>
                                        <div class="skin-float-value text-center" style="color: rgb(187, 187, 187);">0.3545735180378</div>
                                        </div>
                                </div><!--Fim container amras-->
                            </div><!--Fim col-->
                        </a>
                    </div><!--Fim row-->
                </div><!--Fim container-->
            </div><!--Fim tabcontent RIFLES-->

            <!------- Pistolas ------->
            <div class="tab-pane fade" id="pistols" role="tabpanel" aria-labelledby="pistols-tab">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#" class="anuncio">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                <div class="container-armas">
                                    <span class="title-adesivo">Adesivo | Ninjas in Pyjamas | CRM 2020</span>
                                    <h4>Doppler</h4>
                                    <img src="img/armas/knives/doppler_phase2.png" class="img-arma">
                                    <div>
                                        <a href="#"><img src="img/armas/adesivos/furia.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/astralis.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/faze_clan.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/fnatic.png" width="45px"></a>
                                    </div>
                                    <div class="plataformas2">
                                        <a href="#"><span class="fa fa-steam"></span></a>
                                        <a href="#"><span class="fa fa-eye"></span></a>
                                        <a href="#"><span class="fa fa-road"></span></a>
                                        <a href="#"><span class="fa fa-chain"></span></a>
                                    </div>
                                    <span id="preco">R$11.50</span>
                                    <button class="btn btn-addcarrinho" type="button">Adicionar ao carrinho <span class="fa fa-shopping-cart"></span></button>
                                    <span id="time"><span class="fa fa-clock-o"></span> 4 dias, 6 horas e 34 minutos</span>

                                    <div class="float_bar" style="height: 0.3rem; margin-top: 15px; width: 90%;">
                                        <div class="float wear-progress">
                                        <span class="wear-position" style="left:calc(35.45735180378% - 0.3rem); color: #fff;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg_float fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                        </span>
                                        <div class="bar fn"></div>
                                        <div class="bar mw"></div>
                                        <div class="bar ft"></div>
                                        <div class="bar ww"></div>
                                        <div class="bar bs"></div>
                                        </div>
                                        <div class="skin-float-value text-center" style="color: rgb(187, 187, 187);">0.3545735180378</div>
                                        </div>
                                </div><!--Fim container amras-->
                            </div><!--Fim col-->
                        </a>
                    </div><!--Fim row-->
                </div><!--Fim container-->
            </div><!--Fim tabcontent RIFLES-->

            <!------- RIFLES ------->
            <div class="tab-pane fade" id="rifles" role="tabpanel" aria-labelledby="rifles-tab">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#" class="anuncio">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                <div class="container-armas">
                                    <span class="title-adesivo">Adesivo | Ninjas in Pyjamas | CRM 2020</span>
                                    <h4>Doppler</h4>
                                    <img src="img/armas/knives/doppler_phase2.png" class="img-arma">
                                    <div>
                                        <a href="#"><img src="img/armas/adesivos/furia.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/astralis.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/faze_clan.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/fnatic.png" width="45px"></a>
                                    </div>
                                    <div class="plataformas2">
                                        <a href="#"><span class="fa fa-steam"></span></a>
                                        <a href="#"><span class="fa fa-eye"></span></a>
                                        <a href="#"><span class="fa fa-road"></span></a>
                                        <a href="#"><span class="fa fa-chain"></span></a>
                                    </div>
                                    <span id="preco">R$11.50</span>
                                    <button class="btn btn-addcarrinho" type="button">Adicionar ao carrinho <span class="fa fa-shopping-cart"></span></button>
                                    <span id="time"><span class="fa fa-clock-o"></span> 4 dias, 6 horas e 34 minutos</span>

                                    <div class="float_bar" style="height: 0.3rem; margin-top: 15px; width: 90%;">
                                        <div class="float wear-progress">
                                        <span class="wear-position" style="left:calc(35.45735180378% - 0.3rem); color: #fff;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg_float fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                        </span>
                                        <div class="bar fn"></div>
                                        <div class="bar mw"></div>
                                        <div class="bar ft"></div>
                                        <div class="bar ww"></div>
                                        <div class="bar bs"></div>
                                        </div>
                                        <div class="skin-float-value text-center" style="color: rgb(187, 187, 187);">0.3545735180378</div>
                                        </div>
                                </div><!--Fim container amras-->
                            </div><!--Fim col-->
                        </a>
                    </div><!--Fim row-->
                </div><!--Fim container-->
            </div><!--Fim tabcontent RIFLES-->

            <!------- SMGs ------->
            <div class="tab-pane fade" id="smgs" role="tabpanel" aria-labelledby="smgs-tab">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#" class="anuncio">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                <div class="container-armas">
                                    <span class="title-adesivo">Adesivo | Ninjas in Pyjamas | CRM 2020</span>
                                    <h4>Doppler</h4>
                                    <img src="img/armas/knives/doppler_phase2.png" class="img-arma">
                                    <div>
                                        <a href="#"><img src="img/armas/adesivos/furia.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/astralis.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/faze_clan.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/fnatic.png" width="45px"></a>
                                    </div>
                                    <div class="plataformas2">
                                        <a href="#"><span class="fa fa-steam"></span></a>
                                        <a href="#"><span class="fa fa-eye"></span></a>
                                        <a href="#"><span class="fa fa-road"></span></a>
                                        <a href="#"><span class="fa fa-chain"></span></a>
                                    </div>
                                    <span id="preco">R$11.50</span>
                                    <button class="btn btn-addcarrinho" type="button">Adicionar ao carrinho <span class="fa fa-shopping-cart"></span></button>
                                    <span id="time"><span class="fa fa-clock-o"></span> 4 dias, 6 horas e 34 minutos</span>

                                    <div class="float_bar" style="height: 0.3rem; margin-top: 15px; width: 90%;">
                                        <div class="float wear-progress">
                                        <span class="wear-position" style="left:calc(35.45735180378% - 0.3rem); color: #fff;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg_float fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                        </span>
                                        <div class="bar fn"></div>
                                        <div class="bar mw"></div>
                                        <div class="bar ft"></div>
                                        <div class="bar ww"></div>
                                        <div class="bar bs"></div>
                                        </div>
                                        <div class="skin-float-value text-center" style="color: rgb(187, 187, 187);">0.3545735180378</div>
                                        </div>
                                </div><!--Fim container amras-->
                            </div><!--Fim col-->
                        </a>
                    </div><!--Fim row-->
                </div><!--Fim container-->
            </div><!--Fim tabcontent SMGs-->
    
            <!------- HEAVY ------->
            <div class="tab-pane fade" id="heavy" role="tabpanel" aria-labelledby="heavy-tab">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#" class="anuncio">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                <div class="container-armas">
                                    <span class="title-adesivo">Adesivo | Ninjas in Pyjamas | CRM 2020</span>
                                    <h4>Doppler</h4>
                                    <img src="img/armas/knives/doppler_phase2.png" class="img-arma">
                                    <div>
                                        <a href="#"><img src="img/armas/adesivos/furia.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/astralis.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/faze_clan.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/fnatic.png" width="45px"></a>
                                    </div>
                                    <div class="plataformas2">
                                        <a href="#"><span class="fa fa-steam"></span></a>
                                        <a href="#"><span class="fa fa-eye"></span></a>
                                        <a href="#"><span class="fa fa-road"></span></a>
                                        <a href="#"><span class="fa fa-chain"></span></a>
                                    </div>
                                    <span id="preco">R$11.50</span>
                                    <button class="btn btn-addcarrinho" type="button">Adicionar ao carrinho <span class="fa fa-shopping-cart"></span></button>
                                    <span id="time"><span class="fa fa-clock-o"></span> 4 dias, 6 horas e 34 minutos</span>

                                    <div class="float_bar" style="height: 0.3rem; margin-top: 15px; width: 90%;">
                                        <div class="float wear-progress">
                                        <span class="wear-position" style="left:calc(35.45735180378% - 0.3rem); color: #fff;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg_float fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                        </span>
                                        <div class="bar fn"></div>
                                        <div class="bar mw"></div>
                                        <div class="bar ft"></div>
                                        <div class="bar ww"></div>
                                        <div class="bar bs"></div>
                                        </div>
                                        <div class="skin-float-value text-center" style="color: rgb(187, 187, 187);">0.3545735180378</div>
                                        </div>
                                </div><!--Fim container amras-->
                            </div><!--Fim col-->
                        </a>
                    </div><!--Fim row-->
                </div><!--Fim container-->
            </div><!--Fim tabcontent HEAVY-->
    
            <!------- GLOVES ------->
            <div class="tab-pane fade" id="gloves" role="tabpanel" aria-labelledby="gloves-tab">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#" class="anuncio">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                <div class="container-armas">
                                    <span class="title-adesivo">Adesivo | Ninjas in Pyjamas | CRM 2020</span>
                                    <h4>Doppler</h4>
                                    <img src="img/armas/knives/doppler_phase2.png" class="img-arma  ">
                                    <div>
                                        <a href="#"><img src="img/armas/adesivos/furia.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/astralis.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/faze_clan.png" width="45px"></a>
                                        <a href="#"><img src="img/armas/adesivos/fnatic.png" width="45px"></a>
                                    </div>
                                    <div class="plataformas2">
                                        <a href="#"><span class="fa fa-steam"></span></a>
                                        <a href="#"><span class="fa fa-eye"></span></a>
                                        <a href="#"><span class="fa fa-road"></span></a>
                                        <a href="#"><span class="fa fa-chain"></span></a>
                                    </div>
                                    <span id="preco">R$11.50</span>
                                    <button class="btn btn-addcarrinho" type="button">Adicionar ao carrinho <span class="fa fa-shopping-cart"></span></button>
                                    <span id="time"><span class="fa fa-clock-o"></span> 4 dias, 6 horas e 34 minutos</span>

                                    <div class="float_bar" style="height: 0.3rem; margin-top: 15px; width: 90%;">
                                        <div class="float wear-progress">
                                        <span class="wear-position" style="left:calc(35.45735180378% - 0.3rem); color: #fff;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg_float fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                        </span>
                                        <div class="bar fn"></div>
                                        <div class="bar mw"></div>
                                        <div class="bar ft"></div>
                                        <div class="bar ww"></div>
                                        <div class="bar bs"></div>
                                        </div>
                                        <div class="skin-float-value text-center" style="color: rgb(187, 187, 187);">0.3545735180378</div>
                                        </div>
                                </div><!--Fim container amras-->
                            </div><!--Fim col-->
                        </a>
                    </div><!--Fim row-->
                </div><!--Fim container-->
            </div><!--Fim tabcontent GLOVES-->

    </section><!--Fim armas-->
    
    
    <?php include("footer.php");?>
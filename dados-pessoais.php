<?php include("header.php");?>

<!---------------------------------------------------- CADASTRO ---------------------------------------------------->

<section id="cadastro" style="margin-top: 90px;">
    <form class="form-group">
    <div class="container container-cadastro" >
        <h1>Dados pessoais</h1>
        <div class="row">
            <div class="col-md-12" style="display: flex; justify-content: center;">
                <img src="img/user.png">
            </div><!--Fim col-12 -->
        </div><!--Fim row-->

        <div class="row">
            <div class="col-md-6">
                <label for="nomecompleto">Nome completo</label>
                <input type="text" id="nomecompleto" class="form-control">
            </div><!--Fim col-6 -->
            <div class="col-md-6">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" class="form-control">
            </div><!--fim col-6 -->
        </div><!--Fim row-->

        <div class="row">
            <div class="col-md-6">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control">
            </div><!--Fim col-6 -->
            <div class="col-md-6">
                <label for="tel">Telefone</label>
                <input type="text" id="tel" class="form-control">
            </div><!--Fim col-6 -->
        </div><!--Fim row-->

        <div class="row">
            <div class="col-md-12">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" class="form-control">
            </div><!--Fim col-12 -->
        </div><!--Fim row-->

        <div class="row">
            <div class="col-md-6">
                <label for="estado">Estado</label>
                <input type="text" id="estado" class="form-control">
            </div><!--Fim col-6-->
            <div class="col-md-6">
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" class="form-control">
            </div><!--Fim col-6 -->
        </div><!--Fim row-->

        <div class="row">
            <div class="col-md-6">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" class="form-control">
            </div><!--Fim col-6-->
            <div class="col-md-6">
                <label for="cep">CEP</label>
                <input type="text" id="cep" class="form-control">
            </div><!--Fim col-6 -->
        </div><!--Fim row-->

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-enviar-form">Salvar Informações</button>
            </div><!--Fim col-12-->
        </div><!--Fim row-->
    </div><!--Fim container-->
    </form>
</section>

<?php include("footer.php");?>
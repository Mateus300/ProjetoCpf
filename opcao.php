<?= require_once "topo.php";?>

    <h1 class="display-4 text-center">Selecione uma das opções:</h1><br>

   <div class="row">
        <div class="form-group col-md-6 text-center">
                <label>Pesquisa de CNPJ:</label>
            <a href="cnpj.php">CNPJ</a>
        </div>

        <div class="form-group col-md-5 text-center">
                <label>Pesquisa de CEP:</label>
                <a href="cep.php">CEP</a>
        </div>
   </div>

<?= require_once "rodape.php";?>
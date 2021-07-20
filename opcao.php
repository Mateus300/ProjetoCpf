<?= require_once "topo.php";?>

    <h1 class="display-4 text-center">Selecione uma das opções:</h1><br>

   <div class="row">
        <div class="form-group col-md-6 text-center">
            <form action="cnpj.php" method="post">
                <label>Pesquisa de CNPJ:</label>
                <input type="submit" class="btn btn-primary" name="submit" value="Ir">
            </form>
        </div>

        <div class="form-group col-md-5 text-center">
            <form action="cep.php" method="post">
                <label>Pesquisa de CEP:</label>
                <input type="submit" class="btn btn-primary" name="submit" value="Ir">
            </form>
        </div>
   </div>

<?= require_once "rodape.php";?>
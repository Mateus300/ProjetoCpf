<?= require_once "topo.php";?>

    <h1 class="display-4 text-center">Login:</h1>

    <form action="index.php" method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                </div>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o Username...">
            </div>
 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Senha:</span>
                </div>
                <br><input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a senha...">
            </div>

            <div class="button-group mb-3 text-center">
                <button type="submit" class="btn btn-primary">Logar</button>
            </div>
    </form>

<?= require_once "rodape.php";?>
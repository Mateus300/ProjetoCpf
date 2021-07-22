<?php   
    if(isset($_POST['voltar'])){
    require_once "opcao.php";
    }else{

        require_once "topo.php";
        require_once "crud.php";
?>

    <?php
    
        if(isset($_GET['submit'])){

            $cep = $_GET['cep'];
            $url = "viacep.com.br/ws/$cep/json/";
            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $resultado = json_decode(curl_exec($ch));
                    
            foreach ($resultado as $res=>$index) {
                $$res = $index;
            }
                    
            curl_close($ch);
        }

        if(isset($_POST['cadastrar'])){
            CrudCep::insert($_POST);
        }

        if(isset($_POST['deletar'])){
            CrudCep::delete($_POST['cep']);
        }
    
    ?>

    <h1 class="display-4 text-center">Busca por CEP:</h1><br>

    <div class="text-center">
        <form action="cep.php" method="get">
            <label for="">Digite o CEP:</label>
            <input type="text" name="cep" id="cep">
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </form>
    </div>

    <form action="cep.php" method="post">
    <div>
        <div class="col">
            <label> NOME. </label>
            <input type="text" class="form-control" id="nome" name="nome"  value="<?= $nome ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> CEP no formato 00000-000. </label>
            <input type="text" class="form-control" id="cep" name="cep"  value="<?= $cep ?>">
        </div>
            
        <div class="col">
            <label> LOGRADOURO. </label>
            <input type="text" class="form-control" id="logradouro" name="logradouro"  value="<?= $logradouro ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> COMPLEMENTO. </label>
            <input type="text" class="form-control" id="complemento" name="complemento"  value="<?= $complemento ?>">
        </div>
            
        <div class="col">
            <label> BAIRRO. </label>
            <input type="text" class="form-control" id="bairro" name="bairro"  value="<?= $bairro ?>">
        </div>
    </div>

    <div>
        <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary text-center">
        <input type="submit" name="deletar" value="Deletar" class="btn btn-primary text-center">
        <input type="submit" name="voltar" value="Voltar" class="btn btn-primary text-center">
    </div>

    </form>

<?= require_once "rodape.php";}?>
<?php 
    if(isset($_POST['voltar'])){
        require_once "opcao.php";
    }else{

        require_once "topo.php";
        require_once "crud.php";
        ?>

    <?php    
        if (isset($_GET['submit'])) {
            $cnpj = $_GET['cnpj'];
            $url = "https://www.receitaws.com.br/v1/cnpj/$cnpj";
            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $resultado = json_decode(curl_exec($ch));

            foreach ($resultado as $res=>$index) {
                $$res = $index;
                //echo $index;
            }

        curl_close($ch);
        }

        if(isset($_POST['cadastrar'])){
            CrudCnpj::insert($_POST);
        }
        if(isset($_POST['alterar'])){
            CrudCnpj::update();
        }
        if(isset($_POST['deletar'])){
            CrudCnpj::delete();
        }
    ?>

    <h1 class="display-4 text-center">Busca por CNPJ:</h1><br>
        
    <div class="text-center">
        <form action="cnpj.php" method="get">
            <label for="">Digite o CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </form>
    </div>

    <form action="cnpj.php" method="post">

    <div class="row text-center">
        <div class="col">
            <label> CNPJ no formato 00.000.000/0000-00. </label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" value="<?= $cnpj ?>">
        </div>
            
        <div class="col">
            <label> MATRIZ/FILIAL. </label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="<?= $tipo ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> Data de abertura no formato dd/mm/aaaa. </label>
            <input type="text" class="form-control" id="abertura" name="abertura" value="<?= $abertura ?>">
        </div>
        
        <div class="col">
            <label> Razão social. </label>
            <input type="text" class="form-control" id="nome" name="nome"  value="<?= $nome ?>">
        </div>
    </div>
        
    <div class="row text-center">
        <div class="col">
            <label> Nome fantasia. </label>
            <input type="text" class="form-control" id="fantasia" name="fantasia"  value="<?= $fantasia ?>">
        </div>

        <div class="col">
            <label> UF. </label>
            <input type="text" class="form-control" id="uf" name="uf"  value="<?= $uf ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> MUNICIPIO. </label>
            <input type="text" class="form-control" id="municipio" name="municipio"  value="<?= $municipio ?>">
        </div>

        <div class="col">
            <label> Bairro. </label>
            <input type="text" class="form-control" id="bairro" name="bairro"  value="<?= $bairro ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> CEP. </label>
            <input type="text" class="form-control" id="cep" name="cep"  value="<?= $cep ?>">
        </div>

        <div class="col">
            <label> COMPLEMENTO. </label>
            <input type="text" class="form-control" id="complemento" name="complemento"  value="<?= $complemento ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> NÚMERO. </label>
            <input type="text" class="form-control" id="numero" name="numero"  value="<?= $numero ?>">
        </div>

        <div class="col">
            <label> LOGRADOURO. </label>
            <input type="text" class="form-control" id="logradouro" name="logradouro"  value="<?= $logradouro ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> E-MAIL. </label>
            <input type="text" class="form-control" id="email" name="email"  value="<?= $email ?>">
        </div>

        <div class="col">
            <label> TELEFONE. </label>
            <input type="text" class="form-control" id="telefone" name="telefone"  value="<?= $telefone ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> CAPITAL SOCIAL. </label>
            <input type="text" class="form-control" id="capital_social" name="capital_social"  value="<?='R$'.$capital_social ?>">
        </div>
    </div>

    <div>
        <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary text-center">
        <input type="submit" name="alterar" value="Alterar" class="btn btn-primary text-center">
        <input type="submit" name="deletar" value="Deletar" class="btn btn-primary text-center">
        <input type="submit" name="voltar" value="Voltar" class="btn btn-primary text-center">
    </div>

    </form>

<?= require_once "rodape.php";}?>
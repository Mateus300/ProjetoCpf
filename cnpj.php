<?= require_once "topo.php";?>

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
    
    ?>

    <h1 class="display-4 text-center">Busca por CNPJ:</h1><br>
        
    <div class="text-center">
        <form action="cnpj.php" method="get">
            <label for="">Digite o CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </form>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> CNPJ no formato 00.000.000/0000-00. </label>
            <input type="text" class="form-control" id="cnpj" disabled value="<?= $cnpj ?>">
        </div>
            
        <div class="col">
            <label> MATRIZ/FILIAL. </label>
            <input type="text" class="form-control" id="tipo" disabled value="<?= $tipo ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> Data de abertura no formato dd/mm/aaaa. </label>
            <input type="text" class="form-control" id="abertura" disabled value="<?= $abertura ?>">
        </div>
        
        <div class="col">
            <label> Razão social. </label>
            <input type="text" class="form-control" id="nome" disabled value="<?= $nome ?>">
        </div>
    </div>
        
    <div class="row text-center">
        <div class="col">
            <label> Nome fantasia. </label>
            <input type="text" class="form-control" id="fantasia" disabled value="<?= $fantasia ?>">
        </div>

        <div class="col">
            <label> UF. </label>
            <input type="text" class="form-control" id="uf" disabled value="<?= $uf ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> MUNICIPIO. </label>
            <input type="text" class="form-control" id="municipio" disabled value="<?= $municipio ?>">
        </div>

        <div class="col">
            <label> Bairro. </label>
            <input type="text" class="form-control" id="bairro" disabled value="<?= $bairro ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> CEP. </label>
            <input type="text" class="form-control" id="cep" disabled value="<?= $cep ?>">
        </div>

        <div class="col">
            <label> COMPLEMENTO. </label>
            <input type="text" class="form-control" id="complemento" disabled value="<?= $complemento ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> NÚMERO. </label>
            <input type="text" class="form-control" id="numero" disabled value="<?= $numero ?>">
        </div>

        <div class="col">
            <label> LOGRADOURO. </label>
            <input type="text" class="form-control" id="logradouro" disabled value="<?= $logradouro ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> E-MAIL. </label>
            <input type="text" class="form-control" id="email" disabled value="<?= $email ?>">
        </div>

        <div class="col">
            <label> TELEFONE. </label>
            <input type="text" class="form-control" id="telefone" disabled value="<?= $telefone ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> CAPITAL SOCIAL. </label>
            <input type="text" class="form-control" id="capital_social" disabled value="<?='R$'.$capital_social ?>">
        </div>
    </div>

<?= require_once "rodape.php";?>
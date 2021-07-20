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

    <h1>Busca por CNPJ:</h1>
        <form action="cnpj.php" method="get">
            <label for="">Digite o CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
            <input type="submit" name="submit" value="Enviar">
        </form>

    <div class="form-group col-md-8 text-center">

        <label> CNPJ no formato 00.000.000/0000-00. </label>
        <input type="text" class="form-control" id="cnpj" disabled value="<?= $cnpj ?>">
        
        <label> MATRIZ/FILIAL. </label>
        <input type="text" class="form-control" id="tipo" disabled value="<?= $tipo ?>">

        <label> Data de abertura no formato dd/mm/aaaa. </label>
        <input type="text" class="form-control" id="abertura" disabled value="<?= $abertura ?>">
        
        <label> Razão social. </label>
        <input type="text" class="form-control" id="nome" disabled value="<?= $nome ?>">
        
        <label> Nome fantasia. </label>
        <input type="text" class="form-control" id="fantasia" disabled value="<?= $fantasia ?>">

        <label> UF. </label>
        <input type="text" class="form-control" id="uf" disabled value="<?= $uf ?>">

        <label> MUNICIPIO. </label>
        <input type="text" class="form-control" id="municipio" disabled value="<?= $municipio ?>">

        <label> Bairro. </label>
        <input type="text" class="form-control" id="bairro" disabled value="<?= $bairro ?>">

        <label> CEP. </label>
        <input type="text" class="form-control" id="cep" disabled value="<?= $cep ?>">

        <label> COMPLEMENTO. </label>
        <input type="text" class="form-control" id="complemento" disabled value="<?= $complemento ?>">

        <label> NÚMERO. </label>
        <input type="text" class="form-control" id="numero" disabled value="<?= $numero ?>">

        <label> LOGRADOURO. </label>
        <input type="text" class="form-control" id="logradouro" disabled value="<?= $logradouro ?>">

        <label> E-MAIL. </label>
        <input type="text" class="form-control" id="email" disabled value="<?= $email ?>">

        <label> TELEFONE. </label>
        <input type="text" class="form-control" id="telefone" disabled value="<?= $telefone ?>">

        <label> CAPITAL SOCIAL. </label>
        <input type="text" class="form-control" id="capital_social" disabled value="<?='R$'.$capital_social ?>">

    </div>

<?= require_once "rodape.php";?>
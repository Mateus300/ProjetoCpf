<?= require_once "topo.php";?>

    <?php

        $nome = $_POST["nome"];
    
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
    
    ?>

    <h1 class="display-4 text-center">Busca por CEP:</h1><br>

    <div class="text-center">
        <form action="cep.php" method="post">
            <label for="">Digite o Nome:</label>
            <input type="text" name="nome" id="nome">
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </form>
    </div>

    <div class="text-center">
        <form action="cep.php" method="get">
            <label for="">Digite o CEP:</label>
            <input type="text" name="cep" id="cep">
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </form>
    </div>

    <div>
        <div class="col">
            <label> NOME. </label>
            <input type="text" class="form-control" id="nome" disabled value="<?= $nome ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> CEP no formato 00000-000. </label>
            <input type="text" class="form-control" id="cep" disabled value="<?= $cep ?>">
        </div>
            
        <div class="col">
            <label> LOGRADOURO. </label>
            <input type="text" class="form-control" id="logradouro" disabled value="<?= $logradouro ?>">
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <label> COMPLEMENTO. </label>
            <input type="text" class="form-control" id="complemento" disabled value="<?= $complemento ?>">
        </div>
            
        <div class="col">
            <label> BAIRRO. </label>
            <input type="text" class="form-control" id="bairro" disabled value="<?= $bairro ?>">
        </div>
    </div>

<?= require_once "rodape.php";?>
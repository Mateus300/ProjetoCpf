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
        <form action="#" method="get">
            <label for="">Digite o CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
            <input type="submit" name="submit" value="Enviar">
        </form>

    <label> CNPJ no formato 00.000.000/0000-00. </label>
    <input type="text" class="form-control" id="cnpj" value="<?= $cnpj ?>">
    
    <label> MATRIZ/FILIAL. </label>
    <input type="text" class="form-control" id="tipo" value="<?= $tipo ?>">

    <label> Data de abertura no formato dd/mm/aaaa. </label>
    <input type="text" class="form-control" id="abertura" value="<?= $abertura ?>">
    
    <label> Razão social. </label>
    <input type="text" class="form-control" id="nome" value="<?= $nome ?>">
    
    <label> Nome fantasia. </label>
    <input type="text" class="form-control" id="fantasia" value="<?= $fantasia ?>">

<?= require_once "rodape.php";?>
<?= require_once "topo.php";?>
    <?php
        
        $flag = 0;

        include "conexao.php";

        //Pega os valores das inputs
        $n = $_POST['nome'];
        $s = $_POST['senha'];        
    
        //Faz a pesquisa para ver se o usuario e senha estão corretos
        $sql = "SELECT * FROM logins WHERE nome='".$n."' AND senha=SHA('".$s."')";
        echo $sql;
        $result = $con->query($sql);

        //Verifica se a operação retornou alguma coisa
        if(!($result->num_rows===1)){
            header("Location: login.php");
            echo $sql;
        }else{
            $flag = 1;
            echo $sql;
        }
        

    ?>

    <?php if($flag == 1):?>

        <?php require_once "cnpj.php";?>

    <?php endif?>
<?= require_once "rodape.php";?>


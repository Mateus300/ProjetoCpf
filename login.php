<?= require_once "topo.php";?>

    <form action="index.php" method="post">
            <label for="nome">Nome:</label>
            <br><input type="text" name="nome" id="nome" placeholder="Digite o usuario...">
            <br><label for="senha">Senha:</label>
            <br><input type="password" name="senha" id="senha" placeholder="Digite a senha...">
            <br><button type="submit">Logar</button>
    </form>

<?= require_once "rodape.php";?>
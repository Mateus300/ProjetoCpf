<?php

    class CrudCnpj{
        public static $cnpj;
        public static $tipo;
        public static $abertura;
        public static $nome;
        public static $fantasia;
        public static $uf;
        public static $municipio;
        public static $bairro;
        public static $cep;
        public static $complemento;
        public static $numero;
        public static $logradouro;
        public static $email;
        public static $telefone;
        public static $capital_social;

        public static function dadosCnpf($dados)
        {

            $array = [] ;

            foreach ($dados as $res=>$index) {
                
                $array[$res] = $index;
            }

            var_dump($array);

            self::$cnpj = $array['cnpj'];
            self::$tipo = $array['tipo'];
            self::$abertura = $array['abertura'];
            self::$nome = $array['nome'];
            self::$fantasia = $array['fantasia'];
            self::$uf = $array['uf'];
            self::$municipio = $array['municipio'];
            self::$bairro = $array['bairro'];
            self::$cep = $array['cep'];
            self::$complemento = $array['complemento'];
            self::$numero = $array['numero'];
            self::$logradouro = $array['logradouro'];
            self::$email = $array['email'];
            self::$telefone = $array['telefone'];
            self::$capital_social = $array['capital_social'];

        }

        public static function insert($valores)
        {
            echo "1";
            
            self::dadosCnpf($valores);

            require_once "conexao.php";

            echo self::$cnpj;

            $query_insert = "INSERT INTO tb_cnpj VALUES (NULL, '".self::$cnpj."', '".self::$tipo."', '".self::$abertura."', 
            '".self::$nome."', '".self::$fantasia."', '".self::$uf."', '".self::$municipio."', '".self::$bairro."', '".self::$cep."', 
            '".self::$complemento."', '".self::$numero."', '".self::$logradouro."', '".self::$email."', '".self::$telefone."', 
            '".self::$capital_social."')";

            echo $query_insert;


            $insert = $con->query($query_insert);
            if($insert->num_rows){
                echo "Inserir com sucesso!";
            }else{
                echo "<p class='alert alert-danger'>Erro ao Inserir!</p>";
            }

            $con->close();
        }

        public static function delete()
        {
            require_once "conexao.php";

            $select = "SELECT id FROM tb_cnpj WHERE cnpj = self::$cnpj";

            $query_delete = "DELETE FROM tb_cnpj where id = $select";

            $delete = $con->query($query_delete);

            $con->close();
        }
    }



?>
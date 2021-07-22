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
            
            self::dadosCnpf($valores);

            require_once "conexao.php";

            $query_insert = "INSERT INTO tb_cnpj VALUES (NULL, '".self::$cnpj."', '".self::$tipo."', '".self::$abertura."', 
            '".self::$nome."', '".self::$fantasia."', '".self::$uf."', '".self::$municipio."', '".self::$bairro."', '".self::$cep."', 
            '".self::$complemento."', '".self::$numero."', '".self::$logradouro."', '".self::$email."', '".self::$telefone."', 
            '".self::$capital_social."')";


            $insert = $con->query($query_insert);

            $con->close();
        }

        public static function delete($val)
        {
            // self::dadosCnpf($val);

            $cnpj = $val;

            require_once "conexao.php";

            $query1 = "SELECT id FROM tb_cnpj WHERE cnpj = '".$cnpj."'";
            $select = $con->query($query1);
            $id = "";

            foreach ($select as $key) {
                foreach ($key as $k) {
                    $id = $k;
                }
            }
            
            $query_delete = "DELETE FROM tb_cnpj WHERE id = '".$id."'";
            echo $query_delete;
            $delete = $con->query($query_delete);

            $con->close();
        }
    }

    class CrudCep{
        public static $nome;
        public static $cep;
        public static $logradouro;
        public static $complemento;
        public static $bairro;
        

        public static function dadosCep($dados)
        {

            $array = [] ;

            foreach ($dados as $res=>$index) { 
                $array[$res] = $index;
            }

            self::$cep = $array['cep'];
            self::$nome = $array['nome'];
            self::$logradouro = $array['logradouro'];
            self::$complemento = $array['complemento'];
            self::$bairro = $array['bairro'];

        }

        public static function insert($valores)
        {
            
            self::dadosCep($valores);

            require_once "conexao.php";

            $query_insert = "INSERT INTO tb_cep VALUES (NULL, ".self::$cep.", '".self::$nome."', '".self::$logradouro."', 
            '".self::$complemento."', '".self::$bairro."')";

            $insert = $con->query($query_insert);

            echo $query_insert;

            $con->close();
        }

        public static function delete($val)
        {
            self::dadosCep($val);

            require_once "conexao.php";

            $query1 = "SELECT id FROM tb_cep WHERE cep = '".$val."'";
            $select = $con->query($query1);

            $id = "";

            foreach ($select as $key) {
                foreach ($key as $k) {
                    $id = $k;
                }
            }

            $query_delete = "DELETE FROM tb_cep where id = '".$id."'";

            $delete = $con->query($query_delete);

            $con->close();
        }
    }
?>
<?php
    class UsuarioDAO{

        private $conexao;

        public function __construct(){

            $this->conexao = new Conexao();

        }

        public function login($login, $senha){

            $sql = "SELECT * FROM usuario WHERE nomeUsuario = '$login' AND senha = '$senha'";

            $executa = mysqli_query($this->conexao->getConn(), $sql);

            if(mysqli_num_rows($executa) > 0){

                return true;
            }else{
                return false;
            }
        }

        public function cadastra($login, $email, $senha){

            $sql = "INSERT INTO usuario(nomeUsuario,email,senha) VALUES ('$login','$email','$senha')";

            $executa = mysqli_query($this->conexao->getConn(), $sql);

            if(mysqli_affected_rows($this->conexao->getConn())> 0 ){

                return true;
            }else{
                return false;
            }
        }

        public function unico($login){

            $sql = "SELECT * FROM usuario WHERE nomeUsuario = '$login'";

            $executa = mysqli_query($this->conexao->getConn(), $sql);


            if(mysqli_num_rows($executa) > 0){

                return false;
            }else{
                return true;
            } 

        }

        public function logout(){

            session_start();

            session_destroy();

            header("location:index.php?sucesso=logout");

            exit();
        }
        
    }





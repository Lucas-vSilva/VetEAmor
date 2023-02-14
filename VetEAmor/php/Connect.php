<?php
//    class Conexao{
//        public function conectar(){
//            try{
//                $conn = mysqli_connect('localhost','root','','vetin');
//                if($conn){
//                    echo "\nConectado com sucesso!";
//                    return $conn;
//                }
//
//            }catch(Except $erro){
//                echo $erro;
//            }
//
//        }//fim do conectar
//    }//fim da classe
//
//

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'vetin');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');






?>
<?php

class Mensagem{
    public static function novaMensagem(){
        if(isset($_POST['mensagem'])){
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRIPPED);
            $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRIPPED);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRIPPED);
            $mensagem = $_POST['conteudo'];
            
            if(empty($nome) or empty($telefone) or empty($email) or empty($mensagem)){
                return json_encode(['status' => 'erro', 'msg' => 'Preencha todos os campos']);
            }

            $msg = DB::connect()->prepare("INSERT INTO `tb.mensagens` VALUES (null, ?,?,?,?)");
            $msg->execute(array($nome,$email,$telefone,$mensagem));

            return json_encode(['status' => 'sucesso', 'msg' => 'A mensagem foi enviada com sucesso, obrigado']);
        }
    }
}
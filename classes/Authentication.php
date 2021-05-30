<?php


class Authentication{
    public static function login(){

        if(isset($_POST['login'])){
            $credentials = [
                'username' => filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRIPPED),
                'password' => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRIPPED)
            ];

            if($credentials['username'] == "" || $credentials['password'] == "" ){
                echo "<script> alert('Preencha todos os campos'); </script>";
                return;
            }
    
            $stmt = DB::connect()->prepare("SELECT * FROM `tb.usuarios` WHERE username = ? AND password = ? ");
            $stmt->execute(array($credentials['username'], $credentials['password']));
    
            if($stmt->rowCount()){
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['login'] = $user;
                header('Location: '.URL.'admin/');
                die();
            }else{
                echo "<script> alert('Usuário e/ou senha incorretos'); </script>";

            }
        }

    }   
}
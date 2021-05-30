<?php

class Config{
    public static function getConfig(){
        $config = DB::connect()->prepare("SELECT * FROM `tb.config`");
        $config->execute();
        return $config->fetch();
    }
    public static function updateConfig(){
        if(isset($_POST['update'])){
            $titulo = $_POST['titulo'];
            $email = $_POST['email'];
            $imagem = $_FILES['imagem'];

            if($_FILES['imagem']['name'] == ""){
                $update = DB::connect()->prepare("UPDATE `tb.config` SET titulo = ? , email = ?");
                $update->execute(array($titulo, $email));
               
            }else{
                $ext = pathinfo($imagem['name'], PATHINFO_EXTENSION);
                $imagem["name"] = PROFILE_IMAGE.'.'.$ext;
    
                if(self::validateImage($imagem)){
                    echo "Imagem inválida";
                    return false;
                };
    
                $dir = "../assets/img/".$imagem['name'];
    
                move_uploaded_file($imagem['tmp_name'], $dir);

                $update = DB::connect()->prepare("UPDATE `tb.config` SET titulo = ? , email = ?, imagem_perfil = ?");
                $update->execute(array($titulo, $email, $imagem["name"]));
            }

        }
    }

    public static function validateImage($image){
        $allowed_types = [
            'image/png',
            'image/jpg',
            'image/gif'
        ];

       if(in_array($image["type"], $allowed_types)){
           return true;
       }

       return false;
    }
}
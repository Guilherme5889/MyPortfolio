<?php

class Online{

    public static function verificarUsuarioOnline()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d H:i:s');
        preg_match('((?<=\().*?(?=;))',$_SERVER['HTTP_USER_AGENT'],$matches);

        if(isset($_SESSION['online'])){
            $token = $_SESSION['online'];
            $date = date('Y-m-d H:i:s');
            $select = DB::connect()->prepare("SELECT `id` FROM `tb.online` WHERE token = ?");
            $select->execute(array($token));

            if($select->rowCount()){
                $update = DB::connect()->prepare("UPDATE `tb.online` SET hora = ? WHERE token = ?");
                $update->execute(array($date, $token));
            }else{
                $_SESSION['online'] = uniqid();
                $token =  $_SESSION['online'];
                $insert = DB::connect()->prepare("INSERT INTO `tb.online` VALUES (null, ?, ?, ?, ?)");
                $insert->execute(array($ip,$token,$date,$matches[0]));
            }
        }else{
            $_SESSION['online'] = uniqid();
            $token =  $_SESSION['online'];
            $insert_ = DB::connect()->prepare("INSERT INTO `tb.online` VALUES (null, ?, ?, ?, ?)");
            $insert_->execute(array($ip,$token,$date, $matches[0]));
        }
    }
    

    public static function limparUsuariosOnline()
    {
        $date = date('Y-m-d H:i:s');
        DB::connect()->exec("DELETE FROM `tb.online` WHERE `hora` < '$date' - INTERVAL 1 MINUTE");
    }

    public static function listarUsuariosOnline(){
        $select = DB::connect()->prepare("SELECT * FROM `tb.online`");
        $select->execute();
        return $select->fetchAll();
    }

    public static function contarUsuariosOnline(){
        self::limparUsuariosOnline();
        $cont = DB::connect()->prepare("SELECT id FROM `tb.online`");
        $cont->execute();
        return $cont->rowCount();
    }
}
<?php
namespace App\Config;

abstract class BancoConfigPDO
{
    public static function conecta()
    {
        $conexao = new \PDO('mysql:host=localhost;dbname=upgradegamer', 'root', 'root');
        
        $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                
        return $conexao;
    }
}
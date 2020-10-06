<?php

namespace App\Model;

class Hardware
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = \App\Config\BancoConfigPDO::conecta();
    }

    public function insert($attributes)
    {
        $id_usuario = 414;

        $date = new \DateTime('', new \DateTimeZone('America/Sao_Paulo'));
        $now = $date->format('Y-m-d H:i:s');

        $query = "INSERT INTO hardware(titulo, preco, descricao, categoria, id_usuario, created_at) VALUES(:titulo, :preco, :descricao, :categoria, :id_usuario, :created_at);";

        $sth = $this->conexao->prepare($query);

        $sth->bindValue(':titulo',  $attributes['titulo'], \PDO::PARAM_STR);
        $sth->bindValue(':preco', $attributes['preco'], \PDO::PARAM_STR);
        $sth->bindValue(':descricao', $attributes['descricao'], \PDO::PARAM_STR);
        $sth->bindValue(':categoria', $attributes['categoria'], \PDO::PARAM_STR);
        $sth->bindValue(':id_usuario', $id_usuario, \PDO::PARAM_STR);
        $sth->bindValue(':created_at', $now, \PDO::PARAM_STR);
        $sth->execute();
    }

    public function select()
    {
        $query = "SELECT * FROM hardware;";
        $sth = $this->conexao->prepare($query);
        $sth->execute();
        return $sth->fetchAll();
    }

    public function update($attributes)
    {
        $id_usuario = 414;

        $query = "UPDATE hardware SET titulo = :titulo , preco = :preco, descricao = :descricao, categoria = :categoria, id_usuario = :id_usuario WHERE id_hardware = :id_hardware;";
        $sth = $this->conexao->prepare($query);
        $sth->bindValue(':id_hardware',  $attributes['id_hardware'], \PDO::PARAM_STR);
        $sth->bindValue(':titulo',  $attributes['titulo'], \PDO::PARAM_STR);
        $sth->bindValue(':preco', $attributes['preco'], \PDO::PARAM_STR);
        $sth->bindValue(':descricao', $attributes['descricao'], \PDO::PARAM_STR);
        $sth->bindValue(':categoria', $attributes['categoria'], \PDO::PARAM_STR);
        $sth->bindValue(':id_usuario', $id_usuario, \PDO::PARAM_STR);
        $sth->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM hardware WHERE id_hardware = :id_hardware;";
        $sth = $this->conexao->prepare($query);
        $sth->bindValue(':id_hardware',  $id, \PDO::PARAM_STR);
        $sth->execute();
    }

    public function findById($id)
    {
        $query = "SELECT * FROM hardware WHERE id_hardware = :id_hardware;";
        $sth = $this->conexao->prepare($query);
        $sth->bindValue(':id_hardware', $id, \PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetchAll();
    }
}

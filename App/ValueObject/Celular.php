<?php
namespace App\ValueObject;

use App\Helper\Helpers;

class Celular
{
    private $celular;

    public function __construct($celular)
    {
        $this->celular = $celular;
        $this->validaCelular();
    }

    private function validaCelular()
    {
        $this->celular = str_replace('(', '', $this->celular);
        $this->celular = str_replace(')', '', $this->celular);
        $this->celular = str_replace('-', '', $this->celular);
        $this->celular = str_replace(' ', '', $this->celular);
    }

    public function getValidaCelular()
    {
        return $this->telefone;
    }
}

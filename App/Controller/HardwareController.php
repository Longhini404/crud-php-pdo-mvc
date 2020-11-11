<?php
namespace App\Controller;

class HardwareController
{
    private $attributes;

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
    
    public function salvar()
    {
        $hardware = new \App\Model\Hardware();
        $hardware->insert($this->attributes);
    }

    public function editar()
    {
        $hardware = new \App\Model\Hardware();
        $hardware->update($this->attributes);
    }

    public function deletar()
    {
        $hardware = new \App\Model\Hardware();
        $hardware->delete($this->attributes);
    }

}

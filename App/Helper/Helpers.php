<?php

namespace App\Helper;

class Helpers {

    public static function formataDataView($data)
    {
        if ($data == '') return '';
    	$data_saida = str_replace('-', '', $data);

    	return date('d/m/Y', strtotime($data_saida));
    }
    
}
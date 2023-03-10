<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected static $notFindMessage = [
        'AddressController' => 'Endereço não encontrado!',
        'UserController' => 'Usuário não encontrado!',
        'InvoiceController' => 'Cobrança não encontrada!',
    ];

    private static function getCalledClass()
    {
        $class = explode('\\', get_called_class());
        $class = array_pop($class);
        return $class;
    }

    protected static function createNotFoundMessage()
    {
        $class = explode('\\', get_called_class());
        $class = array_pop($class);
        return self::$notFindMessage[self::getCalledClass()];
    }
}

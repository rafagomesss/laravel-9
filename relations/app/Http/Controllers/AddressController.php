<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        return Address::all();
    }

    public function findOne(Request $request)
    {
        $id = filter_var($request->id, FILTER_SANITIZE_NUMBER_INT);
        $response = ['error' => 'Requisição inválida!'];
        if ($id) {
            $response = Address::find($id) ?? self::createNotFoundMessage();
            $response['user'] = $response->user;
        }
        return $response;
    }

    public function insert(Request $request)
    {
        if (empty($request->address)) {
            return ['error' => 'Endereço inválido!'];
        }

        $data['address'] =  filter_var($request->address, FILTER_SANITIZE_SPECIAL_CHARS);
        return Address::create($data);
    }
}

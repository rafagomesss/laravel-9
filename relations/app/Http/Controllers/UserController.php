<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::all();
    }

    public function findOne(Request $request)
    {
        $id = filter_var($request->id, FILTER_SANITIZE_NUMBER_INT);
        $response = ['error' => 'Requisição inválida!'];
        if ($id) {
            $response = User::find($id) ?? self::createNotFoundMessage();
            $response['addresses'] = $response->addresses;
        }
        return $response;
    }

    public function insert(Request $request)
    {
        if (empty($request->password)) {
            return ['error' => 'Senha inválida!'];
        }

        $data = [
            'name' => filter_var($request->name, FILTER_SANITIZE_SPECIAL_CHARS),
            'email' => filter_var($request->email, FILTER_VALIDATE_EMAIL),
            'password' => password_hash($request->password, PASSWORD_ARGON2ID, ['cost' => 12]),
        ];

        foreach ($data as $key => $value) {
            if (empty($value)) {
                return ['error' => "Campo '$key' inválido!"];
            }
        }

        return User::create($data);
    }
}

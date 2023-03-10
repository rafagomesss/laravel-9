<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        return Invoice::all();
    }

    public function insert(Request $request)
    {
        $data = $request->only(['description', 'value', 'address_id', 'user_id']);
        return Invoice::create($data);
    }

    public function findOne(Request $request)
    {
        $id = filter_var($request->id, FILTER_SANITIZE_NUMBER_INT);
        $response = ['error' => 'Requisição inválida!'];
        if ($id) {
            $response = Invoice::find($id) ?? self::createNotFoundMessage();
            $response['user'] = $response->user;
            $response['address'] = $response->address;
        }
        return $response;
    }
}

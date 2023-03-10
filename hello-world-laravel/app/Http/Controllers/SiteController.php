<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    private function exercicioComponente(): array
    {
        $dados['pessoas'] = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 68),
                'name' => 'Nome Qualquer ',
                'birthdate' => '22/01/1990',
                'age' => 34,
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 68),
                'name' => 'Fulana da Silva',
                'birthdate' => '26/11/1990',
                'age' => 39,
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 68),
                'name' => 'Ciclano da Silva',
                'birthdate' => '17/02/2023',
                'age' => 1,
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 68),
                'name' => 'Fulano Campbell ',
                'birthdate' => '17/02/2023',
                'age' => 1,
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 68),
                'name' => 'Ciclano Campbell ',
                'birthdate' => '17/02/2023',
                'age' => 1,
            ],

        ];
        return $dados;
    }

    private function exercicioLoop()
    {
        $dados = [];
        for ($x = 1; $x <= 50; $x++) {
            $dados['url'][] = 'https://i.pravatar.cc/150?img=' . $x;
        }
        return $dados;
    }

    public function index()
    {
        $data = [
            'name' => 'fulano',
            'lastName' => ' ',
            'age' => 34,
            'birthDate' => '22/01/1990',
            'html' => '<b style="color: red;">Negrito</b>',
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2',
            ]
        ];
        return view('bemvindo', $data);
    }

    public function logout()
    {
        return view('home');
    }

    public function users(Request $request)
    {
        $data = [
            'quantidade' => $request->qtde,
        ];
        return view('usuarios', $data);
    }

    public function exercicio(Request $request)
    {
        $id = intval($request->id);
        if (!empty($id)) {
            switch ($id) {
                case 1:
                    $dados = $this->exercicioComponente();
                    break;
                case 2:
                    $dados = $this->exercicioLoop();
                    break;
            }
            $dados['id'] = $request->id;
            if (file_exists('../resources/views/exercicio' . $request->id . '.blade.php')) {
                return view('exercicio' . $request->id, $dados);
            }
        }
    }

    public function comentarios()
    {
        return view('comentarios');
    }

    public function include()
    {
        $dados = $this->exercicioComponente();
        return view('include', $dados);
    }

    public function components()
    {
        $data = $this->exercicioComponente();
        return view('comp', $data);
    }

    public function layout()
    {
        return view('site');
    }

    public function layout2()
    {
        return view('pagina2');
    }
}

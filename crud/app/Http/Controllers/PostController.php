<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // No futuro vai somente exibir um formulário
        $newPost = [
            'title' => 'Meu Primeiro Post',
            'content' => 'Conteúdo qualquer',
            'author' => '',
        ];

        // Forma mais convencional de criar um registro no banco
        $post = new Post($newPost);
        $post->save();

        // $post = new Post();
        // $post->title = 'Mais um novo post';
        // $post->content = 'Conteúdo qualquer';
        // $post->author = 'Nome Qualquer';
        // $post->save();

        return $post;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // No futuro receberá um post com um novo recurso.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Post::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Atualiza apenas um campo de um registro da tabela post no banco de dados
        // $post = Post::find(1);
        // $post->title = 'Meu post atualizado';
        // $post->save();
        // return $post;

        // Atualiza um ou mais registros que se enquadram nas condições passadas
        $posts = Post::find($id)
            ->update([
                'author' => 'Nome Qualquer ',
                'title' =>  'Alterado',
            ]);

        return $posts;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $post = Post::find(1)->delete();

        // semelhante a
        $post = Post::find($id);

        if (!$post) {
            return 'Post não encontrado';
        }

        $post->delete();

        // semelhante a
        // $post = (new Post())->find(2)->delete();

        // semelhante a
        // (new Post())->find(2)->delete();

        // para deletar todos os registros
        // metodo all() retorna uma collection (não é instância de model, portanto deve-se usar where())
        // $posts = Post::where('id', '>', 0)->delete();
        return $post;
    }
}

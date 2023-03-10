<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        // $newPost = [
        //     'title' => 'Meu Primeiro Post',
        //     'content' => 'Conteúdo qualquer',
        //     'author' => '',
        // ];

        // Forma mais convencional de criar um registro no banco
        // $post = new Post($newPost);
        // $post->save();

        $post = new Post();
        $post->title = 'Mais um novo post';
        $post->content = 'Conteúdo qualquer';
        $post->author = 'Nome Qualquer';
        $post->save();

        return $post;
    }

    public function read(Request $request)
    {
        $post = new Post();
        $post = $post->find(1);
        return $post;
    }

    public function all(Request $request)
    {
        $posts = Post::all();

        // Semelhante a:
        // $posts = new Post();
        // $posts = $posts->all();
        return $posts;
        dd($posts);
    }

    public function update(Request $request)
    {
        // Atualiza apenas um campo de um registro da tabela post no banco de dados
        // $post = Post::find(1);
        // $post->title = 'Meu post atualizado';
        // $post->save();
        // return $post;

        // Atualiza um ou mais registros que se enquadram nas condições passadas
        $posts = Post::where('id', '>', 1)
            ->update([
                'author' => 'Nome Qualquer '
            ]);

        return $posts;
    }

    public function delete(Request $request)
    {
        // $post = Post::find(1)->delete();

        // semelhante a
        $post = Post::find($request->id);

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

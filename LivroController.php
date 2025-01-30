<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function store(Request $request){
        $livro = Livro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor, 
            'ano_publicado' => $request->ano_publicado,
            'genero' => $request->genero, 
            'descricao' => $request->descricao,
            'editora' => $request->editora, 
            'isbn' => $request->isbn, 
            'selo_editorial' => $request->selo_editorial 
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Cadastrado',
            'data' => $livro
        ]);
    }

    public function index(){
        $livros = Livro::all();

        return response()->json([
            'status' => true,
            'message' => 'Todos livros listados',
            'data' => $livros
        ]);
    }

    public function search(Request $request){
        $livro = Livro::where('autor', 'like', '%'.$request->autor.'%')->get();

        return response()->json([
            'status' => true,
            'data' => $livro
        ]);
    }

    public function update(Request $request){
        $livro = Livro::find($request->id);

        if($livro == null){
            return response()->json([
                'status' => false,
                'message' => 'Livro não encontrado'
            ]);
        }
        if(isset($request->titulo)){
            $livro->titulo = $request->titulo;
        }

        if(isset($request->autor)){
            $livro->autor = $request->autor;
        }

        if(isset($request->ano_publicado)){
            $livro->ano_publicado = $request->ano_publicado;
        }

        if(isset($request->editora)){
            $livro->editora = $request->editora;
        }

        if(isset($request->isbn)){
            $livro->isbn = $request->isbn;
        }

        if(isset($request->selo_editorial)){
            $livro->selo_editorial = $request->selo_editorial;
        }

        $livro->update();

        return response()->json([
            'status' => true,
            'message' => 'Atualizado',
            'data' => $livro
        ]);
        

    }

    public function delete($id){
        $livro = Livro::find($id);

        if($livro == null){
            return response()->json([
                'status' => false,
                'message' => 'não encontrado'
            ]);
        }

        $livro-> delete();

        return response()->json([
            'status' => true,
            'message' => 'deletado',
            'data' => $livro
        ]);
    }
}

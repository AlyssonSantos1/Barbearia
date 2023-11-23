<?php

namespace App\Http\Controllers;

use App\Models\Barbearia;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    public function getall(Request $request){
        $barbearias = Barbearia::paginate(5);
        return $barbearias;

    }

    public function create(Request $request){
        $barbearias = $request->barbearias;
        foreach($barbearias as $menubarbearias){

            Barbearia::create([
                'nome' => $menubarbearias['nome'],
                'preco' => $menubarbearias['preco'],
            ]);
        }

        return response()->json($barbearias);
    }

    public function update(Request $request, int $id){
        $barbearias = Barbearia::findOrfail($id);
        $barbearias->nome = $request->nome;
        $barbearias->preco = $request->preco;
        $barbearias->save();

        return response()->json($barbearias);
    }

    public function destroy(Request $request, int $id){
        $barbearias = Barbearia::findOrfail($id);
        if ($barbearias->delete()){
            return response()->json([
                'status' => 'deletado',
                'mensagem' => 'excluido com sucesso'
            ], 200);
        }
        return response()->json([
            'status' => 'erro',
            'mensagem' => 'Nao deletado'
            ], 400);

    }



}

<?php

namespace App\Http\Controllers;
use App\Cidade;
use App\Estado;
use Illuminate\Http\Request;

class CidadesController extends Controller
{

	public function index()
    {
        $cidade = Cidade::all();
        return view ('cidades.index')->with('cidades', $cidade);
    }

    public function show(Cidade $cidade)
    {
				$estado = Estado::orderBy('nome')->get();
				return view ('cidades.show')->with('cidade', $cidade)->with('estado', $estado);
    }

    public function create()
    {
    	$estados = Estado::all();
        return view('cidades.create')->with('estados', $estados);
    }

    public function store(Request $request)
    {
    	Cidade::create($request->all());
        session()->flash('mensagem', 'Cidade inserido com sucesso!');
        return redirect ('/cidades');
    }

		public function edit(Cidade $cidade){
			$estado = Estado::all();
    	return view ('cidades.edit')->with('cidade', $cidade)->with('estado', $estado);
    }

		public function destroy(Cidade $cidade){
			$cidade->delete();
			session()->flash('mensagem', 'Cidade excluída com sucesso!');
			return redirect()->route('cidades.index');
		}

		public function update(Request $request, Cidade $cidade){
      $cidade->nome = $request->nome;
      $cidade->estado_id = $request->estado_id;
      $cidade->save();
      $request->session()->flash('mensagem', 'Cidade atualizada com sucesso!');
      return redirect('/cidades');
    }

}

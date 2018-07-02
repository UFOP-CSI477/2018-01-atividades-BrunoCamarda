<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Cidade;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $aluno = Aluno::all();
      return view ('alunos.index')->with('aluno', $aluno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      $cidades = Cidade::all();
      return view('alunos.create')->with('cidades', $cidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      Aluno::create($request->all());
      session()->flash('mensagem', 'Aluno inserido com sucesso!');
      return redirect ('/alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno){
      return view ('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno){
      $cidades = Cidade::all();
      return view ('alunos.edit')->with('cidades', $cidades)->with('aluno', $aluno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno){
      $aluno->fill($request->all());
      $aluno->save();
      $request->session()->flash('mensagem', 'Aluno atualizado com sucesso!');
      return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno){
      $aluno->delete();
			session()->flash('mensagem', 'Aluno excluído com sucesso!');
			return redirect()->route('alunos.index');

    }
}

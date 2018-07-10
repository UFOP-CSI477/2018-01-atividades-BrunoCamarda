<?php

namespace App\Http\Controllers;
use App\Test;
use App\Procedure;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestsController extends Controller{

	public function index(){
		if (Auth::user()->type == 3){
			$userId = Auth::user()->id;
			$test = Test::where('user_id', $userId)->get();
				if(Auth::user()->type != 3){
					echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
						location.href ='\';
					</script>";
				}else{
				  return view ('tests.index')->with('tests', $test);
				}
		}else{
			echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
				</script>";
		}
 	}

	public function create(){
		if (Auth::user()->type == 3){
				$procedures = Procedure::all();
				return view('tests.create')->with('procedures', $procedures);
		}else{
			echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
		}
	}

	public function store(Request $request){
			$test = new Test();
			$test->user_id = Auth::user()->id;
			$test->procedure_id = $request->procedureId;
			$test->date = $request->data;
			$test->save();
			return redirect ('/tests');
	}

	public function show(Test $test){
		if (Auth::user()->id == $test->user_id){
			$procedures = Procedure::all();
			return view ('tests.show')->with('test', $test)->with('procedures', $procedures);
		}else{
			echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
		}
	}

	public function destroy(Test $test){
			$test->delete();
			return redirect()->route('tests.index');
	}

	public function update(Request $request, Test $test){
				$test->procedure_id = $request->procedureId;
		 		$test->date = $request->date;
		 		$test->save();
		 		return redirect('/tests');
	}

	public function relatorioCliente(){
		if (Auth::user()->type == 1){
			$user = DB::select('SELECT DISTINCT users.id as userId, users.name as Uname, SUM(procedures.price) as valor, COUNT(procedures.id) as quantidade FROM tests INNER JOIN procedures ON procedures.id = tests.procedure_id INNER JOIN users ON tests.user_id = users.id WHERE tests.user_id = users.id GROUP BY users.name, users.id');
			return view ('tests.relatorioCliente')->with('user', $user);
		}else{
			echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
		}
	}

	public function relatorioProcedimento(){
		if (Auth::user()->type == 1){
			$proc = DB::select("SELECT DISTINCT procedures.name as proceName, COUNT(procedures.id) as quantidade, procedures.id as proceId FROM tests INNER JOIN procedures ON procedures.id = tests.procedure_id GROUP BY proceName, proceId");
			return view ('tests.relatorioProcedimento')->with('proc', $proc);
		}else{
			echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
		}
	}

	public function relatorioProcedimentoShow($id){
		if (Auth::user()->type == 1){
			$user = DB::select("SELECT users.name as Uname FROM tests INNER JOIN procedures ON tests.procedure_id = procedures.id INNER JOIN users ON tests.user_id = users.id WHERE tests.procedure_id = '$id'");
			return view ('tests.relatorioProcedimentoShow')->with('user', $user);
		}else{
			echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
		}
	}

	public function relatorioClienteShow($id){
		if (Auth::user()->type == 1){
			$proc = DB::select("SELECT procedures.name as Pname FROM tests INNER JOIN procedures ON procedures.id = tests.procedure_id WHERE tests.user_id = '$id'");
			return view ('tests.relatorioClienteShow')->with('proc', $proc);
		}else{
			echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
		}
	}

}

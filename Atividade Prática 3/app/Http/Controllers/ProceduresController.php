<?php

namespace App\Http\Controllers;
use App\Procedure;
use Auth;
use Illuminate\Http\Request;

class ProceduresController extends Controller{
  public function index (){
		$procedures = Procedure::all();
		return view('procedures.index')->with('procedures', $procedures);
	}
	public function create(){
    if (Auth::user()->type == 1){
  		$procedures = Procedure::all();
  		return view('procedures.create')->with('procedures', $procedures);
    } else {
      echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
    }
	}

  public function store(Request $request){
    $procedure = new Procedure();
    $procedure->user_id = Auth::user()->id;
    $procedure->name = $request->name;
    $procedure->price = $request->price;
    $procedure->save();
    return redirect ('/procedures');
	}

  public function editar(){
    if (Auth::user()->type == 1){
  		$procedures = Procedure::all();
  		return view('procedures.edit')->with('procedures', $procedures);
  	} else if (Auth::user()->type == 2){
  		$procedures = Procedure::all();
  		return view('procedures.editOp')->with('procedures', $procedures);
    }else{
  		echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
  			location.href ='/';
  		</script>";
  	}
  }

  public function show(Procedure $procedure){
    if (Auth::user()->type == 1){
			return view ('procedures.show')->with('procedure', $procedure);
		}else if (Auth::user()->type == 2){
  		return view('procedures.showOp')->with('procedure', $procedure);
		} else {
      echo"<script type='text/javascript'>alert('Você não tem permissão para acessar essa página!');
				location.href ='/';
			</script>";
		}
  }

  public function update(Request $request, Procedure $procedure){
    if (Auth::user()->type == 1){
      $procedure->name = $request->name;
      $procedure->price = $request->price;
      $procedure->user_id = Auth::user()->id;
      $procedure->save();
		 	return redirect()->route('procedures.editar');
    }else if (Auth::user()->type == 2){
      $procedure->price = $request->price;
      $procedure->user_id = Auth::user()->id;
      $procedure->save();
		 	return redirect()->route('procedures.editar');
	  }
  }

  public function destroy(Procedure $procedure){
    $procedure->delete();
    return redirect()->route('procedures.editar');
  }

}

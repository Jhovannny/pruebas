<?php

namespace App\Http\Controllers;
use App\Models\CursosModel;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function __invoke(){
        return view('welcome');
    }

    public function index(){
        $curso=CursosModel::orderBy('id','desc')->paginate();

        return view('cursos.index',compact('curso'));
       


    }
    public function update(Request $request,$id){

        $request->validate([
'name'=>'required|max:10',
'desc'=>'required|min:10',
'categoria'=>'required'
        ]);
     
        $curso=CursosModel::find($id);
$curso->name=$request->name;
$curso->descrition=$request->desc;
$curso->categoria=$request->categoria;
$curso->save();
 
return redirect()->route('curso.show',$curso->id);

    }

    public function edit($id){
        $curso=CursosModel::find($id);
        
       return view('cursos.edit',compact('curso'));

    }

    public function create(){
 
        return view('cursos.create');
    }
    public function show($id){

        $curso=CursosModel::find($id);


        return view('cursos.show',compact('curso'));
    }

    public function cursopost(Request $request){

        $request->validate([

        'name'=>'required',
        'desc'=>'required',
        'categoria'=>'required'
        ]);

$curso=new CursosModel;

$curso->name=$request->name;
$curso->descrition=$request->desc;
$curso->categoria=$request->categoria;

$curso->save();

return redirect()->route('curso.show',$curso->id);


    }
}
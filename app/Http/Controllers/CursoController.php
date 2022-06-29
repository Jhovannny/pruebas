<?php

namespace App\Http\Controllers;
use App\Models\CursosModel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
class CursoController extends Controller
{

    
      
    
    public function __invoke(){
        return view('welcome');
    }

    public function index(){
        $curso=CursosModel::orderBy('id','desc')->paginate();

        return view('cursos.index',compact('curso'));
       


    }
    public function update(Request $request,CursosModel $curso){

        
     /*
        $curso=CursosModel::find($id);
$curso->name=$request->name;
$curso->descrition=$request->descrition;
$curso->categoria=$request->categoria;
$curso->save();

*/
$curso->update($request->all());



 
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

    public function cursopost(StoreCurso $request){

       /* $request->validate([

        'name'=>'required',
        'desc'=>'required',
        'categoria'=>'required'
        ]);*/

        /*

$curso=new CursosModel;

$curso->name=$request->name;
$curso->descrition=$request->desc;
$curso->categoria=$request->categoria;

$curso->save();

*/

/*
$curso=CursosModel::create([
'name'=>$request->name,
'descrition'=>$request->descrition,
'categoria'=>$request->categoria

]);
*/

$curso=CursosModel::create($request->all());


return redirect()->route('curso.show',$curso->id);


    }


    public function delete($id){
       $curso=CursosModel::find($id);

       $curso->delete();
return redirect()->route('curso.index');

    }
}

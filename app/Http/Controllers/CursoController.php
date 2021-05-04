<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){
      $cursos = Curso::orderBy('id','desc')->paginate();
      return view('cursos.index', compact('cursos'));
    }

    public function create(){
      return view('cursos.create');
    }

    public function show(Curso $curso){
      //$curso = Curso::find($id);
      return view('cursos.show',/*['curso'=> $curso]*/ compact('curso') /*compact toma una variable con el mismo nombre entre comillas y lo envia con ese nombre*/);
    }

    public function store(/*Request $request*/StoreCurso $request){
      
      // $curso = new Curso();

      //return $request->all();
      $curso = Curso::create($request->all());
      // $curso->name = $request->name;
      // $curso->descripcion = $request->descripcion;
      // $curso->categoria = $request->categoria;
      // $curso->save();
      return redirect()->route('cursos.show',$curso);
    }

    public function edit(Curso $curso){ //Si se le envía el id a un objeto de tipo curso, laravel lo toma como si se busca al registro con ese id
      return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso){
      $request->validate([
        'name' => 'required',
        'categoria' => 'required',
        'descripcion' => 'required'
      ]);

      // $curso->name = $request->name;
      // $curso->descripcion = $request->descripcion;
      // $curso->categoria = $request->categoria;
      // $curso->save();

      $curso->update($request->all());
      return redirect()->route('cursos.show',$curso);
    }

    public function destroy(Curso $curso){
      $curso->delete();
      return redirect()->route('cursos.index');
    }
}

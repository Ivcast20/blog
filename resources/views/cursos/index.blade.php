@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Bienvenido a la pagina cursos</h1>
    <a href={{route('cursos.create')}}>Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href={{route('cursos.show',$curso)}}>{{$curso->name}}</a> <!-- Si en lugar de $curso->id se-->
            </li>                                                                <!-- escribe solo curso, laravel-->
        @endforeach                                                              <!-- sobreentiende que se envía el curso-->
    </ul>
    {{$cursos->links()}}
@endsection
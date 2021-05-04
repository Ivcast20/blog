@extends('layouts.plantilla')

@section('title','Editar curso')

@section('content')
    <h1>En esta página podrás editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf
        @method('put')
        <label>Nombre:
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        <br>
        @error('name')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <label>Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        <br>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <label>Categoría: 
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        <br>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <button type="submit">Actualizar</button>
    </form>
@endsection
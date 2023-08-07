@extends('admin.layouts.app')

@section('title', 'Detalhes do Curso')

@section('content')

<h1 class="w-full text-3xl text-black pb-6">Detalhes do Curso {{$course->name}}</h1>
    
<div class="flex flex-wrap">
    <div class="w-full my-6 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form action="{{route('courses.destroy', $course->id)}}" method="post" class="p-10 bg-white rounded shadow-xl">
                <ul>
                    <li><strong>Nome: </strong>{{ $course->name }}</li>
                    <li><strong>Disponível: </strong>{{ $course->available ? 'Publicado' : 'Não Publicado' }}</li>
                    <li><strong>Descrição: </strong>{{ $course->description }}</li>
                </ul>
                @csrf
                @method('DELETE')
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-800 rounded" type="submit">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
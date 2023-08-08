@extends('admin.layouts.app')

@section('title', 'Adicionar Novo Módulo')

@section('content')

<h1 class="w-full text-3xl text-black pb-6">Adicionar novo módulo para o curso {{ $course->name }} </h1>
    
<div class="flex flex-wrap">
    <div class="w-full my-6 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form action="{{route('modules.store', $course->id)}}" method="post" class="p-10 bg-white rounded shadow-xl">
                @include('admin.courses.modules._partials.form')
            </form>
        </div>
    </div>
</div>

@endsection
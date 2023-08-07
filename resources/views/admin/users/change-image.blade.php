@extends('admin.layouts.app')

@section('title', 'Alterar Imagem do Usuário')

@section('content')

<h1 class="w-full text-3xl text-black pb-6">Alterar Imagem do usuário {{$user->name}}</h1>
    
<div class="flex flex-wrap">
    <div class="w-full my-6 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form action="{{route('users.update.image', $user->id)}}" method="post" class="p-10 bg-white rounded shadow-xl" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Nova Foto</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file">
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Atualizar Foto</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
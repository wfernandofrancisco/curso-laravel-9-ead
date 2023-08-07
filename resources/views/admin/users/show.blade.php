@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')

<h1 class="w-full text-3xl text-black pb-6">Detalhes do usuário {{$user->name}}</h1>
    
<div class="flex flex-wrap">
    <div class="w-full my-6 pr-0 lg:pr-2">

        

        <div class="leading-loose">
            <form action="{{route('users.destroy', $user->id)}}" method="post" class="p-10 bg-white rounded shadow-xl">
                <ul>
                    <li>{{ $user->name }}</li>
                    <li>{{ $user->email }}</li>
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
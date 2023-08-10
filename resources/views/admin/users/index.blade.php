@extends('admin.layouts.app')

@section('title', 'Usuários')

@section('content')

<h1 class="text-3xl text-black pb-6">
    Usuários
    <a href="{{route('users.create')}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"><i class="fas fa-plus"></i></a>
</h1>

<div class="w-full mt-12">
    @include('admin.includes.form-search', ['routerName' => 'users.index'])
    <!--
    <form action="{{ route('users.index') }}" method="get">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="" >
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
    </form>
    -->
    
    <div class="bg-white overflow-auto">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nome
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Data de Criação
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full rounded-full"
                                        src="{{ $user->image ? url("storage/$user->image") : url("images/user.png") }}"
                                        alt="{{ $user->name }}" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$user->name}}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$user->email}}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$user->created_at}}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ route('users.show', $user->id) }}">
                                <span
                                    class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">
                                    <span aria-hidden
                                        class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                    <span class="relative">Detalhes</span>
                                </span>
                            </a>
                            <a href="{{ route('users.change.image', $user->id) }}">
                                <span
                                    class="relative inline-block px-3 py-1 font-semibold text-blue-600 leading-tight">
                                    <span aria-hidden
                                        class="absolute inset-0 bg-blue-400 opacity-50 rounded-full"></span>
                                    <span class="relative">Foto</span>
                                </span>
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}">
                                <span
                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <span class="relative">Editar</span>
                                </span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="1000"> Sem nenhum usuário</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
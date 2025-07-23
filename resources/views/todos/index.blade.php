<!-- extends adalah sebuah directive yang digunakan untuk mengekstend sebuah template -->
@extends('layouts.app') 

<!-- section adalah sebuah directive yang digunakan untuk menampilkan sebuah content -->
@section('content') 
<div class="max-w-xl mx-auto mt-12 p-6 bg-white rounded-xl shadow-lg">
    <h1 class="text-3xl font-extrabold text-black mb-6 text-center tracking-tight">ToDo List</h1>
    <x-todo-form />
    @if($todos->isEmpty())
        <div class="text-center text-gray-400 py-8">
            <svg class="mx-auto mb-2 w-12 h-12 text-blue-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6m9 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            Belum ada todo, yuk tambah!
        </div>
    @else
    <ul class="space-y-3">
        @foreach($todos as $todo)
            <x-todo-item :todo="$todo" />
        @endforeach
    </ul>
    @endif

    <div class="mt-6 p-4 rounded-lg border-1 border-black shadow-[4px_4px_0_0_#000]">
        {{ $todos->links() }}
</div>
@endsection 


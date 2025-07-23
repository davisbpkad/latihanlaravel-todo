@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-12 p-6 bg-white rounded-xl shadow-lg">
    <h1 class="text-3xl font-extrabold text-blue-600 mb-6 text-center tracking-tight">ToDo List</h1>
    <form action="{{ route('todos.store') }}" method="POST" class="flex mb-6 gap-2">
        @csrf
        <input type="text" name="title" class="flex-1 border-2 border-blue-200 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 transition" placeholder="Tambah todo..." required>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold shadow transition">Tambah</button>
    </form>
    @if($todos->isEmpty())
        <div class="text-center text-gray-400 py-8">
            <svg class="mx-auto mb-2 w-12 h-12 text-blue-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6m9 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            Belum ada todo, yuk tambah!
        </div>
    @else
    <ul class="space-y-3">
        @foreach($todos as $todo)
        <li class="flex items-center justify-between bg-blue-50 hover:bg-blue-100 transition p-4 rounded-lg shadow group">
            <form action="{{ route('todos.update', $todo) }}" method="POST" class="flex items-center w-full gap-3">
                @csrf
                @method('PUT')
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : '' }} class="accent-blue-500 w-5 h-5">
                <input type="text" name="title" value="{{ $todo->title }}" class="flex-1 bg-transparent border-none focus:outline-none text-lg {{ $todo->completed ? 'line-through text-gray-400' : 'text-gray-800' }}">
            </form>
            <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white hover:text-white font-bold px-3 py-1 rounded transition opacity-0 group-hover:opacity-100">Hapus</button>
            </form>
        </li>
        @endforeach
    </ul>
    @endif
</div>
@endsection 
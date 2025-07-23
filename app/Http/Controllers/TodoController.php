<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Tampilkan semua todo.
     */
    public function index()
    {
        // Ambil semua todo dari database
        // $todos = Todo::all();
        
        // Urutkan berdasarkan status selesai (belum selesai di atas) dan tanggal dibuat (baru di atas)
        // Gunakan eager loading jika ada relasi yang perlu dimuat
        $todos = Todo::orderBy('created_at', 'desc')
        //make paginate
                 ->paginate(5);
        return view('todos.index', compact('todos'));
    }

    /**
     * Simpan todo baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        // Simpan todo baru dengan status belum selesai
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            // Status selesai default adalah false
            'completed' => false,
        ]);
        return redirect()->route('todos.index');
    }

    /**
     * Update todo (ubah judul atau status selesai).
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        ]);
        // Update status dan judul todo
        $todo->update([
            'completed' => $request->has('completed'),
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('todos.index');
    }

    /**
     * Hapus todo dari database.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
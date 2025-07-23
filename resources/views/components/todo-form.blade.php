<form action="{{ route('todos.store') }}" method="POST" class="flex mb-6 gap-2">
    @csrf
    <input type="text" name="title" class="flex-1 border-2 border-blue-200 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 transition" placeholder="Tambah todo..." required>
    <button type="submit" class="justify-center py-3 px-6 border-2 border-black text-sm font-bold rounded-lg text-white bg-blue-500 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] 
    hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] focus:outline-none transition-all 
    duration-200 active:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] active:translate-x-[3px] active:translate-y-[3px]">Tambah</button>
</form> 


<li class="flex flex-col bg-blue-50 hover:bg-blue-100 transition p-4 rounded-lg shadow group mb-2">
    <div class="flex items-center justify-between w-full">
        <form action="{{ route('todos.update', $todo) }}" method="POST" class="flex items-center w-full gap-3">
            @csrf
            @method('PUT')
            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : '' }}
                class="w-7 h-7 border-2 border-black rounded-md bg-white shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] 
                checked:bg-green-400 checked:border-black checked:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] focus:outline-none transition-all duration-200 
                hover:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[1px] hover:translate-y-[1px] 
                active:shadow-none active:translate-x-[2px] active:translate-y-[2px]">
            <input type="text" name="title" value="{{ $todo->title }}" class="flex-1 bg-transparent border-none focus:outline-none text-lg {{ $todo->completed ? 'line-through text-gray-400' : 'text-gray-800' }}">
        </form>
         <x-todo-actions :todo="$todo" />
    </div>
    
</li>

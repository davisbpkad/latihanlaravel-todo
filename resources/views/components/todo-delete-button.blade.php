@props(['todo'])

<form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <button type="submit"
        {{ $attributes->merge([
            'class' => 'justify-center py-1 px-3 border-1 border-black text-sm font-bold rounded-lg text-white bg-red-400 hover:bg-red-700 
                        shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] 
                        hover:translate-x-[2px] hover:translate-y-[2px] opacity-0 group-hover:opacity-100
                        focus:outline-none transition-all duration-200 
                        active:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] active:translate-x-[3px] active:translate-y-[3px]'
        ]) }}
        onclick="return confirm('Yakin ingin menghapus todo ini?')">
        <i class="fas fa-trash-alt"></i>
    </button>
</form>
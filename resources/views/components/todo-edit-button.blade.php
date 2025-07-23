@props(['todo'])

<form method="GET" class="inline-block">
    <input type="hidden" name="edit" value="{{ $todo->id }}">
    <input type="hidden" name="page" value="{{ request('page', 1) }}">
    <button type="submit"
        {{ $attributes->merge([
            'class' => 'justify-center py-1 px-3 border-1 border-black text-sm font-bold rounded-lg text-white bg-blue-400 hover:bg-blue-700 
                        shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] 
                        hover:translate-x-[2px] hover:translate-y-[2px] opacity-0 group-hover:opacity-100
                        focus:outline-none transition-all duration-200 
                        active:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] active:translate-x-[3px] active:translate-y-[3px]'
        ]) }}>
        <i class="fas fa-edit"></i>
    </button>
</form>
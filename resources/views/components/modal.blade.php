<div
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm"
    style="display: {{ $show ? 'flex' : 'none' }};"
>
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full relative">
        <button onclick="window.location='{{ url()->current() }}'"
            class="absolute top-2 right-2 text-gray-400 hover:text-gray-700 text-2xl font-bold focus:outline-none"
            aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
        {{ $slot }}
    </div>
</div>
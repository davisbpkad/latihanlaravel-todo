@props(['todo'])

<x-modal :show="request('edit') == $todo->id">
    <div class="text-lg font-bold mb-2">Edit Todo</div>
    <form action="{{ route('todos.update', $todo) }}" method="POST" class="flex flex-col gap-2">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}"
            class="border-2 border-blue-200 rounded-lg px-4 py-2 focus:border-blue-400 focus:outline-none"
            placeholder="Judul todo" required>
        <textarea name="description"
            class="border-2 border-blue-200 rounded-lg px-4 py-2 focus:border-blue-400 focus:outline-none resize-none"
            placeholder="Deskripsi" rows="3">{{ $todo->description }}</textarea>
        <div class="flex gap-2">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-medium transition-colors duration-200">
                Simpan
            </button>
            <button type="button" onclick="window.location='{{ url()->current() }}'"
                class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded font-medium transition-colors duration-200">
                Batal
            </button>
        </div>
    </form>
</x-modal>
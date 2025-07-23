@props(['todo'])

<x-modal :show="request('show') == $todo->id">
    <div class="text-lg font-bold mb-2">Detail Todo</div>
    <div class="mb-2"><strong>Judul:</strong> {{ $todo->title }}</div>
    <div><strong>Deskripsi:</strong> {{ $todo->description ?? 'Tidak ada deskripsi.' }}</div>
</x-modal>
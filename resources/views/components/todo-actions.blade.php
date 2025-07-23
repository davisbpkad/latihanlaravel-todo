<!-- Komponen utama untuk aksi todo -->
<div class="flex gap-2">
    <x-todo-detail-button :todo="$todo" />
    <x-todo-edit-button :todo="$todo" />
    <x-todo-delete-button :todo="$todo" />
</div>
<x-todo-detail-section :todo="$todo" />
<x-todo-edit-section :todo="$todo" />

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TodoItem extends Component
{
    public $todo;

    public function __construct($todo)
    {
        $this->todo = $todo;
    }

    public function render()
    {
        return view('components.todo-item');
    }
} 
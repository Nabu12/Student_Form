<?php

namespace App\Http\Livewire;
use App\Models\Students;
use Livewire\Component;

class Edit extends Component

{
    public $idsss;
    public $table_students;
    public function mount()
    {
        $this->table_students = Students::find($this->idsss);
    }
    public function render()
    {
        return view('livewire.edit');
    }
}

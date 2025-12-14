<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class PostTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public bool $showModal = false;
    public $search = '';

    public function createTambah(){
        $this->showModal = true;
    }
    
    #[On('closedModal')]
    public function closedModal(){
        $this->showModal = false;
    }
    
    #[Computed]
    public function posts(){
        return Post::query()
                ->when($this->search, function($q){
                    $q->where('title','like','%'.$this->search.'%');
                })
                ->latest()
                ->paginate(5);
    }

    public function render()
    {
        return view('livewire.post.post-table');
    }
}

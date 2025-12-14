<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostForm extends Component
{
    public $title;
    public $content;

    #[On('submit')]
    public function submit(){
        
        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        
        $this->dispatch('closedModal');
    }

    public function render()
    {
        return view('livewire.post.post-form');
    }
}

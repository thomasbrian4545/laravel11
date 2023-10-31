<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Spatie\Flash\Flash;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store(): void
    {
        $user = User::find(1); // @todo
        $user->posts()->create($this->validate());

        Flash('Post created successfully.', 'success');

        $this->reset();
    }
}

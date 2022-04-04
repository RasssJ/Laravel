<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class AuthorDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     */
    public function render()
    {
        return view('components.author-dropdown',[
            'authors'=>User::all(),
            'currentAuthor'=>User::firstWhere('username',request('author'))
        ]);
    }
}

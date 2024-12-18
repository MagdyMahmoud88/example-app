<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User ;
class CreatePost extends Component
{
  public $title = 'title one';
    public function render()
    {
      $user = User::all();
        return view('livewire.create-post')->with(['user'=>$user ]);
    }
}

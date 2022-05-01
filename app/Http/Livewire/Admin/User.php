<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $roleForm = false;
    public $role, $userId;

    public function getId($id){
        $this->roleForm = true;
        $this->userId = $id;
    }

    public function changeRole(){
        $this->validate([
            'role' => 'required',
        ]);

        ModelsUser::where('id', $this->userId)->update([
            'user_type' => $this->role
        ]);

        $this->roleForm = false;
    }

    public function render()
    {
        return view('livewire.admin.user',[
            'users' => ModelsUser::all(),
        ]);
    }
}

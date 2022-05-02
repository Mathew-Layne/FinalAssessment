<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public $profile;

    public function mount(){

        $myData = User::find(Auth::id());
        $this->profile['fname'] = $myData->first_name;
        $this->profile['lname'] = $myData->last_name;
        $this->profile['email'] = $myData->email;
        $this->profile['phone'] = $myData->phone;
        $this->profile['password'] = $myData->password;
    } 

    public function updateProfile(){
        $user = User::find(Auth::id());
        $user->update([
            'first_name' => $this->profile['fname'],
            'last_name' => $this->profile['lname'],
            'phone' => $this->profile['phone'],
            'password' => Hash::make($this->profile['password']),
        ]);
    }
    
    public function render()
    {
        return view('livewire.user.profile');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public $profile;
    public $profileAlert = false;

    public function mount(){

        $myData = User::find(Auth::id());
        $this->profile['fname'] = $myData->first_name;
        $this->profile['lname'] = $myData->last_name;
        $this->profile['email'] = $myData->email;
        $this->profile['phone'] = $myData->phone;
    } 

    public function updateProfile(){
        $user = User::find(Auth::id());
        
        if(empty($this->profile['password'])){
            $user->update([
                'first_name' => $this->profile['fname'],
                'last_name' => $this->profile['lname'],
                'phone' => $this->profile['phone'],
            ]);     
        }else{            
            $user->update([
                'first_name' => $this->profile['fname'],
                'last_name' => $this->profile['lname'],
                'phone' => $this->profile['phone'],
                'password' => Hash::make($this->profile['password']),
            ]);
        }
        

        $this->profileAlert = true;
    }

    public function render()
    {
        return view('livewire.admin.profile',[
            // 'myData' => User::where('id', Auth::id())->first()
        ]);
    }
}

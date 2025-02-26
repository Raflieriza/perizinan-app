<?php

use Livewire\Volt\Component;
use App\Models\User;
new class extends Component {
    public function with()
    {
        $users = User::has('permissions')->get();
        dd($users);
        return [
            'users' => $users
        ];
    }
}; ?>

<div>
    {{--  id, name, email, permissions  --}}
    {{--  1| ferry| email| read users,create users  --}}
</div>

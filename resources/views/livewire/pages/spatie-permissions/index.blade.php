<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="px-4 pt-5 pb-16">
    <h1 class="text-2xl font-bold">Spatie Permissions</h1>
    <nav class="flex flex-col gap-4 mt-4">
        <a href="{{ route('spatie-permissions.permissions.index') }}" class="link">Permissions</a>
        <a href="{{ route('spatie-permissions.roles.index') }}" class="link">Roles</a>
        <a href="{{ route('spatie-permissions.role-has-permissions.index') }}" class="link">Role Has Permissions</a>
        <a href="{{ route('spatie-permissions.model-has-roles.index') }}" class="link">Model Has Roles</a>
        <a href="{{ route('spatie-permissions.model-has-permissions.index') }}" class="link">Model Has Permissions</a>
    </nav>
</div>

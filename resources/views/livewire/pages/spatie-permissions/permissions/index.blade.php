<?php

use Livewire\Volt\Component;
use Spatie\Permission\Models\Permission;
use App\Models\User;
new class extends Component {
    use \Livewire\WithPagination;

    public string $search = '';

    public string $name;
    public int $permission_id;

    public $modalStore = false;
    public $modalChange = false;

    public function with()
    {
        return [
            'permissions' => Permission::latest('id')->paginate(10)
        ];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function store()
    {
        $this->validate([
            'name' => ['required']
        ]);

        Permission::create([
            'name' => $this->name
        ]);

        $this->clearData();
    }

    public function getData($id)
    {
        $permission = Permission::find($id);
        $this->permission_id = $permission->id;
        $this->name = $permission->name;

        $this->modalStore = true;
    }

    public function change()
    {
        $this->validate([
            'name' => ['required']
        ]);

        Permission::where('id',$this->permission_id)->update(['name' => $this->name]);

        $this->clearData();
    }

    public function clearData()
    {
        $this->name = '';
        $this->permission_id = 0;

        $this->modalStore = false;
        $this->modalChange = false;
    }

    public function delete($id)
    {
        Permission::where('id',$id)->delete();
        $this->clearData();
    }

}; ?>

<div>
{{--  id, name, guard name  --}}
</div>

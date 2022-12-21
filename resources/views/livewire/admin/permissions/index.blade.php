<div>
    <div class="container mt-3">
        <h1 style="font-size: 25px; font-weight: 500; color: rgb(0, 0, 0);">Permissions</h1>
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <div class='btn btn-primary btn-sm float-end mb-2'  style="background-color: #638b33; color:rgb(0, 0, 0);" data-toggle="modal" data-target="#modal-permissions"> + Create New Permission</div>
        <input type="search" class="form-control float-start mx-2 mb-3" style="width: 250px;" placeholder="Search" wire:model.lazy="search">
        <div class="card-body">
            <table class="table shadow text-center">
                <thead style="background-color:#14453e; color:#000000;">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody  class="text-black">
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="" class="btn btn-warning" id="ic" title="Edit" data-toggle="modal" data-target="#update-modal-permissions" wire:click="editPermissions({{ $permission->id }})"><i class=" fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger" id="ic" title="Delete" data-toggle="modal" data-target="#delete-modal-permissions" wire:click="delete({{ $permission->id }})"><i class=" fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @if($permissions->count() == 0)
                        <td colspan="2" class="text-center" style="color: red">
                            No permissions found in this table.
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ $permissions->links() }}
        </div>
    </div>
</div>
<style>
    .close {
        border-radius: 50%;
        width: 25px;
        border: none;
    }
    .close span {
        color: rgb(233, 10, 10);
    }
    .close:hover {
        background-color: rgb(151, 24, 24);
    }
    .title3 {
        margin-left: 8%;
    }
    .title1 {
        margin-left: 38%;
    }
    .title2 {
        margin-left: 35%;
    }
</style>

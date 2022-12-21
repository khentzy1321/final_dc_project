<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use App\Events\UserLog;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search='';

    protected $paginationTheme = 'bootstrap';

    public function editUsers(int $userId) {
        $user = User::find($userId);
        if($user){
            $this->userId = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->gender = $user->gender;
        }else{
            return redirect()->to('admin/users');
        }
    }
    public function updateUsers() {
        $this->validate([
            'email'                      =>          ['required', 'string', 'max:255', 'unique:users'],
        ]);

        User::where('id', $this->userId)->update([
            'name'             =>      $this->name,
            'email'            =>      $this->email,
            'gender'           =>      $this->gender,
        ]);

        $log_entry =  ' User updated ';
        event(new UserLog($log_entry));

        return redirect('admin/users')->with('message', ' User updated successfully');
    }

    public function delete($userId) {
        $this->userDelete = $userId;
    }

    public function deleteUsers() {

        User::find($this->userDelete)->delete();

        $log_entry =  ' User deleted ';
        event(new UserLog($log_entry));

        return redirect('admin/users')->with('message', 'User has been deleted successfully');
    }
    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->orderBy('id')->paginate(5);
        return view('livewire.admin.users.index', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /*
     * Who can access for this method/route/url
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super_admin');
    }

    /*
     * Index of User admin Page
     */
    public function index(){
        $users = User::paginate(10);
        return view('Users.index', compact('users'));
    }

    /*
     * Create User Form with role
     */
    public function create(){
        return $this->createUserForm();
    }

    /*
     * Save User with attach role
     */
    public function store(UserRequest $request){
        return $this->saveUser();
    }

    /*
     * Edit User Form
     */
    public function edit($id){
        return $this->editUser($id);
    }

    /*
     * Update User using path method
     */
    public function update($id, UserRequest $request){
        return $this->updateUser($id);
    }

    /*
     * Delete User with method delete
     * */
    public function destroy($id){
        return $this->deleteUser($id);
    }

    private function saveUser()
    {
        $user = new User();

        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->password = bcrypt(Input::get('password'));
        $user->save();

        $user->roles()->attach(Input::get('role'));
        alert()->success('saved');
        return redirect(url(action('UserController@index')));
    }

    private function createUserForm()
    {
        $role = Role::lists('name', 'id');
        return view('Users.createUser', compact('role'));
    }

    private function updateUser($id)
    {
        $user = User::findOrFail($id);

        $user->name = Input::get('name');
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->save();

        $user->roles()->sync(Input::get('role'));
        alert()->success('saved');
        return redirect(url(action('UserController@index')));
    }

    private function editUser($id)
    {
        $user = User::findOrFail($id);
        $role = Role::lists('name', 'id');

        return view('Users.editUser', compact('user', 'role'));
    }

    private function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        alert()->success('Deleted');
        return redirect(url(action('UserController@index')));
    }
}

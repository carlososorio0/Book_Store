<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;
use App\Http\Controllers\Controller;
use App\User;




class UserController extends Controller
{
    //



public function index()
{
    $users = User::orderBy('name')->paginate(5);
    //dd($users);

    return view('admin.user.index', compact('users'));
}


public function create()
{
    return view('admin.user.create');
}

public function store(SaveUserRequest $requests)
    {
        $data = [
			'name' 			=> $requests->get('name'),
			'last_name'     => $requests->get('last_name'),
			'email'     	=> $requests->get('email'),
			'user' 		    => $requests->get('user'),
			'password' 		=> $requests->get('password'),
			'type'  		=> $requests->get('type'),
			'active' 		=> $requests->has('active') ? 1 : 0,
			'address'   	=> $requests->get('address')
        ];
        
        

		$user = User::create($data);

		$message = $user ? 'Usuario agregado correctamente!' : 'El ususario NO pudo agregarse!';
        
        return redirect()->route('user.index')->with('message', $message);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //return $request->all();
        
        $this->validate($request, [
            'name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|email',
            'user' => 'required|min:4|max:20',
            'password' => ($request->get('password') != "") ? 'required|confirmed' : "",
            'type' => 'required|in:user,admin',
        ]);
        
        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->user = $request->get('user');
        $user->type = $request->get('type');
        $user->address = $request->get('address');
        $user->active = $request->has('active') ? 1 : 0;
        if($request->get('password') != "") $user->password = $request->get('password');
        
        $updated = $user->save();
        
        $message = $updated ? 'Usuario actualizado correctamente!' : 'El Usuario NO pudo actualizarse!';
        
        return redirect()->route('user.index')->with('message', $message);
    }


    public function destroy(User $user)
    {
        $deleted = $user->delete();
        
        $message = $deleted ? 'Usuario eliminado correctamente!' : 'El Usuario NO pudo eliminarse!';
        
        return redirect()->route('user.index')->with('message', $message);
    }


}

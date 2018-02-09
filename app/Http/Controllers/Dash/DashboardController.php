<?php

namespace App\Http\Controllers\Dash;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function show()
    {
        return view('dash.dashboard');
    }

    public function createUserShow()
    {
        $roles = DB::table('roles')->where('name', '<>', 'owner')->get();

        return view('dash.create', ['roles' => $roles]);
    }

    public function createUser(Request $request)
    {
        $data = $request->all();

        $this->validate($request,
            [
                'login' => 'required|string|max:255|unique:users',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'role' => 'required',
                'password' => 'required|string|min:6|confirmed',
            ]);

        /*$data = $request->all();

        dump($data);*/

        User::create([
            'login' => $data['login'],
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $data['role'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->back()->with('message', 'Користувача додано');
    }
}

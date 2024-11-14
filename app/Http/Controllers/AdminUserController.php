<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function show(){
        $users = User::paginate(5);
        return view('admin.user.list', compact('users'));
    }

    function add(){
        return view('admin.user.add');
    }

    function store(Request $request){
        // validate
        $request->validate(
            [
                'name' => 'required',
                'email' => ['unique:users,email', 'required'],
                'password' => 'required'
            ],
            [
                'required' => 'Trường :attribute không được để trống',
                'unique' => 'Email đã tồn tại'
            ]
        );

        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request->role
            ]
        );
        

        return redirect()->route('admin.show')->with('status', 'Thêm mới thành công');
    }



    function update(Request $request ,$id){

        $user = User::find($id);

        $request->validate(
            [
                'name' => 'required',
                'email' => ['unique:users,email', 'required'],
            ],
            [
                'required' => 'Trường :attribute không được để trống',
                'unique' => 'Email đã tồn tại'
            ]
        );

        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role
            ]
        );

        return redirect()->route('admin.show')->with('status', 'Cập Nhật thành công');
    }

    function edit($id){
        $users = User::find($id);
        return view('admin.user.editt', compact('users'));
    }

    function delete($id){
        $user = User::find($id)->delete();
        return redirect()->route('admin.show')->with('status', 'Xóa thành công');
    }

}

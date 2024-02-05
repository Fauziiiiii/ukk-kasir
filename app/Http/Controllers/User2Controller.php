<?php

namespace App\Http\Controllers;

use App\Models\User2;
use Illuminate\Http\Request;

class User2Controller extends Controller
{

    public function index()
    {
        $data = User2::all();
        return view("user2.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = ['admin', 'petugas',];
        return view("user2.create", compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nama"=> "required",
            "username"=> "required",
            "password"=> "required|min:8",
            "role"=> "required",
        ],[
            'nama.required' => 'Nama wajib diisi!!',
            'username.required' => 'Username wajib diisi!!',
            'password.required' => 'Password wajib diisi!!',
            'password.min' => 'Password minimal 8 karakter!!',
            'role.required' => 'Role wajib diisi!!',
        ]);

        User2::create($request->all());
        return redirect("/user2")->with("success", "Berhasil menambahkan User baru");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function show(User2 $user2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User2::find($id);
        $role = ['admin', 'petugas',];
        return view("user2.edit", compact('data', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User2 $user2, $id)
    {
        $user2 = User2::find($id);
        $user2->nama = $request->nama;
        $user2->username = $request->username;
        $user2->role = $request->role;

        if($request->filled('password')){
            $user2->password = bcrypt($request->password);
        }

        $user2->save();

        return redirect("/user2")->with("success", "Berhasil mengupdate User");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function destroy(User2 $user2, $id)
    {
        User2::find($id)->delete();
        return redirect()->route('user2')->with('success','Data User berhasil dihapus');
    }
}
